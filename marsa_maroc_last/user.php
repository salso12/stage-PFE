<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Marsa Maroc</title>
		<link href="home.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="shortcut icon"  href="images/logo.ico">

	</head>
    <?php include "nav2.php"; ?>
	<?php
      $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
      $select_profile->execute([$user_id]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>
	<body class="loggedin">
		
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?= $fetch_profile['name']; ?>!</p>
		</div>
</body>
</html>