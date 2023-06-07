<?php 

$connect=mysqli_connect("localhost","root","","SCP")
      or die(mysql_error($connect));
if ($connect) 
{
	echo "Database connected!!";
}
else
{
	echo "Error";
}
?>

