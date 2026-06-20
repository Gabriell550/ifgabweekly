<?php

    require 'fungsi.php';

    $id = $_GET["id"];

    $query = "SELECT * FROM mahasiswa WHERE id = $id";
    $row = tampilData($query)[0];
    var_dump($row);

    if(isset($_POST["submit"])) {
        
        if (ubahData($_POST, $id) > 0) {

        echo "<script>
                alert('Data berhasil diubah!');
                window.location.href = 'mahasiswa.php';
              </script>";
        } else {
        echo "<script>
                alert('Data gagal diubah!');
                window.location.href = 'mahasiswa.php';
              </script>";
    }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h2>Ubah Data Mahasiswa</h2>
    <form action="" method="post" enctype = "multipart/form-data">
        <table cellPadding="5px">
            <tr>
                <td><label for="nama">Nama :</label></td>
                <td><input type="text" name="nama" id="nama" required
                value="<?= $row["nama"] ?>"></td>
            </tr>
            <tr>
                <td><label for="nim">NIM :</label></td>
                <td><input type="number" name="nim" id="nim" required
                value="<?= $row["nim"] ?>"></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan :</label></td>
                <td><input type="text" name="jurusan" id="jurusan" required
                value="<?= $row["jurusan"] ?>"></td>
            </tr>
            <tr>
                <td><label for="email">Email :</label></td>
                <td><input type="email" name="email" id="email"
                value="<?= $row["email"] ?>"></td>
            </tr>
            <tr>
                <td><label for="no_hp">No HP :</label></td>
                <td><input type="number" name="no_hp" id="no_hp"
                value="<?= $row["no_hp"] ?>"></td>
            </tr>
            <tr>
                <td><label for="foto">Foto :</label></td>
                <td><input type="text" name="foto" id="foto"
                value="<?= $row["foto"] ?>"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="submit">Ubah</button>
                </td>
            </tr>
        </table>
        <br>
        <hr>
        
    </form>
</body>
</html>