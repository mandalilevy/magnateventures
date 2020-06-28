<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> LOGIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

         <link rel = "icon" href = "img/logo.png" type = "image/x-icon"> 
    </head>
    <body class="bg-light">
      <div class="container">


  </div>
        <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-5 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            
              <form class="form-signin" method="post" action="adp.php">
              <div class="form-group row">
                  <label for="inputEmail">ID NUMBER</label>
                  <input type="text" id="inputEmail" name="name" class="form-control">           
              </div>
              <div class="form-group row">
                  <label for="inputPassword">PASSWORD</label>
                  <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" >              
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit">Login</button>
              <a href="register" data-toggle="modal" data-target="#reg"name="book">Register as Admin</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<form  enctype="multipart/form-data" method="POST" action="">
<div class="modal fade" id="reg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content form-elegant">
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>ADMIN REGISTRATION</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      <div class="modal-body mx-4">
        <!--Body-->
        <div class="md-form mb-3">
           <label data-error="wrong" data-success="right" for="na">Your ID Number</label>
          <input type="text" id="na" name="id"class="form-control validate" required="">
        </div>
        <div class="md-form mb-3">
           <label data-error="wrong" data-success="right" for="cont">Password</label>
        <input type="password" id="cont" class="form-control validate" name="pass" required="">
        </div>
         
        <div class="text-center mb-3">
          <input type="submit" name="add" id="btnsub"  class="btn blue-gradient btn-block btn-rounded z-depth-1a btn-success" value="Register">
        </div>
   
      </div>

      
    </div>

  </div>
</div>
<h5 class="text-center text-success" id="rss"></h5>
    </form> 







<?php
if (isset($_POST['add'])) {
$con=mysqli_connect("127.0.0.1","root","","magnate");

$id=$_POST['id'];
$name=$_POST['pass'];
$query ="SELECT * FROM `admin` WHERE idn='".$_POST['id']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  echo "<script type='text/javascript'>alert('YOU ALREADY REGISTERED!!');</script>";
}
else{
$sql="INSERT INTO `admin`(`idn`, `pass`)VALUES('$id','$name')";
if(mysqli_query($con, $sql)){
header( "Location:home.php");
}
}
}
 ?>









</body>
   
</html>
