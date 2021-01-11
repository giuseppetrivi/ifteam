<?php
  include 'components/components.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php Component::head('contatti'); ?>
</head>
<body>
  <div class="overlay"></div>
  <div class="menu">
    <h1>MENU</h1>
    <div class="menu-option selected clearfix">
      <i class="fas fa-user-circle"></i>
      <h6>Profilo</h6>
    </div>
    <div class="menu-option clearfix">
      <i class="fas fa-phone-alt"></i>
      <h6>Contatti</h6>
    </div>
    <div class="menu-option clearfix">
      <i class="fas fa-user-friends"></i>
      <h6>Utenti</h6>
    </div>
    <div class="menu-option clearfix">
      <i class="fas fa-chart-pie"></i>
      <h6>Statistiche</h6>
    </div>
    <div class="menu-option clearfix">
      <i class="fas fa-cog"></i>
      <h6>Impostazioni</h6>
    </div>
  </div>

  <!-- (menu-opener) con intestazione -->
  <div class="top-page">
    <div class="menu-opener">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <h1 class="top-titolo">IF TEAM</h1>
  </div>

  <!-- container (con titolo sezione e il resto) -->
</body>
</html>
