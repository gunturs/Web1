<?php
$id=$_POST['tid'];
$nama=$_POST['tnama'];
$nirm=$_POST['tnirm'];


include "konek.php";
$db->query("update biodata set Nama='$nama', nirm='$nirm' where id='$id'")or die("Tabel Gagal");
echo "Perubahan Berhasil Dilakukan";
?>

<meta http-equiv="refresh" content="1;tampil.php">