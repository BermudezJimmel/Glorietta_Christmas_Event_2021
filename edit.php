<?php
include('db.php');
$id = $_GET['id'];

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address  = $_POST['address'];
	$status = $_POST['status'];
	
	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "images/".basename($image);

	

	$update = "UPDATE user SET name='$name', email = '$email', phone = '$phone', address = '$address', status = '$status' WHERE id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
		header('location:admin.php');
	}else{
		echo "Data not update";
	}
}

?>