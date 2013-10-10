<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Checkbox</title> 
</head>

<body>

	<form action="<?php $_SERVER['PHP SELF'];?>" method="post">
	 Football Club
	 <input type="checkbox" name="club[]" value="Ajax Amsterdam"
	 <option value="Ajax Amsterdam"
		<?php
		if($_POST['club'] == 'Ajax Amsterdam'){
		echo 'selected="seleted"';
		}
	 ?>
	 />Ajax Amsterdam
	 
	 <input type="checkbox" name="club[]" value="AC Milan"
	 <option value="AC Milan"
		<?php
		if($_POST['club'] == 'AC Milan'){
		echo 'selected="seleted"';
		}
	 ?>
	 />AC Milan
	 
	 <input type="checkbox" name="club[]" value="FC Barcelona"
	 <option value="FC Barcelona"
		<?php
		if($_POST['club'] == 'FC Barcelona'){
		echo 'selected="seleted"';
		}
	 ?>
	 />FC Barcelona
	 
	 <input type="checkbox" name="club[]" value="FC Liverpool"
	 <option value="FC Liverpool"
		<?php
		if($_POST['club'] == 'FC Liverpool'){
		echo 'selected="seleted"';
		}
	 ?>
	 />FC Liverpool 
	 
	 <input type="checkbox" name="club[]" value="Persik Kediri"
	 <option value="Persik Kediri"
		<?php
		if($_POST['club'] == 'Persik Kediri'){
		echo 'selected="seleted"';
		}
	 ?>
	 />Persik Kediri <br />
	 
	 <input type="submit" value="OK" >
</form>

<?php 
// Ekstraksi nilai 
if (isset($_POST['club'])) { 
  foreach ($_POST['club'] as $key => $val) { 
    echo $key . ' -> ' .$val . '<br />'; 
  } 
} 
?> 
 
</body> 
 
</html> 