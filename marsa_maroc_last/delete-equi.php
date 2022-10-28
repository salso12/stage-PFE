<?php 
include "functions.php";
$id=$_GET['CODEEQUI'];
delete_student($id);
header("location:equipement.php");