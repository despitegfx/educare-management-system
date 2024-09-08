<?php require_once "php/dbconnect.php" ?>
<?php require_once "php/logincheck.php" ?>
<?php require_once "php/notification-code.php" ?>
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
                <a href="index.php" style="color: yellow;"><span class="fa fa-arrow-left"></span></a>&nbsp&nbspNotifications  
            </div>       
        </div>


<div class="mailbox-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel responsive-mg-b-30">
                            <div class="panel-body">

                                <ul class="mailbox-list">
                                    <li class="active">

                                                <a  style="<?php if($g_notify==true || $sp_notify==true): 
                                        echo "background: #ffc6b5;";endif; ?>" href="?general_notify">
                                                <span class="pull-right">12</span>
                                                <i class="fa fa-envelope"></i> Chat Messages
                                            </a>
                                    </li>
                                    <li class="active">
                                         <a  style="<?php if($p_notify==true || $vcr_notify==true): 
                                        echo "background: #b5ffe9;";endif; ?>" href="?private_notify">
                                            <span class="pull-right">12</span>
                                            <i class="fa fa-file"></i> Class Reports</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

 <!-- messages list -->
                    <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">

                        <?php if ($g_notify==true): ?>
                        <div class="hpanel">
                         <!--    <div class="panel-heading hbuilt mailbox-hd">
                                <div class="text-center p-xs font-normal">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-sm" placeholder="Search email in your inbox..."> <span class="input-group-btn active-hook"> <button type="button" class="btn btn-sm btn-default">Search
                                            </button> </span></div>
                                </div>
                            </div> -->
                            <div class="panel-body">
                            
                                <div class="table-responsive ib-tb">
                                    <table class="table table-hover table-mailbox">
                                        <tbody>

<?php 
$select = "SELECT * FROM parent WHERE student_id in (SELECT from_who FROM chat_data)";
$selectQuery =  $conn->query($select);

while ($sqlk = mysqli_fetch_assoc($selectQuery)):


?>                                        
                                <tr class="unread">
                                    <td class="">
                                        <div class="checkbox checkbox-single checkbox-success">
                                            <input type="checkbox" checked><label></label>
                                        </div>
                                    </td>
                        <td><a href="?open_chat=<?php echo $sqlk['student_id'];?>">
                            <?php echo $sqlk['firstname']." ".$sqlk['lastname'];?></a></td>
                        <!-- <td><a href="?send_private"><?php echo $sqlk['firstname']." ".$sqlk['lastname'];?></a></td> -->
                        <td class="text-right mail-date">Chat</td>
                                        </tr>
    <?php  endwhile ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-footer ib-ml-ft" style="background: #cb8f7d;">
                                <i class="fa fa-eye"> </i> Chat Messages
                            </div>
                        </div>
                    <?php endif; ?>
<!-- ends message list -->

<!-- class report list -->
                        <?php if ($p_notify==true): ?>
                        <div class="hpanel">
                         <!--    <div class="panel-heading hbuilt mailbox-hd">
                                <div class="text-center p-xs font-normal">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-sm" placeholder="Search email in your inbox..."> <span class="input-group-btn active-hook"> <button type="button" class="btn btn-sm btn-default">Search
                                            </button> </span></div>
                                </div>
                            </div> -->
                            <div class="panel-body">
                            
                                <div class="table-responsive ib-tb">
                                    <table class="table table-hover table-mailbox">
                                        <tbody>

           <?php 
$selectclassreport = "SELECT id,report_from,report_date,report_class FROM class_report_data";
$selectQueryclassreport =  $conn->query($selectclassreport);

while ($sqlclassreport = mysqli_fetch_assoc($selectQueryclassreport)):


?>                                           
                                            <tr class="unread">
                                                <td class="">
                                                    <div class="checkbox checkbox-single checkbox-success">
                                                        <input type="checkbox" checked>
                                                        <label></label>
                                                    </div>
                                                </td>
                                    <td><a href="?view_class_report=<?php echo $sqlclassreport['id'] ; ?>">
                                        <?php echo $sqlclassreport['report_from'] ; ?></a></td>

                                    <td><a href="?view_class_report=<?php echo $sqlclassreport['id'] ; ?>">
                                        <?php echo $sqlclassreport['report_class'] ; ?></a></td>

                                    <td class="text-right mail-date"><?php echo $sqlclassreport['report_date'] ; ?></td>
                                            </tr>

                                       <?php endwhile; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-footer ib-ml-ft" style="background: #7dcbad;">
                                <i class="fa fa-eye"> </i> Class Reports
                            </div>
                        </div>
                    <?php endif; ?>
<!-- ends class report list -->

<!-- view class report -->
            <?php if ($vcr_notify==true): ?>
                        <div class="hpanel email-compose mailbox-view">
                            <div class="panel-heading hbuilt">

                                <div class="p-xs h4">
                                    <small class="pull-right view-hd-ml">
                                            <?php echo $report_date; ?>
                                        </small> Class Report view

                                </div>
                            </div>
                            <div class="border-top border-left border-right bg-light">
                                <div class="p-m custom-address-mailbox">

                                    <div>
                                        <span class="font-extra-bold"><b>From: </b><?php echo $report_from; ?></span>
                                    </div>
                                    <div>
                                        <span class="font-extra-bold"><b>Student: </b><?php echo $report_student; ?></span>
                                    </div>
                                    <div>
                                        <span class="font-extra-bold"><b>Index Number: </b><?php echo $report_id; ?></span>
                                    </div>
                                    <div>
                                        <span class="font-extra-bold"><b>Class: </b><?php echo $report_class; ?></span>
                                    </div>

                                </div>
                            </div>
                            <div class="panel-body panel-csm">
                                <div>
                                    <h4><?php echo $report_subject; ?></h4><hr>

                                    <p><?php echo $report_body; ?></p>

                                </div>
                            </div>
                        </div>
                <?php endif;?>
<!-- View Ends -->

<!-- chat parent begin -->
<?php 
$selectid = "SELECT s.sname,s.other_name,p.firstname,p.lastname 
            FROM student s
            JOIN parent p ON s.id=p.student_id
            WHERE s.id='$id'";
$selectQueryid = $conn->query($selectid);

$sqlid = mysqli_fetch_assoc($selectQueryid);
?>
                        <?php if ($sp_notify==true): ?>
                        <div class="hpanel email-compose mailbox-view">
                            <div class="panel-heading hbuilt">

                                <div class="p-xs h4">
                                    <small class="pull-right view-hd-ml">
                                            <b>Parent: </b><span style="color: #cb8f7d;"><?php echo $sqlid['firstname']." ".$sqlid['lastname']; ?></span>  
                                            <b>Student: </b><span style="color: #cb8f7d;"><?php echo $sqlid['sname']." ".$sqlid['other_name']; ?></span>  
                                        </small> Chat Parent

                                </div>
                            </div>
                            <div class="panel-body panel-csm">
                                
<!-- chat here -->
<div id="scroll-t" style="overflow-y:scroll; height:450px; padding-bottom: 60px;">

<div id="chat">
<?php require_once "web-chat-small.php" ?>
</div>

</div>

<div style="position: absolute; bottom: 0; width: 100%; background: #ffff; padding: 10px;">
        <form method="post">
            <input type="hidden" name="to_who" value="<?php echo $id; ?>">
    <textarea type="text" class="form-control" name="message_body" style="width: 80%; float: left; border-radius: 20px; background: #00000010; border-style: solid; border-width: 1px; border-color:  #00000015;"></textarea>

    <button name="send_chat_message" style="float: left; margin-left: 5px; margin-top: 12px;" class="btn btn-success">
    <span class="educate-icon educate-interface"></span></button>
    </form>
</div>
<!-- chat here end -->

                            </div>
                        </div>
    <?php endif;?> 
<!-- chat Parent end-->

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

    <!-- jquery.js JS
        ============================================ -->

    <script src="js/jquery-3.5.1.slim.min.js"></script>  


    <script>
        $(document).ready(function(){
            setInterval(function(){
                $('#chat').load("notification-code.php");
            }, 1000);
        });
    </script>


        <script>
            var fineok = document.getElementById('scroll-t');
            fineok.scrollTop=fineok.scrollHeight;
        </script>
</body>

</html>