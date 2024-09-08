<?php require_once "php/dbconnect.php" ?>
<?php require_once "php/logincheck.php" ?>
<?php require_once "php/fee-code.php" ?>
<?php if ($_SESSION['user_name']!="admin"):header("location:teacher-404.html"); endif;?>
<?php if ($permission==false ):header("location:404.html"); endif;?>
<?php require_once "header.php" ?>

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                       
                    </div>
                </div>
            </div>
        </div>

<div class="data-table-area mg-b-15" style="width: 60%; margin-right: auto; margin-left: auto;">

        <div class="container-fluid" style="margin-top: 20px;">
            <div  style="background: #D44B41; color:#ffff; height: 50px; border-bottom-left-radius: 
                10px; border-bottom-right-radius: 
                10px; line-height: 50px; text-indent: 10px;">
                <a href="fee-page.php" style="color: yellow;"><span class="fa fa-arrow-left"></span></a>&nbsp&nbspTake Fees    
            </div>

        </div>


        <!-- Emergency Details -->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid" >
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-payment-inner-st" style="border-width: 3px; border-color:#00000015;; border-style: solid; border-radius: 5px;">
                          
            <div id="myTabContent" class="tab-content custom-product-edit">
                <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="review-content-section">
                <div id="dropzone1" class="pro-ad">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <?php if ($error=="Payment failed!"):?>
        
        <div class="alert alert-danger alert-mg-b">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <strong>Warning!</strong> <?php echo $error; ?>
        </div>
        
    <?php elseif ($successfully=="Payment successful!"): ?>

        <div class="alert alert-success alert-mg-b">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> <?php echo $successfully; ?>
        </div>

    <?php endif; ?>

                    <form method="post" action="">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  
                  <div class="form-group">
                    <label>Name</label>
                      <input type="text" class="form-control" value="<?php echo $rowsview['sname']." ".$rowsview['other_name']; ?>" disabled>
                   </div>

                  <div class="form-group">
                     <label>Total Fee ¢</label>
                      <input type="hidden" name="bill"  value="<?php echo $bill; ?>">
                      <input type="number" min="0" id="tol" class="form-control"  value="<?php echo $bill; ?>" disabled >
                   </div>

                   
                  <div class="form-group">
                    <label>Balance ¢</label>
                    <input type="hidden" id="not" value="<?php echo $balance; ?>">
                    <input type="hidden" id="balhi" name="balance" value="<?php echo $balance; ?>"/>
                    <input type="number" id="bal" class="form-control" value="<?php echo $balance; ?>" disabled="disabled">
                   </div>

                   
                  <div class="form-group">
                    <label>Paid ¢ &nbsp</label><label id="warn"></label>
                      <input type="hidden" id="payinto" name="paid" value="<?php echo $paid; ?>"/>
                      <input type="hidden" id="paidhidden" value="<?php echo $paid; ?>">
                      <input type="number" min="1" id="pay" class="form-control" oninput="getfocus()"  value="" name ="actualpay" >
                  </div>

                   
                  <div class="form-group">
                      <label>Received From<span style="color: red"><?php if ($success==true): echo $successful; endif ?></span> </label>
                      <input type="text" class="form-control" id="from" name="received_from">
                   </div>

                   
                  <div class="form-group">
                    <label>Received By</label>
                      <input type="hidden" name="received_by" value="<?php echo $received_by; ?>" />
                      <input type="text" class="form-control" value="<?php echo $received_by; ?>" disabled="disabled">
                   </div>


        <div class="form-group" >
            <button type="submit" id="btntake" class="btn btn-danger" 
            name="take-bill" disabled>
        Pay</button></div>

        </form>
                </div>

                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
            </div>
    </div>
    </div>
    </div>
    </div>
<!-- Emergency Details End-->
    



       
    </div>

    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
        ============================================ -->
    <script src="js/editable/jquery.mockjax.js"></script>
    <script src="js/editable/mock-active.js"></script>
    <script src="js/editable/select2.js"></script>
    <script src="js/editable/moment.min.js"></script>
    <script src="js/editable/bootstrap-datetimepicker.js"></script>
    <script src="js/editable/bootstrap-editable.js"></script>
    <script src="js/editable/xediable-active.js"></script>
    <!-- Chart JS
        ============================================ -->
    <script src="js/chart/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- tab JS
        ============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->

</body>

<script>
  
  function getfocus(){

    var pa =document.getElementById("pay").value;
    var hidden =document.getElementById("paidhidden").value;
    var to =document.getElementById("tol").value;
    var answer = 0.00;
    var cal = parseFloat(pa)+parseFloat(hidden);

    if (cal>parseFloat(to)) {
      document.getElementById("warn").style="color:red";
      document.getElementById("warn").innerHTML = "(Please enter a value less than or equal to "+to+")";
      document.getElementById("bal").value = document.getElementById("not").value;
      document.getElementById("btntake").disabled=true;

    
    }else if (pa=="") {
      document.getElementById("warn").style="color:orange";
      document.getElementById("warn").innerHTML = "(Field is required)";
      document.getElementById("bal").value = document.getElementById("not").value;
      document.getElementById("btntake").disabled=true;
    
    }else{

    document.getElementById("warn").innerHTML = "Accepted";
    document.getElementById("warn").style="color:green";

    answer = parseFloat(to)-parseFloat(cal);
    document.getElementById("bal").value = answer.toString();
    document.getElementById("balhi").value = answer.toString();
    document.getElementById("payinto").value = cal.toString();

    document.getElementById("btntake").disabled=false;
    }
}


</script>

</html>
