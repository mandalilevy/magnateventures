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
        <a style="color: white; font-family:Verdana" class="nav-link" href="admin.php" ><i class="fa fa-home" aria-hidden="true"></i></a>
      </li>
     
    </ul>
 
  </div>
</nav>

<div class="container">
  <h2 align="center">BOOKED BILLBOARDS</h2>
  <div class="table-responsive">
  <table class="table table-bordered table-responsive-sm">
<thead>
<tr>
<th scope="col"><strong>S.No</strong></th>
<th scope="col"><strong>BILLBOARD NAME</strong></th>
<th scope="col"><strong>LOCATION</strong></th>
<th scope="col"><strong>STREET</strong></th>
<th scope="col"><strong>CUSTOMER NAME</strong></th>
<th scope="col"><strong>CONTACTS</strong></th>
<th scope="col"><strong>START DATE</strong></th>
<th scope="col"><strong>END DATE</strong></th>
<th scope="col"><strong>REMOVE</strong></th>

</tr>
</thead>
<tbody>
<?php
$count=1;
$con=mysqli_connect("127.0.0.1","root","","magnate");
$query ="SELECT * FROM `book`";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td ><?php echo $count; ?></td>
<td><?php echo $row["bname"]; ?></td>
<td><?php echo $row["location"]; ?></td>
<td><?php echo $row["street"]; ?></td>
<td><?php echo $row["cname"]; ?></td>
<td><?php echo $row["contacts"]; ?></td>
<td><?php echo $row["sdate"]; ?></td>
<td><?php echo $row["edate"]; ?></td>
<td>
<a href="remove.php?id=<?php echo $row["bname"]; ?>"><i class="fa fa-times" style="color:red;" aria-hidden="true"></i></a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</div>




   
</body>
</html>