<?php 
    // Koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "db_tailor");
    // Cek koneksi
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>