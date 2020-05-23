<?php

function getPegawaiAll()
{
    include "../../config/koneksi.php";
    $query = "select * from pegawai order by id desc";
    $querySt = $conn_pdo->prepare($query);
    try {
      $querySt->execute();
    } catch (Exception $e) {
      die("Gagal melakukan query. ". $e->getMessage());
    }
    while ($rowQuery = $querySt->fetch(PDO::FETCH_ASSOC)) {
        $dataQuery[] = $rowQuery;
    }
    return $dataQuery;
}
