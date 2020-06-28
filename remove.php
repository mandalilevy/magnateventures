<?php
$con=mysqli_connect("127.0.0.1","root","","magnate");
//$query=("SELECT * FROM bilbod");

//$id=$row[0];
$name = $_GET['id'];
$query=("DELETE from book WHERE bname='$name'");
//$result=mysqli_query($con,$query);
if(mysqli_query($con, $query)){
 header("location:booked.php");
	
}
else
{
	echo "error";
}
?>
