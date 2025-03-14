let idleTime = 0;

function resetIdleTime() {
  idleTime = 0;
}

window.onload = function () {
  const interval = setInterval(timerIncrement, 60000); // 1 minute

  // Reset idle time on events
  window.onmousemove = resetIdleTime;
  window.onkeypress = resetIdleTime;
};

function timerIncrement() {
  idleTime += 1;
  if (idleTime >= 15) {
    // 3 minutes
    window.location.href = "deconnexion.php";
  }
}
