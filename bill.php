 <?php
$con=mysqli_connect("127.0.0.1","root","","magnate");
$query ="SELECT * FROM `bilbod` WHERE name='".$_POST['name']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
 echo "<script type='text/javascript'>alert('OOOOOPS!!!!\nAN ERROR OCCURRED!!');</script>";
	
}
else{
$sql="INSERT INTO `bilbod`(`name`, `location`, `street`)VALUES('".$_POST['name']."','".$_POST['loc']."','".$_POST['street']."')";
if(mysqli_query($con, $sql)){
 //echo "<script type='text/javascript'>alert('BILLBOARD  REGISTERED!!');</script>";
	header("location:admin.php");
}
}
//}
 ?>
 <html>
 <head>
 	 <link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.css">
  <link rel = "icon" href = "img/logo.png" type = "image/x-icon"> 
</head>
 <div class="container jumbotron">
 	<h3 align="center">AN ERROR OCCURED</h3>
 	<div class="alert alert-danger" role="alert" style="font-size: 24px;">
  Billboard Already Registered!!!!!!
</div>
<div class="alert alert-info" role="alert">
 <a href="admin.php">Click Me to Go Back!</a> 
</div>
 </div>
 </html>