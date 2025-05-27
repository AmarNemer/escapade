<article class="activity-card" data-category="enfants">
    <img src="images/couture.jpg" alt="Activités enfants">
    <div class="activity-content">
        <h2 class="activity-title">Ateliers Créatifs Enfants</h2>
        <div class="activity-details">
            <div class="detail-item"><span class="detail-icon">🎨</span> Pour les 6-12 ans</div>
            <div class="detail-item"><span class="detail-icon">📅</span> Mercredi 14h-16h</div>
            <div class="detail-item"><span class="detail-icon">💰</span> À partir de 5€/séance</div>
        </div>
        <a href="#" class="activity-btn" onclick="openModal('ateliers-creatifs')">En savoir plus</a>
    </div>
</article>

<!-- Modal (Pop-up) -->
<div id="activityModal" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div id="modalDetails"></div>
    </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById('activityModal');
    const modalDetails = document.getElementById('modalDetails');
    const closeModal = document.querySelector('.close-modal');

    const activityDetails = {
        'ateliers-creatifs': {
            title: 'Ateliers Créatifs Enfants',
            description: 'Des ateliers ludiques et créatifs pour développer l\'imagination des enfants...',
            equipment: 'Matériel fourni',
            teacher: 'Marie Durant - Animatrice diplômée',
            places: '12 places disponibles'
        }
    };

    window.openModal = function (activity) {
        const details = activityDetails[activity];
        if (details) {
            modalDetails.innerHTML = `
                <h2>${details.title}</h2>
                <p>${details.description}</p>
                <p><strong>Matériel :</strong> ${details.equipment}</p>
                <p><strong>Animateur :</strong> ${details.teacher}</p>
                <p><strong>Places :</strong> ${details.places}</p>
            `;
            modal.style.display = 'block';
        }
    };

    closeModal.onclick = function () {
        modal.style.display = 'none';
    };

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    };
});

</script>

<style>
  /* Style pour le modal */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal-content {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    width: 50%;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.close-modal {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 24px;
    cursor: pointer;
}

</style>



<!DOCTYPE html><!-- HTML 5 -->
<html lang="fr-FR">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><script type="text/javascript">(window.NREUM||(NREUM={})).init={privacy:{cookies_enabled:true},ajax:{deny_list:["smartadserver.com","adapi.smartadserver.com","stats.g.doubleclick.net","www.google-analytics.com"]}};(window.NREUM||(NREUM={})).loader_config={xpid:"VwQDVVFVGwIBVlBXAAQHUVI=",licenseKey:"d6e87da652",applicationID:"1121575076"};;/*! For license information please see nr-loader-spa-1.284.1.min.js.LICENSE.txt */
(()=>{var e,t,r={8122:(e,t,r)=>{"use strict";r.d(t,{a:()=>i});var n=r(944);function i(e,t){try{if(!e||"object"!=typeof e)return(0,n.R)(3);if(!t||"object"!=typeof t)return(0,n.R)(4);const r=Object.create(Object.getPrototypeOf(t),Object.getOwnPropertyDescriptors(t)),o=0===Object.keys(r).length?e:r;for(let a in o)if(void 0!==e[a])try{if(null===e[a]){r[a]=null;continue}Array.isArray(e[a])&&Array.isArray(t[a])?r[a]=Array.from(new Set([...e[a],...t[a]])):"object"==typeof e[a]&&"object"==typeof t[a]?r[a]=i(e[a],t[a]):r[a]=e[a]}catch(e){(0,n.R)(1,e)}return r}catch(e){(0,n.R)(2,e)}}},2555:(e,t,r)=>{"use strict";r.d(t,{Vp:()=>c,fn:()=>s,x1:()=>u});var n=r(384),i=r(8122);const o={beacon:n.NT.beacon,errorBeacon:n.NT.errorBeacon,licenseKey:void 0,applicationID:void 0,sa:void 0,queueTime:void 0,applicationTime:void 0,ttGuid:void 0,user:void 0,account:void 0,product:void 0,extra:void 0,jsAttributes:{},userAttributes:void 0,atts:void 0,transactionName:void 0,tNamePlain:void 0},a={};function s(e){try{const t=c(e);return!!t.licenseKey&&!!t.errorBeacon&&!!t.applicationID}catch(e){return!1}}function c(e){if(!e)throw new Error("All info objects require an agent identifier!");if(!a[e])throw new Error("Info for ".concat(e," was never set"));return a[e]}function u(e,t){if(!e)throw new Error("All info objects require an agent identifier!");a[e]=(0,i.a)(t,o);const r=(0,n.nY)(e);r&&(r.info=a[e])}},9417:(e,t,r)=>{"use strict";r.d(t,{D0:()=>h,gD:()=>g,xN:()=>p});var n=r(3333);const i=e=>{if(!e||"string"!=typeof e)return!1;try{document.createDocumentFragment().querySelector(e)}catch{return!1}return!0};var o=r(2614),a=r(944),s=r(384),c=r(8122);const u="[data-nr-mask]",d=()=>{const e={feature_flags:[],experimental:{marks:!1,measures:!1,resources:!1},mask_selector:"*",block_selector:"[data-nr-block]",mask_input_options:{color:!1,date:!1,"datetime-local":!1,email:!1,month:!1,number:!1,range:!1,search:!1,tel:!1,text:!1,time:!1,url:!1,week:!1,textarea:!1,select:!1,password:!0}};return{ajax:{deny_list:void 0,block_internal:!0,enabled:!0,autoStart:!0},distributed_tracing:{enabled:void 0,exclude_newrelic_header:void 0,cors_use_newrelic_header:void 0,cors_use_tracecontext_headers:void 0,allowed_origins:void 0},get feature_flags(){return e.feature_flags},set feature_flags(t){e.feature_flags=t},generic_events:{enabled:!0,autoStart:!0},harvest:{interval:30},jserrors:{enabled:!0,autoStart:!0},logging:{enabled:!0,autoStart:!0},metrics:{enabled:!0,autoStart:!0},obfuscate:void 0,page_action:{enabled:!0},page_view_event:{enabled:!0,autoStart:!0},page_view_timing:{enabled:!0,autoStart:!0},performance:{get capture_marks(){return e.feature_flags.includes(n.$v.MARKS)||e.experimental.marks},set capture_marks(t){e.experimental.marks=t},get capture_measures(){return e.feature_flags.includes(n.$v.MEASURES)||e.experimental.measures},set capture_measures(t){e.experimental.measures=t},capture_detail:!0,resources:{get enabled(){return e.feature_flags.includes(n.$v.RESOURCES)||e.experimental.resources},set enabled(t){e.experimental.resources=t},asset_types:[],first_party_domains:[],ignore_newrelic:!0}},privacy:{cookies_enabled:!0},proxy:{assets:void 0,beacon:void 0},session:{expiresMs:o.wk,inactiveMs:o.BB},session_replay:{autoStart:!0,enabled:!1,preload:!1,sampling_rate:10,error_sampling_rate:100,collect_fonts:!1,inline_images:!1,fix_stylesheets:!0,mask_all_inputs:!0,get mask_text_selector(){return e.mask_selector},set mask_text_selector(t){i(t)?e.mask_selector="".concat(t,",").concat(u):""===t||null===t?e.mask_selector=u:(0,a.R)(5,t)},get block_class(){return"nr-block"},get ignore_class(){return"nr-ignore"},get mask_text_class(){return"nr-mask"},get block_selector(){return e.block_selector},set block_selector(t){i(t)?e.block_selector+=",".concat(t):""!==t&&(0,a.R)(6,t)},get mask_input_options(){return e.mask_input_options},set mask_input_options(t){t&&"object"==typeof t?e.mask_input_options={...t,password:!0}:(0,a.R)(7,t)}},session_trace:{enabled:!0,autoStart:!0},soft_navigations:{enabled:!0,autoStart:!0},spa:{enabled:!0,autoStart:!0},ssl:void 0,user_actions:{enabled:!0,elementAttributes:["id","className","tagName","type"]}}},l={},f="All configuration objects require an agent identifier!";function h(e){if(!e)throw new Error(f);if(!l[e])throw new Error("Configuration for ".concat(e," was never set"));return l[e]}function p(e,t){if(!e)throw new Error(f);l[e]=(0,c.a)(t,d());const r=(0,s.nY)(e);r&&(r.init=l[e])}function g(e,t){if(!e)throw new Error(f);var r=h(e);if(r){for(var n=t.split("."),i=0;i<n.length-1;i++)if("object"!=typeof(r=r[n[i]]))return;r=r[n[n.length-1]]}return r}},5603:(e,t,r)=>{"use strict";r.d(t,{a:()=>c,o:()=>s});var n=r(384),i=r(8122);const o={accountID:void 0,trustKey:void 0,agentID:void 0,licenseKey:void 0,applicationID:void 0,xpid:void 0},a={};function s(e){if(!e)throw new Error("All loader-config objects require an agent identifier!");if(!a[e])throw new Error("LoaderConfig for ".concat(e," was never set"));return a[e]}function c(e,t){if(!e)throw new Error("All loader-config objects require an agent identifier!");a[e]=(0,i.a)(t,o);const r=(0,n.nY)(e);r&&(r.loader_config=a[e])}},3371:(e,t,r)=>{"use strict";r.d(t,{V:()=>f,f:()=>l});var n=r(8122),i=r(384),o=r(6154),a=r(9324);let s=0;const c={buildEnv:a.F3,distMethod:a.Xs,version:a.xv,originTime:o.WN},u={customTransaction:void 0,disabled:!1,isolatedBacklog:!1,loaderType:void 0,maxBytes:3e4,onerror:void 0,ptid:void 0,releaseIds:{},appMetadata:{},session:void 0,denyList:void 0,timeKeeper:void 0,obfuscator:void 0,harvester:void 0},d={};function l(e){if(!e)throw new Error("All runtime objects require an agent identifier!");if(!d[e])throw new Error("Runtime for ".concat(e," was never set"));return d[e]}function f(e,t){if(!e)throw new Error("All runtime objects require an agent identifier!");d[e]={...(0,n.a)(t,u),...c},Object.hasOwnProperty.call(d[e],"harvestCount")||Object.defineProperty(d[e],"harvestCount",{get:()=>++s});const r=(0,i.nY)(e);r&&(r.runtime=d[e])}},9324:(e,t,r)=>{"use strict";r.d(t,{F3:()=>i,Xs:()=>o,Yq:()=>a,xv:()=>n});const n="1.284.1",i="PROD",o="CDN",a="^2.0.0-alpha.18"},6154:(e,t,r)=>{"use strict";r.d(t,{A4:()=>s,OF:()=>d,RI:()=>i,WN:()=>h,bv:()=>o,gm:()=>a,lR:()=>f,m:()=>u,mw:()=>c,sb:()=>l});var n=r(1863);const i="undefined"!=typeof window&&!!window.document,o="undefined"!=typeof WorkerGlobalScope&&("undefined"!=typeof self&&self instanceof WorkerGlobalScope&&self.navigator instanceof WorkerNavigator||"undefined"!=typeof globalThis&&globalThis instanceof WorkerGlobalScope&&globalThis.navigator instanceof WorkerNavigator),a=i?window:"undefined"!=typeof WorkerGlobalScope&&("undefined"!=typeof self&&self instanceof WorkerGlobalScope&&self||"undefined"!=typeof globalThis&&globalThis instanceof WorkerGlobalScope&&globalThis),s="complete"===a?.document?.readyState,c=Boolean("hidden"===a?.document?.visibilityState),u=""+a?.location,d=/iPad|iPhone|iPod/.test(a.navigator?.userAgent),l=d&&"undefined"==typeof SharedWorker,f=(()=>{const e=a.navigator?.userAgent?.match(/Firefox[/\s](\d+\.\d+)/);return Array.isArray(e)&&e.length>=2?+e[1]:0})(),h=Date.now()-(0,n.t)()},7295:(e,t,r)=>{"use strict";r.d(t,{Xv:()=>a,gX:()=>i,iW:()=>o});var n=[];function i(e){if(!e||o(e))return!1;if(0===n.length)return!0;for(var t=0;t<n.length;t++){var r=n[t];if("*"===r.hostname)return!1;if(s(r.hostname,e.hostname)&&c(r.pathname,e.pathname))return!1}return!0}function o(e){return void 0===e.hostname}function a(e){if(n=[],e&&e.length)for(var t=0;t<e.length;t++){let r=e[t];if(!r)continue;0===r.indexOf("http://")?r=r.substring(7):0===r.indexOf("https://")&&(r=r.substring(8));const i=r.indexOf("/");let o,a;i>0?(o=r.substring(0,i),a=r.substring(i)):(o=r,a="");let[s]=o.split(":");n.push({hostname:s,pathname:a})}}function s(e,t){return!(e.length>t.length)&&t.indexOf(e)===t.length-e.length}function c(e,t){return 0===e.indexOf("/")&&(e=e.substring(1)),0===t.indexOf("/")&&(t=t.substring(1)),""===e||e===t}},1687:(e,t,r)=>{"use strict";r.d(t,{Ak:()=>c,Ze:()=>l,x3:()=>u});var n=r(7836),i=r(3606),o=r(860),a=r(2646);const s={};function c(e,t){const r={staged:!1,priority:o.P3[t]||0};d(e),s[e].get(t)||s[e].set(t,r)}function u(e,t){e&&s[e]&&(s[e].get(t)&&s[e].delete(t),h(e,t,!1),s[e].size&&f(e))}function d(e){if(!e)throw new Error("agentIdentifier required");s[e]||(s[e]=new Map)}function l(e="",t="feature",r=!1){if(d(e),!e||!s[e].get(t)||r)return h(e,t);s[e].get(t).staged=!0,f(e)}function f(e){const t=Array.from(s[e]);t.every((([e,t])=>t.staged))&&(t.sort(((e,t)=>e[1].priority-t[1].priority)),t.forEach((([t])=>{s[e].delete(t),h(e,t)})))}function h(e,t,r=!0){const o=e?n.ee.get(e):n.ee,s=i.i.handlers;if(!o.aborted&&o.backlog&&s){if(r){const e=o.backlog[t],r=s[t];if(r){for(let t=0;e&&t<e.length;++t)p(e[t],r);Object.entries(r).forEach((([e,t])=>{Object.values(t||{}).forEach((t=>{t[0]?.on&&t[0]?.context()instanceof a.y&&t[0].on(e,t[1])}))}))}}o.isolatedBacklog||delete s[t],o.backlog[t]=null,o.emit("drain-"+t,[])}}function p(e,t){var r=e[1];Object.values(t[r]||{}).forEach((t=>{var r=e[0];if(t[0]===r){var n=t[1],i=e[3],o=e[2];n.apply(i,o)}}))}},7836:(e,t,r)=>{"use strict";r.d(t,{P:()=>c,ee:()=>u});var n=r(384),i=r(8990),o=r(3371),a=r(2646),s=r(5607);const c="nr@context:".concat(s.W),u=function e(t,r){var n={},s={},d={},l=!1;try{l=16===r.length&&(0,o.f)(r).isolatedBacklog}catch(e){}var f={on:p,addEventListener:p,removeEventListener:function(e,t){var r=n[e];if(!r)return;for(var i=0;i<r.length;i++)r[i]===t&&r.splice(i,1)},emit:function(e,r,n,i,o){!1!==o&&(o=!0);if(u.aborted&&!i)return;t&&o&&t.emit(e,r,n);for(var a=h(n),c=g(e),d=c.length,l=0;l<d;l++)c[l].apply(a,r);var p=v()[s[e]];p&&p.push([f,e,r,a]);return a},get:m,listeners:g,context:h,buffer:function(e,t){const r=v();if(t=t||"feature",f.aborted)return;Object.entries(e||{}).forEach((([e,n])=>{s[n]=t,t in r||(r[t]=[])}))},abort:function(){f._aborted=!0,Object.keys(f.backlog).forEach((e=>{delete f.backlog[e]}))},isBuffering:function(e){return!!v()[s[e]]},debugId:r,backlog:l?{}:t&&"object"==typeof t.backlog?t.backlog:{},isolatedBacklog:l};return Object.defineProperty(f,"aborted",{get:()=>{let e=f._aborted||!1;return e||(t&&(e=t.aborted),e)}}),f;function h(e){return e&&e instanceof a.y?e:e?(0,i.I)(e,c,(()=>new a.y(c))):new a.y(c)}function p(e,t){n[e]=g(e).concat(t)}function g(e){return n[e]||[]}function m(t){return d[t]=d[t]||e(f,t)}function v(){return f.backlog}}(void 0,"globalEE"),d=(0,n.Zm)();d.ee||(d.ee=u)},2646:(e,t,r)=>{"use strict";r.d(t,{y:()=>n});class n{constructor(e){this.contextId=e}}},9908:(e,t,r)=>{"use strict";r.d(t,{d:()=>n,p:()=>i});var n=r(7836).ee.get("handle");function i(e,t,r,i,o){o?(o.buffer([e],i),o.emit(e,t,r)):(n.buffer([e],i),n.emit(e,t,r))}},3606:(e,t,r)=>{"use strict";r.d(t,{i:()=>o});var n=r(9908);o.on=a;var i=o.handlers={};function o(e,t,r,o){a(o||n.d,i,e,t,r)}function a(e,t,r,i,o){o||(o="feature"),e||(e=n.d);var a=t[o]=t[o]||{};(a[r]=a[r]||[]).push([e,i])}},3878:(e,t,r)=>{"use strict";function n(e,t){return{capture:e,passive:!1,signal:t}}function i(e,t,r=!1,i){window.addEventListener(e,t,n(r,i))}function o(e,t,r=!1,i){document.addEventListener(e,t,n(r,i))}r.d(t,{DD:()=>o,jT:()=>n,sp:()=>i})},5607:(e,t,r)=>{"use strict";r.d(t,{W:()=>n});const n=(0,r(9566).bz)()},9566:(e,t,r)=>{"use strict";r.d(t,{LA:()=>s,ZF:()=>c,bz:()=>a,el:()=>u});var n=r(6154);const i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx";function o(e,t){return e?15&e[t]:16*Math.random()|0}function a(){const e=n.gm?.crypto||n.gm?.msCrypto;let t,r=0;return e&&e.getRandomValues&&(t=e.getRandomValues(new Uint8Array(30))),i.split("").map((e=>"x"===e?o(t,r++).toString(16):"y"===e?(3&o()|8).toString(16):e)).join("")}function s(e){const t=n.gm?.crypto||n.gm?.msCrypto;let r,i=0;t&&t.getRandomValues&&(r=t.getRandomValues(new Uint8Array(e)));const a=[];for(var s=0;s<e;s++)a.push(o(r,i++).toString(16));return a.join("")}function c(){return s(16)}function u(){return s(32)}},2614:(e,t,r)=>{"use strict";r.d(t,{BB:()=>a,H3:()=>n,g:()=>u,iL:()=>c,tS:()=>s,uh:()=>i,wk:()=>o});const n="NRBA",i="SESSION",o=144e5,a=18e5,s={STARTED:"session-started",PAUSE:"session-pause",RESET:"session-reset",RESUME:"session-resume",UPDATE:"session-update"},c={SAME_TAB:"same-tab",CROSS_TAB:"cross-tab"},u={OFF:0,FULL:1,ERROR:2}},1863:(e,t,r)=>{"use strict";function n(){return Math.floor(performance.now())}r.d(t,{t:()=>n})},7485:(e,t,r)=>{"use strict";r.d(t,{D:()=>i});var n=r(6154);function i(e){if(0===(e||"").indexOf("data:"))return{protocol:"data"};try{const t=new URL(e,location.href),r={port:t.port,hostname:t.hostname,pathname:t.pathname,search:t.search,protocol:t.protocol.slice(0,t.protocol.indexOf(":")),sameOrigin:t.protocol===n.gm?.location?.protocol&&t.host===n.gm?.location?.host};return r.port&&""!==r.port||("http:"===t.protocol&&(r.port="80"),"https:"===t.protocol&&(r.port="443")),r.pathname&&""!==r.pathname?r.pathname.startsWith("/")||(r.pathname="/".concat(r.pathname)):r.pathname="/",r}catch(e){return{}}}},944:(e,t,r)=>{"use strict";function n(e,t){"function"==typeof console.debug&&console.debug("New Relic Warning: https://github.com/newrelic/newrelic-browser-agent/blob/main/docs/warning-codes.md#".concat(e),t)}r.d(t,{R:()=>n})},5284:(e,t,r)=>{"use strict";r.d(t,{t:()=>c,B:()=>s});var n=r(7836),i=r(6154);const o="newrelic";const a=new Set,s={};function c(e,t){const r=n.ee.get(t);s[t]??={},e&&"object"==typeof e&&(a.has(t)||(r.emit("rumresp",[e]),s[t]=e,a.add(t),function(e={}){try{i.gm.dispatchEvent(new CustomEvent(o,{detail:e}))}catch(e){}}({loaded:!0})))}},8990:(e,t,r)=>{"use strict";r.d(t,{I:()=>i});var n=Object.prototype.hasOwnProperty;function i(e,t,r){if(n.call(e,t))return e[t];var i=r();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:i,writable:!0,enumerable:!1}),i}catch(e){}return e[t]=i,i}},6389:(e,t,r)=>{"use strict";function n(e,t=500,r={}){const n=r?.leading||!1;let i;return(...r)=>{n&&void 0===i&&(e.apply(this,r),i=setTimeout((()=>{i=clearTimeout(i)}),t)),n||(clearTimeout(i),i=setTimeout((()=>{e.apply(this,r)}),t))}}function i(e){let t=!1;return(...r)=>{t||(t=!0,e.apply(this,r))}}r.d(t,{J:()=>i,s:()=>n})},3304:(e,t,r)=>{"use strict";r.d(t,{A:()=>o});var n=r(7836);const i=()=>{const e=new WeakSet;return(t,r)=>{if("object"==typeof r&&null!==r){if(e.has(r))return;e.add(r)}return r}};function o(e){try{return JSON.stringify(e,i())??""}catch(e){try{n.ee.emit("internal-error",[e])}catch(e){}return""}}},5289:(e,t,r)=>{"use strict";r.d(t,{GG:()=>o,sB:()=>a});var n=r(3878);function i(){return"undefined"==typeof document||"complete"===document.readyState}function o(e,t){if(i())return e();(0,n.sp)("load",e,t)}function a(e){if(i())return e();(0,n.DD)("DOMContentLoaded",e)}},384:(e,t,r)=>{"use strict";r.d(t,{NT:()=>o,US:()=>d,Zm:()=>a,bQ:()=>c,dV:()=>s,nY:()=>u,pV:()=>l});var n=r(6154),i=r(1863);const o={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net"};function a(){return n.gm.NREUM||(n.gm.NREUM={}),void 0===n.gm.newrelic&&(n.gm.newrelic=n.gm.NREUM),n.gm.NREUM}function s(){let e=a();return e.o||(e.o={ST:n.gm.setTimeout,SI:n.gm.setImmediate,CT:n.gm.clearTimeout,XHR:n.gm.XMLHttpRequest,REQ:n.gm.Request,EV:n.gm.Event,PR:n.gm.Promise,MO:n.gm.MutationObserver,FETCH:n.gm.fetch,WS:n.gm.WebSocket}),e}function c(e,t){let r=a();r.initializedAgents??={},t.initializedAt={ms:(0,i.t)(),date:new Date},r.initializedAgents[e]=t}function u(e){let t=a();return t.initializedAgents?.[e]}function d(e,t){a()[e]=t}function l(){return function(){let e=a();const t=e.info||{};e.info={beacon:o.beacon,errorBeacon:o.errorBeacon,...t}}(),function(){let e=a();const t=e.init||{};e.init={...t}}(),s(),function(){let e=a();const t=e.loader_config||{};e.loader_config={...t}}(),a()}},2843:(e,t,r)=>{"use strict";r.d(t,{u:()=>i});var n=r(3878);function i(e,t=!1,r,i){(0,n.DD)("visibilitychange",(function(){if(t)return void("hidden"===document.visibilityState&&e());e(document.visibilityState)}),r,i)}},8139:(e,t,r)=>{"use strict";r.d(t,{u:()=>f});var n=r(7836),i=r(3434),o=r(8990),a=r(6154);const s={},c=a.gm.XMLHttpRequest,u="addEventListener",d="removeEventListener",l="nr@wrapped:".concat(n.P);function f(e){var t=function(e){return(e||n.ee).get("events")}(e);if(s[t.debugId]++)return t;s[t.debugId]=1;var r=(0,i.YM)(t,!0);function f(e){r.inPlace(e,[u,d],"-",p)}function p(e,t){return e[1]}return"getPrototypeOf"in Object&&(a.RI&&h(document,f),c&&h(c.prototype,f),h(a.gm,f)),t.on(u+"-start",(function(e,t){var n=e[1];if(null!==n&&("function"==typeof n||"object"==typeof n)){var i=(0,o.I)(n,l,(function(){var e={object:function(){if("function"!=typeof n.handleEvent)return;return n.handleEvent.apply(n,arguments)},function:n}[typeof n];return e?r(e,"fn-",null,e.name||"anonymous"):n}));this.wrapped=e[1]=i}})),t.on(d+"-start",(function(e){e[1]=this.wrapped||e[1]})),t}function h(e,t,...r){let n=e;for(;"object"==typeof n&&!Object.prototype.hasOwnProperty.call(n,u);)n=Object.getPrototypeOf(n);n&&t(n,...r)}},3434:(e,t,r)=>{"use strict";r.d(t,{Jt:()=>o,YM:()=>c});var n=r(7836),i=r(5607);const o="nr@original:".concat(i.W);var a=Object.prototype.hasOwnProperty,s=!1;function c(e,t){return e||(e=n.ee),r.inPlace=function(e,t,n,i,o){n||(n="");const a="-"===n.charAt(0);for(let s=0;s<t.length;s++){const c=t[s],u=e[c];d(u)||(e[c]=r(u,a?c+n:n,i,c,o))}},r.flag=o,r;function r(t,r,n,s,c){return d(t)?t:(r||(r=""),nrWrapper[o]=t,function(e,t,r){if(Object.defineProperty&&Object.keys)try{return Object.keys(e).forEach((function(r){Object.defineProperty(t,r,{get:function(){return e[r]},set:function(t){return e[r]=t,t}})})),t}catch(e){u([e],r)}for(var n in e)a.call(e,n)&&(t[n]=e[n])}(t,nrWrapper,e),nrWrapper);function nrWrapper(){var o,a,d,l;try{a=this,o=[...arguments],d="function"==typeof n?n(o,a):n||{}}catch(t){u([t,"",[o,a,s],d],e)}i(r+"start",[o,a,s],d,c);try{return l=t.apply(a,o)}catch(e){throw i(r+"err",[o,a,e],d,c),e}finally{i(r+"end",[o,a,l],d,c)}}}function i(r,n,i,o){if(!s||t){var a=s;s=!0;try{e.emit(r,n,i,t,o)}catch(t){u([t,r,n,i],e)}s=a}}}function u(e,t){t||(t=n.ee);try{t.emit("internal-error",e)}catch(e){}}function d(e){return!(e&&"function"==typeof e&&e.apply&&!e[o])}},9414:(e,t,r)=>{"use strict";r.d(t,{J:()=>c});var n=r(7836),i=r(2646),o=r(944),a=r(3434);const s=new Map;function c(e,t,r,c){if("object"!=typeof t||!t||"string"!=typeof r||!r||"function"!=typeof t[r])return(0,o.R)(29);const u=function(e){return(e||n.ee).get("logger")}(e),d=(0,a.YM)(u),l=new i.y(n.P);l.level=c.level,l.customAttributes=c.customAttributes;const f=t[r]?.[a.Jt]||t[r];return s.set(f,l),d.inPlace(t,[r],"wrap-logger-",(()=>s.get(f))),u}},9300:(e,t,r)=>{"use strict";r.d(t,{T:()=>n});const n=r(860).K7.ajax},3333:(e,t,r)=>{"use strict";r.d(t,{$v:()=>u,TZ:()=>n,Zp:()=>i,kd:()=>c,mq:()=>s,nf:()=>a,qN:()=>o});const n=r(860).K7.genericEvents,i=["auxclick","click","copy","keydown","paste","scrollend"],o=["focus","blur"],a=4,s=1e3,c=["PageAction","UserAction","BrowserPerformance"],u={MARKS:"experimental.marks",MEASURES:"experimental.measures",RESOURCES:"experimental.resources"}},6774:(e,t,r)=>{"use strict";r.d(t,{T:()=>n});const n=r(860).K7.jserrors},993:(e,t,r)=>{"use strict";r.d(t,{A$:()=>o,ET:()=>a,TZ:()=>s,p_:()=>i});var n=r(860);const i={ERROR:"ERROR",WARN:"WARN",INFO:"INFO",DEBUG:"DEBUG",TRACE:"TRACE"},o={OFF:0,ERROR:1,WARN:2,INFO:3,DEBUG:4,TRACE:5},a="log",s=n.K7.logging},3785:(e,t,r)=>{"use strict";r.d(t,{R:()=>c,b:()=>u});var n=r(9908),i=r(1863),o=r(860),a=r(8154),s=r(993);function c(e,t,r={},c=s.p_.INFO){(0,n.p)(a.xV,["API/logging/".concat(c.toLowerCase(),"/called")],void 0,o.K7.metrics,e),(0,n.p)(s.ET,[(0,i.t)(),t,r,c],void 0,o.K7.logging,e)}function u(e){return"string"==typeof e&&Object.values(s.p_).some((t=>t===e.toUpperCase().trim()))}},8154:(e,t,r)=>{"use strict";r.d(t,{z_:()=>o,XG:()=>s,TZ:()=>n,rs:()=>i,xV:()=>a});r(6154),r(9566),r(384);const n=r(860).K7.metrics,i="sm",o="cm",a="storeSupportabilityMetrics",s="storeEventMetrics"},6630:(e,t,r)=>{"use strict";r.d(t,{T:()=>n});const n=r(860).K7.pageViewEvent},782:(e,t,r)=>{"use strict";r.d(t,{T:()=>n});const n=r(860).K7.pageViewTiming},6344:(e,t,r)=>{"use strict";r.d(t,{BB:()=>d,G4:()=>o,Qb:()=>l,TZ:()=>i,Ug:()=>a,_s:()=>s,bc:()=>u,yP:()=>c});var n=r(2614);const i=r(860).K7.sessionReplay,o={RECORD:"recordReplay",PAUSE:"pauseReplay",REPLAY_RUNNING:"replayRunning",ERROR_DURING_REPLAY:"errorDuringReplay"},a=.12,s={DomContentLoaded:0,Load:1,FullSnapshot:2,IncrementalSnapshot:3,Meta:4,Custom:5},c={[n.g.ERROR]:15e3,[n.g.FULL]:3e5,[n.g.OFF]:0},u={RESET:{message:"Session was reset",sm:"Reset"},IMPORT:{message:"Recorder failed to import",sm:"Import"},TOO_MANY:{message:"429: Too Many Requests",sm:"Too-Many"},TOO_BIG:{message:"Payload was too large",sm:"Too-Big"},CROSS_TAB:{message:"Session Entity was set to OFF on another tab",sm:"Cross-Tab"},ENTITLEMENTS:{message:"Session Replay is not allowed and will not be started",sm:"Entitlement"}},d=5e3,l={API:"api"}},5270:(e,t,r)=>{"use strict";r.d(t,{Aw:()=>c,CT:()=>u,SR:()=>s});var n=r(384),i=r(9417),o=r(7767),a=r(6154);function s(e){return!!(0,n.dV)().o.MO&&(0,o.V)(e)&&!0===(0,i.gD)(e,"session_trace.enabled")}function c(e){return!0===(0,i.gD)(e,"session_replay.preload")&&s(e)}function u(e,t){const r=t.correctAbsoluteTimestamp(e);return{originalTimestamp:e,correctedTimestamp:r,timestampDiff:e-r,originTime:a.WN,correctedOriginTime:t.correctedOriginTime,originTimeDiff:Math.floor(a.WN-t.correctedOriginTime)}}},3738:(e,t,r)=>{"use strict";r.d(t,{He:()=>i,Kp:()=>s,Lc:()=>u,Rz:()=>d,TZ:()=>n,bD:()=>o,d3:()=>a,jx:()=>l,uP:()=>c});const n=r(860).K7.sessionTrace,i="bstResource",o="resource",a="-start",s="-end",c="fn"+a,u="fn"+s,d="pushState",l=1e3},3962:(e,t,r)=>{"use strict";r.d(t,{AM:()=>o,O2:()=>c,Qu:()=>u,TZ:()=>s,ih:()=>d,pP:()=>a,tC:()=>i});var n=r(860);const i=["click","keydown","submit","popstate"],o="api",a="initialPageLoad",s=n.K7.softNav,c={INITIAL_PAGE_LOAD:"",ROUTE_CHANGE:1,UNSPECIFIED:2},u={INTERACTION:1,AJAX:2,CUSTOM_END:3,CUSTOM_TRACER:4},d={IP:"in progress",FIN:"finished",CAN:"cancelled"}},7378:(e,t,r)=>{"use strict";r.d(t,{$p:()=>x,BR:()=>b,Kp:()=>R,L3:()=>y,Lc:()=>c,NC:()=>o,SG:()=>d,TZ:()=>i,U6:()=>p,UT:()=>m,d3:()=>w,dT:()=>f,e5:()=>A,gx:()=>v,l9:()=>l,oW:()=>h,op:()=>g,rw:()=>u,tH:()=>T,uP:()=>s,wW:()=>E,xq:()=>a});var n=r(384);const i=r(860).K7.spa,o=["click","submit","keypress","keydown","keyup","change"],a=999,s="fn-start",c="fn-end",u="cb-start",d="api-ixn-",l="remaining",f="interaction",h="spaNode",p="jsonpNode",g="fetch-start",m="fetch-done",v="fetch-body-",b="jsonp-end",y=(0,n.dV)().o.ST,w="-start",R="-end",x="-body",E="cb"+R,A="jsTime",T="fetch"},4234:(e,t,r)=>{"use strict";r.d(t,{W:()=>o});var n=r(7836),i=r(1687);class o{constructor(e,t){this.agentIdentifier=e,this.ee=n.ee.get(e),this.featureName=t,this.blocked=!1}deregisterDrain(){(0,i.x3)(this.agentIdentifier,this.featureName)}}},7767:(e,t,r)=>{"use strict";r.d(t,{V:()=>o});var n=r(9417),i=r(6154);const o=e=>i.RI&&!0===(0,n.gD)(e,"privacy.cookies_enabled")},8969:(e,t,r)=>{"use strict";r.d(t,{j:()=>O});var n=r(860),i=r(2555),o=r(3371),a=r(9908),s=r(7836),c=r(1687),u=r(5289),d=r(6154),l=r(944),f=r(8154),h=r(384),p=r(6344);const g=["setErrorHandler","finished","addToTrace","addRelease","recordCustomEvent","addPageAction","setCurrentRouteName","setPageViewName","setCustomAttribute","interaction","noticeError","setUserId","setApplicationVersion","start",p.G4.RECORD,p.G4.PAUSE,"log","wrapLogger"],m=["setErrorHandler","finished","addToTrace","addRelease"];var v=r(1863),b=r(2614),y=r(993),w=r(3785),R=r(9414);function x(){const e=(0,h.pV)();g.forEach((t=>{e[t]=(...r)=>function(t,...r){let n=[];return Object.values(e.initializedAgents).forEach((e=>{e&&e.api?e.exposed&&e.api[t]&&n.push(e.api[t](...r)):(0,l.R)(38,t)})),n.length>1?n:n[0]}(t,...r)}))}const E={};var A=r(9417),T=r(5603),N=r(5284);const S=e=>{const t=e.startsWith("http");e+="/",r.p=t?e:"https://"+e};let _=!1;function O(e,t={},g,O){let{init:I,info:P,loader_config:j,runtime:C={},exposed:k=!0}=t;C.loaderType=g;const L=(0,h.pV)();P||(I=L.init,P=L.info,j=L.loader_config),(0,A.xN)(e.agentIdentifier,I||{}),(0,T.a)(e.agentIdentifier,j||{}),P.jsAttributes??={},d.bv&&(P.jsAttributes.isWorker=!0),(0,i.x1)(e.agentIdentifier,P);const H=(0,A.D0)(e.agentIdentifier),M=[P.beacon,P.errorBeacon];_||(H.proxy.assets&&(S(H.proxy.assets),M.push(H.proxy.assets)),H.proxy.beacon&&M.push(H.proxy.beacon),x(),(0,h.US)("activatedFeatures",N.B),e.runSoftNavOverSpa&&=!0===H.soft_navigations.enabled&&H.feature_flags.includes("soft_nav")),C.denyList=[...H.ajax.deny_list||[],...H.ajax.block_internal?M:[]],C.ptid=e.agentIdentifier,(0,o.V)(e.agentIdentifier,C),e.ee=s.ee.get(e.agentIdentifier),void 0===e.api&&(e.api=function(e,t,h=!1){t||(0,c.Ak)(e,"api");const g={};var x=s.ee.get(e),A=x.get("tracer");E[e]=b.g.OFF,x.on(p.G4.REPLAY_RUNNING,(t=>{E[e]=t}));var T="api-",N=T+"ixn-";function S(t,r,n,o){const a=(0,i.Vp)(e);return null===r?delete a.jsAttributes[t]:(0,i.x1)(e,{...a,jsAttributes:{...a.jsAttributes,[t]:r}}),I(T,n,!0,o||null===r?"session":void 0)(t,r)}function _(){}g.log=function(e,{customAttributes:t={},level:r=y.p_.INFO}={}){(0,a.p)(f.xV,["API/log/called"],void 0,n.K7.metrics,x),(0,w.R)(x,e,t,r)},g.wrapLogger=(e,t,{customAttributes:r={},level:i=y.p_.INFO}={})=>{(0,a.p)(f.xV,["API/wrapLogger/called"],void 0,n.K7.metrics,x),(0,R.J)(x,e,t,{customAttributes:r,level:i})},m.forEach((e=>{g[e]=I(T,e,!0,"api")})),g.addPageAction=I(T,"addPageAction",!0,n.K7.genericEvents),g.recordCustomEvent=I(T,"recordCustomEvent",!0,n.K7.genericEvents),g.setPageViewName=function(t,r){if("string"==typeof t)return"/"!==t.charAt(0)&&(t="/"+t),(0,o.f)(e).customTransaction=(r||"http://custom.transaction")+t,I(T,"setPageViewName",!0)()},g.setCustomAttribute=function(e,t,r=!1){if("string"==typeof e){if(["string","number","boolean"].includes(typeof t)||null===t)return S(e,t,"setCustomAttribute",r);(0,l.R)(40,typeof t)}else(0,l.R)(39,typeof e)},g.setUserId=function(e){if("string"==typeof e||null===e)return S("enduser.id",e,"setUserId",!0);(0,l.R)(41,typeof e)},g.setApplicationVersion=function(e){if("string"==typeof e||null===e)return S("application.version",e,"setApplicationVersion",!1);(0,l.R)(42,typeof e)},g.start=()=>{try{(0,a.p)(f.xV,["API/start/called"],void 0,n.K7.metrics,x),x.emit("manual-start-all")}catch(e){(0,l.R)(23,e)}},g[p.G4.RECORD]=function(){(0,a.p)(f.xV,["API/recordReplay/called"],void 0,n.K7.metrics,x),(0,a.p)(p.G4.RECORD,[],void 0,n.K7.sessionReplay,x)},g[p.G4.PAUSE]=function(){(0,a.p)(f.xV,["API/pauseReplay/called"],void 0,n.K7.metrics,x),(0,a.p)(p.G4.PAUSE,[],void 0,n.K7.sessionReplay,x)},g.interaction=function(e){return(new _).get("object"==typeof e?e:{})};const O=_.prototype={createTracer:function(e,t){var r={},i=this,o="function"==typeof t;return(0,a.p)(f.xV,["API/createTracer/called"],void 0,n.K7.metrics,x),h||(0,a.p)(N+"tracer",[(0,v.t)(),e,r],i,n.K7.spa,x),function(){if(A.emit((o?"":"no-")+"fn-start",[(0,v.t)(),i,o],r),o)try{return t.apply(this,arguments)}catch(e){const t="string"==typeof e?new Error(e):e;throw A.emit("fn-err",[arguments,this,t],r),t}finally{A.emit("fn-end",[(0,v.t)()],r)}}}};function I(e,t,r,i){return function(){return(0,a.p)(f.xV,["API/"+t+"/called"],void 0,n.K7.metrics,x),i&&(0,a.p)(e+t,[r?(0,v.t)():performance.now(),...arguments],r?null:this,i,x),r?void 0:this}}function P(){r.e(478).then(r.bind(r,8778)).then((({setAPI:t})=>{t(e),(0,c.Ze)(e,"api")})).catch((e=>{(0,l.R)(27,e),x.abort()}))}return["actionText","setName","setAttribute","save","ignore","onEnd","getContext","end","get"].forEach((e=>{O[e]=I(N,e,void 0,h?n.K7.softNav:n.K7.spa)})),g.setCurrentRouteName=h?I(N,"routeName",void 0,n.K7.softNav):I(T,"routeName",!0,n.K7.spa),g.noticeError=function(t,r){"string"==typeof t&&(t=new Error(t)),(0,a.p)(f.xV,["API/noticeError/called"],void 0,n.K7.metrics,x),(0,a.p)("err",[t,(0,v.t)(),!1,r,!!E[e]],void 0,n.K7.jserrors,x)},d.RI?(0,u.GG)((()=>P()),!0):P(),g}(e.agentIdentifier,O,e.runSoftNavOverSpa)),void 0===e.exposed&&(e.exposed=k),_=!0}},8374:(e,t,r)=>{r.nc=(()=>{try{return document?.currentScript?.nonce}catch(e){}return""})()},860:(e,t,r)=>{"use strict";r.d(t,{$J:()=>u,K7:()=>s,P3:()=>c,XX:()=>i,qY:()=>n,v4:()=>a});const n="events",i="jserrors",o="browser/blobs",a="rum",s={ajax:"ajax",genericEvents:"generic_events",jserrors:i,logging:"logging",metrics:"metrics",pageAction:"page_action",pageViewEvent:"page_view_event",pageViewTiming:"page_view_timing",sessionReplay:"session_replay",sessionTrace:"session_trace",softNav:"soft_navigations",spa:"spa"},c={[s.pageViewEvent]:1,[s.pageViewTiming]:2,[s.metrics]:3,[s.jserrors]:4,[s.spa]:5,[s.ajax]:6,[s.sessionTrace]:7,[s.softNav]:8,[s.sessionReplay]:9,[s.logging]:10,[s.genericEvents]:11},u={[s.pageViewEvent]:a,[s.pageViewTiming]:n,[s.ajax]:n,[s.spa]:n,[s.softNav]:n,[s.metrics]:i,[s.jserrors]:i,[s.sessionTrace]:o,[s.sessionReplay]:o,[s.logging]:"browser/logs",[s.genericEvents]:"ins"}}},n={};function i(e){var t=n[e];if(void 0!==t)return t.exports;var o=n[e]={exports:{}};return r[e](o,o.exports,i),o.exports}i.m=r,i.d=(e,t)=>{for(var r in t)i.o(t,r)&&!i.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},i.f={},i.e=e=>Promise.all(Object.keys(i.f).reduce(((t,r)=>(i.f[r](e,t),t)),[])),i.u=e=>({212:"nr-spa-compressor",249:"nr-spa-recorder",478:"nr-spa"}[e]+"-1.284.1.min.js"),i.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),e={},t="NRBA-1.284.1.PROD:",i.l=(r,n,o,a)=>{if(e[r])e[r].push(n);else{var s,c;if(void 0!==o)for(var u=document.getElementsByTagName("script"),d=0;d<u.length;d++){var l=u[d];if(l.getAttribute("src")==r||l.getAttribute("data-webpack")==t+o){s=l;break}}if(!s){c=!0;var f={478:"sha512-VWXyHiJymB8Fhqc5jWlZ1CWrtlNWMPhm+PNnjWX1CfW9gQedReF5MFo3k8skdB5TlR837ofwtBeSzIE69RbCwQ==",249:"sha512-e1fXm1ZkMilKv1yUjmoJw7TU5bCKK/7Xaa/Ta9opkyurmkWtIKPd4CMfU2dRHGr9+brXynQnY3wwY838aQPhVw==",212:"sha512-zX52gEnN9DOzLrxU+zqxDl8R/t9rkdZavljSVjdAYS3BNoZH304PhVRnFEdwyYNCN9QcuGDBMMJ8U6XYtxAL0g=="};(s=document.createElement("script")).charset="utf-8",s.timeout=120,i.nc&&s.setAttribute("nonce",i.nc),s.setAttribute("data-webpack",t+o),s.src=r,0!==s.src.indexOf(window.location.origin+"/")&&(s.crossOrigin="anonymous"),f[a]&&(s.integrity=f[a])}e[r]=[n];var h=(t,n)=>{s.onerror=s.onload=null,clearTimeout(p);var i=e[r];if(delete e[r],s.parentNode&&s.parentNode.removeChild(s),i&&i.forEach((e=>e(n))),t)return t(n)},p=setTimeout(h.bind(null,void 0,{type:"timeout",target:s}),12e4);s.onerror=h.bind(null,s.onerror),s.onload=h.bind(null,s.onload),c&&document.head.appendChild(s)}},i.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.p="https://js-agent.newrelic.com/",(()=>{var e={38:0,788:0};i.f.j=(t,r)=>{var n=i.o(e,t)?e[t]:void 0;if(0!==n)if(n)r.push(n[2]);else{var o=new Promise(((r,i)=>n=e[t]=[r,i]));r.push(n[2]=o);var a=i.p+i.u(t),s=new Error;i.l(a,(r=>{if(i.o(e,t)&&(0!==(n=e[t])&&(e[t]=void 0),n)){var o=r&&("load"===r.type?"missing":r.type),a=r&&r.target&&r.target.src;s.message="Loading chunk "+t+" failed.\n("+o+": "+a+")",s.name="ChunkLoadError",s.type=o,s.request=a,n[1](s)}}),"chunk-"+t,t)}};var t=(t,r)=>{var n,o,[a,s,c]=r,u=0;if(a.some((t=>0!==e[t]))){for(n in s)i.o(s,n)&&(i.m[n]=s[n]);if(c)c(i)}for(t&&t(r);u<a.length;u++)o=a[u],i.o(e,o)&&e[o]&&e[o][0](),e[o]=0},r=self["webpackChunk:NRBA-1.284.1.PROD"]=self["webpackChunk:NRBA-1.284.1.PROD"]||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})(),(()=>{"use strict";i(8374);var e=i(944),t=i(6344),r=i(9566);class n{agentIdentifier;constructor(){this.agentIdentifier=(0,r.LA)(16)}#e(t,...r){if("function"==typeof this.api?.[t])return this.api[t](...r);(0,e.R)(35,t)}addPageAction(e,t){return this.#e("addPageAction",e,t)}recordCustomEvent(e,t){return this.#e("recordCustomEvent",e,t)}setPageViewName(e,t){return this.#e("setPageViewName",e,t)}setCustomAttribute(e,t,r){return this.#e("setCustomAttribute",e,t,r)}noticeError(e,t){return this.#e("noticeError",e,t)}setUserId(e){return this.#e("setUserId",e)}setApplicationVersion(e){return this.#e("setApplicationVersion",e)}setErrorHandler(e){return this.#e("setErrorHandler",e)}addRelease(e,t){return this.#e("addRelease",e,t)}log(e,t){return this.#e("log",e,t)}}class o extends n{#e(t,...r){if("function"==typeof this.api?.[t])return this.api[t](...r);(0,e.R)(35,t)}start(){return this.#e("start")}finished(e){return this.#e("finished",e)}recordReplay(){return this.#e(t.G4.RECORD)}pauseReplay(){return this.#e(t.G4.PAUSE)}addToTrace(e){return this.#e("addToTrace",e)}setCurrentRouteName(e){return this.#e("setCurrentRouteName",e)}interaction(){return this.#e("interaction")}wrapLogger(e,t,r){return this.#e("wrapLogger",e,t,r)}}var a=i(860),s=i(9417);const c=Object.values(a.K7);function u(e){const t={};return c.forEach((r=>{t[r]=function(e,t){return!0===(0,s.gD)(t,"".concat(e,".enabled"))}(r,e)})),t}var d=i(8969);var l=i(1687),f=i(4234),h=i(5289),p=i(6154),g=i(5270),m=i(7767),v=i(6389);class b extends f.W{constructor(e,t,r=!0){super(e.agentIdentifier,t),this.auto=r,this.abortHandler=void 0,this.featAggregate=void 0,this.onAggregateImported=void 0,!1===e.init[this.featureName].autoStart&&(this.auto=!1),this.auto?(0,l.Ak)(e.agentIdentifier,t):this.ee.on("manual-start-all",(0,v.J)((()=>{(0,l.Ak)(e.agentIdentifier,this.featureName),this.auto=!0,this.importAggregator(e)})))}importAggregator(t,r={}){if(this.featAggregate||!this.auto)return;let n;this.onAggregateImported=new Promise((e=>{n=e}));const o=async()=>{let o;try{if((0,m.V)(this.agentIdentifier)){const{setupAgentSession:e}=await i.e(478).then(i.bind(i,6526));o=e(t)}}catch(t){(0,e.R)(20,t),this.ee.emit("internal-error",[t]),this.featureName===a.K7.sessionReplay&&this.abortHandler?.()}try{if(!this.#t(this.featureName,o))return(0,l.Ze)(this.agentIdentifier,this.featureName),void n(!1);const{lazyFeatureLoader:e}=await i.e(478).then(i.bind(i,6103)),{Aggregate:a}=await e(this.featureName,"aggregate");this.featAggregate=new a(t,r),t.runtime.harvester.initializedAggregates.push(this.featAggregate),n(!0)}catch(t){(0,e.R)(34,t),this.abortHandler?.(),(0,l.Ze)(this.agentIdentifier,this.featureName,!0),n(!1),this.ee&&this.ee.abort()}};p.RI?(0,h.GG)((()=>o()),!0):o()}#t(e,t){switch(e){case a.K7.sessionReplay:return(0,g.SR)(this.agentIdentifier)&&!!t;case a.K7.sessionTrace:return!!t;default:return!0}}}var y=i(6630);class w extends b{static featureName=y.T;constructor(e,t=!0){super(e,y.T,t),this.importAggregator(e)}}var R=i(384);var x=i(9908),E=i(2843),A=i(3878),T=i(782),N=i(1863);class S extends b{static featureName=T.T;constructor(e,t=!0){super(e,T.T,t),p.RI&&((0,E.u)((()=>(0,x.p)("docHidden",[(0,N.t)()],void 0,T.T,this.ee)),!0),(0,A.sp)("pagehide",(()=>(0,x.p)("winPagehide",[(0,N.t)()],void 0,T.T,this.ee))),this.importAggregator(e))}}var _=i(8154);class O extends b{static featureName=_.TZ;constructor(e,t=!0){super(e,_.TZ,t),p.RI&&document.addEventListener("securitypolicyviolation",(e=>{(0,x.p)(_.xV,["Generic/CSPViolation/Detected"],void 0,this.featureName,this.ee)})),this.importAggregator(e)}}var I=i(6774),P=i(3304);class j{constructor(e,t,r,n,i){this.name="UncaughtError",this.message="string"==typeof e?e:(0,P.A)(e),this.sourceURL=t,this.line=r,this.column=n,this.__newrelic=i}}function C(e){return H(e)?e:new j(void 0!==e?.message?e.message:e,e?.filename||e?.sourceURL,e?.lineno||e?.line,e?.colno||e?.col,e?.__newrelic)}function k(e){const t="Unhandled Promise Rejection: ";if(!e?.reason)return;if(H(e.reason)){try{e.reason.message.startsWith(t)||(e.reason.message=t+e.reason.message)}catch(e){}return C(e.reason)}const r=C(e.reason);return(r.message||"").startsWith(t)||(r.message=t+r.message),r}function L(e){if(e.error instanceof SyntaxError&&!/:\d+$/.test(e.error.stack?.trim())){const t=new j(e.message,e.filename,e.lineno,e.colno,e.error.__newrelic);return t.name=SyntaxError.name,t}return H(e.error)?e.error:C(e)}function H(e){return e instanceof Error&&!!e.stack}class M extends b{static featureName=I.T;#r=!1;constructor(e,r=!0){super(e,I.T,r);try{this.removeOnAbort=new AbortController}catch(e){}this.ee.on("internal-error",((e,t)=>{this.abortHandler&&(0,x.p)("ierr",[C(e),(0,N.t)(),!0,{},this.#r,t],void 0,this.featureName,this.ee)})),this.ee.on(t.G4.REPLAY_RUNNING,(e=>{this.#r=e})),p.gm.addEventListener("unhandledrejection",(e=>{this.abortHandler&&(0,x.p)("err",[k(e),(0,N.t)(),!1,{unhandledPromiseRejection:1},this.#r],void 0,this.featureName,this.ee)}),(0,A.jT)(!1,this.removeOnAbort?.signal)),p.gm.addEventListener("error",(e=>{this.abortHandler&&(0,x.p)("err",[L(e),(0,N.t)(),!1,{},this.#r],void 0,this.featureName,this.ee)}),(0,A.jT)(!1,this.removeOnAbort?.signal)),this.abortHandler=this.#n,this.importAggregator(e)}#n(){this.removeOnAbort?.abort(),this.abortHandler=void 0}}var D=i(8990);let K=1;const U="nr@id";function V(e){const t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===p.gm?0:(0,D.I)(e,U,(function(){return K++}))}function G(e){if("string"==typeof e&&e.length)return e.length;if("object"==typeof e){if("undefined"!=typeof ArrayBuffer&&e instanceof ArrayBuffer&&e.byteLength)return e.byteLength;if("undefined"!=typeof Blob&&e instanceof Blob&&e.size)return e.size;if(!("undefined"!=typeof FormData&&e instanceof FormData))try{return(0,P.A)(e).length}catch(e){return}}}var F=i(8139),B=i(7836),W=i(3434);const z={},q=["open","send"];function Z(t){var r=t||B.ee;const n=function(e){return(e||B.ee).get("xhr")}(r);if(void 0===p.gm.XMLHttpRequest)return n;if(z[n.debugId]++)return n;z[n.debugId]=1,(0,F.u)(r);var i=(0,W.YM)(n),o=p.gm.XMLHttpRequest,a=p.gm.MutationObserver,s=p.gm.Promise,c=p.gm.setInterval,u="readystatechange",d=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],l=[],f=p.gm.XMLHttpRequest=function(t){const r=new o(t),a=n.context(r);try{n.emit("new-xhr",[r],a),r.addEventListener(u,(s=a,function(){var e=this;e.readyState>3&&!s.resolved&&(s.resolved=!0,n.emit("xhr-resolved",[],e)),i.inPlace(e,d,"fn-",y)}),(0,A.jT)(!1))}catch(t){(0,e.R)(15,t);try{n.emit("internal-error",[t])}catch(e){}}var s;return r};function h(e,t){i.inPlace(t,["onreadystatechange"],"fn-",y)}if(function(e,t){for(var r in e)t[r]=e[r]}(o,f),f.prototype=o.prototype,i.inPlace(f.prototype,q,"-xhr-",y),n.on("send-xhr-start",(function(e,t){h(e,t),function(e){l.push(e),a&&(g?g.then(b):c?c(b):(m=-m,v.data=m))}(t)})),n.on("open-xhr-start",h),a){var g=s&&s.resolve();if(!c&&!s){var m=1,v=document.createTextNode(m);new a(b).observe(v,{characterData:!0})}}else r.on("fn-end",(function(e){e[0]&&e[0].type===u||b()}));function b(){for(var e=0;e<l.length;e++)h(0,l[e]);l.length&&(l=[])}function y(e,t){return t}return n}var Y="fetch-",J=Y+"body-",X=["arrayBuffer","blob","json","text","formData"],Q=p.gm.Request,ee=p.gm.Response,te="prototype";const re={};function ne(e){const t=function(e){return(e||B.ee).get("fetch")}(e);if(!(Q&&ee&&p.gm.fetch))return t;if(re[t.debugId]++)return t;function r(e,r,n){var i=e[r];"function"==typeof i&&(e[r]=function(){var e,r=[...arguments],o={};t.emit(n+"before-start",[r],o),o[B.P]&&o[B.P].dt&&(e=o[B.P].dt);var a=i.apply(this,r);return t.emit(n+"start",[r,e],a),a.then((function(e){return t.emit(n+"end",[null,e],a),e}),(function(e){throw t.emit(n+"end",[e],a),e}))})}return re[t.debugId]=1,X.forEach((e=>{r(Q[te],e,J),r(ee[te],e,J)})),r(p.gm,"fetch",Y),t.on(Y+"end",(function(e,r){var n=this;if(r){var i=r.headers.get("content-length");null!==i&&(n.rxSize=i),t.emit(Y+"done",[null,r],n)}else t.emit(Y+"done",[e],n)})),t}var ie=i(7485),oe=i(5603);class ae{constructor(e){this.agentIdentifier=e}generateTracePayload(e){if(!this.shouldGenerateTrace(e))return null;var t=(0,oe.o)(this.agentIdentifier);if(!t)return null;var n=(t.accountID||"").toString()||null,i=(t.agentID||"").toString()||null,o=(t.trustKey||"").toString()||null;if(!n||!i)return null;var a=(0,r.ZF)(),s=(0,r.el)(),c=Date.now(),u={spanId:a,traceId:s,timestamp:c};return(e.sameOrigin||this.isAllowedOrigin(e)&&this.useTraceContextHeadersForCors())&&(u.traceContextParentHeader=this.generateTraceContextParentHeader(a,s),u.traceContextStateHeader=this.generateTraceContextStateHeader(a,c,n,i,o)),(e.sameOrigin&&!this.excludeNewrelicHeader()||!e.sameOrigin&&this.isAllowedOrigin(e)&&this.useNewrelicHeaderForCors())&&(u.newrelicHeader=this.generateTraceHeader(a,s,c,n,i,o)),u}generateTraceContextParentHeader(e,t){return"00-"+t+"-"+e+"-01"}generateTraceContextStateHeader(e,t,r,n,i){return i+"@nr=0-1-"+r+"-"+n+"-"+e+"----"+t}generateTraceHeader(e,t,r,n,i,o){if(!("function"==typeof p.gm?.btoa))return null;var a={v:[0,1],d:{ty:"Browser",ac:n,ap:i,id:e,tr:t,ti:r}};return o&&n!==o&&(a.d.tk=o),btoa((0,P.A)(a))}shouldGenerateTrace(e){return this.isDtEnabled()&&this.isAllowedOrigin(e)}isAllowedOrigin(e){var t=!1,r={};if((0,s.gD)(this.agentIdentifier,"distributed_tracing")&&(r=(0,s.D0)(this.agentIdentifier).distributed_tracing),e.sameOrigin)t=!0;else if(r.allowed_origins instanceof Array)for(var n=0;n<r.allowed_origins.length;n++){var i=(0,ie.D)(r.allowed_origins[n]);if(e.hostname===i.hostname&&e.protocol===i.protocol&&e.port===i.port){t=!0;break}}return t}isDtEnabled(){var e=(0,s.gD)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.enabled}excludeNewrelicHeader(){var e=(0,s.gD)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.exclude_newrelic_header}useNewrelicHeaderForCors(){var e=(0,s.gD)(this.agentIdentifier,"distributed_tracing");return!!e&&!1!==e.cors_use_newrelic_header}useTraceContextHeadersForCors(){var e=(0,s.gD)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.cors_use_tracecontext_headers}}var se=i(9300),ce=i(7295),ue=["load","error","abort","timeout"],de=ue.length,le=(0,R.dV)().o.REQ,fe=(0,R.dV)().o.XHR;const he="X-NewRelic-App-Data";class pe extends b{static featureName=se.T;constructor(e,t=!0){super(e,se.T,t),this.dt=new ae(e.agentIdentifier),this.handler=(e,t,r,n)=>(0,x.p)(e,t,r,n,this.ee);try{const e={xmlhttprequest:"xhr",fetch:"fetch",beacon:"beacon"};p.gm?.performance?.getEntriesByType("resource").forEach((t=>{if(t.initiatorType in e&&0!==t.responseStatus){const r={status:t.responseStatus},n={rxSize:t.transferSize,duration:Math.floor(t.duration),cbTime:0};ge(r,t.name),this.handler("xhr",[r,n,t.startTime,t.responseEnd,e[t.initiatorType]],void 0,a.K7.ajax)}}))}catch(e){}ne(this.ee),Z(this.ee),function(e,t,r,n){function i(e){var t=this;t.totalCbs=0,t.called=0,t.cbTime=0,t.end=R,t.ended=!1,t.xhrGuids={},t.lastSize=null,t.loadCaptureCalled=!1,t.params=this.params||{},t.metrics=this.metrics||{},e.addEventListener("load",(function(r){E(t,e)}),(0,A.jT)(!1)),p.lR||e.addEventListener("progress",(function(e){t.lastSize=e.loaded}),(0,A.jT)(!1))}function o(e){this.params={method:e[0]},ge(this,e[1]),this.metrics={}}function s(t,r){e.loader_config.xpid&&this.sameOrigin&&r.setRequestHeader("X-NewRelic-ID",e.loader_config.xpid);var i=n.generateTracePayload(this.parsedOrigin);if(i){var o=!1;i.newrelicHeader&&(r.setRequestHeader("newrelic",i.newrelicHeader),o=!0),i.traceContextParentHeader&&(r.setRequestHeader("traceparent",i.traceContextParentHeader),i.traceContextStateHeader&&r.setRequestHeader("tracestate",i.traceContextStateHeader),o=!0),o&&(this.dt=i)}}function c(e,r){var n=this.metrics,i=e[0],o=this;if(n&&i){var a=G(i);a&&(n.txSize=a)}this.startTime=(0,N.t)(),this.body=i,this.listener=function(e){try{"abort"!==e.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==e.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof r.onload)&&"function"==typeof o.end)&&o.end(r)}catch(e){try{t.emit("internal-error",[e])}catch(e){}}};for(var s=0;s<de;s++)r.addEventListener(ue[s],this.listener,(0,A.jT)(!1))}function u(e,t,r){this.cbTime+=e,t?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof r.onload||"function"!=typeof this.end||this.end(r)}function d(e,t){var r=""+V(e)+!!t;this.xhrGuids&&!this.xhrGuids[r]&&(this.xhrGuids[r]=!0,this.totalCbs+=1)}function l(e,t){var r=""+V(e)+!!t;this.xhrGuids&&this.xhrGuids[r]&&(delete this.xhrGuids[r],this.totalCbs-=1)}function f(){this.endTime=(0,N.t)()}function h(e,r){r instanceof fe&&"load"===e[0]&&t.emit("xhr-load-added",[e[1],e[2]],r)}function g(e,r){r instanceof fe&&"load"===e[0]&&t.emit("xhr-load-removed",[e[1],e[2]],r)}function m(e,t,r){t instanceof fe&&("onload"===r&&(this.onload=!0),("load"===(e[0]&&e[0].type)||this.onload)&&(this.xhrCbStart=(0,N.t)()))}function v(e,r){this.xhrCbStart&&t.emit("xhr-cb-time",[(0,N.t)()-this.xhrCbStart,this.onload,r],r)}function b(e){var t,r=e[1]||{};if("string"==typeof e[0]?0===(t=e[0]).length&&p.RI&&(t=""+p.gm.location.href):e[0]&&e[0].url?t=e[0].url:p.gm?.URL&&e[0]&&e[0]instanceof URL?t=e[0].href:"function"==typeof e[0].toString&&(t=e[0].toString()),"string"==typeof t&&0!==t.length){t&&(this.parsedOrigin=(0,ie.D)(t),this.sameOrigin=this.parsedOrigin.sameOrigin);var i=n.generateTracePayload(this.parsedOrigin);if(i&&(i.newrelicHeader||i.traceContextParentHeader))if(e[0]&&e[0].headers)s(e[0].headers,i)&&(this.dt=i);else{var o={};for(var a in r)o[a]=r[a];o.headers=new Headers(r.headers||{}),s(o.headers,i)&&(this.dt=i),e.length>1?e[1]=o:e.push(o)}}function s(e,t){var r=!1;return t.newrelicHeader&&(e.set("newrelic",t.newrelicHeader),r=!0),t.traceContextParentHeader&&(e.set("traceparent",t.traceContextParentHeader),t.traceContextStateHeader&&e.set("tracestate",t.traceContextStateHeader),r=!0),r}}function y(e,t){this.params={},this.metrics={},this.startTime=(0,N.t)(),this.dt=t,e.length>=1&&(this.target=e[0]),e.length>=2&&(this.opts=e[1]);var r,n=this.opts||{},i=this.target;"string"==typeof i?r=i:"object"==typeof i&&i instanceof le?r=i.url:p.gm?.URL&&"object"==typeof i&&i instanceof URL&&(r=i.href),ge(this,r);var o=(""+(i&&i instanceof le&&i.method||n.method||"GET")).toUpperCase();this.params.method=o,this.body=n.body,this.txSize=G(n.body)||0}function w(e,t){if(this.endTime=(0,N.t)(),this.params||(this.params={}),(0,ce.iW)(this.params))return;let n;this.params.status=t?t.status:0,"string"==typeof this.rxSize&&this.rxSize.length>0&&(n=+this.rxSize);const i={txSize:this.txSize,rxSize:n,duration:(0,N.t)()-this.startTime};r("xhr",[this.params,i,this.startTime,this.endTime,"fetch"],this,a.K7.ajax)}function R(e){const t=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(let t=0;t<de;t++)e.removeEventListener(ue[t],this.listener,!1);t.aborted||(0,ce.iW)(t)||(n.duration=(0,N.t)()-this.startTime,this.loadCaptureCalled||4!==e.readyState?null==t.status&&(t.status=0):E(this,e),n.cbTime=this.cbTime,r("xhr",[t,n,this.startTime,this.endTime,"xhr"],this,a.K7.ajax))}}function E(e,r){e.params.status=r.status;var n=function(e,t){var r=e.responseType;return"json"===r&&null!==t?t:"arraybuffer"===r||"blob"===r||"json"===r?G(e.response):"text"===r||""===r||void 0===r?G(e.responseText):void 0}(r,e.lastSize);if(n&&(e.metrics.rxSize=n),e.sameOrigin&&r.getAllResponseHeaders().indexOf(he)>=0){var i=r.getResponseHeader(he);i&&((0,x.p)(_.rs,["Ajax/CrossApplicationTracing/Header/Seen"],void 0,a.K7.metrics,t),e.params.cat=i.split(", ").pop())}e.loadCaptureCalled=!0}t.on("new-xhr",i),t.on("open-xhr-start",o),t.on("open-xhr-end",s),t.on("send-xhr-start",c),t.on("xhr-cb-time",u),t.on("xhr-load-added",d),t.on("xhr-load-removed",l),t.on("xhr-resolved",f),t.on("addEventListener-end",h),t.on("removeEventListener-end",g),t.on("fn-end",v),t.on("fetch-before-start",b),t.on("fetch-start",y),t.on("fn-start",m),t.on("fetch-done",w)}(e,this.ee,this.handler,this.dt),this.importAggregator(e)}}function ge(e,t){var r=(0,ie.D)(t),n=e.params||e;n.hostname=r.hostname,n.port=r.port,n.protocol=r.protocol,n.host=r.hostname+":"+r.port,n.pathname=r.pathname,e.parsedOrigin=r,e.sameOrigin=r.sameOrigin}const me={},ve=["pushState","replaceState"];function be(e){const t=function(e){return(e||B.ee).get("history")}(e);return!p.RI||me[t.debugId]++||(me[t.debugId]=1,(0,W.YM)(t).inPlace(window.history,ve,"-")),t}var ye=i(3738);const{He:we,bD:Re,d3:xe,Kp:Ee,TZ:Ae,Lc:Te,uP:Ne,Rz:Se}=ye;class _e extends b{static featureName=Ae;constructor(e,t=!0){super(e,Ae,t);if(!(0,m.V)(this.agentIdentifier))return void this.deregisterDrain();const r=this.ee;let n;be(r),this.eventsEE=(0,F.u)(r),this.eventsEE.on(Ne,(function(e,t){this.bstStart=(0,N.t)()})),this.eventsEE.on(Te,(function(e,t){(0,x.p)("bst",[e[0],t,this.bstStart,(0,N.t)()],void 0,a.K7.sessionTrace,r)})),r.on(Se+xe,(function(e){this.time=(0,N.t)(),this.startPath=location.pathname+location.hash})),r.on(Se+Ee,(function(e){(0,x.p)("bstHist",[location.pathname+location.hash,this.startPath,this.time],void 0,a.K7.sessionTrace,r)}));try{n=new PerformanceObserver((e=>{const t=e.getEntries();(0,x.p)(we,[t],void 0,a.K7.sessionTrace,r)})),n.observe({type:Re,buffered:!0})}catch(e){}this.importAggregator(e,{resourceObserver:n})}}var Oe=i(2614);class Ie extends b{static featureName=t.TZ;#i;#o;constructor(e,r=!0){let n;super(e,t.TZ,r),this.replayRunning=!1,this.#o=e;try{n=JSON.parse(localStorage.getItem("".concat(Oe.H3,"_").concat(Oe.uh)))}catch(e){}(0,g.SR)(e.agentIdentifier)&&this.ee.on(t.G4.RECORD,(()=>this.#a())),this.#s(n)?(this.#i=n?.sessionReplayMode,this.#c()):this.importAggregator(e),this.ee.on("err",(e=>{this.replayRunning&&(this.errorNoticed=!0,(0,x.p)(t.G4.ERROR_DURING_REPLAY,[e],void 0,this.featureName,this.ee))})),this.ee.on(t.G4.REPLAY_RUNNING,(e=>{this.replayRunning=e}))}#s(e){return e&&(e.sessionReplayMode===Oe.g.FULL||e.sessionReplayMode===Oe.g.ERROR)||(0,g.Aw)(this.agentIdentifier)}#u=!1;async#c(e){if(!this.#u){this.#u=!0;try{const{Recorder:t}=await Promise.all([i.e(478),i.e(249)]).then(i.bind(i,8589));this.recorder??=new t({mode:this.#i,agentIdentifier:this.agentIdentifier,trigger:e,ee:this.ee,agentRef:this.#o}),this.recorder.startRecording(),this.abortHandler=this.recorder.stopRecording}catch(e){}this.importAggregator(this.#o,{recorder:this.recorder,errorNoticed:this.errorNoticed})}}#a(){this.featAggregate?this.featAggregate.mode!==Oe.g.FULL&&this.featAggregate.initializeRecording(Oe.g.FULL,!0):(this.#i=Oe.g.FULL,this.#c(t.Qb.API),this.recorder&&this.recorder.parent.mode!==Oe.g.FULL&&(this.recorder.parent.mode=Oe.g.FULL,this.recorder.stopRecording(),this.recorder.startRecording(),this.abortHandler=this.recorder.stopRecording))}}var Pe=i(3962);class je extends b{static featureName=Pe.TZ;constructor(e,t=!0){if(super(e,Pe.TZ,t),!p.RI||!(0,R.dV)().o.MO)return;const r=be(this.ee);Pe.tC.forEach((e=>{(0,A.sp)(e,(e=>{a(e)}),!0)}));const n=()=>(0,x.p)("newURL",[(0,N.t)(),""+window.location],void 0,this.featureName,this.ee);r.on("pushState-end",n),r.on("replaceState-end",n);try{this.removeOnAbort=new AbortController}catch(e){}(0,A.sp)("popstate",(e=>(0,x.p)("newURL",[e.timeStamp,""+window.location],void 0,this.featureName,this.ee)),!0,this.removeOnAbort?.signal);let i=!1;const o=new((0,R.dV)().o.MO)(((e,t)=>{i||(i=!0,requestAnimationFrame((()=>{(0,x.p)("newDom",[(0,N.t)()],void 0,this.featureName,this.ee),i=!1})))})),a=(0,v.s)((e=>{(0,x.p)("newUIEvent",[e],void 0,this.featureName,this.ee),o.observe(document.body,{attributes:!0,childList:!0,subtree:!0,characterData:!0})}),100,{leading:!0});this.abortHandler=function(){this.removeOnAbort?.abort(),o.disconnect(),this.abortHandler=void 0},this.importAggregator(e,{domObserver:o})}}var Ce=i(7378);const ke={},Le=["appendChild","insertBefore","replaceChild"];function He(e){const t=function(e){return(e||B.ee).get("jsonp")}(e);if(!p.RI||ke[t.debugId])return t;ke[t.debugId]=!0;var r=(0,W.YM)(t),n=/[?&](?:callback|cb)=([^&#]+)/,i=/(.*)\.([^.]+)/,o=/^(\w+)(\.|$)(.*)$/;function a(e,t){if(!e)return t;const r=e.match(o),n=r[1];return a(r[3],t[n])}return r.inPlace(Node.prototype,Le,"dom-"),t.on("dom-start",(function(e){!function(e){if(!e||"string"!=typeof e.nodeName||"script"!==e.nodeName.toLowerCase())return;if("function"!=typeof e.addEventListener)return;var o=(s=e.src,c=s.match(n),c?c[1]:null);var s,c;if(!o)return;var u=function(e){var t=e.match(i);if(t&&t.length>=3)return{key:t[2],parent:a(t[1],window)};return{key:e,parent:window}}(o);if("function"!=typeof u.parent[u.key])return;var d={};function l(){t.emit("jsonp-end",[],d),e.removeEventListener("load",l,(0,A.jT)(!1)),e.removeEventListener("error",f,(0,A.jT)(!1))}function f(){t.emit("jsonp-error",[],d),t.emit("jsonp-end",[],d),e.removeEventListener("load",l,(0,A.jT)(!1)),e.removeEventListener("error",f,(0,A.jT)(!1))}r.inPlace(u.parent,[u.key],"cb-",d),e.addEventListener("load",l,(0,A.jT)(!1)),e.addEventListener("error",f,(0,A.jT)(!1)),t.emit("new-jsonp",[e.src],d)}(e[0])})),t}const Me={};function De(e){const t=function(e){return(e||B.ee).get("promise")}(e);if(Me[t.debugId])return t;Me[t.debugId]=!0;var r=t.context,n=(0,W.YM)(t),i=p.gm.Promise;return i&&function(){function e(r){var o=t.context(),a=n(r,"executor-",o,null,!1);const s=Reflect.construct(i,[a],e);return t.context(s).getCtx=function(){return o},s}p.gm.Promise=e,Object.defineProperty(e,"name",{value:"Promise"}),e.toString=function(){return i.toString()},Object.setPrototypeOf(e,i),["all","race"].forEach((function(r){const n=i[r];e[r]=function(e){let i=!1;[...e||[]].forEach((e=>{this.resolve(e).then(a("all"===r),a(!1))}));const o=n.apply(this,arguments);return o;function a(e){return function(){t.emit("propagate",[null,!i],o,!1,!1),i=i||!e}}}})),["resolve","reject"].forEach((function(r){const n=i[r];e[r]=function(e){const r=n.apply(this,arguments);return e!==r&&t.emit("propagate",[e,!0],r,!1,!1),r}})),e.prototype=i.prototype;const o=i.prototype.then;i.prototype.then=function(...e){var i=this,a=r(i);a.promise=i,e[0]=n(e[0],"cb-",a,null,!1),e[1]=n(e[1],"cb-",a,null,!1);const s=o.apply(this,e);return a.nextPromise=s,t.emit("propagate",[i,!0],s,!1,!1),s},i.prototype.then[W.Jt]=o,t.on("executor-start",(function(e){e[0]=n(e[0],"resolve-",this,null,!1),e[1]=n(e[1],"resolve-",this,null,!1)})),t.on("executor-err",(function(e,t,r){e[1](r)})),t.on("cb-end",(function(e,r,n){t.emit("propagate",[n,!0],this.nextPromise,!1,!1)})),t.on("propagate",(function(e,r,n){this.getCtx&&!r||(this.getCtx=function(){if(e instanceof Promise)var r=t.context(e);return r&&r.getCtx?r.getCtx():this})}))}(),t}const Ke={},Ue="setTimeout",Ve="setInterval",Ge="clearTimeout",Fe="-start",Be=[Ue,"setImmediate",Ve,Ge,"clearImmediate"];function We(e){const t=function(e){return(e||B.ee).get("timer")}(e);if(Ke[t.debugId]++)return t;Ke[t.debugId]=1;var r=(0,W.YM)(t);return r.inPlace(p.gm,Be.slice(0,2),Ue+"-"),r.inPlace(p.gm,Be.slice(2,3),Ve+"-"),r.inPlace(p.gm,Be.slice(3),Ge+"-"),t.on(Ve+Fe,(function(e,t,n){e[0]=r(e[0],"fn-",null,n)})),t.on(Ue+Fe,(function(e,t,n){this.method=n,this.timerDuration=isNaN(e[1])?0:+e[1],e[0]=r(e[0],"fn-",this,n)})),t}const ze={};function qe(e){const t=function(e){return(e||B.ee).get("mutation")}(e);if(!p.RI||ze[t.debugId])return t;ze[t.debugId]=!0;var r=(0,W.YM)(t),n=p.gm.MutationObserver;return n&&(window.MutationObserver=function(e){return this instanceof n?new n(r(e,"fn-")):n.apply(this,arguments)},MutationObserver.prototype=n.prototype),t}const{TZ:Ze,d3:Ye,Kp:Je,$p:Xe,wW:$e,e5:Qe,tH:et,uP:tt,rw:rt,Lc:nt}=Ce;class it extends b{static featureName=Ze;constructor(e,t=!0){if(super(e,Ze,t),!p.RI)return;try{this.removeOnAbort=new AbortController}catch(e){}let r,n=0;const i=this.ee.get("tracer"),o=He(this.ee),a=De(this.ee),s=We(this.ee),c=Z(this.ee),u=this.ee.get("events"),d=ne(this.ee),l=be(this.ee),f=qe(this.ee);function h(e,t){l.emit("newURL",[""+window.location,t])}function g(){n++,r=window.location.hash,this[tt]=(0,N.t)()}function m(){n--,window.location.hash!==r&&h(0,!0);var e=(0,N.t)();this[Qe]=~~this[Qe]+e-this[tt],this[nt]=e}function v(e,t){e.on(t,(function(){this[t]=(0,N.t)()}))}this.ee.on(tt,g),a.on(rt,g),o.on(rt,g),this.ee.on(nt,m),a.on($e,m),o.on($e,m),this.ee.on("fn-err",((...t)=>{t[2]?.__newrelic?.[e.agentIdentifier]||(0,x.p)("function-err",[...t],void 0,this.featureName,this.ee)})),this.ee.buffer([tt,nt,"xhr-resolved"],this.featureName),u.buffer([tt],this.featureName),s.buffer(["setTimeout"+Je,"clearTimeout"+Ye,tt],this.featureName),c.buffer([tt,"new-xhr","send-xhr"+Ye],this.featureName),d.buffer([et+Ye,et+"-done",et+Xe+Ye,et+Xe+Je],this.featureName),l.buffer(["newURL"],this.featureName),f.buffer([tt],this.featureName),a.buffer(["propagate",rt,$e,"executor-err","resolve"+Ye],this.featureName),i.buffer([tt,"no-"+tt],this.featureName),o.buffer(["new-jsonp","cb-start","jsonp-error","jsonp-end"],this.featureName),v(d,et+Ye),v(d,et+"-done"),v(o,"new-jsonp"),v(o,"jsonp-end"),v(o,"cb-start"),l.on("pushState-end",h),l.on("replaceState-end",h),window.addEventListener("hashchange",h,(0,A.jT)(!0,this.removeOnAbort?.signal)),window.addEventListener("load",h,(0,A.jT)(!0,this.removeOnAbort?.signal)),window.addEventListener("popstate",(function(){h(0,n>1)}),(0,A.jT)(!0,this.removeOnAbort?.signal)),this.abortHandler=this.#n,this.importAggregator(e)}#n(){this.removeOnAbort?.abort(),this.abortHandler=void 0}}var ot=i(3333);class at extends b{static featureName=ot.TZ;constructor(e,t=!0){super(e,ot.TZ,t);const r=[e.init.page_action.enabled,e.init.performance.capture_marks,e.init.performance.capture_measures,e.init.user_actions.enabled,e.init.performance.resources.enabled];if(p.RI&&(e.init.user_actions.enabled&&(ot.Zp.forEach((e=>(0,A.sp)(e,(e=>(0,x.p)("ua",[e],void 0,this.featureName,this.ee)),!0))),ot.qN.forEach((e=>{const t=(0,v.s)((e=>{(0,x.p)("ua",[e],void 0,this.featureName,this.ee)}),500,{leading:!0});(0,A.sp)(e,t)}))),e.init.performance.resources.enabled&&p.gm.PerformanceObserver?.supportedEntryTypes.includes("resource"))){new PerformanceObserver((e=>{e.getEntries().forEach((e=>{(0,x.p)("browserPerformance.resource",[e],void 0,this.featureName,this.ee)}))})).observe({type:"resource",buffered:!0})}r.some((e=>e))?this.importAggregator(e):this.deregisterDrain()}}var st=i(993),ct=i(3785),ut=i(9414);class dt extends b{static featureName=st.TZ;constructor(e,t=!0){super(e,st.TZ,t);const r=this.ee;(0,ut.J)(r,p.gm.console,"log",{level:"info"}),(0,ut.J)(r,p.gm.console,"error",{level:"error"}),(0,ut.J)(r,p.gm.console,"warn",{level:"warn"}),(0,ut.J)(r,p.gm.console,"info",{level:"info"}),(0,ut.J)(r,p.gm.console,"debug",{level:"debug"}),(0,ut.J)(r,p.gm.console,"trace",{level:"trace"}),this.ee.on("wrap-logger-end",(function([e]){const{level:t,customAttributes:n}=this;(0,ct.R)(r,e,n,t)})),this.importAggregator(e)}}new class extends o{constructor(t){super(),p.gm?(this.features={},(0,R.bQ)(this.agentIdentifier,this),this.desiredFeatures=new Set(t.features||[]),this.desiredFeatures.add(w),this.runSoftNavOverSpa=[...this.desiredFeatures].some((e=>e.featureName===a.K7.softNav)),(0,d.j)(this,t,t.loaderType||"agent"),this.run()):(0,e.R)(21)}get config(){return{info:this.info,init:this.init,loader_config:this.loader_config,runtime:this.runtime}}run(){try{const t=u(this.agentIdentifier),r=[...this.desiredFeatures];r.sort(((e,t)=>a.P3[e.featureName]-a.P3[t.featureName])),r.forEach((r=>{if(!t[r.featureName]&&r.featureName!==a.K7.pageViewEvent)return;if(this.runSoftNavOverSpa&&r.featureName===a.K7.spa)return;if(!this.runSoftNavOverSpa&&r.featureName===a.K7.softNav)return;const n=function(e){switch(e){case a.K7.ajax:return[a.K7.jserrors];case a.K7.sessionTrace:return[a.K7.ajax,a.K7.pageViewEvent];case a.K7.sessionReplay:return[a.K7.sessionTrace];case a.K7.pageViewTiming:return[a.K7.pageViewEvent];default:return[]}}(r.featureName).filter((e=>!(e in this.features)));n.length>0&&(0,e.R)(36,{targetFeature:r.featureName,missingDependencies:n}),this.features[r.featureName]=new r(this)}))}catch(t){(0,e.R)(22,t);for(const e in this.features)this.features[e].abortHandler?.();const r=(0,R.Zm)();delete r.initializedAgents[this.agentIdentifier]?.api,delete r.initializedAgents[this.agentIdentifier]?.features,delete this.sharedAggregator;return r.ee.get(this.agentIdentifier).abort(),!1}}}({features:[pe,w,S,_e,Ie,O,M,at,dt,je,it],loaderType:"spa"})})()})();</script><title>Compétitions &#8211; LIGUE BOURGOGNE-FRANCHE-COMTÉ</title>
<meta name='robots' content='max-image-preview:large' />
<link rel='dns-prefetch' href='//ajax.googleapis.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel="alternate" type="application/rss+xml" title="LIGUE BOURGOGNE-FRANCHE-COMTÉ &raquo; Flux" href="https://lbfc.fff.fr/feed/" />
<link rel="alternate" type="application/rss+xml" title="LIGUE BOURGOGNE-FRANCHE-COMTÉ &raquo; Flux des commentaires" href="https://lbfc.fff.fr/comments/feed/" />
<script type="text/javascript">
/* <![CDATA[ */
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/lbfc.fff.fr\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.1"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83d\udc26\u200d\u2b1b","\ud83d\udc26\u200b\u2b1b")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
/* ]]> */
</script>
<style id='wp-emoji-styles-inline-css' type='text/css'>

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<link rel='stylesheet' id='wp-block-library-css' href='https://lbfc.fff.fr/wp-includes/css/dist/block-library/style.min.css?ver=6.6.1' type='text/css' media='all' />
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css' type='text/css'>
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='tntColorbox1-css' href='https://lbfc.fff.fr/wp-content/plugins/video-list-manager-fff/css/skin1/colorbox.css?ver=6.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='tntstyle1-css' href='https://lbfc.fff.fr/wp-content/plugins/video-list-manager-fff/css/style.css?ver=6.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='parent-style-css' href='https://lbfc.fff.fr/wp-content/themes/dynamic-news-lite/style.css?ver=1.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='enfant-style-css' href='//lbfc.fff.fr/style-vars/style-vars-11.css?version=1742215810&#038;ver=1.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='slick-style-css' href='https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/slick-master/slick/slick.css?ver=1.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='slick-theme-style-css' href='https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/slick-master/slick/slick-theme.css?ver=1.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-ui-css' href='https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/datepicker/jquery-ui.css?ver=1.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='calendar-css' href='https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/datepicker/calendar.css?ver=1.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='dofa-css' href='https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/css/dofa.css?ver=1.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='leafletcss-css' href='https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/css/leaflet.css?ver=1.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='dynamicnewslite-stylesheet-css' href='https://lbfc.fff.fr/wp-content/themes/fff/style.css?ver=1.2.6' type='text/css' media='all' />
<link rel='stylesheet' id='genericons-css' href='https://lbfc.fff.fr/wp-content/themes/dynamic-news-lite/css/genericons/genericons.css?ver=3.4.1' type='text/css' media='all' />
<link rel='stylesheet' id='dynamicnewslite-flexslider-css' href='https://lbfc.fff.fr/wp-content/themes/dynamic-news-lite/css/flexslider.css?ver=6.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='dynamicnewslite-default-fonts-css' href='//fonts.googleapis.com/css?family=Droid+Sans%3A400%2C700%7CFrancois+One&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='mobile-css' href='https://lbfc.fff.fr/wp-content/themes/fff/style-mobile.css?ver=1.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='tablet-css' href='https://lbfc.fff.fr/wp-content/themes/fff/style-tablet.css?ver=1.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='particular-css' href='https://lbfc.fff.fr/wp-content/themes/fff/style-particular.css?ver=1.6.0' type='text/css' media='all' />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js?ver=1.8.1" id="jquery-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/plugins/bsk-pdf-manager/js/bsk_pdf_manager.js?ver=3.6.1" id="bsk-pdf-manager-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/plugins/fff-partenaires/js/fff_partenaires_manager.js?ver=1.0" id="fff-partenaires-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/ad-server-google-func.js?ver=1.6.0" id="googleadserver-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/cmp.js?ver=1.6.0" id="cmp-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/google-tag-manager-variables.js?ver=1.6.0" id="googleTagManagerVariables-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/google-tag-manager-events.js?ver=1.6.0" id="googleTagManagerEvents-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/menu-competition/widget-competition.js?ver=1.6.0" id="homecomp-js"></script>
<script type="text/javascript" id="sso-connect-js-extra">
/* <![CDATA[ */
var ssoAddress = {"address":"https:\/\/sso.fff.fr"};
/* ]]> */
</script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/sso-connect/sso-connect.js?ver=1.6.0" id="sso-connect-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/datepicker/jquery-ui.js?ver=6.6.1" id="jquery-ui-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/datepicker/calendar.js?ver=6.6.1" id="calendar-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/datepicker/datepicker-fr.js?ver=6.6.1" id="datepicker-fr-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/lazyloader/lazyload.min.js?ver=6.6.1" id="lazyload-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/leaflet/leaflet.js?ver=1.6.0" id="leaflet-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/menu-competition/menu-competition.js?ver=1.6.0" id="club-js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/dynamic-news-lite/js/html5shiv.min.js?ver=3.7.3" id="html5shiv-js"></script>
<![endif]-->
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/dynamic-news-lite/js/jquery.flexslider-min.js?ver=2.6.0" id="flexslider-js"></script>
<script type="text/javascript" id="dynamicnewslite-jquery-frontpage_slider-js-extra">
/* <![CDATA[ */
var dynamicnews_slider_params = {"animation":"slide","speed":"7000"};
/* ]]> */
</script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/dynamic-news-lite/js/slider.js?ver=2.6.0" id="dynamicnewslite-jquery-frontpage_slider-js"></script>
<script type="text/javascript" id="dynamicnewslite-jquery-navigation-js-extra">
/* <![CDATA[ */
var dynamicnews_menu_title = "Menu";
/* ]]> */
</script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/dynamic-news-lite/js/navigation.js?ver=20160719" id="dynamicnewslite-jquery-navigation-js"></script>
<script type="text/javascript" id="dynamicnewslite-jquery-sidebar-js-extra">
/* <![CDATA[ */
var dynamicnews_sidebar_title = "Sidebar";
/* ]]> */
</script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/dynamic-news-lite/js/sidebar.js?ver=20160421" id="dynamicnewslite-jquery-sidebar-js"></script>
<link rel="https://api.w.org/" href="https://lbfc.fff.fr/wp-json/" /><link rel="alternate" title="JSON" type="application/json" href="https://lbfc.fff.fr/wp-json/wp/v2/pages/10" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://lbfc.fff.fr/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.6.1" />
<link rel="canonical" href="https://lbfc.fff.fr/competitions/" />
<link rel='shortlink' href='https://lbfc.fff.fr/?p=10' />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://lbfc.fff.fr/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flbfc.fff.fr%2Fcompetitions%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://lbfc.fff.fr/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flbfc.fff.fr%2Fcompetitions%2F&#038;format=xml" />
    <script type="didomi/javascript" data-vendor-raw="didomi:google" data-purposes="cookies" async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js%22%3E"></script>
    <script>
        window.googletag = window.googletag || {cmd: []};
        googletag.cmd.push(function() {
            googletag.defineSlot('/21747811086/ld_footamateur-competitions_mobile_728x90', [728, 90], 'div-gpt-ad-1604410204720-0').addService(googletag.pubads());
            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
        });
    </script>
    <script src="https://www.youtube.com/player_api"></script>
    <script src="https://api.dmcdn.net/all.js"></script>
    <script src="https://player.vimeo.com/api/player.js"></script>


    <script type="application/javascript" src="https://ced.sascdn.com/tag/4426/smart.js" async></script>
    <script type="application/javascript">
        var sas = sas || {};
        sas.cmd = sas.cmd || [];
        sas.cmd.push(function() {
            sas.setup({ networkid: 4426, domain: "https://adapi.smartadserver.com", async: true });
        });

        sas.cmd.push(function() {
            sas.call("onecall", {
                siteId: 526525,
                pageId: 1640799,
                formats: [
                    { id: 115000 }
                    ,{ id: 115016 }
                    ,{ id: 115018 }
                ],
                target: ''
            });
        });
    </script>

        <link rel="icon" type="image/png" href="https://lbfc.fff.fr/wp-content/uploads/sites/11/2017/06/4000_Bourgogne-Franche-Comte.jpg"/>

    <script>
        var dataLayer = [];
        window.dataLayer.push(dataLayerTmp);
    </script>




</head>

<body class="page-template page-template-template-competitions page-template-template-competitions-php page page-id-10 page-parent wp-custom-logo sliding-sidebar mobile-header-none">
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7SVP3V" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- INIT GOOGLE TAGS MANAGER -->

<!-- Event, title, theme -->
<script>
    dataLayerTmp.event = 'pageview';
    dataLayerTmp.p_title = 'Compétitions &#8211; LIGUE BOURGOGNE-FRANCHE-COMTÉ';
    dataLayerTmp.p_theme = 'foot amateur';
</script>

<!-- Error Code -->

<!-- Template -->
<script>
    dataLayerTmp.p_template = 'competition';
</script>

<!-- Environnement -->
<script>
    dataLayerTmp.p_environment = 'prod';
</script>

<!-- Site name -->
<script>
    dataLayerTmp.p_site = 'lbfc.fff.fr';
</script>

<!-- Category level 1 -->
<script>
    dataLayerTmp.p_category_level_1 = 'Compétitions';
</script>

<!-- category level 2 -->

<!-- Functions -->


<div id="wrapper" class="hfeed">

    <div id="topnavi-wrap">
        
	<div id="topnavi" class="container clearfix">

		
		<nav id="topnav" class="clearfix" role="navigation">
            <span class="federation"><a href="https://www.fff.fr"><img class="logo" src="https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/css/images/logo_fff.png" alt="Logo FFF"><span>FFF</span></a></span>
			<ul id="topnav-menu" class="top-navigation-menu"><li id="menu-item-81" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-81"><a target="_blank" rel="noopener" href="https://www.fff.fr/competition">Ligues &#038; Districts</a></li>
<li id="menu-item-82" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-82"><a target="_blank" rel="noopener" href="http://supporters.fff.fr/">Club des supporters</a></li>
<li id="menu-item-83" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-83"><a target="_blank" rel="noopener" href="http://billetterie.fff.fr/">Billetterie</a></li>
<li id="menu-item-84" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-84"><a target="_blank" rel="noopener" href="http://boutique.fff.fr/">Boutique</a></li>
<li id="menu-item-57693" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-57693"><a href="https://portailclubs.fff.fr">Portail Clubs</a></li>
<li id="menu-item-57694" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-57694"><a href="https://officiels.fff.fr">Portail des officiels</a></li>

        <li class="alert-menu-item">
            <span onclick="window.open('https://www.fff.fr/713-la-plateforme-d-alerte.html', '_blank')" class="alert-btn-link">J'alerte</span>
        </li>
    </ul>		</nav>

		
	</div>
    </div>

    <div id="header-fond">
        <div id="header-wrap">
            <header id="header" class="container clearfix" role="banner">
                <span id="address-sso" data="https://sso.fff.fr/oauth/v2/auth?client_id=591c18ad6ab9c00ce450f209_2cqoruo15o4kw4kk0sk8cggcowg40g40sc44wsk80ogkgkg0s0&redirect_uri=https://lbfc.fff.fr/sso-connect.php&response_type=code&state=odz4oe4ggesso0oogsc0oowswssgs8k"></span>

                <span id="subscribe-sso" data="https://mon-compte.fff.fr/inscription/etape1?client_id=2cqoruo15o4kw4kk0sk8cggcowg40g40sc44wsk80ogkgkg0s0&nombre-etape-inscription=1&query=response_type%3Dcode%26client_id%3D591c18ad6ab9c00ce450f209_2cqoruo15o4kw4kk0sk8cggcowg40g40sc44wsk80ogkgkg0s0%26redirect_uri%3Dhttps%3A%2F%2Flbfc.fff.fr%2Fsso-connect.php%26state%3Dfqvyog5m52osgw4c48cwg88cw4w8wgc&client_name=ligues_et_districts&template"></span>

                <iframe id="iframe-sso" src="" style="width:0;height:0;border:0; border:none;"></iframe>
                <script>
                    document.cookie = 'sso_page_callback' + '=; Max-Age=0';
                    document.cookie = "sso_page_callback=" + window.location.href + "; path=/; expires=" + 38400;
                </script>
                <div id="logo" class="clearfix">

                    <a href="https://lbfc.fff.fr/" class="custom-logo-link" rel="home"><img width="250" height="130" src="https://lbfc.fff.fr/wp-content/uploads/sites/11/2017/06/4000_Bourgogne-Franche-Comte.jpg" class="custom-logo" alt="LIGUE BOURGOGNE-FRANCHE-COMTÉ" decoding="async" srcset="https://lbfc.fff.fr/wp-content/uploads/sites/11/2017/06/4000_Bourgogne-Franche-Comte.jpg 250w, https://lbfc.fff.fr/wp-content/uploads/sites/11/2017/06/4000_Bourgogne-Franche-Comte-90x47.jpg 90w, https://lbfc.fff.fr/wp-content/uploads/sites/11/2017/06/4000_Bourgogne-Franche-Comte-75x39.jpg 75w, https://lbfc.fff.fr/wp-content/uploads/sites/11/2017/06/4000_Bourgogne-Franche-Comte-150x78.jpg 150w" sizes="(max-width: 250px) 100vw, 250px" /></a>                    <div class="title_header">
                        
		<p class="site-title"><a href="https://lbfc.fff.fr/" rel="home">LIGUE BOURGOGNE-FRANCHE-COMTÉ</a></p>

	                                                    <h2 class="site-description">Ensemble, une passion partagée</h2>
                        
                    </div>
                </div>

                <div id="header-content" class="clearfix">
                    
	<div class="header-widgets clearfix">
		<aside id="search-2" class="header-widget widget_search"><h4 class="header-widget-title"><span></span></h4><span class="genericon-search toggle"></span>
<form role="search" method="get" class="search-form" action="https://lbfc.fff.fr/resultats-de-recherche">
		<label>
			<span class="screen-reader-text">Search for:</span>
			<input type="text" class="search-field" placeholder="Rechercher" value="" name="terme">
		</label>
		<button type="submit" class="search-submit">
		</button>
	</form>
</aside>	</div><!-- .header-widgets -->


	<div id="header-social-icons" class="social-icons-wrap clearfix">
		<ul id="social-icons-menu" class="social-icons-menu"><li id="menu-item-89" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-89"><a target="_blank" rel="noopener" href="https://twitter.com/Ligue_LBFC_Foot?lang=fr"><span class="screen-reader-text">Twitter</span></a></li>
<li id="menu-item-90" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-90"><a target="_blank" rel="noopener" href="https://www.youtube.com/channel/UCM6dUnwuUewvwj4wtrObypg"><span class="screen-reader-text">You tube</span></a></li>
<li id="menu-item-88" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-88"><a target="_blank" rel="noopener" href="https://www.facebook.com/LBFCFoot/"><span class="screen-reader-text">Facebook</span></a></li>
<li id="menu-item-94" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-94"><a target="_blank" rel="noopener" href="https://www.linkedin.com/company/ligue-bourgogne-franche-comt%C3%A9-de-football/"><span class="screen-reader-text">Linkedin</span></a></li>
<li id="menu-item-97" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-97"><a target="_blank" rel="noopener" href="https://www.instagram.com/lbfcf/"><span class="screen-reader-text">Instagram</span></a></li>
</ul>	</div>

                </div>

            </header>

        </div>
    </div>

    <div id="navi-wrap">
        <nav id="mainnav" class="container clearfix" role="navigation">
            <ul id="mainnav-menu" class="main-navigation-menu"><li id="nav-menu-item-43" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-43"><a href="/" class="menu-link main-menu-link">Accueil</a></li>
<li id="nav-menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-44"><a href="https://lbfc.fff.fr/la-ligue/" class="menu-link main-menu-link">Ligue</a>
<ul class="sub-menu menu-odd  menu-depth-1">
	<li id="nav-menu-item-919" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-919"></li>
	<li id="nav-menu-item-3659" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3659"></li>
	<li id="nav-menu-item-3740" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3740"></li>
	<li id="nav-menu-item-3773" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3773"></li>
	<li id="nav-menu-item-3749" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3749"></li>
	<li id="nav-menu-item-6805" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6805"></li>
	<li id="nav-menu-item-3771" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3771"></li>
	<li id="nav-menu-item-4829" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4829"></li>
	<li id="nav-menu-item-7921" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7921"></li>
	<li id="nav-menu-item-46779" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46779"></li>
	<li id="nav-menu-item-55610" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55610"></li>
</ul>
</li>
<li id="nav-menu-item-45" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-10 current_page_item menu-item-has-children menu-item-45"><a href="https://lbfc.fff.fr/competitions/" class="menu-link main-menu-link">Compétitions</a>
<ul class="sub-menu menu-odd  menu-depth-1">
	<li id="nav-menu-item-4388" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4388"></li>
	<li id="nav-menu-item-4387" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4387"></li>
	<li id="nav-menu-item-75189" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-75189"></li>
	<li id="nav-menu-item-10850" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10850"></li>
</ul>
</li>
<li id="nav-menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-47"><a href="https://lbfc.fff.fr/les-pratiques/" class="menu-link main-menu-link">Pratiques</a>
<ul class="sub-menu menu-odd  menu-depth-1">
	<li id="nav-menu-item-2065" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-2065"><a href="https://lbfc.fff.fr/category/futsal/" class="menu-link sub-menu-link">Futsal</a>
	<ul class="sub-menu menu-even sub-sub-menu menu-depth-2">
		<li id="nav-menu-item-13016" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13016"></li>
	</ul>
</li>
	<li id="nav-menu-item-4311" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4311"></li>
	<li id="nav-menu-item-69255" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-69255"></li>
	<li id="nav-menu-item-3566" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3566"></li>
	<li id="nav-menu-item-4412" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4412"></li>
</ul>
</li>
<li id="nav-menu-item-46" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-46"><a href="https://lbfc.fff.fr/formations/" class="menu-link main-menu-link">Formations</a>
<ul class="sub-menu menu-odd  menu-depth-1">
	<li id="nav-menu-item-56360" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-56360"><a href="https://lbfc.fff.fr/category/educateurs-modules-cff/" class="menu-link sub-menu-link">Educateurs</a>
	<ul class="sub-menu menu-even sub-sub-menu menu-depth-2">
		<li id="nav-menu-item-56368" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56368"></li>
		<li id="nav-menu-item-56373" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56373"></li>
		<li id="nav-menu-item-56400" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56400"></li>
		<li id="nav-menu-item-56390" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56390"></li>
		<li id="nav-menu-item-56384" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56384"></li>
	</ul>
</li>
	<li id="nav-menu-item-4354" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-4354"><a href="https://lbfc.fff.fr/category/arbitres/" class="menu-link sub-menu-link">Arbitres</a>
	<ul class="sub-menu menu-even sub-sub-menu menu-depth-2">
		<li id="nav-menu-item-4820" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4820"></li>
	</ul>
</li>
	<li id="nav-menu-item-5646" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-5646"><a href="https://lbfc.fff.fr/category/dirigeants/" class="menu-link sub-menu-link">Tout Terrain</a>
	<ul class="sub-menu menu-even sub-sub-menu menu-depth-2">
		<li id="nav-menu-item-7331" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7331"></li>
	</ul>
</li>
	<li id="nav-menu-item-4398" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4398"></li>
	<li id="nav-menu-item-7326" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7326"></li>
	<li id="nav-menu-item-35804" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-35804"></li>
</ul>
</li>
<li id="nav-menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-48"><a href="https://lbfc.fff.fr/technique/" class="menu-link main-menu-link">Technique</a>
<ul class="sub-menu menu-odd  menu-depth-1">
	<li id="nav-menu-item-3588" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-3588"><a href="https://lbfc.fff.fr/category/pole-espoirs/" class="menu-link sub-menu-link">Pôle Espoirs</a>
	<ul class="sub-menu menu-even sub-sub-menu menu-depth-2">
		<li id="nav-menu-item-4427" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4427"></li>
		<li id="nav-menu-item-75128" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-75128"></li>
		<li id="nav-menu-item-4435" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4435"></li>
	</ul>
</li>
	<li id="nav-menu-item-3579" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-3579"><a href="https://lbfc.fff.fr/category/foot-en-milieu-scolaire/" class="menu-link sub-menu-link">Foot en milieu scolaire</a>
	<ul class="sub-menu menu-even sub-sub-menu menu-depth-2">
		<li id="nav-menu-item-13017" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13017"></li>
	</ul>
</li>
	<li id="nav-menu-item-3591" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3591"></li>
</ul>
</li>
<li id="nav-menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-49"><a href="https://lbfc.fff.fr/arbitrage/" class="menu-link main-menu-link">Arbitrage</a>
<ul class="sub-menu menu-odd  menu-depth-1">
	<li id="nav-menu-item-3597" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3597"></li>
	<li id="nav-menu-item-3600" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3600"></li>
	<li id="nav-menu-item-56480" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56480"></li>
	<li id="nav-menu-item-60111" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-60111"></li>
	<li id="nav-menu-item-56446" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56446"></li>
	<li id="nav-menu-item-56451" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-56451"></li>
</ul>
</li>
<li id="nav-menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-50"><a href="https://lbfc.fff.fr/les-clubs/" class="menu-link main-menu-link">Clubs</a>
<ul class="sub-menu menu-odd  menu-depth-1">
	<li id="nav-menu-item-3604" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3604"></li>
	<li id="nav-menu-item-3608" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-3608"><a href="https://lbfc.fff.fr/category/pef/" class="menu-link sub-menu-link">PEF</a>
	<ul class="sub-menu menu-even sub-sub-menu menu-depth-2">
		<li id="nav-menu-item-5130" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5130"></li>
	</ul>
</li>
	<li id="nav-menu-item-3614" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3614"></li>
	<li id="nav-menu-item-9488" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9488"></li>
	<li id="nav-menu-item-11197" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11197"></li>
	<li id="nav-menu-item-46782" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46782"></li>
</ul>
</li>
<li id="nav-menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-51"><a href="https://lbfc.fff.fr/medias/" class="menu-link main-menu-link">Médias</a>
<ul class="sub-menu menu-odd  menu-depth-1">
	<li id="nav-menu-item-530" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-530"></li>
	<li id="nav-menu-item-561" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-561"></li>
</ul>
</li>
<li id="nav-menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52"><a href="https://lbfc.fff.fr/documents/" class="menu-link main-menu-link">Documents</a></li>
<li id="nav-menu-item-2162" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2162"></li>
</ul>        </nav>
    </div>

    
			<div id="custom-header" class="featured-image-header">
				<img width="300" height="200" src="https://lbfc.fff.fr/wp-content/uploads/sites/11/2018/04/19250649_1960423664202263_7248214751968827099_o-300x200.jpg" class="attachment-custom_header_image size-custom_header_image wp-post-image" alt="" decoding="async" fetchpriority="high" srcset="https://lbfc.fff.fr/wp-content/uploads/sites/11/2018/04/19250649_1960423664202263_7248214751968827099_o-300x200.jpg 300w, https://lbfc.fff.fr/wp-content/uploads/sites/11/2018/04/19250649_1960423664202263_7248214751968827099_o-279x186.jpg 279w, https://lbfc.fff.fr/wp-content/uploads/sites/11/2018/04/19250649_1960423664202263_7248214751968827099_o-768x512.jpg 768w, https://lbfc.fff.fr/wp-content/uploads/sites/11/2018/04/19250649_1960423664202263_7248214751968827099_o-498x332.jpg 498w, https://lbfc.fff.fr/wp-content/uploads/sites/11/2018/04/19250649_1960423664202263_7248214751968827099_o-420x280.jpg 420w, https://lbfc.fff.fr/wp-content/uploads/sites/11/2018/04/19250649_1960423664202263_7248214751968827099_o-435x290.jpg 435w, https://lbfc.fff.fr/wp-content/uploads/sites/11/2018/04/19250649_1960423664202263_7248214751968827099_o-210x140.jpg 210w, https://lbfc.fff.fr/wp-content/uploads/sites/11/2018/04/19250649_1960423664202263_7248214751968827099_o-90x60.jpg 90w, https://lbfc.fff.fr/wp-content/uploads/sites/11/2018/04/19250649_1960423664202263_7248214751968827099_o-75x50.jpg 75w, https://lbfc.fff.fr/wp-content/uploads/sites/11/2018/04/19250649_1960423664202263_7248214751968827099_o-150x100.jpg 150w, https://lbfc.fff.fr/wp-content/uploads/sites/11/2018/04/19250649_1960423664202263_7248214751968827099_o.jpg 2048w" sizes="(max-width: 300px) 100vw, 300px" />			</div>

		

<app-root-competitions cgno="51"></app-root-competitions>

<script src="https://sld-competition.prd-aws.fff.fr/ld_app_competitions.js"></script>
<div style="display: none">
    
	<section id="sidebar" class="secondary clearfix" role="complementary">

		<div class="widget-one-col"><aside id="widget_promotion-64" class="widget widget_widget_promotion clearfix"><h2 class="widgettitle"><span>Plateforme FFF "J'alerte"</span></h2><section id="promotion" class="widget-accueil-container widget-accueil-container-1 ">
            <div class="widget-accueil-element">
                            <a data-label="" href="https://jalerte.fff.fr/" target="_blank">
                                <div class="vignette-middle widget-accueil-image">
                        <img src="https://lbfc.fff.fr/wp-content/uploads/sites/11/2023/11/Bouton-Signaler-des-faits.png" />                    </div>
                    <div class="widget-accueil-description">
                                                <h2></h2>
                                            </div>

                </a>

            </div>

            </section></aside></div><div class="widget-one-col"><aside id="widget_promotion-61" class="widget widget_widget_promotion clearfix"><h2 class="widgettitle"><span>Guide des Formations 2024-2025</span></h2><section id="promotion" class="widget-accueil-container widget-accueil-container-1 ">
            <div class="widget-accueil-element">
                            <a data-label="" href="https://lbfc.fff.fr/simple/guide-des-formations-toutes-les-dates-2024-2025/" target="_blank">
                                <div class="vignette-middle widget-accueil-image">
                        <img src="https://lbfc.fff.fr/wp-content/uploads/sites/11/2024/07/Une-guide-des-formations.jpg" />                    </div>
                    <div class="widget-accueil-description">
                                                <h2></h2>
                                            </div>

                </a>

            </div>

            </section></aside></div><div class="widget-one-col"><aside id="widget_promotion-66" class="widget widget_widget_promotion clearfix"><h2 class="widgettitle"><span>Championnat R1 HERBELIN</span></h2><section id="promotion" class="widget-accueil-container widget-accueil-container-1 ">
            <div class="widget-accueil-element">
                            <a data-label="" href="https://lbfc.fff.fr/competitions/championnat-r1-herbelin/" target="_blank">
                                <div class="vignette-middle widget-accueil-image">
                        <img src="https://lbfc.fff.fr/wp-content/uploads/sites/11/2022/09/Logo-R1-HERBELIN-CARRE-SITE-WEB.png" />                    </div>
                    <div class="widget-accueil-description">
                                                <h2></h2>
                                            </div>

                </a>

            </div>

            </section></aside></div><div class="widget-one-col"><aside id="widget_partenaire-3" class="widget widget_widget_partenaire clearfix"><h2 class="widgettitle"><span>Nos partenaires</span></h2><section id="partenaires_67d81a82bdc36_63030" class="widget-accueil-container widget-accueil-container-1 ">
            <div class="widget-accueil-element">
                            <a data-label="Conseil Régional Bourgogne-Franche-Comté" href="https://www.bourgognefranchecomte.fr/" target="_blank">
                                <div class="vignette-middle widget-accueil-image">
                        <img src="https://lbfc.fff.fr/wp-content/uploads/sites/11/fff-partenaires/x870x489_logo_bfc_jpg_pagespeed_ic_KwQcGEjuFU_14.jpg" />                    </div>
                    <div class="widget-accueil-description">
                                                <h2></h2>
                                            </div>

                </a>

            </div>

            
            <div class="widget-accueil-element">
                            <a data-label="Crédit Agricole Franche-Comté " href="https://www.ca-franchecomte.fr/" target="_blank">
                                <div class="vignette-middle widget-accueil-image">
                        <img src="https://lbfc.fff.fr/wp-content/uploads/sites/11/fff-partenaires/2024-07-17_26.jpg" />                    </div>
                    <div class="widget-accueil-description">
                                                <h2></h2>
                                            </div>

                </a>

            </div>

            
            <div class="widget-accueil-element">
                            <a data-label="Nike" href="https://www.nike.com/fr/fr_fr/c/football" target="_blank">
                                <div class="vignette-middle widget-accueil-image">
                        <img src="https://lbfc.fff.fr/wp-content/uploads/sites/11/fff-partenaires/Nike_30.jpg" />                    </div>
                    <div class="widget-accueil-description">
                                                <h2></h2>
                                            </div>

                </a>

            </div>

            
            <div class="widget-accueil-element">
                            <a data-label="Orange" href="https://www.orange.fr/portail" target="_blank">
                                <div class="vignette-middle widget-accueil-image">
                        <img src="https://lbfc.fff.fr/wp-content/uploads/sites/11/fff-partenaires/Orange_-_site_web_43.jpg" />                    </div>
                    <div class="widget-accueil-description">
                                                <h2></h2>
                                            </div>

                </a>

            </div>

            
            <div class="widget-accueil-element">
                            <a data-label="Herbelin" href="https://herbelin.com/" target="_blank">
                                <div class="vignette-middle widget-accueil-image">
                        <img src="https://lbfc.fff.fr/wp-content/uploads/sites/11/fff-partenaires/HERBELIN_42.jpg" />                    </div>
                    <div class="widget-accueil-description">
                                                <h2></h2>
                                            </div>

                </a>

            </div>

            
            <div class="widget-accueil-element">
                            <a data-label="Volkswagen - BymyCar" href="https://www.bymycar.fr/concessions/volkswagen-vw-ahuy-bourgogne-bymycar-18" target="_blank">
                                <div class="vignette-middle widget-accueil-image">
                        <img src="https://lbfc.fff.fr/wp-content/uploads/sites/11/fff-partenaires/Logo_VW_-_BymyCar_41.jpg" />                    </div>
                    <div class="widget-accueil-description">
                                                <h2></h2>
                                            </div>

                </a>

            </div>

            
            <div class="widget-accueil-element">
                            <a data-label="Helmett Sport" href="https://www.helmett-sport.com/" target="_blank">
                                <div class="vignette-middle widget-accueil-image">
                        <img src="https://lbfc.fff.fr/wp-content/uploads/sites/11/fff-partenaires/Helmett-Logo-siteLBFC_50.jpg" />                    </div>
                    <div class="widget-accueil-description">
                                                <h2></h2>
                                            </div>

                </a>

            </div>

            
            <div class="widget-accueil-element">
                            <a data-label="Intersport" href="https://www.intersport-clubs.fr/" target="_blank">
                                <div class="vignette-middle widget-accueil-image">
                        <img src="https://lbfc.fff.fr/wp-content/uploads/sites/11/fff-partenaires/Intersport_-_site_web_33.png" />                    </div>
                    <div class="widget-accueil-description">
                                                <h2></h2>
                                            </div>

                </a>

            </div>

            </section>            <script type="text/javascript">

                jQuery(function($) {
                    try{

                        $("#partenaires_67d81a82bdc36_63030").slick({
                            arrows : true,
                            infinite: true,
                            autoplay : true
                        });

                    }
                    catch(e){

                    }
                });

            </script>
            </aside></div><div class="widget-one-col"><aside id="widget_partenaire-14" class="widget widget_widget_partenaire clearfix"><h2 class="widgettitle"><span>Nos Partenaires</span></h2><section id="partenaires_67d81a82be191_175489" class="widget-accueil-container widget-accueil-container-1 ">
            <div class="widget-accueil-element">
                            <a data-label="AVS Communication" href="http://www.avs-communication.com/" target="_blank">
                                <div class="vignette-middle widget-accueil-image">
                        <img src="https://lbfc.fff.fr/wp-content/uploads/sites/11/fff-partenaires/Logos_AVS_Bloc_noir_44.jpg" />                    </div>
                    <div class="widget-accueil-description">
                                                <h2></h2>
                                            </div>

                </a>

            </div>

            
            <div class="widget-accueil-element">
                            <a data-label="Veo" href="http://get.veo.co/lp/ligue-bourgogne-franche-comte-football" target="_blank">
                                <div class="vignette-middle widget-accueil-image">
                        <img src="https://lbfc.fff.fr/wp-content/uploads/sites/11/fff-partenaires/Veo_camera_46.png" />                    </div>
                    <div class="widget-accueil-description">
                                                <h2></h2>
                                            </div>

                </a>

            </div>

            
            <div class="widget-accueil-element">
                            <a data-label="Laser Game Evolution" href="https://dijon.lasergame-evolution.fr/" target="_blank">
                                <div class="vignette-middle widget-accueil-image">
                        <img src="https://lbfc.fff.fr/wp-content/uploads/sites/11/fff-partenaires/Logo_Laser_Game_Evolution_St-Apollinaire_NOIR_48.png" />                    </div>
                    <div class="widget-accueil-description">
                                                <h2></h2>
                                            </div>

                </a>

            </div>

            
            <div class="widget-accueil-element">
                            <a data-label="Seri Rosi" href="http://serirosi.fr/" target="_blank">
                                <div class="vignette-middle widget-accueil-image">
                        <img src="https://lbfc.fff.fr/wp-content/uploads/sites/11/fff-partenaires/SERI_ROSI_17.jpg" />                    </div>
                    <div class="widget-accueil-description">
                                                <h2></h2>
                                            </div>

                </a>

            </div>

            
            <div class="widget-accueil-element">
                            <a data-label="Initiatives Sports" href="https://vip.initiatives.fr/LFBFC" target="_blank">
                                <div class="vignette-middle widget-accueil-image">
                        <img src="https://lbfc.fff.fr/wp-content/uploads/sites/11/fff-partenaires/LOGO_INITIATIVES_BASELINE_SPORTIF_BICOLORE_BLEU_49.jpg" />                    </div>
                    <div class="widget-accueil-description">
                                                <h2></h2>
                                            </div>

                </a>

            </div>

            
            <div class="widget-accueil-element">
                            <a data-label="Kyriad Dijon Mirande" href="https://www.kyriad.com/fr" target="_blank">
                                <div class="vignette-middle widget-accueil-image">
                        <img src="https://lbfc.fff.fr/wp-content/uploads/sites/11/fff-partenaires/Logo_Kyriad_Dijon_Mirande_-_hotel.JPG_31.jpg" />                    </div>
                    <div class="widget-accueil-description">
                                                <h2></h2>
                                            </div>

                </a>

            </div>

            </section>            <script type="text/javascript">

                jQuery(function($) {
                    try{

                        $("#partenaires_67d81a82be191_175489").slick({
                            arrows : true,
                            infinite: true,
                            autoplay : true
                        });

                    }
                    catch(e){

                    }
                });

            </script>
            </aside></div>	</section>
</div>

<div  id ='hidden-sas'>
    <div id="sas_115016" class="sidebar-compet-desktop sidebar-compet"></div>
    <div id="sas_115018" class="sidebar-compet-mobile sidebar-compet"></div>
    <script type="application/javascript">
        sas.cmd.push(function() {
            sas.call("onecall", {
                siteId: 526525,
                pageId: 1640799,
                formats: [
                    { id: 115000 }
                    ,{ id: 115016 }
                    ,{ id: 115018 }
                ],
                target: ''
            });
        });
        function waitForElm(selector) {
            return new Promise(resolve => {
                if (document.querySelector(selector)) {
                    return resolve(document.querySelector(selector));
                }

                const observer = new MutationObserver(mutations => {
                    if (document.querySelector(selector)) {
                        resolve(document.querySelector(selector));
                        observer.disconnect();
                    }
                });

                observer.observe(document.body, {
                    childList: true,
                    subtree: true
                });
            });
        }
        waitForElm('.bloc-partner ').then((partner_section) => {
            let bs = document.querySelector("[id^='widget_partenaire-']");
            if (bs) {
                partner_section.append(bs);
            }
        });
        waitForElm('#tag-fff-section').then((blocFff) => {
            sas.cmd.push(function () {
                sas.render("115016");
            });
             let scd = document.getElementById('sas_115016');
                blocFff.append(scd);
        });

        waitForElm('#tag-mobile-section').then((mobileAdSection) => {
            sas.cmd.push(function () {
                sas.render("115018");  // Format : mobile 0x0
            });
            let scm = document.getElementById('sas_115018');
            mobileAdSection.prepend(scm);
        });
        document.getElementById('hidden-sas').style.display = 'none';
    </script>
</div>
<div id="footer-fond">

    <div id="footer-wrap">

        <footer id="footer" class="container clearfix" role="contentinfo">

            
                <nav id="footerliguenav" class="clearfix" role="navigation">
                    <ul id="footer1-nav-menu" class="menu"><li id="menu-item-1737" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1737"><a target="_blank" rel="noopener" href="https://www.fff.fr/14-le-football-amateur/index.html">Le Foot Amateur</a></li>
<li id="menu-item-932" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-932"><a target="_blank" rel="noopener" href="https://footclubs.fff.fr/">Footclubs</a></li>
<li id="menu-item-15545" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15545"><a target="_blank" rel="noopener" href="https://www.fff.fr/457-cgu.html">CGU</a></li>
<li id="menu-item-930" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-930"><a target="_blank" rel="noopener" href="https://www.fff.fr/455-mentions-legales.html">Mentions légales</a></li>
<li id="menu-item-21776" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21776"><a href="https://www.fff.fr/456-protection-des-donnees.html">Données personnelles</a></li>
</ul>                    <ul class="menu menu-compl">
                        <li>
                            <a href="javascript:Didomi.preferences.show()">Préférences Cookies</a>
                        </li>
                    </ul>
                </nav>

            
            <div class="footer-line-break"></div>

            
                <nav id="footerliguenav" class="clearfix" role="navigation">
                    <h4>La FFF</h4>
                    <ul id="footer2-nav-menu" class="menu"><li id="menu-item-226" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-226"><a target="_blank" rel="noopener" href="https://sso.fff.fr/oauth/v2/login">Mon Espace FFF</a></li>
<li id="menu-item-227" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-227"><a target="_blank" rel="noopener" href="https://www.youtube.com/channel/UCHMC7Vn3h-zwt2RJ2YRSyIQ">E-learning FFF</a></li>
<li id="menu-item-228" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-228"><a target="_blank" rel="noopener" href="https://footalecole.fff.fr/fr/">Le football pour les enfants</a></li>
<li id="menu-item-229" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-229"><a href="https://www.fff.fr/14-le-football-amateur/index.html">Football amateur</a></li>
<li id="menu-item-230" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-230"><a target="_blank" rel="noopener" href="https://www.fff.fr/16-le-football-feminin/index.html">Football Féminin</a></li>
<li id="menu-item-231" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-231"><a target="_blank" rel="noopener" href="https://www.fff.fr/14-le-football-amateur/306-les-guides-du-football-amateur.html">Guides dédiés au football amateur</a></li>
<li id="menu-item-232" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-232"><a target="_blank" rel="noopener" href="https://www.fff.fr/14-le-football-amateur/419-le-programme-educatif-federal.html">Le Programme éducatif fédéral</a></li>
<li id="menu-item-233" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-233"><a target="_blank" rel="noopener" href="https://www.fff.fr/14-le-football-amateur/254-le-fonds-d-aide-au-football-amateur.html">FAFA</a></li>
<li id="menu-item-234" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-234"><a target="_blank" rel="noopener" href="https://www.fff.fr/14-le-football-amateur/531-les-labels.html">Labels Fédéraux</a></li>
<li id="menu-item-235" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-235"><a target="_blank" rel="noopener" href="https://www.fff.fr/14-le-football-amateur/256-fiches-pratiques-du-football-amateur.html">Fiches pratiques</a></li>
<li id="menu-item-236" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-236"><a target="_blank" rel="noopener" href="https://www.dailymotion.com/fff-tv-foot-amateur#video=x5aib74">TV Foot amateur</a></li>
<li id="menu-item-2003" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2003"><a target="_blank" rel="noopener" href="https://cnf-centre-medical.fff.fr/">Santé</a></li>
<li id="menu-item-2004" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2004"><a href="https://www.fff.fr/score-en-direct/index.html">Scores en direct</a></li>
<li id="menu-item-48449" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-48449"><a href="https://ffftv.fff.fr/">FFFTV</a></li>
<li id="menu-item-48450" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-48450"><a href="https://www.fff.fr/409-application-joueurs-fff.html">Joueurs FFF</a></li>
<li id="menu-item-48451" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-48451"><a href="https://officiels.fff.fr">Portail des officiels</a></li>
<li id="menu-item-48452" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-48452"><a href="https://maformation.fff.fr/">Nos formations</a></li>
</ul>                </nav>

            
            <div class="footer-line-break"></div>

                            <nav id="footerliguenav" class="clearfix" role="navigation">
                    <h4>Liens utiles</h4>
                    <ul id="footer3-nav-menu" class="menu"><li id="menu-item-241" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-241"><a target="_blank" rel="noopener" href="https://footclubs.fff.fr/">Footclubs</a></li>
<li id="menu-item-4445" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4445"><a href="https://lbfc.fff.fr/coordonnees/">Coordonnées Ligue</a></li>
<li id="menu-item-7354" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7354"><a href="https://mail.google.com/">Messageries Clubs et Arbitres</a></li>
<li id="menu-item-69649" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-69649"><a href="https://lbfc.fff.fr/wp-content/uploads/sites/11/2024/02/Certificat-Qualiopi-Ligue-BFC-Football.pdf">Certificat QUALIOPI</a></li>
</ul>                </nav>

                    </footer>

    </div>

</div><!-- end #wrapper -->
</div>
<script type="text/javascript" id="script-js-extra">
/* <![CDATA[ */
var ajax_var = {"url":"https:\/\/lbfc.fff.fr\/wp-admin\/admin-ajax.php","nonce":"4fccff8db4"};
/* ]]> */
</script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/menu-competition/menu-competition.js?ver=1.6.0" id="script-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/plugins/video-list-manager-fff/js/jquery.colorbox-min.js?ver=1.0" id="tntcolorbox-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/plugins/video-list-manager-fff/js/custom.js?ver=1.0" id="tntscript1-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-includes/js/jquery/ui/menu.min.js?ver=1.13.3" id="jquery-ui-menu-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-includes/js/dist/dom-ready.min.js?ver=f77871ff7694fffea381" id="wp-dom-ready-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-includes/js/dist/hooks.min.js?ver=2810c76e705dd1a53b18" id="wp-hooks-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
/* <![CDATA[ */
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
/* ]]> */
</script>
<script type="text/javascript" id="wp-a11y-js-translations">
/* <![CDATA[ */
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2024-07-09 18:54:33+0000","generator":"GlotPress\/4.0.1","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n > 1;","lang":"fr"},"Notifications":["Notifications"]}},"comment":{"reference":"wp-includes\/js\/dist\/a11y.js"}} );
/* ]]> */
</script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-includes/js/dist/a11y.min.js?ver=d90eebea464f6c09bfd5" id="wp-a11y-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-includes/js/jquery/ui/autocomplete.min.js?ver=1.13.3" id="jquery-ui-autocomplete-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/frontOffice.js?ver=2.50" id="frontOffice-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/slick-master/slick/slick.js?ver=6.6.1" id="slick-js"></script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/publicite_fff.js?ver=6.6.1" id="publicite_fff-js"></script>
<script type="text/javascript" id="module-sondage-front-js-extra">
/* <![CDATA[ */
var ajax_object = {"ajax_url":"https:\/\/lbfc.fff.fr\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/sondage.js?ver=1.6.0" id="module-sondage-front-js"></script>
<script type="text/javascript" id="module-newsletter-front-js-extra">
/* <![CDATA[ */
var ajax_object = {"ajax_url":"https:\/\/lbfc.fff.fr\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="text/javascript" src="https://lbfc.fff.fr/wp-content/themes/fff/inc/frontOffice/js/newsletter.js?ver=1.6.0" id="module-newsletter-front-js"></script>
<script src="https://sld-competition.prd-aws.fff.fr/ld_app_search.js"></script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"d6e87da652","applicationID":"1121575076","transactionName":"bgEGZ0YHVxBYVBEKXVdLJVBAD1YNFkMADkJVBRBWGQVWDklSEQpGUAsKQA==","queueTime":0,"applicationTime":297,"atts":"QkYFEQ4dRB4=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>

