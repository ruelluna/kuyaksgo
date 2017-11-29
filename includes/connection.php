<?php 

// Connect to Database


$conn = mysqli_connect("127.0.0.1","root","","kuyaksgo");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }