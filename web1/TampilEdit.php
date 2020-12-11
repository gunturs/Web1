<style>
form{width:500px;margin:auto;background:pink;border:1px solid orange;padding:20px;}
input{width:100%;padding:5px;margin-bottom:10px;}
</style>
<form action=ProsesEdit.php method="POST">
<input type=text name="tid" value="<?php echo $_GET['id']?>" hidden>
<input type=text name="tnama" value="<?php echo $_GET['nama']?>">
<input type=text name="tnirm" value="<?php echo $_GET['nirm']?>">
<input type=submit value="Edit Data">
</form>