<?php 
include "functions-ordre.php";


include 'config.php';

session_start();

$user_id = $_SESSION['soustrai_id'];

// if(!isset($user_id)){
 //  header('location:login.php');
// }
// include "nav.php";


if (isset($_GET['rare'])) {
    $student = rechecher($_GET['rare']);
}else
$student=read();


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
<?php include "nav3.php"; ?>

 <!-- Navbar -->
 <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 "> -->
  <!-- Container wrapper -->
  <!-- <div class="container-fluid"> -->
    <!-- Toggle button -->
    <!-- <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button> -->

    <!-- Collapsible wrapper -->
    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
      <!-- Navbar brand -->
      <!-- <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="logo1.png"
          height="45"
          alt="MDB Logo"
          loading="lazy"
        />
      </a> -->
      <!-- Left links -->
      <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link" href="create.php">Add Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">list Students</a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li> -->
      <!-- </ul> -->
      <!-- Left links -->
    <!-- </div> -->
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
<!--     
<div class="d-flex align-items-center ">
    <form class="d-flex input-group w-auto " action="equipement.php" method="get">
        <input
          type="text"
          class="form-control"
          placeholder="Last Name"
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
     
  </div> -->
  <!-- Container wrapper -->
<!-- </nav> -->
<!-- Navbar -->


<!-- 
<div class="d-flex align-items-center mb-3 ml-5">
    <form class="d-flex input-group w-auto " action="index.php" method="get">
        <input
          type="text"
          class="form-control"
          placeholder="Last Name"
          aria-label="Search"
          name="rare" id="rare"
        />
        <button
          class="btn btn-outline-primary"
          type="button"
          data-mdb-ripple-color="dark"
        >
          Search
        </button>
      </form>
     
  </div> -->

  <div class="d-flex align-items-center ">
    <form class="d-flex input-group w-auto " action="ordre-de-reparation.php" method="get">
        <input
          type="text"
          class="form-control"
          placeholder="DEMANDEUR"
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
  </div>

<!-- <br>
<br>

  <div class="text-end pe-3 py-3 d-flex flex-row-reverse justify-content-evenly align-items-center">
        <form action="equipement.php" method="post">
            Rechercher par Marque : <input type="text" name="MARQUE" id="marque">
            <button>Rechercher</button>
        </form>
        <a href="create.php" class="btn btn-dark text-center px-2">Nouveau équipement</a>
    </div> -->
<br>
<br>
<br>
<?php
         $host =  "localhost";
           $user = "root";
       $password = "";
          $db="itsup_marsa";

           $con = mysqli_Connect($host,$user,$password,$db);
          $sql = "select * from reparer  ";
          $result = mysqli_query($con,$sql);
          $row = mysqli_fetch_array($result)
          ?>
    
    <div class="container">

    <table class="table">
        <thead>
            <tr>
            <th scope="col">CODEPANNE</th>
                <th scope="col">CODEEQUI</th>
                <th scope="col">CODEORDRE </th>
                <th scope="col">CODESOUSTRAI</th>
                <th scope="col">CODEREP</th>
                <th scope="col">DATE</th>
                <th scope="col">DUREE</th>
                <th scope="col">etat</th>
            </tr>
        </thead>
       

<tbody>
<?php
$host =  "localhost";
$user = "root";
$password = "";
$db="itsup_marsa";

$con = mysqli_Connect($host,$user,$password,$db);
$query="select * from reparer ";
$result=mysqli_query ($con, $query);
while ($rows = mysqli_fetch_array ($result)){
?>
 <tr>
<th><?php echo $rows['CODEPANNE']; ?></th>
<td><?php echo $rows['CODEEQUI']; ?></td>
<td><?php echo $rows ['CODEORDRE']; ?></td>
<td><?php echo $rows['CODESOUSTRAI']; ?></td>
<td><?php echo $rows['CODEREP']; ?></td>
<td><?php echo $rows['DATE']; ?></td>
<td><?php echo $rows['DUREE']; ?></td>
<td>
<?php 

if($rows['etat']==1){
  echo '<p><a href="etat.php?CODEPANNE='.$rows['CODEPANNE'].
   '&etat=0" class="btn btn-sm btn-primary">REPARER</a></p>';
}
else {
echo '<p><a href="etat.php?CODEPANNE=' .$rows['CODEPANNE'].
 '&etat=1" class="btn btn-sm btn-danger">NON REPARER</a></p>';

 
}
?>   
</td>
                </tr>
            <?php } ?>

        </tbody>
    </table>

    </div>

</body>
</html>