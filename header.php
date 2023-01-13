<?php
include('functions.php');

function loginCheck(){
  $login = false;
  if($login == true){
    echo ';
    <li class="nav-item">
    <a class="nav-link" href="dashboard2.php">Dashboard</a>
    </li>
    ';
  }
};
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5/css/bootstrap.css" >
    <link rel="stylesheet" href="assets/css/styles.css" > 
    <link rel="stylesheet" href="assets/bootstrap-icons/" >
    <script type="text/javascript" src="bootstrap-5/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/jquery.js"></script>
    <title>Ukdion Assessment Complain Page</title>
</head>
<body>
<nav class="navbar navbar-expand-md bg-info navbar-dark navbar-right text-light">
    <div class="container-fluid">
        <a class="navbar-brand rounded-circle shadow-sm bg-light" href="index.php"><img src="images/logo.png" alt="" width="60" height="55"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
              
              '.loginCheck().'
            <li class="nav-item">
              <a class="nav-link" href="order.php">Oders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tracking.php">Tracking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>
          </ul>
          <div clas="float-right">
            <button class="btn btn-sm btn-outline-light ml-5"><a href="subscribe.php" style="text-decoration:none;">Buy Premium</a></button>
            <button class="btn btn-sm btn-light ml-5"><a href="login.php" style="text-decoration:none;">Login</a></button>
          </div>
        </div>
      </div>
  </nav>
  
  <nav class="navbar navbar-expand-sm bg-light navbar-dark sticky-top border border-bottom-info shadow-sm">
          <marquee class="text-danger "><small><center>We are working hard to give you the very best!!!</center></small></marquee>
</nav> 
  
  ';
  ?>