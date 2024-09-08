<?php require_once "php/dbconnect.php" ?>
<?php require_once "php/logincheck.php" ?>
<?php require_once "php/notification-mobile-code.php" ?>
<?php if ($_SESSION['user_name']!="admin"):header("location:404.html"); endif;?>
<?php //if ($permission==false ):header("location:404.html"); endif;?>
<?php require_once "header.php" ?>


            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                       
                    </div>
                </div>
            </div>
        </div>


<div class="data-table-area mg-b-15" style="width: 95%; margin-right: auto; margin-left: auto;">

        <div class="container-fluid" style="margin-top: 20px;">
            <div  style="background: #2086d2; color:#ffff; height: 50px; border-bottom-left-radius: 
                10px; border-bottom-right-radius: 
                10px; line-height: 50px; text-indent: 10px;">
                <a href="index.php" style="color: yellow;"><span class="fa fa-arrow-left"></span></a>&nbsp&nbspMake Announcement   
            </div>    
        </div>


<div class="mailbox-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel responsive-mg-b-30">
                            <div class="panel-body">

                                <ul class="mailbox-list" >
                                    <li class="active">
                                        <a  style="<?php if($g_notify==true): 
                                        echo "background: orange;";endif; ?>" href="?general_notify">
                                                <span class="pull-right">12</span>
                                                <i class="fa fa-bell"></i> General
                                            </a>
                                    </li>
                                    <li class="active">
                                        <a style="<?php if($p_notify==true || $sp_notify==true):
                                        echo "background: #2086d2;"; endif;?>" href="?private_notify">
                                            <span class="pull-right">12</span>
                                            <i class="fa fa-user"></i> Private</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                

 <!-- messages list -->
                    <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                        


<?php if($g_notify==true):?>
<!-- view message general -->
                        <div class="hpanel email-compose mailbox-view">
                            <div class="panel-heading hbuilt">

                                <div class="p-xs h4">
                                    <small class="pull-right view-hd-ml">
                                            To all parents
                                        </small>
                                <?php if ($successful=="All fields are required!"): ?>
                                <span style="color: red;"><?php echo "$successful"; ?></span>

                                <?php elseif ($successful=="Something went wrong, sending failed!"): ?>
                                <span style="color: orange;"><?php echo "$successful"; ?></span>

                                <?php elseif ($successful=="Message Sent"): ?>
                                <span style="color: green;"><?php echo "$successful"; ?></span>
                            <?php endif;?>

                                </div>
                            </div>

                            <form method="post">
                            <input type="hidden" name="id" value="0">
                            <div class="border-top border-left border-right bg-light">
                                <div class="p-m custom-address-mailbox">
                                   <div class="form-group">
                                    <label>Subject:</label>
                                    <input type="text" name="subject" placeholder="Message Subject" class="form-control" >  
                                    </div> 
                                </div>
                            </div>
                            <div class="panel-body panel-csm">
                                    <div class="form-group">
                                    <label>Message Body:</label>
                                    <textarea  name="body" class="form-control" placeholder="Your message here"></textarea>
                                    </div>
                                </div>

                            <div class="panel-body panel-csm">
                            <button class="btn btn-primary"  type="submit" name="send">
                            <span class="educate-icon educate-interface"></span> Send</button>
                                </div>


                                </form>
                        </div>
<!-- View Ends -->

<?php elseif($p_notify==true):?>
<!-- view message private -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                        <div class="sparkline8-list"  style="border-bottom-width: 2px; border-bottom-color:#20AC64; border-bottom-style: solid;
                    background: linear-gradient(to top, #DDF8EA, #ffff);">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1 style="color: #20AC64;">Parents</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Parent Name</th>
                                                <th>Student Name</th>
                                                <th>Student ID</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
    $select = "SELECT * 
                  FROM student 

                  JOIN parent 
                  ON student.id = parent.student_id 
                  ";
$count = 0;
$selectQuery =  $conn->query($select);
// if (mysqli_num_rows($sqlEdit)>0): 

  while ($sql = mysqli_fetch_assoc($selectQuery)): 
    $count++
?>
                  
                  <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $sql['firstname']." ".$sql['lastname']; ?></td>
                    <td><?php echo $sql['sname']." ".$sql['other_name']; ?></td>
                    <td>#</td>
                    <td><a href="create-general-notification-page.php?send_private=<?php echo $sql['student_id']; ?>" class="btn btn-success"><span class="educate-icon educate-message"></span></a></td>
                                    
                    </tr> 
 <?php endwhile;  ?>      
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- View Ends -->

<?php elseif($sp_notify==true):?>
<!-- view message general -->
                        <div class="hpanel email-compose mailbox-view">
                            <div class="panel-heading hbuilt">

                                <div class="p-xs h4">
                                    <small class="pull-right view-hd-ml">
                                            A Parent
                                        </small>
                                <?php if ($successful=="All fields are required!"): ?>
                                <span style="color: red;"><?php echo "$successful"; ?></span>

                                <?php elseif ($successful=="Something went wrong, sending failed!"): ?>
                                <span style="color: orange;"><?php echo "$successful"; ?></span>

                                <?php elseif ($successful=="Message Sent"): ?>
                                <span style="color: green;"><?php echo "$successful"; ?></span>
                            <?php endif;?>

                                </div>
                            </div>

                            <form method="post">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="border-top border-left border-right bg-light">
                                <div class="p-m custom-address-mailbox">
                                   <div class="form-group">
                                    <label>Subject:</label>
                                    <input type="text" name="subject" placeholder="Message Subject" class="form-control" >  
                                    </div> 
                                </div>
                            </div>
                            <div class="panel-body panel-csm">
                                    <div class="form-group">
                                    <label>Message Body:</label>
                                    <textarea  name="body" class="form-control" placeholder="Your message here"></textarea>
                                    </div>
                                </div>

                            <div class="panel-body panel-csm">
                            <button class="btn btn-primary"  type="submit" name="send">
                            <span class="educate-icon educate-interface"></span> Send</button>
                                </div>


                                </form>
                        </div>
<!-- View Ends -->
<?php endif; ?> 

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