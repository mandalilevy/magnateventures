<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MAGNATE VENTURES</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.css">
  <link rel = "icon" href = "img/logo.png" type = "image/x-icon"> 
</head>
<body class="bg-light">
<div class="container">
 <nav class="navbar navbar-expand-lg navbar-light bg-success">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav  mt-lg-0 mx-auto ">
      
      <li class="nav-item">
        <a style="color: white; font-family:Verdana" class="nav-link" href="main.php"><i class="fa fa-backward" aria-hidden="true"></i></a>
      </li>
    
    </ul>
 
  </div>
</nav>
</div>
<div class="container">

<?php
session_start();
if (isset($_SESSION['user'])) {

$con=mysqli_connect("127.0.0.1","root","","magnate");
$name = $_GET['id'];
$query = "SELECT * FROM bilbod WHERE name='$name'";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($query_run)) {
  ?>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-5 col-lg-8 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body" >
              <h5 class="card-title text-center" style="color: blue; font-weight: bolder;">BOOK A BILLBOARD</h5>

             
 <form action="save.php" method="post">
 <div class="form-row">
    <div class="form-group col-md-6">
      <label style="font-weight: bold;">BILLBOARD NAME</label>
      <input type="text" class="form-control" id="name" name="bname"  value="<?php echo $row['name'] ?>" readonly="readonly">
    </div>
    <div class="form-group col-md-6">
      <label style="font-weight: bold;">LOCATION</label>
      <input type="text" class="form-control" id="idn" name="loc" value="<?php echo $row['location'] ?>" placeholder="34828123" maxlength="10" readonly="readonly">
    </div>
    </div>
     <div class="form-row">
   
        <div class="form-group col-md-6">
      <label style="font-weight: bold;">STREET</label>
      <input type="text" class="form-control" id="name" name="strt"  value="<?php echo $row['street'] ?>" readonly="readonly">
    </div>


<?php

$con=mysqli_connect("127.0.0.1","root","","magnate");
$query = "SELECT * FROM price";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($query_run)) {
  ?>
    <div class="form-group col-md-6">
      <label style="font-weight: bold;">PRICE PER DAY</label>
      <input type="text" class="form-control" id="idn" name="price" value="<?php echo $row['price'] ?>"  readonly="readonly">
    </div>

   <?php  
}
?>




   </div>
    <?php  
}
?>
<?php
//session_start();
$con=mysqli_connect("127.0.0.1","root","","magnate");
//$name = $_GET['id'];
$query = "SELECT * FROM register WHERE email='".$_SESSION['user']."'";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($query_run)) {
  ?>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label style="font-weight: bold;">CUSTOMER NAME</label>
      <input type="text" class="form-control" id="name" name="cname"  value="<?php echo $row['name'] ?>" readonly="readonly">
    </div>
    <div class="form-group col-md-6">
      <label style="font-weight: bold;">CONTACTS</label>
      <input type="text" class="form-control" id="idn" name="cont" value="<?php echo $row['cont'] ?>" placeholder="34828123" maxlength="10"readonly="readonly" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
      <label for="name"style="font-weight: bold;">START DATE</label>
      <input type="date" class="form-control" id="name" name="sd" required="">
    </div>
    <div class="form-group col-md-6">
      <label for="idn"style="font-weight: bold;">END DATE</label>
      <input type="date" class="form-control" id="idn" name="ed" required="" >
    </div>
</div>


   <div class="form-group">
     <button type="submit" class="btn btn-success">Book</button>
  </div>
</form>
 <?php 
}
 ?>
 </div>
</div>
</div>
</div>
</div>
</div>



<?php 
}
 ?>


</div>


























</body>
</html>