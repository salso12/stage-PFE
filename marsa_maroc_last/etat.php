<?php
$host =  "localhost";
$user = "root";
$password = "";
$db="itsup_marsa";

$con = mysqli_Connect($host,$user,$password,$db);
$id =$_GET['CODEPANNE'];
$status=$_GET['etat'];
$q="update reparer set etat=$status where CODEPANNE=$id";
mysqli_query($con,$q);
header('location:reparer2.php');

?>