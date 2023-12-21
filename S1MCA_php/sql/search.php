<html>
<head></head>
<body>
<form action="" method="post">
		Roll NO : <input type ="Text" name="roll"/>
		<input type="submit" value="submit"/>
</form>


<?php
include('connect.php');	
$n=$_POST['roll'];
$select="select * from stud where RollNo=$n";
$q=mysqli_query($conn,$select);

if(mysqli_num_rows($q))
{

echo"<form>";
while($row=mysqli_fetch_assoc($q))
{
echo"Rollno:<input disabled type=text value=".$row['RollNo'].">";
echo"Name:<input disabled type=text value=".$row['Name'].">";
echo"Mark:<input type=text value=".$row['Mark'].">";

}
}
echo"</form>";
?>
</body>
</html>
