<?php

include "nav.php";


// $mysqli = new mysqli('localhost','root','','stage_marsa_maroc');
// $resultset1=$mysqli->query("select MATRICULE_T from ordre_reparation ");
// $resultset2=$mysqli->query("select MATRICULE_C from ordre_reparation ");

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
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

  
</head>
<body>


  <div class="container2">  
    <form id="contact" action="save-ordre.php" method="post" enctype="multipart/form-data">
    
      <h3>Ordre de reparation
      </h3>

      <h4>Remplissez ce formulaire .</h4>

      <!-- <div class="form-group">
					    <select class="form-control custom" name="sem">
							<option>1th</option>
							<option>2nd</option>
					    </select>
					</div> -->

      <fieldset>
        <input placeholder="MATRICULE_T" name="MATRICULE_T" type="text" value="1001"  >
      </fieldset>
    
      <fieldset>
        <input placeholder="OBJET" type="text" name="OBJET" >
      </fieldset>
      <fieldset>
        <input placeholder="DATE_ORDRE" type="date" name="DATE_ORDRE" >
      </fieldset>
      
      <fieldset>
        <input placeholder="Picture" type='hidden' type="text" name="appv" value="0">
      </fieldset>

      <fieldset>
        <button type="submit" name="submit" id="contact-submit" >Create Ordre</button>
      </fieldset>
    </form>
    
     
  </div>



</body>
</html>