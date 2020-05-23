$(document).ready(function() {
  $('#data').html('<center><img src="assets/gif/91.gif" alt=""></center>');
  $.ajax({
    url: './view/data/pegawai.php',
    success: function(data){
      $('#data').html(data);
    }
  });
});
