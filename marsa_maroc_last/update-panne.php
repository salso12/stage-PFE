<?php
include "functions-panne.php";
extract($_POST);
edit_student($DESIGNATION, $FAMILLE, $CAUSE,$SYMPTHOME,$TYPE,$REMEDE,$CODEPANNE);
header("location:panne.php");