<?php
//session_start();
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap4.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>GameBug</title>
</head>

<body class="bg-dark" style="margin-top: 0px">

<nav class="navbar navbar-expand-lg navbar-dark bg-blue">
  <a class="navbar-brand" href="homepage.php">
    <img src="images/logo.png" width="66" height="48" class="d-inline-bblock align top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	  <li class="nav-item">
        <a class="nav-link" href="allproducts.php">Browse Games</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
    </ul>
<?php 
    if(isset($_SESSION['user_id'])) {
  
  ?>
    <form class="form-inline my-2 my-lg-0" action="logout.php">
      <button class="btn btn-outline-primary my-2 my-sm-0" style="margin-left: 9px">Logout</button>
    </form>
    <?php }
    else{
    ?>

    <form class="form-inline my-2 my-lg-0" action="login.php">
      <button class="btn btn-outline-primary my-2 my-sm-0" style="margin-left: 9px">Login</button>
    </form>

	  <form class="form-inline my-2 my-lg-0 pl-2" action="register.php">
      <button class="btn btn-outline-warning my-2 my-sm-0">Register</button>
    </form>
    <?php } ?>
  </div>
</nav>
