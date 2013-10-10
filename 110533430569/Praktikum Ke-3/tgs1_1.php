<html>
<head>
	<title>Tugas Rumah</title>
</head>

<style type="text/css">

*{font-family: BernhardMod BT, Arial;
margin: auto;
padding:0;

}

#container{
	margin:  25px auto;
	width: 20%;
	height: auto;
	padding: 10px;
	border: 1px solid blue
}

.textinput{
width: 100%;
height: 30px;
margin: 5px auto;
}

.btn{
	width: 100%;
	padding:5px;
	background-color: #3300ff;
	border: none;
	color:white;
	font-weight: 900;

}

.btn:hover{
	cursor: pointer;

}

a{
	font-size: 11px;
	color: blue;
}

.textinput{
	background-color: #fafafa;
	border: inset 1px #efefef;
}
</style>
<script>

function cekhuruf(huruf){
				cek = /^[A-Za-z]{1,}$/;
				return cek.test(huruf);
			}

function validateForm()
{
var user=document.forms["myForm"]["user"].value;
var pass=document.forms["myForm"]["pass"].value;

if ((user==null || user=="")||(pass==null|| pass==""))
  {
  alert("Username dan Password harus diisi");
   document.getElementById("user").focus();
  return false;
  }
  
  if(cekhuruf(user)=== false ||cekhuruf(pass)===false)
  {
  	alert("Username dan password harus berupa huruf");
  	 document.getElementById("user").focus();
  	return false;
  }


 
  return true;
}
</script>
<body>
<div id="container">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="myForm" onsubmit="return validateForm()">
		<input type="text" name="user" class="textinput" id="user" />
		<input type="password" name="pass" class="textinput" id="pass"/>
		<input type="submit" name="submit" value="Login" class="btn"/>
		<input type="checkbox" name="remember" class="checkbox"/>&nbsp;<small>Stay Sign In</small>
		<div id="bawah"><a href="" class="link">Sign Up</a> | <a href="" class="link">Forgot password</a></div>
	</form>
</div>

<?php 
if (isset($_POST['submit'])) {
	if ((isset($_POST['user'])&&$_POST['user']=='bagas')&&(isset($_POST['pass'])&&$_POST['pass']=='bagus')) {
		echo "<center>Selamat datang, ". $_POST['user']."</center>";
	}
	else{
		echo "<script>alert('Username dan/atau password salah')</script>";
	}
}
 ?>

</body>
</html>