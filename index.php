<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kuyaksgo</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>

	<div class="container-fluid">

		<?php include('header.php'); ?>

		<div class="row">
			<h1>All Users</h1>
		</div>

		<div class="row">
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">First Name</th>
			      <th scope="col">Last Name</th>
			      <th scope="col">Email</th>
			      <th scope="col">&nbsp;</th>
			    </tr>
			  </thead>
			  <tbody>

				<?php 
					$sql = "SELECT * FROM users ORDER BY id DESC";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()): ?>

						<tr>
					      <th scope="row"><?=$row['id']?></th>
					      <td><?=$row['first_name']?></td>
					      <td><?=$row['last_name']?></td>
					      <td><?=$row['email']?></td>
					      <td>
					      	<a class="btn btn-primary" href="update.php?id=<?=$row['id']?>">
					      		Update
					      	</a>
					      	
					      	<a class="btn btn-danger" href="#">
					      		Delete
					      	</a>
					      </td>
					    </tr>
					        
					    <?php endwhile; 
					} else {
					    echo "0 results";
					}

				?>
			
			  </tbody>
			</table>
		</div>


		<?php include('footer.php'); ?>	

	</div>
</body>
</html>


