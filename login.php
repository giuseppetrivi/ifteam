<?php
  include 'components/components.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php Component::head('login'); ?>
</head>
<body>
  <h1 class="titolo">IF TEAM</h1>
  <h2 class="diamond">
    <i class="fas fa-gem"></i>
  </h2>

  <form class="accesso" action="">
    <h4 class="login-title">LOGIN</h4>
    <input class="login-input" type="text" name="username" placeholder="username">
    <input class="login-input" type="password" name="password" placeholder="password">
    <button class="login-button" type="submit">
      <span>Accedi</span>
      <span><i class="fas fa-sign-in-alt"></i></span>
    </button>
  </form>
</body>
</html>