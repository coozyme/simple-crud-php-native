<?php

include("config.php");
if (isset($_POST['ubahdata'])) {
    $id = $_POST['Eid'];
    $nama = $_POST['Enama'];
    $alamat = $_POST['Ealamat'];
    $jenis_kelamin = $_POST['Ejenis_kelamin'];
    $agama = $_POST['Eagama'];
    $sekolah_asal = $_POST['Esekolah_asal'];
    
    $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: list-siswa.php');
    } else {
        die("Gagal Edit Data");
    }
}
