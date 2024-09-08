<?php require_once "php/dbconnect.php" ?>
<?php require_once "php/logincheck.php" ?>
<?php require_once "php/report-code.php" ?>
<?php if ($_SESSION['user_name']=="admin"):header("location:teacher-404.html"); endif;?>
<?php if ($permission==false ):header("location:teacher-404.html"); endif;?>
<?php require_once "header-2.php" ?>

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
        <div class="data-table-area mg-b-15" >

            <div class="container-fluid" style="margin-top: 20px;">

                <?php if ($createreport==true): ?>
                <div  style="background: #20AC64; color:#ffff; height: 50px; border-radius: 
                5px; line-height: 50px; text-indent: 10px; font-size: 14pt;">
               <a href="teacher-report-page.php" style="color: yellow;"><span class="fa fa-arrow-left"></span></a>
                <span class="fa fa-file"></span> Report Form    
                </div>
            <?php endif; ?>

            <?php if ($individualedit==true):?>
                <div  style="background: #20AC64; color:#ffff; height: 50px; border-radius: 
                5px; line-height: 50px; text-indent: 10px; font-size: 14pt;">
               <a  href="teacher-individual-report-page.php?view=<?php echo $rowseditreport['student_id']; ?>" style="color: yellow;"><span class="fa fa-arrow-left"></span></a>
                <span class="fa fa-edit"></span> Edit Report  
                </div>
            <?php endif; ?>
            
            <?php if ($individualview==true): ?>
                <div  style="background: #20AC64; color:#ffff; height: 50px; border-radius: 
                5px; line-height: 50px; text-indent: 10px; font-size: 14pt;">
               <a href="teacher-individual-report-page.php?view=<?php echo $rowsviewreport['student_id']; ?>" style="color: yellow;"><span class="fa fa-arrow-left"></span></a>
                <span class="fa fa-eye"></span> View Report    
                </div>
            <?php endif; ?>
        
    </div>

    <form method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
<!-- Student Details -->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid" >
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-payment-inner-st" style="border-width: 3px; border-color:#00000015;; border-style: solid; border-radius: 5px;">
                          
            <span style="font-size: 14pt; font-weight: bold; color: #20AC64; "><?php echo $sname." ".$other_name; ?></span><hr> 

            <div id="myTabContent" class="tab-content custom-product-edit">
                <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="review-content-section">
                <div id="dropzone1" class="pro-ad">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">


                    <?php if ($individualview==true): ?>
                   
                    <div class="message" >
                        <span class="message-author">Heath</span>
                        <span class="message-content"><?php echo $rowsviewreport['health'];?>
                        </span>
                    </div>

                    <div class="message" >
                        <span class="message-author">Meal</span>
                        <span class="message-content"><?php echo $rowsviewreport['meal']; ?>
                        </span>
                    </div>

                    <div class="message" >
                        <span class="message-author">Mood</span>
                        <span class="message-content"><?php echo $rowsviewreport['mood']; ?>
                        </span>
                    </div>

                    <div class="message" >
                        <span class="message-author">Bathroom</span>
                        <span class="message-content"><?php echo $rowsviewreport['bathroom']; ?>
                        </span>
                    </div>

                    <div class="message" >
                        <span class="message-author">Activities</span>
                        <span class="message-content"><?php echo $rowsviewreport['activities']; ?>
                        </span>
                    </div>
                    
                  <?php endif; ?>

                    <?php if ($createreport==true || $individualedit==true): ?>

                    <div class="<?php if ($success==true): echo 'form-group-inner input-with-error'; else: echo 'form-group';endif ?>">
                        <label>Health</label>
                        <textarea style="height: 80px;" name="health" class="form-control"><?php echo $health; ?></textarea>
                    </div>

                    <div class="<?php if ($success==true): echo 'form-group-inner input-with-error'; else: echo 'form-group';endif ?>">
                        <label>Meal</label>
                        <textarea style="height: 80px;" name="meal" class="form-control"><?php echo $meal; ?></textarea>
                    </div>
                     
                      <div class="<?php if ($success==true): echo 'form-group-inner input-with-error'; else: echo 'form-group';endif ?>">
                        <label>Mood</label>
                        <textarea style="height: 80px;" name="mood" class="form-control"><?php echo $mood; ?></textarea>
                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                 
                     <div class="<?php if ($success==true): echo 'form-group-inner input-with-error'; else: echo 'form-group';endif ?>">
                        <label>Bathroom</label>
                        <textarea style="height: 80px;" name="bathroom" class="form-control"><?php echo $bathroom; ?></textarea>
                    </div>
                            
                    <div class="<?php if ($success==true): echo 'form-group-inner input-with-error'; else: echo 'form-group';endif ?>">
                        <label>Activities</label>
                        <textarea style="height: 80px;" name="activities" class="form-control"><?php echo $activities; ?></textarea>
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

            <?php if ($individualedit==true):?>
            <span style="color: #84C4A3;"><?php echo $rowseditreport['date']; ?></span>
            <?php endif; ?>

            <?php if ($individualview==true): ?>
            <span style="color: #84C4A3;"><?php echo $rowsviewreport['date']; ?></span>
            <?php endif; ?>
    </div>
    </div>
    </div>
    </div>
<!-- Student Details End-->


        <div class="container-fluid" style="margin-top: 10px; margin-bottom: 100px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div  style="height: 50px; border-radius: 5px; line-height: 50px; 
                   font-size: 14pt;">

            <?php if ($individualedit==true):?>

                <button style="width: 15%;" class="btn btn-success" type="submit" name="update">Save Changes</button>
                <a href="teacher-individual-report-page.php?view=<?php echo $rowseditreport['student_id']; ?>"  class="btn btn-warning"> Cancel</a> 

            <?php endif; ?>
            <?php if ($createreport==true): ?>

                <button style="width: 15%;" class="btn btn-primary" type="submit" name="send">
                    <span class="educate-icon educate-interface"></span> Send</button>
                <a href="teacher-report-page.php"  class="btn btn-warning"> Cancel</a>  

            <?php endif; ?>

                </div>

            </div>        
        </div>
    </form>

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
    <!-- datapicker JS
        ============================================ -->
    <script src="js/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/datapicker/datepicker-active.js"></script>
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