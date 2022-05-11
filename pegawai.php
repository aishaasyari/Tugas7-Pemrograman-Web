<html>
<head>
<title>Sistem Informasi Pegawai</title>
</head>
<body>
<header>
<h1>SISTEM INFORMASI PEGAWAI </h1>
</header>
<form action="pegawaiAct.php" method = "post">
<table>
<tr>
    <td><label for="id_pegawai">ID

    Pegawai </label></td>

    <td><input type="text" name = "id_pegawai"></td>

</tr>
<tr>
    <td><label for="id_dpt">ID Departemen </label></td>
    <td><select name="id_dpt" >
    <option>HR1</option>
    <option>AC2</option>
    <option>IT3</option>
    <option>MK4</option>
    </select></td>
</tr>

    <tr>
    <td><label for="nama">Nama </label></td>
    <td><input type="text" name = "nama"></td>
</tr>

<tr>
<td><label for="telp">No

Telepon </label></td>

<td><input type="text" name = "telp"></td>

</tr>
<tr>
<td><label
for="alamat">Alamat </label></td>

<td><textarea name="alamat" cols="21"

rows="10"></textarea></td>
</tr>
</table>
<input type="submit" value = "Daftar" name =

"daftar">
</form>
</body>
</html>