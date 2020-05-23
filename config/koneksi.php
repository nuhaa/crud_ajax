<?php
    session_start();
    // Definisikan variabel koneksi database
    $servername = "localhost";
    $database = "crud-ajax";
    $username = "root";
    $password = "asd";
    try {
        // $conn = mysqli_connect($servername, $username, $password, $database);
        $conn_pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (\PDOException $e) {
        echo "Koneksi Database Gagal ".$e;
    }

    function _token()
    {
        $token = bin2hex(openssl_random_pseudo_bytes(64));
        $_SESSION['_token'] = $token;
        return $token;
    }
