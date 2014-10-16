Hello!

<?php

include 'jobsdb.php';
$count = confirmuser($_GET['name'], $_GET['pwd']);
if ($count>=1)
{
	session_start();
	$_SESSION['name'] =$_GET['name'];
	header("location:joblist.php");
}
else 
{
	echo "Sorry Wrong Password";
}
?>
