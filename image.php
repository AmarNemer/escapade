<?php
// Activer l'affichage des erreurs
error_reporting(E_ALL);
ini_set('display_errors', 1);

function redimensionnerImage($source, $destination, $nouvelle_largeur, $nouvelle_hauteur) {
    list($largeur_origine, $hauteur_origine, $type) = getimagesize($source);

    if (!$largeur_origine || !$hauteur_origine) {
        echo "Erreur : Impossible d'obtenir la taille de l'image.<br>";
        return false;
    }

    // Calcul du ratio
    $ratio = min($nouvelle_largeur / $largeur_origine, $nouvelle_hauteur / $hauteur_origine);
    $largeur_finale = round($largeur_origine * $ratio);
    $hauteur_finale = round($hauteur_origine * $ratio);

    // Créer une nouvelle image
    $nouvelle_image = imagecreatetruecolor($largeur_finale, $hauteur_finale);

    switch ($type) {
        case IMAGETYPE_JPEG:
            $image_source = imagecreatefromjpeg($source);
            break;
        case IMAGETYPE_PNG:
            $image_source = imagecreatefrompng($source);
            imagealphablending($nouvelle_image, false);
            imagesavealpha($nouvelle_image, true);
            break;
        case IMAGETYPE_GIF:
            $image_source = imagecreatefromgif($source);
            break;
        default:
            echo "Format d'image non supporté.<br>";
            return false;
    }

    imagecopyresampled($nouvelle_image, $image_source, 0, 0, 0, 0, $largeur_finale, $hauteur_finale, $largeur_origine, $hauteur_origine);

    switch ($type) {
        case IMAGETYPE_JPEG:
            imagejpeg($nouvelle_image, $destination, 90);
            break;
        case IMAGETYPE_PNG:
            imagepng($nouvelle_image, $destination, 9);
            break;
        case IMAGETYPE_GIF:
            imagegif($nouvelle_image, $destination);
            break;
    }

    imagedestroy($image_source);
    imagedestroy($nouvelle_image);
    return true;
}

// Vérification de l'upload
if (!isset($_FILES["image"]) || $_FILES["image"]["error"] != 0) {
    echo "Erreur lors du téléchargement de l'image.<br>";
    exit();
}

$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Vérifier si c'est une vraie image
$check = getimagesize($_FILES["image"]["tmp_name"]);
if ($check === false) {
    echo "Le fichier n'est pas une image.<br>";
    exit();
}

// Vérifier la taille (2MB max)
if ($_FILES["image"]["size"] > 2000000) {
    echo "Fichier trop volumineux (max 2MB).<br>";
    exit();
}

// Vérifier le format
$allowedFormats = ["jpg", "jpeg", "png", "gif"];
if (!in_array($imageFileType, $allowedFormats)) {
    echo "Seuls les formats JPG, JPEG, PNG et GIF sont autorisés.<br>";
    exit();
}

// Créer le dossier s'il n'existe pas
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

// Déplacer le fichier temporaire
$temp_file = $target_dir . "temp_" . basename($_FILES["image"]["name"]);
if (!move_uploaded_file($_FILES["image"]["tmp_name"], $temp_file)) {
    echo "Erreur lors du déplacement du fichier.<br>";
    exit();
}

// Redimensionner l'image avant de la sauvegarder
$destination = $target_file;
$nouvelle_largeur = 300;
$nouvelle_hauteur = 300;

if (redimensionnerImage($temp_file, $destination, $nouvelle_largeur, $nouvelle_hauteur)) {
    echo "Image redimensionnée et sauvegardée avec succès !<br>";
    unlink($temp_file); // Supprime le fichier temporaire
} else {
    echo "Erreur lors du redimensionnement de l'image.<br>";
}
?>
