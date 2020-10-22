<?php
include("config.php");

if (!isset($_GET['id'])) {
    header('location: list-siswa.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id=$id ";
$query = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query)< 1) {
    die("Data tidak ditemukan");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Ubah Data Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="Eid" class="form-control" value="<?php echo $row['id'];?>">
        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="Enama" value="<?php echo $row['nama'];?>"/>
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="Ealamat" ><?php echo $row['alamat']; ?></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <select name="Ejenis_kelamin" value="<?php echo $row['jenis_kelamin'];?>"">
            <option type="radio" name="Ejenis_kelamin" value="laki-laki"> Laki-laki</option>
            <option type="radio" name="Ejenis_kelamin" value="perempuan"> Perempuan</option>
            </select>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="Eagama" value="<?php echo $row['agama'];?>">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="Esekolah_asal" value="<?php echo $row['sekolah_asal'];?>" />
        </p>
        <p>
            <input type="submit" value="UbahData" name="ubahdata" />
        </p>

        </fieldset>

    </form>

    </body>
</html>
