<?php 
include "functions-panne.php";
extract($_POST);
// $picture=uploader($_FILES['picture']);
add_student($DESIGNATION, $FAMILLE, $CAUSE,$SYMPTHOME,$TYPE,$REMEDE);
header("location:panne.php");
?>