<?php
include("koneksi.php");
//proses untuk tambah data
if (isset($_POST['daftar'])) {

$id = $_POST['id_pegawai'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$id_dpt = $_POST['id_dpt'];

//query insert
$sql = "INSERT INTO pegawai(id_pgw, nama_pgw, alamat_pgw, telp_pgw, id_dpt) VALUE
('$id','$nama','$alamat','$telp','$id_dpt')";

$query = mysqli_query($conn,$sql);
//cek query
if( $query ) {
header('Location: dataPegawai.php?status=sukses');
} else {
header('Location: dataPegawai.php?status=gagal');
}
} else {
die("data belum disubmit");
}
?>