<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="login-sign.css">
  </head>


<body>
  <header>
    <?php
    include('header.php');
    ?>
  </header>
  <div class='cont-form'>
<h2>Edit Profile</h2>




<form action="update-student.php" method="post">
<?php
    include('db.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM slmembers where id = '$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {

      
  echo '<label for="fname">Username:</label><br>
  <input type="hidden" id="id" name="id" value="'.$row["id"].'">
  <input type="text" id="fname" name="firstname" value="'.$row["firstname"].'"><br>

  <label for="sname">E-mail:</label><br>
  <input type="text" id="lname" name="lastname" value="'.$row["lastname"].'"><br>


  <label for="lname">Last name:</label><br>
  <input type="text" id="uname" name="username" value="'.$row["username"].'"><br>


  <label for="age">Age:</label><br>
  <input type="email" id="email" name="email" value="'.$row["email"].'"><br>


  <label for="gender">Gender:</label><br>
  <select name="gender" id="" value="">
    <option>'.$row["gender"].'</option>
    <option>Female</option>
    <option>Male</option>
  </select><br><br>


  <label for="pnumber">Password</label><br>
  <input type="password" id="pword" name="password" required value="'.$row["password"].'"><br>


<input type="checkbox" id="checkbox">
<label for="remember">Remember password</label>

  <input type="submit" value="Submit" class="btn"><br>';
}
} else {
  echo "<tr><td>0 results</td></tr>";
}
$conn->close();
?>
</form> 
</div>
</div>
</body>
</html>