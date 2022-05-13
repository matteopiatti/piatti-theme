/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./src/js/watchlist.js ***!
  \*****************************/
function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function randomChoice(array) {
  return array[Math.floor(Math.random() * array.length)];
}

var spines = Object.values(document.getElementsByClassName("spine"));
var covers = Object.values(document.getElementsByClassName("cover"));
var tops = Object.values(document.getElementsByClassName("top"));
var availablePatterns = ["argyle", "tartan"]; // we could probably get these programatically

var availableColours = ["maroon", "darkgreen", "darkolivegreen", "brown", "saddlebrown", "sienna", "midnightblue"]; // assign a random height, pattern and colour to each book

spines.map(function (s, i) {
  var randomHeight = getRandomInt(220, 290);
  s.style.height = "".concat(randomHeight, "px");
  s.style.top = "".concat(280 - randomHeight, "px");
  var randomPattern = randomChoice(availablePatterns);
  s.style.backgroundImage = "var(--".concat(randomPattern, ")");
  var randomColor = randomChoice(availableColours);
  s.style.backgroundColor = randomColor;
  covers[i].style.height = "".concat(randomHeight, "px");
  covers[i].style.top = "".concat(280 - randomHeight, "px");
  tops[i].style.top = "".concat(280 - randomHeight, "px");
});
/******/ })()
;