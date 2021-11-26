<?php
include('db.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Ayala Event</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="adminstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
			<div class="page-header">
				<h1>Ayala - Glorietta <small>LED Event System</small></h1>
			</div>
		
		<div class="buttons">
			<button disabled>Total Entries: <span>(
						<?php 
							include('db.php');

							foreach($con->query('SELECT COUNT(*) FROM user') as $row)
								{
							
								echo $row['COUNT(*)'];
								
								}
							
						
						?>
						)</span></button>
		   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalNew">
			   
		  	NEW
			  <span>(
						<?php 
							include('db.php');

							foreach($con->query('SELECT COUNT(*) FROM user where status="new"') as $row)
								{
							
								echo $row['COUNT(*)'];
								
								}
							
						
						?>
						)</span>

		   </button>
		   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalWorking">
			   WORKING
			   <span>(
						<?php 
							include('db.php');

							foreach($con->query('SELECT COUNT(*) FROM user where status="working"') as $row)
								{
							
								echo $row['COUNT(*)'];
								
								}
							
						
						?>
						)</span>
			</button>
		   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalDone">
			   DONE
			   <span>(
						<?php 
							include('db.php');

							foreach($con->query('SELECT COUNT(*) FROM user where status="done"') as $row)
								{
							
								echo $row['COUNT(*)'];
								
								}
							
						
						?>
						)</span>
			
			</button>
		</div> 
		

		<table class="table table-bordered table-striped table-hover" id="table-data">
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">E-mail</th>
				<th class="text-center">Phone</th>
				<th class="text-center">Name</th> 
				<th class="text-center">Message</th>
				<th class="text-center">Template</th>
				<th class="text-center">Picture</th>
				<th class="text-center">Edit</th>
				<th class="text-center">Status</th>
			</tr>

			<?php

        	$get_data = "SELECT * FROM user order by id DESC";
        	$run_data = mysqli_query($con,$get_data);

        	while($row = mysqli_fetch_array($run_data))
        	{
        		$id = $row['id'];
        		$name = $row['name'];
        		$email = $row['email'];
        		$phone = $row['phone'];
        		$address = $row['address'];
				$image = $row['image'];
				$Template = $row['Template'];
				$status = $row['status'];

        		echo "

        		<tr>
				<td class='text-center'>$id</td>
				
				<td class='text-center'>$email</td>
				<td class='text-center'>$phone</td>
				<td class='text-center'>$name</td>
				<td class='text-center'>$address</td>
				<td class='text-center'>$Template</td>
				<td class='text-center'><img src='images/$image' style='width:50px; height:50px;'></td>
				<td class='text-center'>
					<span>
					     <a href='#'>
					         <i class='fa fa-pencil' data-toggle='modal' data-target='#edit$id' style='' aria-hidden='true'></i>
					    </a>
					</span>
					
				</td>
			
				<td class='text-center'>$status</td>
			</tr>


        		";
        	}

        	?>

			

			
			
		</table>
		
	</div>



	
	<!---Add in modal---->

	<!-- Modal NEW TABLE-->
<div id="myModalNew" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">NEW - TABLE</h4>
      </div>
      <div class="modal-body">
	  <table class="table table-bordered table-striped table-hover" id="table-data">
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">Name</th> 
				<th class="text-center">Message</th>
				<th class="text-center">Template</th>
				<th class="text-center">Picture</th>
				<th class="text-center">Edit</th>
			</tr>

			<?php

        	$get_data = "SELECT * FROM user where status='NEW'";
        	$run_data = mysqli_query($con,$get_data);

        	while($row = mysqli_fetch_array($run_data))
        	{
        		$id = $row['id'];
        		$name = $row['name'];
        		$email = $row['email'];
        		$phone = $row['phone'];
        		$address = $row['address'];
				$image = $row['image'];
				$Template = $row['Template'];
				$status = $row['status'];

        		echo "

        		<tr>
				<td class='text-center'>$id</td>
				<td class='text-center'>$name</td>
				<td class='text-center'>$address</td>
				<td class='text-center'>$Template</td>
				<td class='text-center'><img src='images/$image' style='width:50px; height:50px;'></td>
				<td class='text-center'>
					<span>
					     <a href='#'>
					         <i class='fa fa-pencil' data-toggle='modal' data-target='#edit$id' style='' aria-hidden='true'></i>
					    </a>
					</span>
					
				</td>
			</tr>


        		";
        	}

        	?>

			

			
			
		</table>


`


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal WORKING TABLE-->
<div id="myModalWorking" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">WORKING - TABLE</h4>
      </div>
      <div class="modal-body">
	  <table class="table table-bordered table-striped table-hover" id="table-data">
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">Name</th> 
				<th class="text-center">Message</th>
				<th class="text-center">Template</th>
				<th class="text-center">Picture</th>
				<th class="text-center">Edit</th>
			</tr>

			<?php

        	$get_data = "SELECT * FROM user where status='Working'";
        	$run_data = mysqli_query($con,$get_data);

        	while($row = mysqli_fetch_array($run_data))
        	{
        		$id = $row['id'];
        		$name = $row['name'];
        		$email = $row['email'];
        		$phone = $row['phone'];
        		$address = $row['address'];
				$image = $row['image'];
				$Template = $row['Template'];
				$status = $row['status'];

        		echo "

        		<tr>
				<td class='text-center'>$id</td>
				<td class='text-center'>$name</td>
				<td class='text-center'>$address</td>
				<td class='text-center'>$Template</td>
				<td class='text-center'><img src='images/$image' style='width:50px; height:50px;'></td>
				<td class='text-center'>
					<span>
					     <a href='#'>
					         <i class='fa fa-pencil' data-toggle='modal' data-target='#edit$id' style='' aria-hidden='true'></i>
					    </a>
					</span>
					
				</td>
			</tr>


        		";
        	}

        	?>

			

			
			
		</table>


`


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!-- Modal DONE-->
<div id="myModalDone" class="modal fade" role="dialog">
<div class="modal-dialog modal-lg">

<!-- Modal content-->
<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">DONE - TABLE</h4>
      </div>
      <div class="modal-body">
	  <table class="table table-bordered table-striped table-hover" id="table-data">
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">Name</th> 
				<th class="text-center">Message</th>
				<th class="text-center">Template</th>
				<th class="text-center">Picture</th>
				<th class="text-center">Edit</th>
			</tr>

			<?php

        	$get_data = "SELECT * FROM user where status='Done'";
        	$run_data = mysqli_query($con,$get_data);

        	while($row = mysqli_fetch_array($run_data))
        	{
        		$id = $row['id'];
        		$name = $row['name'];
        		$email = $row['email'];
        		$phone = $row['phone'];
        		$address = $row['address'];
				$image = $row['image'];
				$Template = $row['Template'];
				$status = $row['status'];

        		echo "

        		<tr>
				<td class='text-center'>$id</td>
				<td class='text-center'>$name</td>
				<td class='text-center'>$address</td>
				<td class='text-center'>$Template</td>
				<td class='text-center'><img src='images/$image' style='width:50px; height:50px;'></td>
				<td class='text-center'>
					<span>
					     <a href='#'>
					         <i class='fa fa-pencil' data-toggle='modal' data-target='#edit$id' style='' aria-hidden='true'></i>
					    </a>
					</span>
					
				</td>
			</tr>


        		";
        	}

        	?>

			

			
			
		</table>


`


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

</div>
</div>

<!-- Modal WORKING TABLE-->
<div id="myModalWorking" class="modal fade" role="dialog">
<div class="modal-dialog modal-lg">

<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="modal-title text-center">WORKING - TABLE</h4>
  </div>
  <div class="modal-body">
  <table class="table table-bordered table-striped table-hover" id="table-data">
		<tr>
			<th class="text-center">ID</th>
			<th class="text-center">Name</th> 
			<th class="text-center">Message</th>
			<th class="text-center">Template</th>
			<th class="text-center">Picture</th>
			<th class="text-center">Edit</th>
		</tr>

		<?php

		$get_data = "SELECT * FROM user where status='Done'";
		$run_data = mysqli_query($con,$get_data);

		while($row = mysqli_fetch_array($run_data))
		{
			$id = $row['id'];
			$name = $row['name'];
			$email = $row['email'];
			$phone = $row['phone'];
			$address = $row['address'];
			$image = $row['image'];
			$Template = $row['Template'];
			$status = $row['status'];

			echo "

			<tr>
			<td class='text-center'>$id</td>
			<td class='text-center'>$name</td>
			<td class='text-center'>$address</td>
			<td class='text-center'>$Template</td>
			<td class='text-center'><img src='images/$image' style='width:50px; height:50px;'></td>
			<td class='text-center'>
				<span>
					 <a href='#'>
						 <i class='fa fa-pencil' data-toggle='modal' data-target='#edit$id' style='' aria-hidden='true'></i>
					</a>
				</span>
				
			</td>
		</tr>


			";
		}

		?>

		

		
		
	</table>


`


  </div>
  <div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>

</div>
</div>


<!------DELETE modal---->




<!-- Modal -->
<?php

$get_data = "SELECT * FROM user";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	echo "

<div id='$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title text-center'>Are you want to sure??</h4>
      </div>
      <div class='modal-body'>
        <a href='delete.php?id=$id' class='btn btn-danger' style='margin-left:250px'>Delete</a>
      </div>
      
    </div>

  </div>
</div>


	";
}


?>

<!----edit Data--->

<?php

$get_data = "SELECT id,name,email,phone,address,status FROM user";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	$name = $row['name'];
	$email = $row['email'];
	$phone = $row['phone'];
	$address = $row['address'];
	$status = $row['status'];
	echo "

<div id='edit$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
             <button type='button' class='close' data-dismiss='modal'>&times;</button>
             <h4 class='modal-title text-center'>Edit your Data</h4> 
      </div>

      <div class='modal-body'>
        <form action='edit.php?id=$id' method='post' enctype='multipart/form-data'>

             
        	<div class='form-group'>
        		<label>Name</label>
        		<input type='text' name='name' class='form-control' value='$name' >
        	</div>

        	<div class='form-group'>
        		<label>E-Mail</label>
        		<input type='email' name='email' class='form-control' value='$email' >
        	</div>

        	<div class='form-group'>
        		<label>Phone</label>
        		<input type='text' name='phone' class='form-control' value='$phone' >
        	</div>

        	<div class='form-group'>
        		<label>Message</label>
        		<input type='text' name='address' class='form-control' value='$address' >
			</div>
			
			<div class='form-group'>
        		<label>Status</label>
        		<input type='text' name='status' class='form-control' value='$status' >
        	</div>


        	
        	 <input type='submit' name='submit' class='btn btn-info btn-large' value='Submit'>
        	



        </form>
      </div>

    </div>

  </div>
</div>


	";
}


?>

 <script type="text/javascript">
	$(document).ready(function()){
		$("#search_text").keyup(function()){
			var search $(this).val();
			$ajax({
					url: 'admin.php',
					method: 'post',
					data:{query:search},
					success:function(response){
						$("#table-data").html(response); 
					}
				});
		});
	});


 </script>
</body>


</html>