<?php include 'config/koneksi.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Crud Ajax - Codingae</title>
  </head>
  <body>
    <div class="container">
        <div class="breadcrumb">
            #Contoh Data Pegawai
        </div>
        <a href="#!" class="btn btn-outline-primary btn-block btn-sm" onclick="return showForm()" id="buttonCreate">[ &#43; ] Tambah Data Pegawai</a>
        <br>
        <?php include("view/form/form_create_pegawai.php"); ?>
        <table class="table table-border">
          <thead>
            <tr>
              <td>Nama</td>
              <td>NIK</td>
              <td>Jenis Kelamin</td>
              <td>Alamat</td>
              <td>Action</td>
            </tr>
          </thead>
          <tbody id="data"></tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom/action_button.js"></script>
    <script src="assets/js/custom/ajax_action_pegawai.js"></script>
    <script src="assets/js/custom/data_show.js"></script>
  </body>
</html>
