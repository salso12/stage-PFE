<?php

include 'config.php';

session_start();



if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
   $select->execute([$email, $pass]);
   $row = $select->fetch(PDO::FETCH_ASSOC);

   if($select->rowCount() > 0){

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_id'] = $row['id'];
         header('location:welcome.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_id'] = $row['id'];
         header('location:user.php');

      }elseif($row['user_type'] == 'soustrai'){

         $_SESSION['soustrai_id'] = $row['id'];
         header('location:soustrai.php');
      }else{
         echo "<script>alert('no user found!')</script>";
      }
      
   }else{
		echo "<script>alert('Email or Password is Wrong.')</script>";
   }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="shortcut icon"  href="images/logo.ico">

   <!-- font awesome cdn link  -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> -->

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/login.css">

</head>
<body>

   
<section class="container">

   <form action="" method="post" class="login-email" enctype="multipart/form-data">
      <h3 class="login-text" style="font-size: 2rem; font-weight: 800;">login</h3>
      			<div class="input-group">
      <input type="email" required placeholder="email" class="box" name="email">
      </div>
			<div class="input-group">
      <input type="password" required placeholder="Password" class="box" name="pass">
      </div>
			<div class="input-group">
         <button type="submit" name="submit" value="login now" class="btn">Login</button>
      </div>
      <p class="login-register-text">Don't have an account? <a href="register.php">Register Here </a>.</p>
   </form>

</section>
<!-- <div class="container">
		<form action="" method="POST" class="login-email" enctype="multipart/form-data">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email"  required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password"  required>
			</div>
			<div class="input-group">
				<button type="submit" name="submit" value="login now" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div> -->

</body>
</html>