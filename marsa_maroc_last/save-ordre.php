<?php 
include "functions-ordre.php";
extract($_POST);
// $picture=uploader($_FILES['picture']);
add_student($MATRICULE_T, $MATRICULE_C, $OBJET,$DATE_ORDRE,$DEMANDEUR,$APPROBATEUR,$appv);
header("location:ordre-de-reparation.php");
