<?php 
include "functions.php";
extract($_POST);
$picture=uploader($_FILES['picture']);
add_student($DESIGNATION, $FAMILLE, $SOUSFAMILLE,$MARQUE,$TYPE,$DATE_MISE_EN_SERVICE,$picture,$dispon);
header("location:equipement.php");
?>