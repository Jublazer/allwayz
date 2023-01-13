<?php 
    require('header.php');
?>
<body>

<div class="container-fluid row" id="order-container">

                <div class="col-lg-5 col-md-6 col-sm-10 col-xsm-12 price-col">
                    <img src="images/stocks/image_processing20200506-28905-skh8gm.png" id="abIMG" width="400" height="250" alt="">
                </div>

                <div class="col-lg-6 p-3 price-col shadow-lg bg-new">
                        <!-- Settings tab goes here -->
                            <div>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Track Orders</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Active Orders</button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Previous Orders</button>
                                </div>
                            
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active p-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">Track orders here
                                    <br> <br>
                                    <div class="position-relative p-3">
                                        <!-- Order form -->
                                        <div class="p-3">
                                            <form>
                                                <div class="p-2 bg-info mb-3 text-light rounded-top">
                                                    <h5>Shipper Information</h5>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="First Name">
                                                    <input type="text" class="form-control" placeholder="Last Name">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Email">
                                                    <input type="text" class="form-control" placeholder="Phone">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="textarea" class="form-control" placeholder="address">
                                                    <select name="localinter" class="form-control">
                                                        <option value="" name="" disbled selected>Select type... </option>
                                                        <option value="local" name="local">Local</option>
                                                        <option value="international" name="international">International</option>
                                                    </select>
                                                </div>
                                                <hr>
                                                <br>
                                                <div class="p-2 bg-info mb-3 text-light rounded-top">
                                                    <h5>Receiver Information</h5>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Receiver's Full Name">
                                                    <input type="text" class="form-control" placeholder="Receiver's Email">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="tell" class="form-control" placeholder="Receiver's Phone Number">
                                                    <textarea class="form-control" placeholder="Receiver's Address"></textarea>
                                                </div>
                                                <hr>
                                                <br>
                                                <div class="p-2 bg-info mb-3 text-light rounded-top">
                                                    <h5>Product Information (Stage 1)</h5>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <select name="localinter" class="form-control">
                                                        <option disbled>Shipment status </option>
                                                        <option value="local" name="local">In progress</option>
                                                        <option value="international" name="international">On hold</option>
                                                        <option value="international" name="international">Canciled</option>
                                                    </select>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Origin">
                                                    <input type="text" class="form-control" placeholder="Destination to">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Weight">
                                                    <input type="text" class="form-control" placeholder="Total Freight">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Product">
                                                    <input type="text" class="form-control" placeholder="Pick-up date">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <textarea class="form-control" placeholder="Comment"></textarea>
                                                </div>
                                                <br>
                                                <div class="p-2 mb-3 bg-secondary text-light rounded-top">
                                                    <h5>Product Information (Stage 2)</h5>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <select name="localinter" class="form-control">
                                                        <option disbled>Package</option>
                                                        <option value="local" name="local">Seal Metal</option>
                                                        <option value="international" name="international">Seal Catton</option>
                                                    </select>
                                                    <input type="text" class="form-control" placeholder="Destination to">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Weight">
                                                    <input type="text" class="form-control" placeholder="Total Freight">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Product">
                                                    <input type="text" class="form-control" placeholder="Pick-up date">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <textarea class="form-control" placeholder="Comment"></textarea>
                                                </div>

                                                <div class="input-group mb-3">
                                                    <button type="submit form-control" class="btn btn-block btn-primary">Submit</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade p-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">Active Orders</div>
                                    <div class="tab-pane fade p-3" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">Previous Orders</div>
                                </div>
                            </div>
                    <!-- after -->
                </div>
    </div>
<?php 
    require('footer.php');
?>
</body>
</html>