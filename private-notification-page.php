<?php require_once "php/dbconnect.php" ?>
<?php require_once "php/notification-mobile-code.php" ?>
<?php require_once "header-mobile-other.php" ?>
<?php if ($permission==false ):header("location:404.html"); endif;?>


        <!-- Static Table Start -->
<?php 
$select = "SELECT * FROM notification_data WHERE student_id='".$id."'";
$selectQuery =  $conn->query($select);


while ($sql = mysqli_fetch_assoc($selectQuery)):


?>

        <div class="data-table-area mg-b-15">
            <div class="container-fluid" style="margin-top: 20px;">
                <div style=  
                "<?php if ($sql['read_status']=="yes") {echo "background: #73c3ff; color:#ffff; height: 50px; border-bottom-left-radius: 
                10px; border-bottom-right-radius: 
                10px; line-height: 50px; text-indent: 10px;";}

                else {echo "background: #2086d2; color:#ffff; height: 50px; border-bottom-left-radius: 
                10px; border-bottom-right-radius: 
                10px; line-height: 50px; text-indent: 10px;";} ?>"

                >

                <!-- title and date of the announcement created -->
                <span class="fa fa-bell"></span> Private Message &nbsp; <span style="font-size: 8pt; color:#255577 "><?php echo $sql['message_date']; ?></span>
                <!-- end -->

            </div>

                <div class="row" >
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline8-list" style="border-bottom-width: 2px; border-bottom-color:#d79732; border-bottom-style: solid;
                            background: linear-gradient(to top, #D8E9FF, #ffff);">
                            <div class="sparkline8-hd" >
                                <div class="main-sparkline8-hd" >
                                    <h1 style="color: #d79732;"><?php echo $sql['subject']; ?></h1>
                                </div>
                                <div class="sparkline8-graph">
                                    <div class="static-table-list">

                    
                                        <?php echo $sql['body']; ?>
                                       

                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        
    </div>
    <?php endwhile;?>

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