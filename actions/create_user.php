<?php 

 include('../includes/connection.php');


// Validation


// Insert
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];


$sql = "INSERT INTO users (first_name, last_name, email)
VALUES ('$first_name', '$last_name', '$email')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	header("Location: index.php?create_user=true");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();