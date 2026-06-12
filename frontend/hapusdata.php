<?php

    require "fungsi.php";

    $id = $_GET["id"];

    if (hapusData($id) > 0) {

        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href = 'mahasiswa.php';
              </script>";
    }

?>