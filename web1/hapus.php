<?php
include "konek.php";
$nirmx=$_GET['nirm'];
$db->query("delete from biodata where nirm='$nirmx'")or die("Gagal tabel");
?>
<meta http-equiv="refresh" content="0;tampil.php">
