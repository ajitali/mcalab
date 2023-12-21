<html>
<head></head>
<?php
include('connect.php');	
$select="select * from stud";
$q=mysqli_query($conn,$select);
if(mysqli_num_rows($q))
{
	echo"<table border=5px><tr>
	<th>Rollno</th><th>Name</th><th>Mark</th></tr>";
	while($row=mysqli_fetch_assoc($q))
	{
           	echo "<tr>"; 
		echo "<td>".$row["RollNo"]."</td>";
		echo "<td>".$row["Name"]."</td>";	
		echo "<td>".$row["Mark"]."</td>";
		echo "</tr>"; 	
	}
	echo"</table>";
}
?>
</html>		
