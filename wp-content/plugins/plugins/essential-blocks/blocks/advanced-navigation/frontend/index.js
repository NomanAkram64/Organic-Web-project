!function(){function n(n,t){(null==t||t>n.length)&&(t=n.length);for(var e=0,r=new Array(t);e<t;e++)r[e]=n[e];return r}window.addEventListener("DOMContentLoaded",(function(){var t,e=function(t,e){var r="undefined"!=typeof Symbol&&t[Symbol.iterator]||t["@@iterator"];if(!r){if(Array.isArray(t)||(r=function(t,e){if(t){if("string"==typeof t)return n(t,e);var r=Object.prototype.toString.call(t).slice(8,-1);return"Object"===r&&t.constructor&&(r=t.constructor.name),"Map"===r||"Set"===r?Array.from(t):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?n(t,e):void 0}}(t))||e&&t&&"number"==typeof t.length){r&&(t=r);var o=0,a=function(){};return{s:a,n:function(){return o>=t.length?{done:!0}:{done:!1,value:t[o++]}},e:function(n){throw n},f:a}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var i,c=!0,u=!1;return{s:function(){r=r.call(t)},n:function(){var n=r.next();return c=n.done,n},e:function(n){u=!0,i=n},f:function(){try{c||null==r.return||r.return()}finally{if(u)throw i}}}}(document.querySelectorAll(".eb-advanced-navigation-wrapper"));try{var r=function(){var n=t.value,e=n.querySelectorAll(".wp-block-navigation-item__content");window.matchMedia("(max-width: 767px)").matches&&e.forEach((function(t){t.addEventListener("click",(function(e){if(e.preventDefault(),""!==t.hash){n.querySelector(".wp-block-navigation__responsive-container").classList.remove("is-menu-open","has-modal-open");var r=this.getAttribute("href");window.open(r,"_self")}}))}))};for(e.s();!(t=e.n()).done;)r()}catch(n){e.e(n)}finally{e.f()}}))}();