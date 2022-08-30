
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
<h2>Sign Up</h2><br>

<form action="insert-member.php" method="post">
  <label for="uname">First Name:</label><br>
  <input type="text" id="fname" name="firstname" required><br>

  <label for="sname">Last Name:</label><br>
  <input type="text" id="lname" name="lastname"><br>


  <label for="lname">Username:</label><br>
  <input type="text" id="uname" name="username"><br>


  <label for="age">Email:</label><br>
  <input type="email" id="email" name="email"><br>


  <label for="gender">Gender:</label><br>
  <select name="gender" id="">
      <option>Female</option>
      <option>Male</option>
  </select><br>


  <label for="pnumber" id='pass'>Password :</label><br>
  <input type="password" id="pword" name="password" required><br>

  <label for="pnumber" id='confirm'>Confirm Password :</label><br>
  <input type="password" id="cpword" required><br>


<input type="checkbox" id='checkbox'>
<label for="remember">Remember password</label>

  <input type="submit" value="Sign Up" class='btn'><br>
  <a href="login.php">Already a member? Login | | </a>
  <a href="#">forgot password?</a>
</form> 
</div>
</div>
<script src="member.js"></script>
</body>
</html>