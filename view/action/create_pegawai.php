<?php
include '../../config/koneksi.php';
$token = $_POST['_token'];
if ($token == $_SESSION['_token']) {
    unset($_SESSION['_token']);
    echo json_encode(array('status'=>'success', 'keterangan'=>'ok', '_tokenNew'=>_token()));
}else{
    echo json_encode(array('status'=>'failed', 'keterangan'=>$token.'<br>'.$_SESSION['_token']));
}
// if ($_SESSION['_token'] == $token) {
//   $nama          = htmlspecialchars($_POST['nama']);
//   $nik           = htmlspecialchars($_POST['nik']);
//   $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
//   $alamat        = htmlspecialchars($_POST['alamat']);
//   if ($nama != null && $nik != null && $alamat != null) {
//     $insert = 'insert into pegawai (nama, nik, jenis_kelamin, alamat) values (?, ?, ?, ?)';
//     $insertSt = $conn_pdo->prepare($insert);
//     $insertSt = $insertSt->execute([$nama, $nik, $jenis_kelamin, $alamat]);
//     if ($insertSt) {
//       unset($_SESSION['_token']);
//       $result = array('status'=>'success', 'keterangan'=>'Berhasil Menyimpan Data', '_tokenNew'=>_token());
//     }else{
//       $result = array('status'=>'failed', 'keterangan'=>'Failed to Insert Database');
//     }
//   }else{
//     $result = array('status'=>'failed', 'keterangan'=>'Field Harus Diisi');
//   }
// }else{
//   $result = array('status'=>'failed', 'keterangan'=>'Token Tidak Sesuai');
// }
// echo json_encode($result);
