<?php 
include "functions.php";
// if (isset($_GET['rare'])) {
//   $student = rechecher($_GET['rare']);
// }else
// $student=read();
// include "nav.php";

// $mysqli = new mysqli('localhost','root','','itsup_marsa');
// $resultset1=$mysqli->query("select DISPONIBILITES from etatequi ");
// $resultset2=$mysqli->query("select MATRICULE_C from ordre_reparation ");
$host =  "localhost";
$user = "root";
$password = "";
$db="itsup_marsa";

$con = mysqli_Connect($host,$user,$password,$db);

if(isset( $_REQUEST['etatequi']))
{
  $desi =  $_REQUEST['desi'];
  $sql = "select * from etatequi et,equipement eq where et.CODEEQUI=eq.CODEEQUI and DESIGNATION='$desi'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
  $etat = $_REQUEST['etatequi'];
  $sql = "update etatequi set DISPONIBILITES='$etat' where CODEEQUI=".$row["CODEEQUI"]."";
  $result = mysqli_query($con,$sql);
  header("Location: create-panne.php ");
  exit();
  // echo"<script>alert('bien ajoutée')</script>";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marsa Maroc</title>

    <link rel="shortcut icon"  href="images/logo.ico">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  </head>
<body>
<?php include "nav.php"; ?>


  <div class="d-flex align-items-center ">
    <form class="d-flex input-group w-auto " action="equipement.php" method="get">
        <input
          type="text"
          class="form-control"
          placeholder="MARQUE"
          aria-label="Search"
          name="rare" id="rare"
        />
        <button
          class="btn btn-outline-dark"
          type="button"
          data-mdb-ripple-color="dark"
        >
          Search
        </button>
      </form>
      <a href="create-equi.php" class="btn btn-dark text-center px-2">Nouveau équipement</a>
  </div>

<br>
<br>
<br>

    <h3 class="text-center " >list des équipement </h3>
    <div class="container">0
    <table class="table">
        <thead>
            <tr>
                <th scope="col">CODEEQUI</th>
                <th scope="col">IMAGES</th>
                <th scope="col">DESIGNATION</th>
                <th scope="col">CODEETAT</th>
                <th scope="col">ETATEQUI</th>
                <th scope="col">ACTIONS</th>
            </tr>
        </thead>
        <tbody>

          <?php

          // $host =  "localhost";
          // $user = "root";
          // $password = "";
          // $db="itsup_marsa";

          // $con = mysqli_Connect($host,$user,$password,$db);
          $sql = "select * from etatequi et,equipement eq where et.CODEEQUI=eq.CODEEQUI";
          $result = mysqli_query($con,$sql);

          while($row = mysqli_fetch_assoc($result))
          {
            

            echo"<form method='post' ><tr>
            <th scope='row'>".$row["CODEEQUI"]."</th>
            <th><img src='".$row["picture"]."' width='150' class='img-thumbnail'></th>
           
            <td>".$row["DESIGNATION"]."</td>
            <td>".$row["CODEETAT"]."</td>
            <td>
            <select class='form-control custom' name='etatequi'>
            <option >Choisir</option> 
            <option >En panne</option> 
            <option >Etat normal</option> 
            <option >En cours de reparation</option> 
            
             </select>
<input type=submit value='envoyer' class='btn btn-sm btn-danger' >
             </td>
         
            <td>
            <a class='btn btn-sm btn-danger'  href='delete-equi.php?CODEEQUI=<?=".$row["CODEEQUI"]." ?>' onclick='return confirm('Delete?')'><i class='fa-solid fa-trash'></i></a>
            <a class='btn btn-sm btn-primary'  href='details-equi.php?CODEEQUI=<?= ".$row["CODEEQUI"]." ?>' ><i class='fas fa-info-circle'></i></a>
            <a title='edit' class='btn btn-sm btn-warning'  href='edit-equi.php?CODEEQUI=<?=  ".$row["CODEEQUI"]."?>' ><i class='fa-solid fa-pen-to-square'></i></a>
        </td>   </tr></form>h
            ";
          }
        
          ?>
                    
       
       	</div>
        
                    <!-- select from -->
      

        </tbody>
    </table>

    </div>

</body>
</html>