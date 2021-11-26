<?php

include('db.php');

if(isset($_POST['submit'])){
	// $id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];

	//image upload

	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
	//   old 
  	// $insert_data = "INSERT INTO user (id,name,email,phone,address,image) VALUES ('$id','$name','$email','$phone','$address','$image')";
	
	  //   new 
	$insert_data = "INSERT INTO user (name,email,phone,address,image) VALUES ('$name','$email','$phone','$address','$image')";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
  		header('location:index.php');
  	}else{
  		echo "Data not insert";
  	}

}

?>