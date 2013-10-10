<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Preselecting</title>
</head>
<body>

	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	 Football Club
	 <select name="club">
		<option value="Ajax Amsterdam"
		<?php
		if($_POST['club'] == 'Ajax Amsterdam'){
		echo 'selected="seleted"';
	}
	?>
	/>Ajax Amsterdam
		<option value="AC Milan"
		<?php
		if($_POST['club'] == 'AC Milan'){
		echo 'selected="seleted"';
	}
	?>
	/>AC Milan
		<option value="Barcelona"
		<?php
		if($_POST['club'] == 'Barcelona'){
		echo 'selected="seleted"';
	}
	?>
	/>Barcelona
		<option value="Liverpool"
		<?php
		if($_POST['hobby'] == 'Liverpool'){
		echo 'selected="seleted"';
	}
	?>
	/>Liverpool
	
	 </select> <br />
	 
	 <input type="submit" value="OK" >
</form>

<?php
if(isset($_POST['club'])){
	echo $_POST['club'];
}
?>

</body>
</html>