<?php
 include('db.php');
 $id = $_GET['id'];
$sql = "DELETE FROM slmembers WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    header('location: view-students.php');
  } else {
    echo "Error deleting record: " . $conn->error;
  }

?>