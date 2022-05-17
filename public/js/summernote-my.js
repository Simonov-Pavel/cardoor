$(function () {
    $('#description, #conditions_rental').summernote({
      lang:'ru-RU',
      toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'italic', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          
          ['view', ['fullscreen','help']]
      ],
    });
});