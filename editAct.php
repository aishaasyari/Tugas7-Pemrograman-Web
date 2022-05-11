<?php
include('koneksi.php');
                //proses untuk update data
            if (isset($_POST['update'])) {
                $id     = $_POST['id_pgw'];
                $nama   = $_POST['nama'];
                $telp   = $_POST['telp'];
                $alamat = $_POST['alamat'];
                $idp    = $_POST['id_dpt'];

                //query insert
                $sql = "UPDATE pegawai SET id_dpt='$idp',nama_pgw='$nama',telp_pgw='$telp',alamat_pgw='$alamat' WHERE id_pgw=$id";

                $query = mysqli_query($conn,$sql);

                //cek query
                if( $query ) {
                    header('Location: dataPegawai.php');
                } else {
                die("Gagal Menyimpan Data");
                }
            } else {
                die("Tombol Simpan tidak di klik");
            }
            ?>