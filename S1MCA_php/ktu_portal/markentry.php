<html>
<head></head>
<body>

<form method="POST" action="">
<h1>INTERNAL MARK ENTRY</h1>

<div>
Choose your KTU ID/Username:<br>
<select id="sem" name="sem"><?php
include('connect.php');
$s="select Ktuid from ktureg";
$r=mysqli_query($conn,$s);
while($rs=mysqli_fetch_assoc($r))
{
 echo "<option value='".$rs['Ktuid']."'>".$rs['Ktuid']."</option>";
}
?>
</select>
</div>
<div>
Enter the subject:<br>
<select id="sub" name="sub" >
<option value="select">SELECT</option>
<option value="ads">ADS</option>
<option value="dfca">DFCA</option>
<option value="maths">MATHS</option>
<option value="python">PYTHON</option>
</select>
</div>
<div>
Series1 mark:<br>
<input type="text" name="s1">
</div>
<div>
Series2 mark:<br>
<input type="text" name="s2">
</div>
<div>
Attendence percent:<br>
<input type="text" name="att">
</div>
<div>
Assignment1 mark:<br>
<input type="text" name="a1">
</div>
<div>
Assignment2 mark:<br>
<input type="text" name="a2">
</div>
<selection>
<button type="submit">Submit</button>


</selection>
</form>
</body>
</html>

<?php
include('connect.php');

$ktuid=$_POST['sem'];
$sub=$_POST['sub'];
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$a1=$_POST['a1'];
$att=$_POST['att'];
$a2=$_POST['a2'];


$select="INSERT INTO `markupload`(`Ktuid`, `Subject`, `Series1`, `Series2`, `Attendence`, `Assignment1`, `Assignment2`) VALUES ('$ktuid','$sub',$s1,$s2,$att,$a1,$a2)";
$p=mysqli_query($conn,$select);

if($p)
{
	echo "<script>alert('registered successfully');</script>";
}


?>




