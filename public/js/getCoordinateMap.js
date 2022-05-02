/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************!*\
  !*** ./resources/js/getCoordinateMap.js ***!
  \******************************************/
$('#address').on('blur', function () {
  var address = $('#address').val(),
      myGeocoder = ymaps.geocode(address);
  res = myGeocoder.then(function (result) {
    var coordinates = result.geoObjects.get(0).geometry.getCoordinates();
    $('#latitude').val(coordinates[0]);
    $('#longitude').val(coordinates[1]);
    console.log(coordinates, address);
  }, function (err) {
    alert('Ошибка');
  });
});
/******/ })()
;