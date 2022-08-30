<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="login-sign.css"<?php echo time(); ?>/>
  </head>


<body>
  <header>
    <?php
    include('header.php');
    ?>
  </header>
  <div class="cont-login">
<h2>Login</h2>

<form action='' method="post">
  <label for="fname">E-mail :</label><br>
  <input type="email" id="fname" name="first_name" class="login"><br>

  <label for="pnumber">Password :</label><br>
  <input type="password" id="pnumber" name="phone_number" class="login"><br><br>

  <input type="submit" value="Login" class='btn login' id='log' ><br>

  <a href="signup.php">Not yet a member? Sign up | | </a>
  <a href="#">forgot password?</a>
  </form> 
</div>
<script src="member.js"></script>
</body>
</html>