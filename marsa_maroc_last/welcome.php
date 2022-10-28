<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <a href="logout.php">Logout</a>
</body>
</html> -->


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Marsa Maroc</title>
		<link href="home.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="shortcut icon"  href="images/logo.ico">

	</head>
    <?php include "nav.php"; ?>
	<?php
      $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
      $select_profile->execute([$admin_id]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>
	<body class="loggedin">
		
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?= $fetch_profile['name']; ?>!</p>
            <!-- <h2><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></h2> -->
		</div>

	</body>
</html>