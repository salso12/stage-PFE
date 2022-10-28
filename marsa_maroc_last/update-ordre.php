<?php
include "functions-ordre.php";
extract($_POST);
edit_student($MATRICULE_T, $MATRICULE_C, $OBJET,$DATE_ORDRE,$DEMANDEUR,$APPROBATEUR,$CODEORDRE);
header("location:ordre_de_reparation.php");