<html>
<head></head>
<body>

<form method="POST" action="">
<h1>Registration</h1>
<div>
Enter your name:<br>
<input type="text" name="name">
</div>
<div>
Enter your Username/Email:<br>
<input type="text" name="uname">
</div>
<div>
Enter your Age:<br>
<input type="text" name="age">
</div>
<div>
Password:<br>
<input type="password" name="pass">
</div>
<div>
Retype password:<br>
<input type="text" name="repass">
</div>
<selection>
<button type="submit">Register</button>
<button type="submit"><a href="login.php">home</a></button>

</selection>
</form>
</body>
</html>

<?php
include('connect.php');
$name=$_POST['name'];
$username=$_POST['uname'];
$pass=$_POST['pass'];
$age=$_POST['age'];
$repass=$_POST['repass'];

if($pass==$repass)
 {
	$select="INSERT INTO `login`(`Name`, `username`, `password`, `age`) VALUES ('$name','$username','$pass',$age)";
	$p=mysqli_query($conn,$select);
	if($p)
	{
		echo "<script>alert('registered successfully');</script>";
	}
	else{
	
		echo"<script>alert('error');</script>";

	}

 }
else{
	echo"<script>alert('password doesnot match');</script>";


}
?>



























