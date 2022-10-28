<?php
include "functions.php";
$id = $_GET['CODEEQUI'];
$student = find($id);

include "nav.php";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link rel="stylesheet" href="details.css">
    <title><?= $student['DESIGNATION'] ?></title>
</head>

<body>

<div class="container">
	<div class="row" id="ads">

    <div class="col-md-4 m-auto">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-year"><?= $student['MARQUE'] ?></span>
                <img class="img-fluid" src="<?= $student['picture'] ?>" alt="Alternate Text" />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge"><?= $student['DESIGNATION'] ?></span>
                <span class="card-detail-badge"><?= $student['FAMILLE'] ?></span>
                <span class="card-detail-badge"><?= $student['SOUSFAMILLE'] ?></span>
            </div>
            <div class="card-body text-center">
              
                <a class="ad-btn" href="#">View</a>
            </div>
        </div>
    </div>
 
</div>

</body>

</html>