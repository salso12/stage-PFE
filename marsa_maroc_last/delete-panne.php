<?php 
include "functions-panne.php";
$id=$_GET['CODEPANNE'];
delete_student($id);
header("location:panne.php");