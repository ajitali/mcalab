
<?php

include('connect.php');	
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
