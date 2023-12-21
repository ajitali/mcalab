<html>
	<head><head>
	<body>
		<form action="table_php.php" method="post">
		Roll NO : <input type ="Text" name="roll"/>
		Name : <input type ="Text" name="name"/>
		Mark : <input type ="Text" name="mark"/>
		<input type="submit" value="submit"/>
		</form>
	</body>
</html>
<?php

/*include('connect.php');	
$rno=$_POST["roll"];
$name=$_POST["name"];
$mark=$_POST["mark"];

$sq="insert into stud values($rno,'$name',$mark)";
$p=mysqli_query($conn, $sq);
if($p)
{
		echo "<script> 
		alert('successfully inserted one row');
		</script>";
	
	}

?>
