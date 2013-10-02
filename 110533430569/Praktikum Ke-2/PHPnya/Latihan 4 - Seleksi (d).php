<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Seleksi Switch</title>
</head>
<body>

	<?php
	
	$i = 0;
	
	if ($i == 0) {
		echo "i equals 0";
	} else if($i == 1){
		echo "i equals 1";
	} elseif($i == 3){
		echo "i equals 2";
	}
	
// Equivalen, dengan dengan pendekatan switch
switch ($i) {
case 0:
	echo "i equals 0";
	break;
case 1:
	echo "i equals 1";
	break;
case 2:
	echo "i equals 2";
	break;
}
?>
</body>
</html>