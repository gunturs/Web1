<style>
th{background:black;color:white;padding:10px;}
td{padding:5px;}
tr:nth-child(even){background:lightgreen;}
</style>
<?php
include "konek.php";
?>
<table width=50% align="center">
<tr>
	<th>No</th><th>NIRM</th><th>NAMA</th><th>AKSI</th>
</tr>

<?php
$no=0;
$tampil=$db->query("select*from biodata")or die("koneksi tabel gagal");
while($data=$tampil->fetch_assoc())
{ $no++;
?>
<tr> 
	<td><?php echo $no?> </td>  
        <td><?php echo $data['nirm']?></td> 
        <td><?php echo $data['Nama']?></td>  
        <td>
        <a href="hapus.php?nirm=<?php echo $data['nirm']?>">Delete</a>
	<a href="TampilEdit.php?nirm=<?php echo $data['nirm']?>&
	nama=<?php echo $data['Nama']?>&
	id=<?php echo $data['id']?>">Edit</a>
</td>
</tr>

<?php } ?>
<tr>
<td colspan="4"><a href="simpan.php"><input type="button" value="+Data"></a></td>
</tr>
</table>
