/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./resources/js/map.js ***!
  \*****************************/
ymaps.ready(init);
var center = [latitude, longitude];

function init() {
  var myMap = new ymaps.Map("map", {
    center: center,
    zoom: 15
  });
  var placemark = new ymaps.Placemark(center, {
    balloonContent: "\n                    <div style=\"background:#ebebeb\">\n                        <picture>\n                            <source srcset=\"" + img_webp + "\" type=\"image/webp\">\n                            <img src=\"" + img + "\" alt=\"logo\">\n                        </picture>\n                    </div>\n                    <div>" + address + "</div>\n                    <div><a href=\"mailto:" + email + "\">" + email + "</a></div>\n                    <div><a href=\"tel:" + phone + "\">" + phone + "</a></div>\n                "
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