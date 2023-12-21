<html>
<head></head>
<body>

<form method="POST" action="">
<h1>KTU Registration</h1>
<div>
Enter your name:<br>
<input type="text" name="name">
</div>
<div>
Enter your KTU ID/Username:<br>
<input type="text" name="uname">
</div>
<div>
Enter your Age:<br>
<input type="text" name="age">
</div>
<div>
Enter your Rollno:<br>
<input type="text" name="rno">
</div>
<div>
Password:<br>
<input type="password" name="pass">
</div>
<div>
Retype password:<br>
<input type="password" name="repass">
</div>
<selection>
<button type="submit">Register</button>


</selection>
</form>
</body>
</html>

<?php
include('connect.php');
$name=$_POST['name'];
$ktuid=$_POST['uname'];
$pass=$_POST['pass'];
$age=$_POST['age'];
$repass=$_POST['repass'];
$roll=$_POST['rno'];

if($pass==$repass)
 {
	$select="INSERT INTO `ktureg`(`Name`, `Ktuid`, `Age`, `Rollno`, `Password`) VALUES ('$name','$ktuid',$age,$roll,'$pass')";
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








