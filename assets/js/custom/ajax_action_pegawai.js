

$("#simpan_pegawai").on('click', function(event) {
  event.preventDefault();
  /* Act on the event */
  $.ajax({
    url: './view/action/create_pegawai.php', // url action
    type: 'POST', // method post
    dataType: 'json', // type data result menggunakan json
    data: $("#formAdd").serialize(), // data form
  })
  .done(function(data) { // setelah selesai action
    if (data["status"] == "success") { // saat data success
      console.log(data["_tokenNew"]);
      $('#_token').attr("value", data["_tokenNew"]); // create new token
      document.getElementById("alert").style.display="block";
      $('#alert').addClass("alert alert-primary");// notif success
      $('#alert').removeClass("alert alert-danger");
      $('#alert').html(data["keterangan"]);// notif success
      // reload data table
      $('#data').load('#data');// notif load data
    }else { // saat data failed
      document.getElementById("alert").style.display="block";
      $('#alert').removeClass("alert alert-primary");
      $('#alert').addClass("alert alert-danger");// notif gagal
      $('#alert').html(data["keterangan"]);// notif gagal
    }
  })
  .fail(function() {
    console.log("error");
  })
});
