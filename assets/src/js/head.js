/////////////////////
//-  HEAD SCRIPTS

//-here's a comment
console.log("first head piece");

//import("./customscripts/test.js");

//import("./libraries/YTAPI.js");

///////////////////
//   YT API   //
///////////////////
// requries: libraries/YTAPI.js

function domReady(callback) {
  document.readyState === "interactive" || document.readyState === "complete"
    ? callback()
    : document.addEventListener("DOMContentLoaded", callback);
}

//////////////////
//   Masonry   //
////////////////
//@prepros-prepend customscripts/masonry.js

///////////////////
//   Slabtext   //
/////////////////
//@prepros-prepend customscripts/slabtext.js
