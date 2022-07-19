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
  <label for="uname">Username:</label><br>
  <input type="text" id="uname" name="username" required><br>

  <label for="sname">E-mail:</label><br>
  <input type="email" id="email" name="email"><br>


  <label for="lname">Club:</label><br>
  <input type="text" id="clb" name="club"><br>


  <label for="age">Age:</label><br>
  <input type="number" id="age" name="age"><br>


  <label for="gender">Gender:</label><br>
  <select name="gender" id="">
      <option>Female</option>
      <option>Male</option>
  </select><br><br>


  <label for="pnumber">Password :</label><br>
  <input type="password" id="pword" name="password" required><br>


<input type="checkbox" id='checkbox'>
<label for="remember">Remember password</label>

  <input type="submit" value="Submit" class='btn'><br>
  <a href="login.php">Already a member? Login || </a>
  <a href="#">forgot password?</a>
</form> 
</div>
</div>
</body>
</html>