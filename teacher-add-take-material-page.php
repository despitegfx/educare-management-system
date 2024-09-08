<?php require_once "php/dbconnect.php" ?>
<?php require_once "php/logincheck.php" ?>
<?php require_once "php/material-code.php" ?>
<?php if ($_SESSION['user_name']=="admin"):header("location:teacher-404.html"); endif;?>
<?php if ($permission==false ):header("location:teacher-404.html"); endif;?>
<?php require_once "header-2.php" ?>


            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                       
                    </div>
                </div>
            </div>
        </div>

<div class="data-table-area mg-b-15" style="width: 40%; margin-right: auto; margin-left: auto;">

        <div class="container-fluid" style="margin-top: 20px;">

            <?php if ($edit == false):?>
            <div  style="background: #20AC64; color:#ffff; height: 50px; border-bottom-left-radius: 
                10px; border-bottom-right-radius: 
                10px; line-height: 50px; text-indent: 10px;">
                <a href="teacher-material-page.php" style="color: yellow;"><span class="fa fa-arrow-left"></span></a>&nbsp&nbspAdd Material    
            </div>
            <?php endif; ?>

            <?php if ($edit == true):?>
            <div  style="background: #D44B41; color:#ffff; height: 50px; border-bottom-left-radius: 
                10px; border-bottom-right-radius: 
                10px; line-height: 50px; text-indent: 10px;">
                <a href="teacher-material-page.php" style="color: yellow;"><span class="fa fa-arrow-left"></span></a>&nbsp&nbspTake Material    
            </div>
            <?php endif; ?>

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

                    <form method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <div class="form-group">
                        <label>Tissue</label>
                        <input type="number" min="1" class="form-control" name="tissue" 
                        placeholder="Number of tissues">
                    </div>

                     <div class="form-group">
                        <label>Diaper</label>
                        <input type="number" min="1" class="form-control" name="diaper" 
                        placeholder="Number of diapers">
                    </div>

        <?php if ($edit == true):?>

        <div class="form-group" >
            <button type="submit" class="btn btn-danger" name="take-material">
        Take</button></div>

        <?php elseif ($edit == false): ?>
                                        
        <div class="form-group" >
            <button type="submit" class="btn btn-success" name="add-material">
        Add</button></div>
                                        
        <?php endif; ?>

        </form>

    <?php if ($error=="Insufficient materials available!" || 
              $error=="Empty entries, at least make 1 entey!"):?>
        
        <div class="alert alert-warning alert-mg-b">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <strong>Warning!</strong> <?php echo $error; ?>
        </div>
        
    <?php elseif ($successful!="0" ): ?>

        <div class="alert alert-success alert-mg-b">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> <?php echo $successful; ?>
        </div>

    <?php endif; ?>
    
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

</html>