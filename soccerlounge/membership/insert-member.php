<?php

include('db.php');

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$uname = $_POST['username'];
$email = $_POST['email'];
$gend = $_POST['gender'];
$pword = $_POST['password'];

$sql = "INSERT INTO `slmembers` (`id`, `firstname`, `lastname`, `username`, `email`, `gender`, `password`) 
VALUES (NULL, '$fname', '$lname', '$uname', '$email', '$gend', '$pword')";

if ($conn->query($sql) === TRUE) {
    header("location: view-students.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  ?>