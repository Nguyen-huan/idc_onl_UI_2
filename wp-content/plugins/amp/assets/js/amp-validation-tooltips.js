!function(t){var e={};function n(o){if(e[o])return e[o].exports;var r=e[o]={i:o,l:!1,exports:{}};return t[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=t,n.c=e,n.d=function(t,e,o){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:o})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)n.d(o,r,function(e){return t[e]}.bind(null,r));return o},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=7)}([,function(t,e){t.exports=window.wp.domReady},,function(t,e){t.exports=window.jQuery},,,,function(t,e,n){"use strict";n.r(e);var o=n(3),r=n.n(o),i=n(1),u=n.n(i);n(8),u()((function(){r()(document).on("click",".tooltip-button",(function(){r()(this).pointer({content:r()(this).next(".tooltip").attr("data-content"),position:{edge:"left",align:"center"},pointerClass:"wp-pointer wp-pointer--tooltip"}).pointer("open")}))}))},function(t,e){t.exports=window.wp.pointer}]);