<?php
    include("header.php");
?>
<div class="container-small">
    <div class="">
        <!-- Login -->
        <div class="container-sm" id="infodiv">
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
                                    <button class="nav-link active w-50" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Login</button>
                                </div>
                            
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane active p-5" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                        <!-- login form here -->
                                        <form class="p-3"  method="post" action="">
                                            <div class="input-group mb-3">
                                                <input type="text" id="useremail" placeholder="Email or Username" class="form-control" placeholder="Enter email" name="username">
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="password" id="loginpass" placeholder="Password:" class="form-control" placeholder="Enter password" name="password">
                                            </div>
                                            <div class="input-group mb-3">
                                                <label class="form-check-label">
                                                <input class="form-check-input"  type="checkbox"> Remember me
                                                </label>
                                            </div>
                                            <div class="input-group mb-3">
                                            <button type="submit form-control" id="login"  class="btn btn-block btn-primary">Submit</button>
                                            </div>
                                        </form> 
                                        
                                    </div>
                                </div>
                            </div>
    </div>
</div><br> <br>
                <div id="t2"></div>
                <button id="test">Test</button>
<?php
include("footer.php");
?>

<script>
    $(document).ready(function(){
        $("#test").click(function(){
                // var   logi = $("#useremail").val();
                // var   passw = $("#loginpass").val();
                // alert(logi + " and " + passw);
                $.ajax(
                    'test.php',
                    {
                        dataType:   'json',
                        success:    function(data){
                                    alert("Hello " + data.name + " we heard you are from " + data.state + " and you are " + data.age +" years old");
                        }
                    });
        });
    });
// $(document).ready(function(){
//         function loginUser(){
//                 $("#btn").click(function(){
//                     const usernam = $("#name").val;();
//                     const pass = $("#pass").val;();

//                     $.ajax({
//                         url:    "ajax.php",
//                         type:   "post",
//                         async:  "false",
//                         data:   {
//                                 done: 1,
//                                 username =  "usernam",
//                                 password =  "pass"
//                         },
//                         success:    function(data){
//                                 displayData();
//                         },
//                         error:  function(d){
//                             alert("There was an error: " + d);
//                         }
//                     });
//                 });
//             };
// });
        
// // Function for displaying result of loginUser
// $(document).ready(function(){
//     function displayData(){
//         $.ajax({
//             url:       "ajax.php",
//             type:       "post",
//             async:      "false",
//             data:       {
//                             display:    1
//             },
//             success:     function(d){
//                 $("#infodiv").html(d);
//             }
//         });

//     }
// });

</script>
