<?php
$con=mysqli_connect("127.0.0.1","root","","magnate");
$query ="SELECT * FROM `admin` WHERE idn='".$_POST['name']."' AND pass='".$_POST['pass']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  $_SESSION['user']=$_POST['name'];
  header("Location:admin.php"); 
}
else{
?>
<html>
 <head>
 	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
 	 <link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.css">
  <link rel = "icon" href = "img/logo.png" type = "image/x-icon"> 
</head>
 <div class="container jumbotron">
 	<h3 align="center">AN ERROR OCCURED  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></h3>
 	<div class="alert alert-danger" role="alert" style="font-size: 24px;">
  USER DOES NOT EXIST!
</div>
<div class="alert alert-info" role="alert">
 <a href="home.php">Click Me to Go Back!</a> 
</div>
 </div>
 </html>



<?php
}
//}
 ?>