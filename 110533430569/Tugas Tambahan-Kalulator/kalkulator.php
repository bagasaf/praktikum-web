<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<html>

<head><title>kalkulator sederhana</title></head>

<body bgcolor="lightskyblue">
<h1><center>Kalkulator Sederhana</center</h1>
<form method = "post">

<table>
<tr>

<td><input type = "number" name ="bil1" value="<?php
	echo isset($_POST['bil1']) ? $_POST['bil1'] : '';
	?>" placeholder ="input bilangan" required></td> 

<td><select name="operator" required>
		<option></option>
		<option>+</option>
		<option>-</option>
		<option>*</option>
		<option>/</option>
		</select></td>

<td><input type = "number" name = "bil2" value="<?php
	echo isset($_POST['bil2']) ? $_POST['bil2'] : '';
	?>" placeholder = "input bilangan" required></td>
		
	<?php
		if(isset($_POST['bil1']) or isset($_POST['bil2']) ){
			$bil1 = $_POST['bil1'];
			$bil2 = $_POST['bil2'];
			}
			else{
				$bil1 = "0";
				$bil2 = "0";
			}
			if(isset($_POST['operator'])){
			$operator =$_POST['operator'];
			}
			else{
				$operator ="";
			}

			switch($operator){
				case "+":
				$hasil = $_POST["bil1"] + $_POST["bil2"];
			break;

			case "-":
				$hasil = $_POST["bil1"] - $_POST["bil2"];
			break;

			case "*":
				$hasil = $_POST["bil1"] * $_POST["bil2"];
			break;

			case "/":
				$hasil = $_POST["bil1"] / $_POST["bil2"];
			break;
			}
		?>
	
<td><input type="submit" name="submit" value=" = "></td>

<td><input type="number" name="hasil" disabled value="<?php echo $hasil;?>"></td>

</tr>

</table>

</body>

</html>