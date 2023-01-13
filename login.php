<?php
    include("header.php");
?>
<div class="container-small">
    <div class="">
        <!-- Login -->
        <div class="container-sm">
            <?php
                // for errors
                if(!empty($errors)){
                    foreach($errors as $error){
                        echo "<div class='alert alert-danger mt-3 alert-dismissible fade show'>
                        <center>$error</center></div>";
                    }
                }

                // for success
                if(isset($_SESSION['success'])){
                
                    echo "<div class='alert alert-success alert-dismissible mt-3 fade show'><center>".$_SESSION['success']."</center></div>";
                }
            ?>
        </div>
        <div class="spinner-grow text-info"></div>
        <div></div>
        
        <!-- sample tabs -->
        <div class="col-lg-5 w-25 p-3 price-col shadow-lg opacity-20 rounded">
                        <!-- Settings tab goes here -->
                            <div>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link <?php if(!isset($reg_active)){echo "active";}else{echo "";}?> w-50" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Login</button>
                                    <button class="nav-link w-50" id="nav-orders-tab" <?php if(isset($reg_active)){echo "active";}?> data-bs-toggle="tab" data-bs-target="#nav-orders" type="button" role="tab" aria-controls="nav-orders" aria-selected="false">Register</button>
                                </div>
                            
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane <?php if(!isset($reg_active)){echo "active";}else{echo "";}?> p-5" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                        <!-- login form here -->
                                        <form class="p-3"  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                                            <div class="input-group mb-3">
                                                <input type="text" id="useremail" placeholder="Email or Username" class="form-control" placeholder="Enter email" name="username" id="email">
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="password" placeholder="Password:" class="form-control" placeholder="Enter password" name="password" id="pwd">
                                            </div>
                                            <div class="input-group mb-3">
                                                <label class="form-check-label">
                                                <input class="form-check-input" id="loginpass" type="checkbox"> Remember me
                                                </label>
                                            </div>
                                            <div class="input-group mb-3">
                                            <button type="submit form-control" id="logi" name="login" class="btn btn-block btn-primary">Submit</button>
                                            </div>
                                        </form> 
                                        
                                    </div>
                                    <!-- Sign up -->
                                    <div class="tab-pane <?php if(isset($reg_active)){echo "active";}?> p-3" id="nav-orders" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">
                                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="First Name" name="fname">
                                            <input type="text" class="form-control" placeholder="Last Name" name="lname">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Username" name="username">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Email Address" name="email">
                                        </div>
                                        <div class="input-group mb-3">
                                        <input type="tel" class="form-control" placeholder="Phone Number" name="phone">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Address" name="address">
                                            <select class="form-control text-info" placeholder="Address" name="usertype">
                                                <option value="user">User</option>
                                                <option value="gold">Gold User</option>
                                                <option value="premium">Premium User</option>
                                            </select>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" placeholder="Enter Password" name="psw" id="psw">
                                            <input type="password" class="form-control" placeholder="Confirm Password" name="psw1" id="psw1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <button type="submit form-control" id="regist" onclick="passCheck()" class="btn btn-block btn-success" name="register">Submit</button>
                                            </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
    </div>
</div><br> <br>

<?php
include("footer.php");
?>


<script>
    $(document).ready(function(){
    //    Declarations of variebales
        const login = $("#logtest");
        const register = $("#regist");

        // Login conditions
        login.click(function(){
            const username = $("#useremail").val();
            const password = $("#loginpass").val();
                if(username === ""){
                        alert("Please the Username/Email field can't be empty!");
                        break;
                }
                else{

                }
        });

        // Registration condition
        login.click(function(){

        });
    });
</script>