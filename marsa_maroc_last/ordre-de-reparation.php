<?php 
include "functions-ordre.php";


session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}
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
<?php include "nav.php"; ?>

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
      <a href="create-ordre.php" class="btn btn-dark text-center px-2">Nouveau ordre</a>
      <a href="filter.php" class="btn btn-sm btn-primary"> Filter</a> 
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

    <h3 class="text-center " >list des ordre </h3>
    <div class="container">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">CODEORDRE</th>
                <th scope="col">MATRICULE</th>
                <th scope="col">OBJET</th>
                <th scope="col">DATE_ORDRE</th>
                <th scope="col">APPROUVER</th>
                <th scope="col">ACTIONS</th>
            </tr>
        </thead>
        <tbody>

        <?php
$host =  "localhost";
$user = "root";
$password = "";
$db="itsup_marsa";

$con= mysqli_Connect($host,$user,$password,$db);
$query="select * from ordre_reparation ";
$result=mysqli_query ($con, $query);
while ($rows = mysqli_fetch_array ($result)){
?>

 <tr>
<th><?php echo $rows['CODEORDRE']; ?></th>
<td><?php echo $rows['MATRICULE_T']; ?></td>

<td><?php echo $rows['OBJET']; ?></td>
<td><?php echo $rows['DATE_ORDRE']; ?></td>

<td>
<?php 
                    
                
if($rows['APPROUVER']==1){
  echo '<p >APPROUVER</p>';
}
else {
echo '<p>NON APPROUVER</p>';

 
}
                    ?>
                    </td>
                    <td>
                        <a class="btn btn-sm btn-danger"  href="delete-ordre.php?CODEORDRE=<?= $p['CODEORDRE'] ?>" onclick="return confirm('Delete?')"><i class="fa-solid fa-trash"></i></a>
                        <!-- <a class="btn btn-sm btn-primary"  href="details-ordre.php?CODEORDRE=<?= $p['CODEORDRE'] ?>" ><i class="fas fa-info-circle"></i></a> -->
                        <a title="edit" class="btn btn-sm btn-warning"  href="edit-ordre.php?CODEORDRE=<?= $p['CODEORDRE'] ?>" ><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                </tr>
            <?php } ?>
            

        </tbody>
    </table>

    </div>

</body>
</html>