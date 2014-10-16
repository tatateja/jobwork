


<form action=submit.php>
name:<input type = text name = "name">
blog_post:<input type=text name="blog_post">
title:<input type= text name="title">
<input type=submit>
</form>

<?php
$db =  new mysqli('localhost','root','','test');

if($db->connect_errno)
{
	printf('connect failed: %s\n", $db->connect_error');
	exit();
}
$sql='SELECT name,blog_post,title from blog';
$result= $db->query($sql);

while ( $row= $result->fetch_assoc())
{
echo $row['name'] . "<br>";
echo $row['blog_post'] ."<br>";
echo $row['title'] ."<br>";
}
$result->free();

$name=$_GET['name'];
$title=$_GET['blog_post'];
$blog_post=$_GET['title'];



?>