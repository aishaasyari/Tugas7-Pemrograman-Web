<?php
include("koneksi.php");

//cek id dari form data pegawai
if (!isset($_GET['id'])) {
    header('Location: dataPegawai.php');
}

$id = $_GET['id'];

//ambil data berdasarkan id
$sql = "SELECT * FROM pegawai WHERE id_pgw = $id";
$query = mysqli_query($conn,$sql);
$pegawai = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sistem Informasi Pegawai</title>
</head>
<body>
    <header>
        <h1>SISTEM INFORMASI PEGAWAI</h1>
    </header>
    <form action="editAct.php" method = "post">
        <fieldset>
        <table>
        <tr>
                <td><label for="idp">ID Pegawai  </label></td>
                <td><input type="text" name = "id_pgw" value="<?php echo $pegawai['id_pgw'] ?> "  ></td>
                </tr>
        <tr>
            <td><label for="id_dpt">ID Departemen </label></td>
            <td><select name="id_dpt" >
            <option ><?php echo $pegawai['id_dpt']?></option>
            <option>HR1</option>
            <option>AC2</option> 
            <option>IT3</option>
             <option>MK4</option>
            </select></td>
        </tr>
                <tr>
                <td><label for="nama">Nama  </label></td>
                <td><input type="text" name = "nama"  value="<?php echo $pegawai['nama_pgw'] ?>"></td>
                </tr>
                <tr>
                <td><label for="telp">No Telepon  </label></td>
                <td><input type="text" name = "telp"  value="<?php echo $pegawai['telp_pgw'] ?>"></td>
                <tr>
                <td><label for="alamat">Alamat  </label></td>
                <td><textarea name="alamat" cols="21" rows="10"><?php echo $pegawai['alamat_pgw']?></textarea></td>
                <tr>
                </tr>
            </table>
            <input type="submit" value="Simpan" name="update">
        </fieldset>
    </form>
</body>
</html>