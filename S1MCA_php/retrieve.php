<html>
<head></head>
<?php

$conn = mysqli_connect('localhost', 'root', 'cetmca', 'student1');
	if (!$conn) {
		echo mysqli_connect_error();
	} else {
		echo "Connected";		
	}



$s="select * from stud";
$q=mysqli_query($conn,$s);
if(mysqli_num_rows($q))
{
echo "num";	
	/*echo"<table border=5px><tr>
	<th>Rollno</th><th>Name</th><th>Mark</th></tr>";
	while($row=mysqli_fetch_assoc($q))
	{
           	//echo "<tr>"; 
		//echo "<td>".$row["Roll No"]."</td>";
		//echo "<td>".$row["Name"]."</td>";	
		//echo "<td>".$row["Mark"]."</td>";
		//echo "</tr>"; 	
	}
	echo"</table>"
		
}*/
}
?>
</html>
