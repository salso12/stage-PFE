<?php
include "functions.php";
$CODEEQUI = $_GET['CODEEQUI'];
$student = find($CODEEQUI);

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
    <form id="contact" action="update-equi.php" method="post" >
    
    <input type="hidden" name="CODEEQUI" value="<?=$student['CODEEQUI'] ?>">
      <h3>Equipement
      </h3>

      <h4>Remplissez ce formulaire.</h4>
 
      <fieldset>
        <input placeholder="DESIGNATION" name="DESIGNATION" type="text" value="<?= $student['DESIGNATION'] ?>" autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="FAMILLE" name="FAMILLE" type="text" value="<?= $student['FAMILLE'] ?>">
      </fieldset>
      <fieldset>
        <input placeholder="SOUS FAMILLE" type="text" name="SOUSFAMILLE" value="<?= $student['SOUSFAMILLE'] ?>">
      </fieldset>
      <fieldset>
        <input placeholder="MARQUE" type="text" name="MARQUE" value="<?= $student['MARQUE'] ?>">
      </fieldset>
      <fieldset>
        <input placeholder="TYPE" type="text" name="TYPE" value="<?= $student['TYPE'] ?>">
      </fieldset>
      <fieldset>
        <input placeholder="DATE MISE EN SERVICE" type="text" name="DATE_MISE_EN_SERVICE" value="<?= $student['DATE_MISE_EN_SERVICE'] ?>">
      </fieldset>
      <fieldset>
        <input placeholder="Picture" type="file" name="picture" >
      </fieldset>
      <fieldset>
        <input placeholder="Etat" type="text" name="dispon" value="<?= $student['DISPONIBILITES'] ?>">
      </fieldset>
      <fieldset>
        <button type="submit" name="submit" id="contact-submit" >Edit</button>
      </fieldset>
    </form>
    
     
  </div>



</body>
</html>