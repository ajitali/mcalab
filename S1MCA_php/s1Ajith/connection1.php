<?php

	$conn = mysqli_connect('localhost', 'root', 'cetmca', 'student1');
	if (!$conn) {
		echo mysqli_connect_error();
	} else {
		echo "Connected";		
	}

	$sq = "INSERT INTO stud VALUES (12, 'joel', 86)";
	$p = mysqli_query($conn, $sq);
	if ($p) {
		echo "<script> 
		alert('successfully inserted one row');
		</script>";
	
	}






















































































































?>
