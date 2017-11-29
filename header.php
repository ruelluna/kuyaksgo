<?php

include('includes/connection.php');

?>

<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link" href="/create.php">Create User</a>
  </li>
</ul>


<?php 

if(isset($_GET['create_user'])) {
	if($_GET['create_user'] === 'true'){
		echo "New User Created Successfully";
	}
}


if(isset($_GET['update_user'])) {
	if($_GET['update_user'] === 'true'){
		echo "User Updated Successfully";
	}
}