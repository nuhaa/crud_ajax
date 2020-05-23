// menampilkan form
function showForm(){
  document.getElementById("formAdd").style.display="block";
  $('#buttonCreate').html("[ &#45; ] Tutup Form Create");
  $('#buttonCreate').removeClass("btn-outline-primary");
  $('#buttonCreate').addClass("btn-outline-danger");
  $('#buttonCreate').attr("onclick", "hideForm()");
  return false;
}

// menyembunyikan form
function hideForm(){
  document.getElementById("formAdd").style.display="none";
  $('#buttonCreate').html("[ &#43; ] Tambah Data Pegawai");
  $('#buttonCreate').removeClass("btn-outline-danger");
  $('#buttonCreate').addClass("btn-outline-primary");
  $('#buttonCreate').attr("onclick", "showForm()");
}
