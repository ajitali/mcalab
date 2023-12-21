<html>
<head>

<?php
$name=$_POST['name'];
$age=$_POST['age'];
$sec=$_POST['sec'];
$ans=$_POST['ans'];
$lg=$_POST['lang'];
$home=$_POST['home'];
$office=$_POST['office'];
$mail=$_POST['email'];


?>
</head>

<body>
<center>
<table border="5" >
<tr>
<td>Name</td>
<td colspan="3"> <?php echo $name; ?></td>
</tr>

<tr>
<td>Age</td>
<td colspan="3"> <?php echo $age; ?></td>
</tr>

<tr>
<td>Security question</td>
<td colspan="3"> <?php echo $sec; ?></td>
</tr>

<tr>
<td>Security answer</td>
<td colspan="3"> <?php echo $ans; ?></td>
</tr>

<tr>
<td>Languages known</td>
<td colspan="3"> <?php 
foreach ($lg as $lang){
echo $lang. "<br>";
}
?></td>
</tr>

<tr>
<td>Home number</td>
<td colspan="3"> <?php echo $home; ?></td>
</tr>

<tr>
<td>Office number</td>
<td colspan="3"> <?php echo $office; ?></td>
</tr>

<tr>
<td>Email</td>
<td colspan="3"> <?php echo $mail; ?></td>
</tr>

</table>
</center>
</body>
</html>










