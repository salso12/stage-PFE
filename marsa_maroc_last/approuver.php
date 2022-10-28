<?php
$host =  "localhost";
$user = "root";
$password = "";
$db="itsup_marsa";

$con = mysqli_Connect($host,$user,$password,$db);
$id =$_GET['CODEORDRE'];
$status=$_GET['APPROUVER'];
$q="update ordre_reparation set APPROUVER=$status where CODEORDRE=$id";
mysqli_query($con,$q);
header('location:ordre-de-reparation2.php');

?>