<html>
<head></head>
<body>
<center>
<form action="" method="post">
            <h2>REGISTER</h2>
        <table>
        <tr>
                <td colspan="2">
                    <input type="text" name="name" placeholder="Name" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="text" name="uname" Placeholder="KTU-ID" required>
                </td>
            </tr>
           
            <tr>
                <td colspan="2">
                    <input type="number" name="age" Placeholder="Age" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="text" name="rno" Placeholder="Roll No" required>
                </td>
            </tr>
 	<tr>
                <td colspan="2">
                    <input type="password" name="pass" Placeholder="Password" required>
                </td>
            </tr>
	<tr>
                <td colspan="2">
                    <input type="password" name="repass" Placeholder="Re-Type Password" required>
                </td>
            </tr>
            <tr>
                <td> 
                    <input type="submit" value="submit" name="sub" style="margin-left:15px;" >
            &nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;
                 <input type="reset" value="clear" style="margin-left:0px;">
                </td>
            </tr>
        </table>
</form>

</center>

</body>
</html>

<?php
include('connect.php');
$name=$_POST['name'];
$ktuid=$_POST['uname'];
$pass=$_POST['pass'];
$age=$_POST['age'];
$repass=$_POST['repass'];
$roll=$_POST['rno'];

if($pass==$repass)
 {
	$select="INSERT INTO `ktureg`(`Name`, `Ktuid`, `Age`, `Rollno`, `Password`) VALUES ('$name','$ktuid',$age,$roll,'$pass')";
	$p=mysqli_query($conn,$select);
	if($p)
	{
		echo "<script>alert('registered successfully');</script>";
	}
	else{
	
		echo"<script>alert('error');</script>";

	}

 }
else{
	echo"<script>alert('password doesnot match');</script>";


}
?>








