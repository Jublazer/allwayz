<?php 
$login = true;
    require('header.php');
?>
   <div class="container-sm shadow-sm mgn-10">
        <div class="row" style="margin:0px auto;">
              <!-- breadcrum -->
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Photos</a></li>
                <li class="breadcrumb-item"><a href="#">Summer 2017</a></li>
                <li class="breadcrumb-item"><a href="#">Italy</a></li>
                <li class="breadcrumb-item active">Rome</li>
              </ul>
              <!-- carousal goes here -->
              <div class="col-lg-3 alert alert-info mgn-right" >
                  <?php include('carousal.php'); ?>
              </div>
              <div class="col-lg-5 alert alert-danger mgn-right">
                <?php include('carousal1.php'); ?>
              </div>
              <div class="col-lg-3 alert alert-primary mgn-right float-right">
                <?php include('carousal2.php'); ?>
              </div>
              <div class="clearfix"></div>
        </div>
        <div class="row mgn-10 bg-light slide"> 
          <div class="col-lg-6 p-5">
            <h1 class="font-weight-bold">All tools for
                Delivery Services
                in One Place
            </h1>
            <small class="align-baseline">We are one team with you!
                Our Goal is to provide the best 
                services for your clients.
            </small> <br /> <br>
            <button class="btn btn-outline-primary btn-md"><a href="contactus.php" class="text-decoration-none">LEAVE A REQUEST</a></button>
          </div>
          <div class="col-lg-6 p-5">
            <img src="images/stocks/todo.jpg" width="500" height="300" alt="" style="position:relative;">
          </div>
        </div>
        <div class="row  p-2">
            <center><small class="text-primary">We deliver world-wide. with our updated tracker you can keep update of your logistics</small></center>
        </div>
        <br>
        <!-- thrid sections -->
        <div class="row mgn-10 bg-light slide"> 
          <div class="col-lg-6 p-5">
            <img src="images/stocks/Payment.jpg" width="500" height="300" alt="" style="position:relative;">
          </div>
          <div class="col-lg-6 p-5">
            <h1 class="font-weight-bold">Thinking of a secure
                and best way to make payment ?
                Dont worry!
            </h1>
            <small>Our secure payment portal get you cover!
                or you may decide to pay on delivery.
            </small> <br /> <br>
            <button class="btn btn-outline-primary btn-md"><a href="contactus.php" class="text-decoration-none">LEAVE A REQUEST</a></button>
          </div>

        </div>


        <div class="container">
  <h3>Contact Us</h3>
  <p>
    Just give us a call or drop us some message, our 24 hour customer care representative will respond to you soonest.
    <br><br>
    <button class="btn btn-outline-primary btn-md">Contact Us</button>
  </p>
  <span class="align-baseline">baseline</span>
  <span class="align-top">top</span>
  <span class="align-middle">middle</span>
  <span class="align-bottom">bottom</span>
  <span class="align-text-top">text-top</span>
  <span class="align-text-bottom">text-bottom</span>
</div>

<script>
  $(document).ready(function(){
    alert("I am ready");
  };)
</script>

<div class="jumbotron">
  <div class="container">
    <h3>Our Services<i class="fas fa-cloud"></i> </h3>      
    <p>
      Some of our services include: <br>
      <ul class="list-group w-50">
        <li class="list-group-item">Way billing Services</li>
        <li class="list-group-item">International Shipping of Products</li>
        <li class="list-group-item">Logidtics Services</li>
      </ul><br><br>
    </p>
  </div> 
</div>



   </div>
   <?php 
    require('footer.php');
?>
