<?php 


$select = "SELECT * FROM chat_data WHERE from_who='admin' OR to_who='admin'";
$selectQuery = $conn->query($select);

while ($sql = mysqli_fetch_assoc($selectQuery)):

?>

   <?php if ($sql['from_who']=='admin' && $sql['to_who']== $id): ?>
<div style="width: 85%; float: right;">
        <div class="data-table-area mg-b-15">
            <div class="container-fluid" style="margin-top: 5x;">

                <div class="row" >
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="sparkline8-list" style="background:#D8E9FF; border-top-left-radius: 20px; border-bottom-left-radius: 20px; border-top-right-radius: 20px;">
                            <div class="sparkline8-hd" >
                                <div class="sparkline8-graph">
                                    <div class="static-table-list">
                                       
                                        <?php echo $sql['message_body']; ?>

                            </div>
                            </div>
                            </div>
                        </div>
                         <span style="font-size: 7.5pt; color:#255577; float: right; margin-right: 15px;"><?php echo $sql['message_date']; ?></span><span style="font-size: 7.5pt; color:#255577; float: right; margin-right: 15px;">Sent</span>
                    </div>
            </div>
        </div>
    </div>
    </div> 
    <?php endif ?>
    
    <?php if ($sql['from_who']==$id):?>
    <div id="user-f" style="width: 85%; float: left;">
        <div class="data-table-area mg-b-15">
            <div class="container-fluid" style="margin-top: 5px;">

                <div class="row" >
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="sparkline8-list" style="background:#c8eee5; border-top-right-radius: 20px; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                            <div class="sparkline8-hd" >
                                <div class="sparkline8-graph">
                                    <div class="static-table-list">
                    
                                        <?php echo $sql['message_body']; ?>    
                            </div>
                            </div>
                            </div>
                        </div>
                         <span style="font-size: 7.5pt; color:#255577; float: left; margin-left: 15px;"><?php echo $sql['message_date']; ?></span>
                    </div>
            </div>
        </div>
    </div>
    </div>
    <?php endif ?>
    <?php endwhile;?>