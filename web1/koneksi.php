<?php

$nama=$_POST['tnama'];
$nirm=$_POST['tnirm'];


include "konek.php";
$db->query("insert into biodata(Nama,nirm)values('$nama','$nirm')")or die("Tabel Gagal");
echo "Berhasil";
?>

<meta http-equiv="refresh" content="1;tampil.php">