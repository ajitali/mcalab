<?php

	$conn = mysqli_connect('localhost', 'root', 'cetmca', 'student1');
	if (!$conn) {
		echo mysqli_connect_error();
	} else {
		echo "Connected";		
	}

	$sq = "INSERT INTO stud VALUES (11, 'joe', 56)";
	$p = mysqli_query($conn, $sq);
	if ($p) {
		echo "successfully inserted one row";
	}






















































































































?>
