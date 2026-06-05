<?php

    require 'fungsi.php';

    $query ="SELECT * FROM mahasiswa";

    $mahasiswas = tampilData($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | Informatics</title>
</head>
<body>
    <h1>INFORMATIKA 2026</h1>
    <table border = "1" cellspacing = "0" cellpadding = "10px">
        <tr>
            <th><a href="index.php">Home</a></th>
            <th><a href="profile.php">Profile</a></th>
            <th><a href="contact.php">Contact</a></th>
            <th><a href="mahasiswa.php">Mahasiswa</a></th>
        </tr>
    </table>
    <br>
    <hr/>
    <h2>Data Mahasiswa</h2>

    <a href="tambahdata.php">
        <button>Tambah Data</button>
    </a>
    
    <table border="1" border ="1" cellpadding="10">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php

            $i = 1;        
            foreach ($mahasiswas as $row)
            {

        ?>
        <tr>
            <td align="center"><?php echo $i; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['nim']; ?></td>
            <td><?php echo $row['jurusan']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['no_hp']; ?></td>
            <td><img src="../assets/images/<?php echo $row['foto']; ?>" alt="<?php echo $row['foto']; ?>" width="60px"></td>
            <td>
                <a href="editdata.php?id=<?php echo $row['id']; ?>"><button>Edit</button></a> | <a href="deletedata.php?id=<?php echo $row['id']; ?>"><button>Hapus</button></a>
            </td>
        </tr>
        <?php
            $i++;
            }
        ?>
        <!-- </tr>
          <tr>
            <td align="center">1</td>
            <td>John Doe</td>
            <td><img src="assets/images/ryan ghosling.jpg" alt="John Doe" width="60px"></td>
            <td>13182420044</td>
            <td>Informatika</td>
            <td>gabriel@example.com</td>
            <td>081234567890</td>
        </tr>

        </tr>
          <tr>
            <td align="center">1</td>
            <td>John Doe</td>
            <td><img src="assets/images/ryan ghosling.jpg" alt="John Doe" width="60px"></td>
            <td>13182420044</td>
            <td>Informatika</td>
            <td>gabriel@example.com</td>
            <td>081234567890</td>
        </tr>
    
    </table>
    <br>

    <table border ="1" cellpadding="10">
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
        </tr>

        <tr>
            <td>2,1</td>
            <td align="center" rowspan="2" colspan="2">?</td>
            <td>2,4</td>
        </tr>

        <tr>
            <td>3,1</td>
            <td>3,4</td>
        </tr>
        
        <tr>
            <td>4,1</td>
            <td>4,2</td>
            <td>4,3</td>
            <td>4,4</td>
        </tr>
    </table>
</body>
</html>