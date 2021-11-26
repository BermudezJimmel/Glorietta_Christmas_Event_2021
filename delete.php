<?php

include('db.php');
$id = $_GET['id'];
$delete = "DELETE FROM user WHERE id = $id";
$run_data = mysqli_query($con,$delete);

if($run_data){
	header('location:admin.php');
}else{
	echo "Donot Delete";
}


?>