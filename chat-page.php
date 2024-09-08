<?php require_once "php/dbconnect.php" ?>
<?php require_once "php/notification-mobile-code.php" ?>
<?php require_once "header-mobile-other.php" ?>
<?php if ($permission==false ):header("location:404.html"); endif;?>


        <!-- Static Table Start -->
<div id="scroll-t" style="overflow-y: scroll; padding-top: 20px; padding-bottom: 10px; flex-direction: column-reverse;">

<div id="chat">
 <?php require_once "phone-chat-small.php" ?>
</div>

    </div>

    <div style="height: 50px;  width: 100%">
        
    </div>

    <div style="position: fixed; bottom: 0; width: 100%; background: #ffff; padding: 10px;" >
        <form method="post">
            <input type="hidden" name="from_who" value="<?php echo $id; ?>">
    <textarea type="text" class="form-control" name="message_body" style="width: 80%; float: left; border-radius: 20px; background: #00000010; border-style: solid; border-width: 1px; border-color:#00000015;"></textarea>

    <button name="send_chat_message" style="float: right; margin-right: 5px; margin-top: 12px;" class="btn btn-success">
    <span class="educate-icon educate-interface"></span></button>
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

       <script>
            var fineok = document.getElementById('scroll-t');
            fineok.scrollBottom=fineok.scrollHeight;
        </script>
        

         <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script>
         $(document).ready(function(){
        setInterval(function(){
            $( "#chat" ).load( "phone-chat-small.php" );}, 3000);
        });
    </script>

</body>



</html>

       