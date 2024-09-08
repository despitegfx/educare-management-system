<?php require_once "php/dbconnect.php" ?>
<?php require_once "php/student-code.php" ?>
<?php if ($permission==false ):header("location:404.html"); endif;?>
<?php require_once "header-mobile.php" ?>

        </div>

        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15" >

    <form method="post" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?php echo $id ?>">
<!-- Student Details -->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid" >
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><hr>
        <span>Fields with <b style="font-size:14pt; color: red;">*</b> are required!</span><br><hr>
    <div class="product-payment-inner-st" style="border-width: 1px; border-color:#00000015;; border-style: solid; border-radius: 5px;">
                          
            <span style="font-size: 14pt; font-weight: bold; color: #2086d2; ">Student Details</span>
            <div id="myTabContent" class="tab-content custom-product-edit">
                <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="review-content-section">
                <div id="dropzone1" class="pro-ad">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <div class="<?php if ($success==true): echo 'form-group-inner input-with-error'; else: echo 'form-group';endif ?>">
                        <label>Surname*</label>
                        <input name="sname" type="text" class="form-control"value="<?php echo $sname ?>">
                    </div>

                    <div class="<?php if ($success==true): echo 'form-group-inner input-with-error'; else: echo 'form-group';endif ?>">
                        <label>Other Name*</label>
                        <input name="other_name" type="text" class="form-control" value="<?php echo $other_name ?>">
                    </div>

                    <div class="<?php if ($success==true): echo 'form-group-inner input-with-error data-custon-pick'; else: echo 'form-group data-custon-pick';endif ?>" id="data_1">
                        <label style="font-weight: bold;">Date Of Birth*</label>
                        <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input name="dob" type="text" class="form-control" value="<?php echo $dob ?>"></div>
                    </div>
                     
                      <div class="form-group">
                        <label>Place of Birth</label>
                         <input name="place_of_birth" type="text" class="form-control" 
                         value="<?php echo $place_of_birth ?>">
                    </div>

                    <div class="form-group">
                        <label <?php if ($success==true): echo 'style="color:red;"'; endif ?>>Sex*</label>
                        <select name="sex" class="form-control">
                        <option><?php echo $sex ?></option>
                        <option>Male</option>
                        <option>Female</option>
                        </select>
                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                 
                     <div class="form-group">
                        <label>Home Town</label>
                         <input name="home_town" type="text" class="form-control" value="<?php echo $home_town ?>">
                    </div>
                            
                    <div class="form-group">
                        <label>Mother Tongue</label>
                        <input name="mother_tongue" type="text" class="form-control" 
                        value="<?php echo $mother_tongue ?>">
                    </div>

                    <div class="form-group">
                        <label>School Attended</label>
                        <input name="school_attended" type="text" class="form-control" 
                        value="<?php echo $school_attended ?>">
                    </div>
                    
                                                           
                    <div class="form-group">
                        <label <?php if ($success==true): echo 'style="color:red;"'; endif ?>>Passport Picture* 
                            <span style="color: red;"><?php echo $image_error; ?></span></label>
                        <input type="file" name="image" class="form-control">
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
    </div>
<!-- Student Details End-->

<!-- Family Details -->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid" style="margin-top: 20px; ">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
    <div class="product-payment-inner-st" style="border-width: 1px; border-color:#00000015;; border-style: solid; border-radius: 5px;">
                          
            <span style="font-size: 14pt; font-weight: bold; color: #2086d2; ">Family Details</span>
            <div id="myTabContent" class="tab-content custom-product-edit">
                <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="review-content-section">
                <div id="dropzone1" class="pro-ad">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <div class="<?php if ($success==true): echo 'form-group-inner input-with-error'; else: echo 'form-group';endif ?>">
                        <label>Full Name*</label>
                        <input name="family_full_name" type="text" class="form-control" 
                        value="<?php echo $family_full_name ?>">
                    </div>

                    <div class="<?php if ($success==true): echo 'form-group-inner input-with-error'; else: echo 'form-group';endif ?>">
                         <label>Relationship*</label>
                        <input name="family_relationship" type="text" class="form-control" 
                        name="family_relationship" 
                        value="<?php echo $family_relationship ?>">
                    </div>

                     <div class="<?php if ($success==true): echo 'form-group-inner input-with-error'; else: echo 'form-group';endif ?>">
                        <label>Occupation*</label>
                        <input name="family_occupation" type="text" class="form-control" 
                        name="family_relationship" 
                        value="<?php echo $family_occupation ?>">
                    </div>
                     
                      <div class="<?php if ($success==true): echo 'form-group-inner input-with-error'; else: echo 'form-group';endif ?>">
                        <label>Place of Work*</label>
                         <input name="family_place_of_work" type="text" class="form-control"
                         value="<?php echo $family_place_of_work ?>">
                    </div>

                    <div class="<?php if ($success==true): echo 'form-group-inner input-with-error'; else: echo 'form-group';endif ?>">
                        <label>Address*</label>
                         <input  name="family_address" type="text" class="form-control" 
                         value="<?php echo $family_address ?>">
                    </div>

                    <div class="form-group">
                         <label <?php if ($success==true): echo 'style="color:red;"'; endif ?>>Religion*</label>
                        <select name="family_religion" class="form-control">
                            <option><?php echo $family_religion ?></option>
                            <option>Other</option>
                            <option>Christianity</option>
                            <option>Islamic</option>
                            <option>Traditional</option>
                        </select>
                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             
                     <div class="form-group">
                        <label>Nationality</label>
                         <input name="family_nationality" type="text" class="form-control" 
                         value="<?php echo $family_nationality ?>">
                    </div>

                     <div class="form-group">
                        <label>Level of Education</label>
                        <select name="family_level_of_edu" class="form-control">
                            <option><?php echo $family_level_of_edu ?></option>
                            <option>None</option>
                            <option>Tertiary or Higher</option>
                            <option>Senior High</option>
                            <option>Junior High</option>
                        </select>
                    </div>

                    <div class="form-group">
                         <label>Marital Status</label>
                        <select name="family_marital_status" class="form-control">
                            <option><?php echo $family_marital_status ?></option>
                            <option>Single</option>
                            <option>Married</option>
                            <option>Divorced</option>
                            <option>Widow</option>
                        </select>
                    </div>
                            
                    <div class="<?php if ($success==true): echo 'form-group-inner input-with-error'; else: echo 'form-group';endif ?>">
                        <label>Email*</label>
                        <input name="family_email" type="text" class="form-control" 
                        value="<?php echo $family_email ?>">
                    </div>

                    <div class="<?php if ($success==true): echo 'form-group-inner input-with-error'; else: echo 'form-group';endif ?>">
                        <label>Phone*</label>
                        <input name="family_phone" type="text" class="form-control" value="<?php echo $family_phone ?>">
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
    </div>
<!-- Family Details End-->

<!-- Significant Details -->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid" style="margin-top: 20px;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-payment-inner-st" style="border-width: 1px; border-color:#00000015;; border-style: solid; border-radius: 5px;">
                          
            <span style="font-size: 14pt; font-weight: bold; color: #2086d2; ">Significant Details</span>
            <div id="myTabContent" class="tab-content custom-product-edit">
                <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="review-content-section">
                <div id="dropzone1" class="pro-ad">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <div class="form-group">
                        <label>Living With</label>
                        <select name="significant_live_with" class="form-control">
                            <option><?php echo $significant_live_with ?></option>
                            <option>Mother</option>
                            <option>Father</option>
                            <option>Brother</option>
                            <option>Sister</option>
                            <option>Cousin</option>
                            <option>Auntie</option>
                            <option>Uncle</option>
                            <option>Grandma</option>
                            <option>Grandpa</option>
                            <option>Not a Family Member</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Full Name</label>
                        <input name="significant_full_name" type="text" class="form-control"
                        value="<?php echo $significant_languages_spoken ?>">
                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             
                     <div class="form-group">
                        <label>Languages Spoken</label>
                         <input name="significant_languages_spoken" type="text" 
                         class="form-control" 
                         value="<?php echo $significant_languages_spoken ?>">
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
    </div>
<!-- Significant Details End-->

<!-- Emergency Details -->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid" style="margin-top: 20px;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-payment-inner-st" style="border-width: 1px; border-color:#00000015;; border-style: solid; border-radius: 5px;">
                          
            <span style="font-size: 14pt; font-weight: bold; color: #2086d2; ">Emergency Details</span>
            <div id="myTabContent" class="tab-content custom-product-edit">
                <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="review-content-section">
                <div id="dropzone1" class="pro-ad">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <div class="<?php if ($success==true): echo 'form-group-inner input-with-error'; else: echo 'form-group';endif ?>">
                        <label>Full Name*</label>
                        <input name="emergency_full_name" type="text" class="form-control" 
                        value="<?php echo $emergency_full_name ?>">
                    </div>

                    <div class="<?php if ($success==true): echo 'form-group-inner input-with-error'; else: echo 'form-group';endif ?>">
                        <label>House Address*</label>
                        <input name="emergency_house_address" type="text" class="form-control"
                        value="<?php echo $emergency_house_address ?>">
                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             
                     <div class="<?php if ($success==true): echo 'form-group-inner input-with-error'; else: echo 'form-group';endif ?>">
                        <label>Phone*</label>
                         <input name="emergency_phone" type="text" class="form-control"
                         value="<?php echo $emergency_phone ?>">
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
    </div>
<!-- Emergency Details End-->

        <div class="container-fluid" style="margin-top: 10px; margin-bottom: 100px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div  style="height: 50px; border-radius: 5px; line-height: 50px; 
                   font-size: 14pt;">

            <!-- <?php if ($edit == false): ?> -->

                <button class="btn btn-primary" type="submit" name="admission">Submit</button> <?php echo $progress; ?>
                <!-- <a href="student-page.php"  class="btn btn-warning">Cancel</a>   -->

            <!-- <?php endif; ?> -->

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