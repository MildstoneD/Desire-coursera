<?php

include('db.php');

$uname = $_POST['username'];
$email = $_POST['email'];
$clb = $_POST['club'];
$age = $_POST['age'];
$gend = $_POST['gender'];
$pword = $_POST['password'];

$sql = "INSERT INTO `slmembers` (`id`, `username`, `email`, `club`, `age`, `gender`, `password`) 
VALUES (NULL, '$uname', '$email', '$clb', '$age', '$gend', '$pword')";

if ($conn->query($sql) === TRUE) {
    header("location: view-students.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  ?>