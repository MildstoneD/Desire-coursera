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

<form method="post">
  <label for="fname">E-mail :</label><br>
  <input type="email" id="fname" name="first_name" class="login"><br>

  <label for="pnumber">Password :</label><br>
  <input type="password" id="pnumber" name="phone_number" class="login"><br>

  <input type="submit" value="Submit" class='btn login' id='log' ><br>
  </form> 
</div>
</body>
</html>