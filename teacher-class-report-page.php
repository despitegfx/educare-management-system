<?php require_once "php/dbconnect.php" ?>
<?php require_once "php/logincheck.php" ?>
<?php require_once "php/notification-code.php" ?>
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
<div class="data-table-area mg-b-15" style="width: 70%; margin-right: auto; margin-left: auto;">

        <div class="container-fluid" style="margin-top: 20px;">
            <div  style="background: #20AC64; color:#ffff; height: 50px; border-bottom-left-radius: 
                10px; border-bottom-right-radius: 
                10px; line-height: 50px; text-indent: 10px;">
                <a href="teacher-report-page.php" style="color: yellow;"><span class="fa fa-arrow-left"></span></a>&nbsp&nbspCreate Class Report  
            </div>       
        </div>


<div class="mailbox-area mg-b-15">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">

<!-- create class report -->
                        <div class="hpanel email-compose mailbox-view">
                            <div class="panel-heading hbuilt">

                                <div class="p-xs h4">
                                    <small class="pull-right view-hd-ml">
                                            Class Report Form
                                        </small><?php if ($successful=="Report successfully sent"): ?>
                                            <em style="color: orange;"><?php echo $successful; ?></em>
                                            
                                        <?php elseif ($successful=="Error! Report sending failed"):?>
                                            <em style="color: red;"><?php echo $successful; ?></em>
                                        <?php endif;?>

                                </div>
                            </div>
                            <div class="border-top border-left border-right bg-light">
                                <div class="p-m custom-address-mailbox">

                                    <form method="post">
                                    <div>
                                        <input type="hidden" name="report_from" value="<?php echo $report_from; ?>">
                                        <span class="font-extra-bold"><b>From: </b><?php echo $report_from; ?></span>
                                    </div>
                                    <div>
                                        <input type="hidden" name="report_student" value="<?php echo $report_student; ?>">
                                        <span class="font-extra-bold"><b>Student: </b><?php echo $report_student; ?></span>
                                    </div>
                                    <div>
                                        <input type="hidden" name="report_id" value="<?php echo $report_id; ?>">
                                        <span class="font-extra-bold"><b>Index Number: </b><?php echo $report_id; ?></span>
                                    </div>
                                    <div>
                                        <input type="hidden" name="report_class" value="<?php echo $report_class; ?>">
                                        <span class="font-extra-bold"><b>Class: </b><?php echo $report_class; ?></span>
                                    </div><br>
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text"  class="form-control" name="report_subject" 
                                        placeholder="What is the report about?" value="<?php echo $report_subject; ?>" >
                                    </div>

                                </div>
                            <div class="panel-body panel-csm">
                                <div>
                                    <label>Report's Brief</label>
                                     <div class="form-group">
                                    <textarea class="form-control" name="report_body" style="height: 260px;"><?php echo $report_body; ?></textarea>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group" >
                                <input type="submit"  class="btn btn-success" name="send-class-report" value="Send Report">
                            </div>

                       </form>


<!-- create Ends -->


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

    <!-- jquery.js JS
        ============================================ -->

    <!-- <script src="js/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            setInterval(function(){
                $('#user-f').load("php/load.php")
            }, 1000);
        });
    </script> -->

</body>

</html>