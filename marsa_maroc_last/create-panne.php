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

</head>
<body>


  <div class="container2">  
    <form id="contact" action="save-panne.php" method="post" enctype="multipart/form-data">
    
      <h3>Panne
      </h3>

      <h4>Remplissez ce formulaire .</h4>
      <fieldset>
        <?php
           $host =  "localhost";
           $user = "root";
           $password = "";
           $db="itsup_marsa";
           if(isset($_REQUEST['etatequi'])){
            $etat= $_REQUEST['etatequi'];
           
           }

           $con = mysqli_Connect($host,$user,$password,$db);
           $sql = "select * from equipement e where e.DISPONIBILITES='En panne'";
           $result = mysqli_query($con,$sql);
           $row = mysqli_fetch_assoc($result);
           echo"
           <input placeholder='DESIGNATION' name='DESIGNATION' type='text' value='".$row["DESIGNATION"]."'
           >
            </fieldset>
            <fieldset>
              <input placeholder='FAMILLE' name='FAMILLE' type='text' value='".$row["FAMILLE"]."' >
            </fieldset>
            <fieldset>
              <input placeholder='CAUSE' type='text' name='CAUSE'  >
            </fieldset>
            <fieldset>
              <input placeholder='TYPE' type='text' name='TYPE' value='".$row["TYPE"]."' >
            </fieldset>
            <fieldset>
              <input placeholder='SYMPTHOME' type='text' name='SYMPTHOME' >
            </fieldset>
            <fieldset>
              <input placeholder='REMEDE' type='text' name='REMEDE' >
            </fieldset>
      
            <fieldset>
              <button type='submit' name='submit' id='contact-submit' >Create Panne</button>
            </fieldset>
          </form>"
          
        ?>
       
     
  </div>



</body>
</html>