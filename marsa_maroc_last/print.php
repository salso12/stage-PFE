
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Marsa Maroc</title>
		<link href="home.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="shortcut icon"  href="images/logo.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="print.css"  media="print">


	</head>
    <body>
    
  
    <h3 class="text-center " >list des pannes </h3>
  <div class="container">
  <table class="table">
      <thead>
          <tr>
              <th scope="col">CODEPANNE</th>
              <th scope="col">DESIGNATION</th>
              <th scope="col">FAMILLE</th>
              <th scope="col">CAUSE</th>
              <th scope="col">TYPE</th>
              <th scope="col">SYMPTHOME</th>
              <th scope="col">REMEDE</th>
              <th scope="col">ACTIONS</th>
          </tr>
      </thead>
      <?php
         $host =  "localhost";
         $user = "root";
         $password = "";
        $db="itsup_marsa";
          
          $conn =mysqli_Connect($host,$user,$password,$db);
          $sn=1;
          $user_qry="SELECT * from panne";
          $user_res= mysqli_query($conn,$user_qry);
          while($user_data=mysqli_fetch_assoc($user_res))
          {
          ?>
          <tr>
            <td><?php echo $sn; ?></td>
            <td><?php echo $user_data['CODEPANNE']; ?></td>
            <td><?php echo $user_data['DESIGNATION']; ?></td>
            <td><?php echo $user_data['FAMILLE']; ?></td>
            <td><?php echo $user_data['CAUSE']; ?></td>
            <td><?php echo $user_data['TYPE']; ?></td>
            <td><?php echo $user_data['SYMPTHOME']; ?></td>
            <td><?php echo $user_data['REMEDE']; ?></td>
          </tr>
          <?php
          $sn++;
          }
          ?>
        </tbody>
      
  </table>
  <div class="text-center">
  <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
</div>
</div>

</body>
</html>
