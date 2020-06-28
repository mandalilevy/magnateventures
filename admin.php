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
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.css">

  <link rel = "icon" href = "img/logo.png" type = "image/x-icon"> 
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-success">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav  mt-lg-0 mx-auto ">
      <li class="nav-item" >
        <a style="color: white; font-family:Verdana" class="nav-link" href="register.php" data-toggle="modal" data-target="#elegantModalForm"name="book">NEW BILLBOARD</a>
      </li>
      <li class="nav-item">
        <a style="color: white; font-family:Verdana" class="nav-link" href="booked.php">BOOKED BILLBOARDS</a>
      </li>
      <li class="nav-item">
        <a style="color: white; font-family:Verdana" class="nav-link" data-toggle="modal" data-target="#upp"name="book">BILLBOARD PRICE</a>
      </li>
     <li class="nav-item">
        <a style="color: white; font-family:Verdana;text-transform: uppercase;" class="nav-link" href="clients.php">Our Clients</a>
      </li>
       <li class="nav-item">
        <a style="color: white; font-family:Verdana;text-transform: uppercase;" class="nav-link" href="home.php">log out</a>
      </li>
    </ul>
 
  </div>
</nav>

<div class="container">
  <h2 align="center">OUR BILLBOARDS</h2>
  <div class="table-responsive">
  <table class="table table-bordered table-responsive-sm">
<thead>
<tr>
<th scope="col"><strong>S.No</strong></th>
<th scope="col"><strong>NAME</strong></th>
<th scope="col"><strong>LOCATION</strong></th>
<th scope="col"><strong>STREET</strong></th>
<th scope="col"><strong>ACTION</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$con=mysqli_connect("127.0.0.1","root","","magnate");
$query ="SELECT * FROM `bilbod`";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td ><?php echo $count; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["location"]; ?></td>
<td><?php echo $row["street"]; ?></td>

<td>
<a href="del.php?id=<?php echo $row["name"]; ?>"><i class="fa fa-trash" style="color:red;" aria-hidden="true"></i></a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</div>





 <form  enctype="multipart/form-data" method="POST" action="bill.php">
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content form-elegant">
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>ADD NEW BILLBOARD</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      <div class="modal-body mx-4">
        <!--Body-->
        <div class="md-form mb-3">
           <label data-error="wrong" data-success="right" for="na">Billboard Name</label>
          <input type="text" id="na" name="name"class="form-control validate" required="">
        </div>
        <div class="md-form mb-3">
           <label data-error="wrong" data-success="right" for="cont">Location</label>
        <input type="text" id="cont" class="form-control validate" name="loc" required="">
        </div>
          
       <div class="md-form mb-3">
           <label data-error="wrong" data-success="right" for="cont">Street/Road</label>
        <input type="text" id="cont" class="form-control validate" name="street" required="">
        </div>
         
        <div class="text-center mb-3">
          <input type="submit" name="add" id="btnsub"  class="btn blue-gradient btn-block btn-rounded z-depth-1a btn-success" value="Submit">
        </div>
   
      </div>

      
    </div>

  </div>
</div>
<h5 class="text-center text-success" id="rss"></h5>
    </form> 






 <form  enctype="multipart/form-data" method="POST" action="">
<div class="modal fade" id="upp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content form-elegant">
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>UPDATE BILLBOARD PRICE</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      <div class="modal-body mx-4">
        <!--Body-->
        <div class="md-form mb-3">
           <label data-error="wrong" data-success="right" for="na">Billboard Price</label>
          <input type="number" id="na" name="price"class="form-control validate" required="">
        </div>   
      <div class="text-center mb-3">
          <input type="submit" name="update" id="btnsub"  class="btn blue-gradient btn-block btn-rounded z-depth-1a btn-success" value="Update">
        </div>
   
      </div>

      
    </div>

  </div>
</div>
<h5 class="text-center text-success" id="rss"></h5>
    </form> 

<?php
if (isset($_POST['update'])) {
$con=mysqli_connect("127.0.0.1","root","","magnate");
$sql="UPDATE `price` SET `price`='".$_POST['price']."' ";
if(mysqli_query($con, $sql)){
echo "<script type='text/javascript'>alert('UPDATE SUCCESSFUL!!');</script>";}

}
 ?>


   
</body>
</html>