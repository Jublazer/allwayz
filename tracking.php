<?php 
include('header.php');
?>
    <br> <br><br><br><br>
    <div id="target" class="shadow-lg w-50 container-sm p-5 my-40">
        <div class="alert alert-info"><center>Enter the Consignment No.</center></div>
        <div class="card">
            <div class="card-header text-info"><h3>Logistics Tracking</h3></div>
            <div class="card-body">
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tracking ID:</span>
                        <input type="text" class="form-control" placeholder="Enter Track ID ##" name="trackID" id="track" placeholder="Enter the tracking ID e.g 3432830989">
                        <button class="btn btn-outline-success" type="button" id="track-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" name="track">Track</button>
                      </div>
          </form>
            </div>
        </div>
    </div>
</body>

<script>
$(document).ready(function(){
  $("#track-btn").click(function(){
    const trackv = $("#track").val();
    alert(trackv);
    $("#here").text(trackv);
  });
});
</script>

<div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

<button>Get External Content</button>
<!-- Model and trigers -->

  <!-- Modal -->
  <div class="modal modal-xl fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tracking Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <div class="container-fluid">
                    <div class="alert alert-info">Bellow are you shipping info</div>
                        <!-- progress bar -->
                        <div class="card md-3">
                            <div class="progress" style="height: 1px;">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div></div>
                                <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
                                <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
                                <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
                        </div>
                    </div>
                    
                    <br />
                    <br />
                    <br />
                        <div class="card">
                            <br />
                            <br />
                            
                                <div class="card card-body">

                                    <center><img src="images/qrcode.png" width="40" height="40" /> Tracking ID#: <strong id="here"></strong></center>
                                </div>     
                                <br>
                                <button type="button" class="input-control btn btn-success btn-sm" onclick="window.print(); return false;">Print</button>
                        </div>
                    <div id="doc">    
                            <br><br><br>
                        <!-- div card for other ship and receiver information  -->
                        <div class="row shadow-sm" style="margin: auto;">
                            <!-- for shipper information  -->
                            <div class="col-md-6 bg-light">
                                <h5 class="text-info">Shipper Information</h5>
                                <hr>
                                <p>
                                Jordan miles
                                5500 McKinney Pl Dr,McKinney,Texas 75070.
                                +16094537893 <br>
                                jordanmiles9723@gmail.com
                                </p>
                            </div>
                            <!-- for Reiciver information -->
                            <div class="col-md-6 over-flow-scroll">
                                <h5 class="text-info">Receiver Information</h5>
                                <hr>
                                <p>
                                    Nome Claudete Gimenes de Souza
                                    Rua Frederico Penachione 322 bairro Morada do sol Cidade Americana- SP.
                                    +5519992810423 <br>
                                    gimenesdesouzaclaudete@gmail.com
                                </p>
                            </div>
                        </div>

                        <br><br>
                        <!-- Ship container status -->
                        <div class="alert alert-warning"><center><h5 class="text-danger">SHIPMENT STATUS: ON HOLD</h5></center></div>
                        <br><br>

                        <!-- ship information -->
                        <h4>Ship Information</h4> <hr>
                        <div class="row shadow-sm" style="margin: auto;">
                            <!-- for shipper information  -->
                            <div class="col-md-4 bg-light">
                                <p>
                                    <!-- Table with details -->
                                    <table class="table table-striped table-hover">
                                        <thead>
                                          <tr>
                                            <th>Details</th>
                                            <th>Info</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Origin:</td>
                                            <td>Bahrain</td>
                                          </tr>
                                          <tr>
                                            <td>Destination:</td>
                                            <td>Brazil</td>
                                          </tr>
                                          <tr>
                                            <td>Weight:</td>
                                            <td>40</td>
                                          </tr>
                                          <tr>
                                            <td>Product:</td>
                                            <td>Goods</td>
                                          </tr>
                                          <tr>
                                            <td>Total Freight:</td>
                                            <td>$4,180.00</td>
                                          </tr>
                                          <tr>
                                            <td>Pick-up Date:</td>
                                            <td>2022-05-26</td>
                                          </tr>
                                          <tr>
                                            <td>Comments:</td>
                                            <td>Shipment in progress.</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                
                                </p>
                            </div>
                            <!-- for Reiciver information -->
                            <div class="col-md-4">
                                <p>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                          <tr>
                                            <th>Details</th>
                                            <th>Info</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Package:</td>
                                            <td>Sealed Metal box</td>
                                          </tr>
                                          <tr>
                                            <td>Carrier:</td>
                                            <td>USPS</td>
                                          </tr>
                                          <tr>
                                            <td>Shipment Mode:</td>
                                            <td>Air Freight</td>
                                          </tr>
                                          <tr>
                                            <td>Qty:</td>
                                            <td>1</td>
                                          </tr>
                                          <tr>
                                            <td>Expected Delivery Date:</td>
                                            <td>2022-05-26</td>
                                          </tr>
                                          <tr>
                                            <td>Pick-up Time:</td>
                                            <td>10:00 am</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </p>
                            </div>

                            <!-- for Reiciver information -->
                            <div class="col-md-4">
                                
                                <p>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                          <tr>
                                            <th>Details</th>
                                            <th>Info</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Status:</td>
                                            <td class="text-info">On Hold</td>
                                          </tr>
                                          <tr>
                                            <td>Type of Shipment:</td>
                                            <td>Air Freight</td>
                                          </tr>
                                          <tr>
                                            <td>Carrier Reference No.:</td>
                                            <td>664348</td>
                                          </tr>
                                          <tr>
                                            <td>Payment Mode:</td>
                                            <td>BACS</td>
                                          </tr>
                                          <tr>
                                            <td>Departure Time:</td>
                                            <td>02:00 am</td>
                                          </tr>
                                          
                                        </tbody>
                                      </table>
                                </p>
                            </div>
                        </div>
                        <br><br>

                        <!-- packages table -->

                </div>        

                </div>
            </div>
        </div>
      </div>
    </div>
    <br> <br> <br>
  </div>
  
<?php include('footer.php');
?>