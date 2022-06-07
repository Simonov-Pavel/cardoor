/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/sort-car.js ***!
  \**********************************/
$('#startRent').inputmask('dd.mm.yyyy', {
  'placeholder': 'dd.mm.yyyy'
});
$('#endRent').inputmask('dd.mm.yyyy', {
  'placeholder': 'dd.mm.yyyy'
});
$.datepicker.setDefaults($.datepicker.regional["ru"]);
$("#startRent").datepicker();
$("#endRent").datepicker();
$('#startRent').on('change', function () {
  var start = $('#startRent').val();
  var date = start.split('.');
  $("#endRent").datepicker("option", "minDate", new Date(date[2] + '.' + date[1] + '.' + (parseInt(date[0]) + 1)));
  localStorage.setItem('start', start);
});
$('#endRent').on('change', function () {
  var end = $('#endRent').val();
  var date = end.split('.');
  $("#startRent").datepicker("option", "maxDate", new Date(date[2] + '.' + date[1] + '.' + (parseInt(date[0]) - 1)));
  localStorage.setItem('end', end);
});
$("#startRent").val(localStorage.getItem('start'));
$("#endRent").val(localStorage.getItem('end'));
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

  return false;
});
/******/ })()
;