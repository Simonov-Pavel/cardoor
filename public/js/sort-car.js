/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/sort-car.js ***!
  \**********************************/
$('.sort').on('click', function () {
  var sort = $(this).data('sort');
  var slug = $(this).data('slug');
  var query = location.href.split('#')[0].split('?');
  var base = query[0];
  var search = query[1];
  var res = "";

  if (search) {
    var params = search.split('&');

    for (var i = 0; i < params.length; i++) {
      var key = params[i].split('=');

      if (key[0] != sort) {
        res += params[i] + '&';
      }
    }
  }

  if (slug != '') {
    res += sort + '=' + slug;
  } else {
    res = res.slice(0, -1);
  }

  if (res.length > 0) {
    window.location.href = base + '?' + res;
  } else {
    window.location.href = base;
  }

  console.log($(this));
  return false;
});
/******/ })()
;