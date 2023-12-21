<html>
<head><title>regform</title></head>
<body style="background-color:lightblue">
<h1 style="color:red;font-size:30px;font-weight:bold;text-align:center">WELCOME TO FRESHERS WORLD!!</h1><br>
<table border="2" align="center">
<form action="result.php" method="POST">
<tr rowspan="12">
<th colspan="6">REGISTRATION FORM</th>
</tr>

<tr>
	<td>NAME</td><td><input type="text" name="fname"></td>
<tr>
	<td>AGE</td><td><select id="age" name="age" >

	<option value="select">select</option>
	<?php
	for($i=18;$i<=40;$i++)
	{
	echo"<option value=" . $i .">" . $i ."</option>";
	}
	?>
	</td>
</tr>

<tr>
	<td>PASSWORD</td>
	<td><input type="password" id="password"></td>
</tr>

<tr>
	<td>RE ENTER PASSWORD</td>
	<td><input type="password" id="re-password"></td>
</tr>

<tr>
	<td>EMAIL ID</td>
	<td><input type="text" id="email" name="email"></td>
</tr>

<tr>
	<td><input type="reset"></td>
	<td><input type="submit"></td>
</tr>
</form>
</table>
</html>

