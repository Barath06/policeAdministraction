<?php
$con=mysqli_connect('localhost','root','','police');
if(!$con)
{
	die('please check your connection'.mysql_error($con));
}
?>