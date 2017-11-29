<?php 

 include('../includes/connection.php');


// Validation


// Insert
$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

// print_r($_POST);
$sql = "UPDATE users SET first_name='$first_name', last_name='$last_name', email='$email' WHERE id=".$id;
// $sql = "INSERT INTO users (first_name, last_name, email)
// VALUES ('$first_name', '$last_name', '$email')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	header("Location: /index.php?update_user=true");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();