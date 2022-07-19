<?php

include('db.php');

$id = $_POST['id'];
$uname = $_POST['username'];
$email = $_POST['email'];
$clb = $_POST['club'];
$age = $_POST['age'];
$gend = $_POST['gender'];
$pword = $_POST['password'];

$sql = "UPDATE slmembers SET username='$uname',email='$email',club='$clb',age='$age',gender='$gend',password='$pword' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("location: view-students.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  ?>