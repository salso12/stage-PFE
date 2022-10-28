<?php 
include "functions-ordre.php";
$id=$_GET['CODEORDRE'];
delete_student($id);
header("location:ordre-de-reparation.php");