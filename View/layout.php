<!DOCTYPE html>
<html>
<head>
  <title>E-VO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
  <script src="assets/js/script.js" type="text/javascript"></script>
</head>
<body>
  <?php
 if (isset($_GET['success'])) : ?>
     <div class="alert alert-success" role="alert" style="color: green;opacity: 0.9">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
       <strong>SUCCESS!</strong> <?=($_GET['success']);?>
     </div>
 <?php endif;?>
 <?php
if (isset($_GET['error'])) : ?>
    <div class="alert alert-danger" role="alert" style="color: red;opacity: 0.9">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <strong>WARNING!</strong> <?=($_GET['error']);?>
    </div>
<?php endif;?>
  <!-- navbar top-->
        <?php if(isset($_SESSION['login'])){ ?>
          <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="?controller=Home&action=home">E-VO</a>
              </div>
              <ul class="nav navbar-nav">
                <li><a href="?controller=Events&action=homeCS">CS:GO Events</a></li>
                <li><a href="?controller=Events&action=homeDota">Dota 2 Events</a></li>
                <?php if ($_SESSION['login']=='admin'){ ?>
                  <li><a href="?controller=AdminPanel&action=home">My Panel</a></li>
                <?php }
                else {
                ?>
                <li><a href="?controller=Profile&action=home">My Profile</a></li>
              <?php } ?>
              </ul>
              <ul class="nav navbar-nav navbar-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION["login"];?></a>
          <ul class="dropdown-menu">
          <li><a href="logout.php">Logout</a></li>
          </ul>
          </li>
        </ul>
      <?php   }
        else {?>
          <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="?controller=Home&action=home">E-VO</a>
              </div>
              <ul class="nav navbar-nav">
                <li><a href="?controller=Events&action=homeCS">CS:GO Events</a></li>
                <li><a href="?controller=Events&action=homeDota">Dota 2 Events</a></li>
              </ul>
                <ul class="nav navbar-nav navbar-right">
          <li><a href="?controller=Login&action=login"><span class="glyphicon glyphicon-log-in"></span> Sign In/Up</a></li>;
        <?php }?>
      </ul>
    </div>
  </nav>
  <?php require_once('routes.php') ?>
</body>
</html>
