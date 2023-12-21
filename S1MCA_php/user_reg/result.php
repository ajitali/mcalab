<html>
<head>
</head>
<body bgcolor="tomato">
<?php
$name=$_POST['fname'];
$age=$_POST['age'];
$email=$_POST['email'];
$password=$_POST['password'];
echo"<center>";


echo"<h1>welcome".$name."</h1><br>";
echo"<table border='2'>";
echo"<tr><td>my name is</td>"."<td>" .$name."</td></tr>";

echo"<tr><td>my age is</td>"."<td>" .$age."</td></tr>";

echo"<tr><td>my email is</td>"."<td>" .$email."</td></tr>";

echo"</table>";
echo"</center>";

$conn=mysqli_connect('localhost','root','cetmca','student1');
if($conn)
    {
        echo "connection successful";
    }
else
    {
    echo "connection failed !";
    }


$sq="insert into pdetails values($name, $age, $email,$password)";
$p=mysqli_query($conn,$sq);
if($p)
    {
        echo "<script>
        alert('successfully inserted');
        </script>";
    }
?>
</body>
</html>

