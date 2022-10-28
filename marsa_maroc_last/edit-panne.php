<?php
include "functions-panne.php";
$CODEPANNE = $_GET['CODEPANNE'];
$student = find($CODEPANNE);

include "nav.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marsa Maroc</title>
  <link rel="stylesheet" href="create.css">
  <link rel="shortcut icon" href="images/logo.png"  />

</head>
<body>


  <div class="container2">  
    <form id="contact" action="update-panne.php" method="post">
    
    <input type="hidden" name="CODEPANNE" value="<?=$student['CODEPANNE'] ?>">
      <h3>Panne
      </h3>

      <h4>Remplissez ce formulaire.</h4>
 
      <fieldset>
        <input placeholder="DESIGNATION" name="DESIGNATION" type="text" value="<?= $student['DESIGNATION'] ?>" autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="FAMILLE" name="FAMILLE" type="text" value="<?= $student['FAMILLE'] ?>">
      </fieldset>
      <fieldset>
        <input placeholder="CAUSE" type="text" name="CAUSE" value="<?= $student['CAUSE'] ?>">
      </fieldset>
      <fieldset>
        <input placeholder="TYPE" type="text" name="TYPE" value="<?= $student['TYPE'] ?>">
      </fieldset>
      <fieldset>
        <input placeholder="SYMPTHOME" type="text" name="SYMPTHOME" value="<?= $student['SYMPTHOME'] ?>">
      </fieldset>
      <fieldset>
        <input placeholder="REMEDE" type="text" name="REMEDE" value="<?= $student['REMEDE'] ?>">
      </fieldset>

      <fieldset>
        <button type="submit" name="submit" id="contact-submit" >Edit</button>
      </fieldset>
    </form>
    
     
  </div>



</body>
</html>