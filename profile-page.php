<?php require_once "php/dbconnect.php" ?>
<?php require_once "php/logincheck.php" ?>
<?php require_once "php/profile-code.php" ?>
<?php if ($_SESSION['user_name']!="admin"):header("location:404.html"); endif;?>
<?php if ($permission==false ):header("location:404.html"); endif;?>
<?php require_once "header.php" ?>


            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                       
                    </div>
                </div>
            </div>
        </div>


<div class="data-table-area mg-b-15" style="width: 90%; margin-right: auto; margin-left: auto;">

        <div class="container-fluid" style="margin-top: 20px;">
            <div  style="background: #2086d2; color:#ffff; height: 50px; border-bottom-left-radius: 
                10px; border-bottom-right-radius: 
                10px; line-height: 50px; text-indent: 10px;">
                <a href="material-page.php" style="color: yellow;"><span class="fa fa-arrow-left"></span></a>&nbsp&nbspMy Profile    
            </div>
        </div>


<div class="single-pro-review-area mt-t-30 mg-b-15" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
                        <div class="profile-info-inner">
                            <div class="profile-img" style="margin-left: auto; margin-right: auto; width: 60%; border-width: 8px; border-color:#2086d2; border-style: solid; border-radius: 100%; padding: 30px;">
                                <img src="img/profile/1.jpg" alt=""  style="margin-top: 0; "/>
                            </div>
                            <div class="profile-details-hr" style="margin-top:0; width: ">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Full Name</b><br>
                                                <?php echo $rowsEdit['name']; ?></p>
                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Email</b><br>
                                               <?php echo $rowsEdit['email']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Phone</b><br>
                                                <?php echo $rowsEdit['phone']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="address-hr">
                                            <p><b>Address</b><br>
                                                <?php echo $rowsEdit['address']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                       <!--  <div class="address-hr">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <h3>500</h3>
                                        </div> -->
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="address-hr">
                                            <a href="?update=<?php echo $_SESSION['id'] ?>" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <!-- <div class="address-hr">
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <h3>600</h3>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if ($edit == true):?>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" >
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn" style="border-width: 3px; border-color:#00000015;; border-style: solid; border-radius: 5px;">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                            
                                            <form method="POST">
                                            <div class="review-content-section" >
                                                <div class="row">
                                                    <div class="col-lg-12">

                                                            <input hidden name="id" value="<?php echo $_SESSION['id']; ?>">

                                                        <div class="form-group">
                                                            <lable>Full Name</lable>
                                                            <input type="text" class="form-control" disabled="" value="<?php echo $rowsEdit['name']; ?>">
                                                        </div>
                                                
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <lable>Email</lable>
                                                            <input type="email" class="form-control" name="email"
                                                            value="<?php echo $rowsEdit['email']; ?>">
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <lable>Phone</lable>
                                                            <input type="number" min="0" 
                                                            class="form-control" name="phone" value="<?php echo $rowsEdit['phone']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <lable>Address</lable>
                                                            <input type="text" min="0" 
                                                            class="form-control" name="address" value="<?php echo $rowsEdit['address']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress mg-t-15">
                                                            <button type="submit" name="save" class="btn btn-primary">Save Changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                    
                        </div>
                    </div>
                      <?php endif; ?>
                          
                </div>
            </div>
        </div>


       
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