/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./resources/js/map.js ***!
  \*****************************/
ymaps.ready(init);
var center = [56.144975, 101.598878];

function init() {
  var myMap = new ymaps.Map("map", {
    center: center,
    zoom: 16
  });
  var placemark = new ymaps.Placemark(center, {
    balloonContent: "\n                <div class='bollon'>\n                    <div>{{ $contact->address }}</div>\n                </div>\n                "
  }, {
    iconLayout: 'default#image',
    //iconImageHref: '',
    iconImageSize: [40, 40],
    iconImageSOffset: [-19, -44]
  });
  myMap.controls.remove('geolocationControl');
  myMap.controls.remove('searchControl');
  myMap.controls.remove('trafficControl');
  myMap.controls.remove('typeSelector');
  myMap.controls.remove('fullscreenControl');
  myMap.controls.remove('zoomControl');
  myMap.controls.remove('rulerControl');
  myMap.geoObjects.add(placemark);
}
/******/ })()
;