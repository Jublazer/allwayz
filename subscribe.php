<?php
    include("header.php");
    ?>
    <!-- title div -->
            <div class="text-info shadow-md p-3">
                <h2 class="">Subscribe User</h2>
                <small class="text-secondary small">Subscribe to have full control of your order's</small>
            </div>
    <div class="container-fluid row bg-new bg-info p-4">
            
            <!-- contents div -->
                      <!-- Price List -->
                        <div class="col-lg-4 w-30 col-md-6 rounded col-sm-12 price-col bg-white shadow-lg p-3">
                        <h4 class="text-info">Standard Package</h4>
                            <p class="text-secondary">This package contains the following options bellow</p><hr><br>
                            
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-action">Ability to Create your order</li>
                                    <li class="list-group-item list-group-item-action">Track your orders</li>
                                    <li class="list-group-item list-group-item-action">Edit your tracked orders</li>
                                    <li class="list-group-item list-group-item-action">Cancel or remove orders</li>
                                    <li class="list-group-item list-group-item-action">10 Oders</li>
                                </ul>
                                <br><br>
                                    <div class="input-group"> 
                                        <button class="btn btn-sm btn-outline-info ml-5 form-control"><a href="subscribe.php" style="text-decoration:none;">Subscribe</a></button>
                                    </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 w-30 col-sm-12 price-col bg-white shadow-lg p-3 rounded">
                        <h4 class="text-info">Golden Package</h4>
                                        <p class="text-secondary">This package contains the following options bellow</p><hr><br>
                                        
                                            <ul class="list-group">
                                                <li class="list-group-item list-group-item-action">Ability to Create your order </li>
                                                <li class="list-group-item list-group-item-action">Track your orders</li>
                                                <li class="list-group-item list-group-item-action">Edit your tracked orders</li>
                                                <li class="list-group-item list-group-item-action">Cancel or remove orders</li>
                                                <li class="list-group-item list-group-item-action">50 Oders</li>
                                            </ul>
                                            <br><br>
                                    <div class="input-group"> 
                                        <button class="btn btn-sm btn-outline-info ml-5 form-control"><a href="subscribe.php" style="text-decoration:none;">Subscribe</a></button>
                                    </div>
                        </div>
                <!-- end of contents -->

    </div>
    <?php include("footer.php");
    ?>