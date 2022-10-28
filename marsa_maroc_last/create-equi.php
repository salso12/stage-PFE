<?php


include "nav.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marsa Maroc</title>
  <link rel="shortcut icon"  href="images/logo.ico">

  <link rel="stylesheet" href="create.css">
  <link rel="shortcut icon" href="images/logo.png"  />

</head>
<body>


  
<div class="container2">  
    <form id="contact" action="save-equi.php" method="post" enctype="multipart/form-data">
    
      <h3>Equipement
      </h3>

      <h4>Remplissez ce formulaire.</h4>
 
      <fieldset>
        <input placeholder="Designation" name="DESIGNATION" type="text" autofocus >
      </fieldset>
      <fieldset>
        <input placeholder="Famille" name="FAMILLE" type="text" >
      </fieldset>
      <fieldset>
        <input placeholder="Sous Famille" type="text" name="SOUSFAMILLE" >
      </fieldset>
      <fieldset>
        <input placeholder="Marque" type="text" name="MARQUE" >
      </fieldset>
      <fieldset>
        <input placeholder="Type" type="text" name="TYPE" >
      </fieldset>
      <fieldset>
        <input placeholder="Date Mise En Service" type="date" name="DATE_MISE_EN_SERVICE" >
      </fieldset>
      <fieldset>
        <input placeholder="Picture" type="file" name="picture" >
      </fieldset>
      <fieldset>
        <input placeholder="Picture" type='hidden' type="text" name="dispon" value="Etat normal">
      </fieldset>
      <fieldset>
        <button type="submit" name="submit" id="contact-submit" >Submit Now</button>
      </fieldset>

    </form>
    
     
  </div>




</body>
</html>