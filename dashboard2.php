<?php 
    require('header.php');
?>
    <div class="container-fluid p-0">
        <!-- the header for row  -->
        <section class="col-12 bg-primary p-5 text-white">
            <h3><img src="assets/bootstrap-icons/diamond.svg" alt="Bootstrap" width="32" height="32" class="icon1">Dashboard</h3>
        </section>
        <!-- design for the row that will hold the two ssection  -->
        <div class="row d-flex align-items-start">
            <!-- first column with the title -->
            <section class="nav flex-column nav-pills me-3 col-2 text-bg-dark m-0 p-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <h5 class="centerAlign">Admin Control</h5>
                <hr>
                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Subscription</button>
                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>Disabled</button>
                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
            </section>
            <!-- for the tab contents -->
            <section class="tab-content col-9 text-bg-light m-0 p-5" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">Contents 0</div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">Contents 1</div>
                <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">Contents 2</div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">Contents 3</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                        <!-- Settings tab goes here -->
                        <div class="p-5 m-0">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active textLeft" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                              <button class="nav-link textLeft" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                              <button class="nav-link" id="nav-orders-tab" data-bs-toggle="tab" data-bs-target="#nav-orders" type="button" role="tab" aria-controls="nav-orders" aria-selected="false">Orders</button>
                            </div>
                        
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active contents1" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="nav-orders" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">...</div>
                            </div>
                        </div>



                </div>
             </section>
             <section class="clear-fix"></section>
        </div>
    </div>
    <?php 
    require('footer.php');
?>
