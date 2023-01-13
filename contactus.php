<?php 
    require('header.php');
?>
<div class="container-fluid p-3">   
            <div class="row">
                    <div class="col-lg-7">
                        <img src="images/stocks/image_processing20200430-28517-1ykcorf.png" width="500' height="450" alt="">
                        <hr> <h2> Let us here from you</h2>
                    </div>
                
                    <div class="col-lg-4 p-10 shadow-lg rounded p-3 mx-3">
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>"></form>
                            <div class="mb-3">
                            <label for="fullname" class="form-label">Enter Full Name</label>
                            <input type="email" class="form-control" id="fullname" placeholder="Enter Full Name">
                            </div>
                            <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                            <label for="text" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="text" rows="3"></textarea>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>
                    </div>
            </div>
              
</div>
<?php 
    require('footer.php');
?>
