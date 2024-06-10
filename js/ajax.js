$(document).ready(function () {
  $('#keyword').on('keyup', function () {
    $.get('../ajax/product.php?keyword=' + $('#keyword').val(), function (data) {
      $('#container').html(data);
    });
  });
});
