<?php
$conn = mysqli_connect('localhost', 'root', 'cetmca', 'student1');
	if (!$conn) {
		echo mysqli_connect_error();
	} else {
		echo "Connected";		
	}

?>
