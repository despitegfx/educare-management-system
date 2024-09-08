<?php require_once "php/dbconnect.php" ?>
<?php require_once "php/logincheck.php" ?>
<?php if ($_SESSION['user_name']=="admin"):header("location:teacher-404.html"); endif;?>
<?php include_once "header-2.php" ?>

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <!-- Static Table Start -->
        <div class="data-table-area mg-b-15" style="margin-top: 20px; ">
            <div class="container-fluid">
                <div class="row" >
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list" style="background: #2086d2; border-radius: 5px;">
                            <div style="color:lightblue; font-size: 12pt;"class="sparkline13-hd" >
                                <span>Teaching |</span>
                                <span style="color:#ffff; font-size: 12pt;">
                                <?php echo $_SESSION['class']; ?>
                                </span>
                               <!--  <a href="admission-page.php" style="background: #20AC64; border-radius: 5px; color:#ffff; " class="btn btn-waring"><span class="educate-icon educate-student icon-wrap"></span> Admission</a> 
                                
                                <a href="add-user-page.php" style="background: #E9A61F; border-radius: 5px; color:#000000; " class="btn btn-waring"><span class="fa fa-user"></span> Add User</a>  -->
                                <!-- content here -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
  <!-- Static Table end -->
       
    </div>
        <div class="traffic-analysis-area" style="margin-top: 20px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="teacher-attendance-page.php"><div class="social-media-edu twitter-cl res-mg-t-30 table-mg-t-pro-n"
                        style="background: black; border-radius: 5px; color:#fff;">
                            <i style="color:#fff; font-size: 50pt;" class="educate-icon educate-pages icon-wrap"></i>
                            <div class="social-edu-ctn">
                                <h3 style="color:#fff; font-size: 16pt;">Attendance</h3>
                                <p style="color:#fff;" >View</p>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="teacher-report-page.php"><div class="social-media-edu linkedin-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30" style="background: #20AC64; border-radius: 5px; color:#fff;">
                            <i style="color:#fff; font-size: 50pt;" class="educate-icon educate-data-table icon-wrap"></i>
                            <div class="social-edu-ctn">
                                <h3 style="color:#fff; font-size: 16pt;">Class Report</h3>
                                <p style="color:#fff;">View</p>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="teacher-material-page.php"><div class="social-media-edu youtube-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30" style="background: #E9A61F; border-radius: 5px; color:#fff;">
                            <i style="color:#fff; font-size: 50pt;" class="educate-icon educate-form icon-wrap"></i>
                            <div class="social-edu-ctn">
                                <h3 style="color:#fff; font-size: 16pt;">Materials</h3>
                                <p style="color:#fff;">View</p>
                            </div>
                        </div></a>
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