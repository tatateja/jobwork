<?php


function dbopen()
{
	$db=new mysqli('localhost','root','','jobs');
	return $db;
}

function addjob($title,$salary,$jobdescription,$location,$qualification,$employer,$website)

{
	$db = dbopen();
	$sql="insert into jobs (title,salary,jobdescription,location,qualification,employer,website) VALUES('$title','$salary','$jobdescription','$location','$qualification','$employer','$website')";
echo $sql;
	$result = mysqli_query($db,$sql);
}


function getjobs()
{
	$db = dbopen();
	$sql ='select * from jobs';
	return  mysqli_query($db,$sql);
}

function confirmuser($name,$password)
{
	$db = dbopen();
	$sql = "select * from user where name = '".$name."'  and password = '".$password."'";
	$result = mysqli_query($db,$sql);
	$count = mysqli_num_rows($result);
	return $count ;
}	
//$db = dbopen();
/*

addjob('jaaga"','manager','camp','bangalore','5L','BE','wwww.jaaga.com');


$results = getjobs();
while ($row = mysqli_fetch_assoc($results))
 {

	 echo $row['id'] . "<br>";
	 echo $row['title']. "<br>";
	 echo $row['salary']. "<br>";
	 echo $row['jobdescription']. "<br>";
	 echo $row['location']. "<br>";
	 echo $row['qualification']. "<br>";
	 echo $row['employer']. "<br>";
	 echo $row['website']. "<br>";
}


function getjob($id)
{
	$id=dbopen();
	$sql="select * from jobs where id='$id'";
}



*/
?>