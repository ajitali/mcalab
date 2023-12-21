<?php
$conn = mysqli_connect('localhost', 'root', 'cetmca', 'student1');



$username=$_POST["name"];
$password=$_POST["pass"];



$sql="select * from login where username= '$username'";
$q=mysqli_query($conn,$sql);


if(mysqli_num_rows($q)){
echo"<table border = '1' width='75%'>
    <tr><td>Name</td><td>Age</td><td>Email</td><td>Password</td></tr>";
while($row = mysqli_fetch_array($q)){

if($row['pass']==$password)
{
	echo "login success";
	echo "<tr><td>".$row['Name']."<ttd><td>".$row['age']."</td><td>".$row['username']."</td><td>".$row['password']."</td><?tr>";
}
else
{
	echo "Login failed!!! invalid username or password";
}
}
echo"</table>";
}
?>

