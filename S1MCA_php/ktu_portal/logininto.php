<?php
$conn = mysqli_connect('localhost', 'root', 'cetmca', 'student1');



$username=$_POST["name"];
$password=$_POST["pass"];



$sql = "select * from login where username= '$username' and password ='$password'";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);
$count = mysqli_num_rows($q);



if($count==1)
{
	echo "login success";
	
}
else
{
	echo "Login failed!!! invalid username or password";
}

?>

