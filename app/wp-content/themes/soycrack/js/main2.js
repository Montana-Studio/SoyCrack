!function(){function e(e,n){if(!e)return!1;for(var t=e.target||e.srcElement||e||!1;t&&t!=n;)t=t.parentNode||!1;return t!==!1}function n(){t()}function t(){r.addEventListener("click",o);for(var n=0,t=s.length;t>n;n++)s[n].addEventListener("click",o);a&&a.addEventListener("click",o),m&&m.addEventListener("click",u),document.addEventListener("mousedown",function(n){var t=n.target;f?t===i||t===m||e(t,i)||c():v&&(t===l||t===a||e(t,l)||c())})}function o(){v?classie.remove(d,"show-menu"):classie.add(d,"show-menu"),v=!v}function u(){f?classie.remove(d,"show-submenu"):classie.add(d,"show-submenu"),f=!f}function c(){f&&u(),v&&o()}var d=document.body,r=document.getElementById("open-button"),s=document.getElementsByClassName("btn-menu"),a=document.getElementById("close-button"),m=document.getElementById("close-button-sub"),l=document.querySelector('.menu-wrap[data-level="1"]'),i=document.querySelector('.menu-wrap[data-level="2"]'),v=!1,f=!1;n()}();