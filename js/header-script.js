
///////////////////
//   YT API   //
///////////////////
//@prepros-prepend libraries/YTAPI.js

function domReady(callback) {
    document.readyState === "interactive" || document.readyState === "complete" ? callback() : document.addEventListener("DOMContentLoaded", callback);
};

//////////////////
//   Masonry   //
////////////////
//@prepros-prepend customscripts/masonry.js

///////////////////
//   Slabtext   //
/////////////////
//@prepros-prepend customscripts/slabtext.js