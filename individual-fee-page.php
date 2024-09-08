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

<div class="data-table-area mg-b-15" style="width: 90%; margin-right: auto; margin-left: auto;">

            <div class="container-fluid" style="margin-top: 20px;">
                <div  style="background: #D44B41; color:#ffff; height: 50px; border-bottom-left-radius: 
                10px; border-bottom-right-radius: 
                10px; line-height: 50px; text-indent: 10px;">
                <a href="fee-page.php" style="color: yellow;"><span class="fa fa-arrow-left"></span></a>
                <span class="fa fa-money"></span> <?php echo $sname ." ".$other_name; ?> 
                Fees Transactions 
            </div>

        </div>

        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row" >
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                        <div class="sparkline13-list" >
                            <div class="static-table-list">
                                <div id="toolbar">
                                </div>
                                    <table  class="table" >
                            <thead >
                              <tr>
                    <th>No.</th>
                    <th>Received By</th>
                    <th>Bill</th>
                    <th>Paid</th>
                    <th>Balance</th>
                    <th>Received From</th>
                    <th>Date <i style="font-size:6pt;">YYYY-MM-DD</i></th>
                    <th>Action</th>
                  
                  </tr>
                </thead>
                <tbody>
                  
                  <?php 
$select = "SELECT * FROM bill_records WHERE student_id = '".$id."'";
$count = 0;
$selectQuery =  $conn->query($select);

  while ($sql = mysqli_fetch_assoc($selectQuery)): 
    $count++;
      $date = substr($sql['date'], 0,10); 

?>
                  <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $sql['received_by']; ?></td>
                    <td><?php echo $sql['bill']; ?></td>
                    <td><?php echo $sql['paid']; ?></td>
                    <td><?php echo $sql['balance']; ?></td>
                    <td><?php echo $sql['received_from']; ?></td>
                    <td><?php echo $date; ?></td>
                    <td>
                      <a href="individual-fee-page.php?print=<?php echo $sql['id'];?>" class="btn btn-success"><span class="fa fa-print"></span></a> 
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