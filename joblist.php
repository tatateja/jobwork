<?php
include 'jobsdb.php';

$result =getjobs();
?>
<!DOCTYPE html>
<html>

<head>
	<title>JAAGA CAMP LIST</title>
</head>


<h1 style="text-align:center">JAAGA CAMP</h1>
<body>

<?php
session_start();
if (isset($_SESSION['name']))
{
	echo "Hello  ".$_SESSION['name'];
}
$result =getjobs();
while ($row = mysqli_fetch_assoc($result))
 {


?>
 
<table border='5'>
<tr>
<td> Job Title :</td><td><?php echo $row['title']; ?> </td> 
</tr>



<tr>
<td>Employer :</td><td><?php echo $row['employer']; ?></td>
</tr>

<tr>
<td>Job Location :</td><td><?php echo $row['location']; ?></td>
</tr>
</table>
<p>


<?php

}

?>



</body>




</html>



