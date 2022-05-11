<?php
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sistem Informasi Pegawai</title>
</head>
<body>
    <header>
        <h1>SISTEM INFORMASI PEGAWAI</h1>
        <h4> Data Pegawai</h4>
    </header>
    <nav>
        <a href="pegawai.php">Tambah Baru</a>
    </nav>
    <br>

    <table border = "1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telpon</th>
                <th>ID Departemen</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM pegawai";
            $query = mysqli_query($conn,$sql);

            while ($pegawai = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$pegawai['id_pgw']."</td>";
                echo "<td>".$pegawai['nama_pgw']."</td>";
                echo "<td>".$pegawai['alamat_pgw']."</td>";
                echo "<td>".$pegawai['telp_pgw']."</td>";
                echo "<td>".$pegawai['id_dpt']."</td>";
                echo "<td align = 'center'><a href='edit.php?id=".$pegawai['id_pgw']."'>Edit</a> | <a href='delete.php?id=".$pegawai['id_pgw']."'>Hapus</a></td>"; 
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total : <?php echo mysqli_num_rows($query)?></p>
</body>
</html>