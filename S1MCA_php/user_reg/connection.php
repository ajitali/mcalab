<?php
$conn=mysqli_connect('localhost','root','cetmca','student1');
if($conn)
    {
        echo "connection successful";
    }
else
    {
    echo "connection failed !";
    }
$name=$_POST['name'];
$no=$_POST['roll'];
$submark=$_POST['mark'];
$sq="insert into stud values($RollNo, '$Name', $Mark)";
$p=mysqli_query($conn,$sq);
if($p)
    {
        echo "<script>
        alert('successfully inserted');
        </script>";
    }
?>
