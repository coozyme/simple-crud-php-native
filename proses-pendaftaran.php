<?php

include("config.php");

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $sekolah_asal = $_POST['sekolah_asal'];

    $sql = "INSERT INTO calon_siswa (nama,alamat,agama,jenis_kelamin,sekolah_asal) VALUES ('$nama','$alamat','$agama','$jenis_kelamin','$sekolah_asal')";
    $query = mysqli_query($db, $sql);
    
    if ($query) {
        header('Location: list-siswa.php');
    }
}
