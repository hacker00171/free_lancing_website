<?php
$user='root';
$pass='';
$db='project';
$db=new mysqli('localhost',$user,$pass,$db) or die ("unable to connect");

session_start();
$a=$_POST["proname"];
$z=$_POST["proj_id"];
$b=$_POST["description"];
$c=$_POST["proj_price"];
$d=$_POST["timesubmit"];
$f=$_SESSION['email_id'];
$e=$_SESSION['name'];


$sql = "INSERT INTO projects(project_name, project_id, project_description, proj_price, timesubmit, employer_name, employer_email)
VALUES('$a', '$z', '$b', '$c', '$d', '$e', '$f')";

if ($db->query($sql)===TRUE)
{header('location: thanks2.html');}
else
{echo "Error connecting to DATABASE".$db->error;}
$db->close();
?>
