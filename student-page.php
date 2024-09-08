<?php require_once "php/dbconnect.php" ?>
<?php require_once "php/logincheck.php" ?>
<?php require_once "php/student-code.php" ?>
<?php if ($_SESSION['user_name']!="admin"):header("location:404.html"); endif;?>
<?php require_once "header.php" ?>

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
        <div class="data-table-area mg-b-15">

            <div class="container-fluid" style="margin-top: 20px;">
                <div  style="background: #2086d2; color:#ffff; height: 50px; border-bottom-left-radius: 
                10px; border-bottom-right-radius: 
                10px; line-height: 50px; text-indent: 10px;">
                <a href="index.php" style="color: yellow;"><span class="fa fa-arrow-left"></span></a>
                <span class="fa fa-table"></span> Student Data Table    
            </div>

                <div class="row" >
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list" >
                        <div class="sparkline13-list" >
                            
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                      <a href="pending-admission-page.php?id=0" class="btn btn-success">Pending Admissions</a>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true"  data-key-events="true" data-resizable="true"
                                         data-show-export="true"  data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                              
                                                <th >ID</th>
                                                <th >Picture</th>
                                                <th >Student</th>
                                                <th >Date of Birth</th>
                                                <th >Emergency</th>
                                                <th >Family</th>
                                                <th >Family Contact</th>
                                                <th >Admission Date</th>
                                                <th >Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php 
$select = "SELECT * 
                  FROM student 

                  JOIN family_data 
                  ON student.id = family_data.student_id 

                  JOIN significant_data 
                  ON family_data.student_id = significant_data.student_id 

                  JOIN emergency_data 
                  ON significant_data.student_id = emergency_data.student_id 
                  ";
$count = 0;
$selectQuery =  $conn->query($select);
// if (mysqli_num_rows($sqlEdit)>0): 

  while ($sql = mysqli_fetch_assoc($selectQuery)): 
    $count++
?>
                  
                  <tr>
                    <td><?php echo $count; ?></td>
                    <?php if (empty($sql['image'])): ?>
                         <td><img width="40px" src="php/passport/favicon.png"></td>
                    <?php else: ?>
                        <td><img width="40px" src="php/passport/<?php echo $sql['image']; ?>"></td>
                    <?php endif; ?>
                    <td><?php echo $sql['sname']." ".$sql['other_name']; ?></td>
                    <td><?php echo $sql['dob']; ?></td>
                    <td><?php echo $sql['emergency_phone']; ?></td>
                    <td><?php echo $sql['family_full_name']; ?></td>
                    <td><?php echo $sql['family_phone']; ?></td>
                    <td><?php echo $sql['joindate']; ?></td>
                    <td><a href="admission-review-edit-page.php?edit=<?php echo $sql['student_id']; ?>" class="btn btn-primary"><span class="fa fa-edit"></span></a> <a href="student-page.php?wipe=<?php echo $sql['student_id']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>
                                    
                    </tr> 
 <?php endwhile;  ?>      
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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