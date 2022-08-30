<?php

include('db.php');

$id = $_POST['id'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$gend = $_POST['gender'];
$pword = $_POST['password'];

$sql = "UPDATE slmembers SET firstname='$fname',lastname='$lname',username='$uname',email='$email',gender='$gend',password='$pword' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("location: view-students.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  ?>