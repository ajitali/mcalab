<html>
<head><title>registration form</title></head>
<body style="background-color:lightblue">
<hi style="color:red;font-size:30px;font-weight:bold;text-align:center">WELCOME TO FRESHERS WORLD!!!</h1>
<table border="2" align="center">
<form method="POST" action="details.php">
<tr rowspan="10">
<th colspan="4">REGISTRATION FORM</th>
</tr>
<tr>
<td>NAME</td><td><input type="text"name="name" id="name"></td>
</tr>
<tr>
<td>AGE</td>
<td><select name="age" id="" >
<option value="select">SELECT</option>
<?php
for($i=20;$i<=40;$i++)
{
echo "<option value=". $i.">". $i."</option>";
}
?>
</select>
</td>
</tr>
<tr>
<td>PASSWORD</td>
<td><input type="password" id="password"></td>
</tr>
<tr>
<td>Re-enter password</td>
<td><input type="password"></td>
</tr>
<tr>
<td rowspan="5">Select your security question</td>
</tr>
<tr><td><input name="sec" value="Your pet name" type="radio">What is your pet name?</input></td></tr>
<tr><td><input name="sec" value="Your best friend" type="radio">Who is your best friend?</input></td></tr>
<tr><td><input name="sec" value="Your favourate color" type="radio">What is your favourate color?</input></td></tr>
<tr><td><input name="sec" value="Your favourate teacher" type="radio">Who is your favourate teacher?</input></td></tr>
<tr>
<td>Answer of security questions</td>
<td><input type="password" name="ans"></td>
</tr>
<tr>
<td>Email id</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td>Languages known</td>
<td>
<input type="checkbox" value="Malayalam" name="lang[]">Malayalam</input>
<input type="checkbox" value="English" name="lang[]">English</input>
<input type="checkbox" value="Hindi" name="lang[]">Hindi</input>
</td>
</tr>
<tr>
<td>Phone number</td>
<td>
<table border="1">
<tr>
<th>Home</th>
<th>Office</th>
</tr>
<tr>
<td><input type="text" name="home"></td>
<td><input type="text" name="office"></td>
</tr>
</table>
</td>
</tr>
<tr>
<td>Upload CV</td>
<td>
<button>Choose file</button>
No file chosen.
</td>
</tr>
<tr>
<td colspan="2"><center><input type="reset name="reset" value="reset">
<input type="submit" name="submit" value="submit"></center></td>
</tr>
</table>
</form>
</body>
</html>











