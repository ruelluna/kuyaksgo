<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update User - Kuyaksgo</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>

	<div class="container-fluid">

		<?php include('header.php'); ?>



		<?php
			if(isset($_GET['id'])) {
				$sql = "SELECT id, first_name, last_name, email FROM users WHERE id=".$_GET['id'] . ' LIMIT 1';

				$result = $conn->query($sql);
				
				$user = mysqli_fetch_assoc($result);

				// print_r($user);
				$id = $user['id'];
				$first_name = $user['first_name'];
				$last_name = $user['last_name'];
				$email = $user['email'];

			}

			

		?>

		<div class="row">
			<h1>Update User</h1>
		</div>
			
		<div class="row">

			<form action="/actions/update_user.php" method="POST">
			  <input type="hidden" name="id" value="<?=$id??'';?>">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?=$email??'';?>">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="first_name">First Name</label>
			    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" value="<?=$first_name??'';?>">
			  </div>
			  <div class="form-group">
			    <label for="last_name">Last Name</label>
			    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" value="<?=$last_name??'';?>">
			  </div>
			  <button type="submit" class="btn btn-primary">UPDATE</button>
			</form>
		</div>


		<?php include('footer.php'); ?>	

	</div>
</body>
</html>


