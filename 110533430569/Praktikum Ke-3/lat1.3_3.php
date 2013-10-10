<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<html>
<head>
	<title>Identifikasi Metode</title>
</head>

<body>

<form action="<?php $ SERVER ['PHP SELF'];?>"method="get">
Nama
<input type="text" name="nama" /> <br/>

<input type="submit" value="OK" />
</form>

<?php
if(isset($ REQUEST['nama'])){
	echo 'Metode,' . $ SERVER['REQUEST METHOD'];
}
?>

</body>
</html>
