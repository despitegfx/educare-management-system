<?php require_once "php/dbconnect.php" ?>
<?php require_once "php/logincheck.php" ?>
<?php require_once "php/add-user-code.php" ?>
<?php if ($_SESSION['user_name']!="admin"):header("location:404.html"); endif;?>
<?php if ($permission==false ):header("location:404.html"); endif;?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>educare</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="css/alerts.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
 
	<div class="error-pagewrap" >
		<div class="error-page-int" >
		
			<div class="content-error" >
				<div class="hpanel" >

      <a href="index.php" style="font-size: 16pt; background: transparent; 
      color: red; "><span class="fa fa-arrow-left"></span></a>

       <a href="?addparent" style="background: #20AC64;">
        <span class="fa fa-user"></span> Parent</a>  

        <a href="?addteacher" >
        <span class="fa fa-user"></span> Teacher</a>
      
                    <div class="panel-body" style="border-width: 2px; border-color:#00000015;; border-style: solid; border-radius: 5px; 
                    background: linear-gradient(to left, #00000008, #00000010);">

        <?php if ($add == "parent"):?>
        <div class="alert alert-success alert-st-one" role="alert" 
        style="background: #20AC64">
          <i class="fa fa-info-circle edu-inform admin-check-pro" aria-hidden="true"></i>
           <strong class="message-mg-rt">Add Parent</strong> 
        </div>
      <?php elseif ($add == "teacher"):?>
     <div class="alert alert-info alert-st-two" role="alert">
        <i class="fa fa-info-circle edu-inform admin-check-pro" aria-hidden="true"></i>
           <strong class="message-mg-rt">Add Teacher</strong>
      </div>
      <?php endif; ?>

       <?php if ($successful=="New parent added" || $successful=="New teacher added"): ?>    
          <label class="form-control" style="text-align: center; background: lightgreen; 
          color: darkgreen;"><?php echo $successful; ?></label>

           <?php elseif ($successful=="Something went wrong, adding failed!"): ?>    
          <label class="form-control" style="text-align: center; background: #FFE4E4; 
          color: darkred;"><?php echo $successful; ?></label>
                 
          <?php elseif($successful=="Email already exist!" || $successful=="Email/Name already exist!"):?>
          <label class="form-control" style="text-align: center; background: #FFE4E4; 
          color: darkred;"><?php echo $successful; ?></label>
          
        <?php elseif($successful=="All fields are required!"):?>
          <label class="form-control" style="text-align: center; background: #FFE4E4; 
          color: darkred;"><?php echo $successful; ?></label>
        <?php endif;?>

        <em id="some" for="confirmPassword"></em>
                        <form method="post">
                            <div class="row">
                                
                            <?php if ($add == "parent"):?>
                                <div class="form-group col-lg-6">
                                    <input type="text" style="border-color: #00000030; border-radius: 5px;" class="form-control" placeholder="First name" name="firstname">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" style="border-color: #00000030; border-radius: 5px;" class="form-control" placeholder="Last name" name="lastname">
                                </div>

                            <?php elseif ($add == "teacher"):?>
                                <div class="form-group col-lg-12">
                                    <input type="text" style="border-color: #00000030; border-radius: 5px;" class="form-control" placeholder="Teacher's Full name" name="name">
                                </div>
                            <?php endif; ?>

                                <div class="form-group col-lg-6">
                                    <input type="email" style="border-color: #00000030; border-radius: 5px;" class="form-control" placeholder="Email address" name="email">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="number" style="border-color: #00000030; border-radius: 5px;" class="form-control" placeholder="Phone" name="phone">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="password" id="inputPassword" style="border-color: #00000030; border-radius: 5px;" class="form-control" placeholder="Password" name="password">
                                </div>
                                <div class="form-group col-lg-6">
                                     <input type="password" id="confirmPassword" style="border-color: #00000030; border-radius: 5px;" 
                                     oninput ="confirmth()" class="form-control" 
                                     placeholder="Confirm password">
                                </div>
                                   
                                <div class="form-group col-lg-12" >
                                    <select name="child" oninput="sendid()" style="border-color: #00000030; border-radius: 5px;" class="form-control">
                                     
                    <?php if ($add == "parent"):?>
                                       <option>Select Child</option>
                    <?php 
                    $select = "SELECT id, sname, other_name FROM student 
                            where account ='no' order by id desc ";
                    $selectQuery =  $conn->query($select);
                    ?> 


                    <?php while ($sql = mysqli_fetch_assoc($selectQuery)): ?>
                    <option id="labelid" oninput="sendid" value="<?php echo $sql['id'];?>">
                        
                    <?php echo $sql['id']." - ".$sql['sname']." ".$sql['other_name'];?>
                    </option>
                    <?php endwhile; ?>
                   

                    <?php elseif ($add == "teacher"):?>
                        <option>Select Class</option>
                        <option>Day Care</option>
                        <option>Creche</option>
                        <option>KG1</option>
                        <option>KG2</option>
                    <?php endif; ?>

                                    </select> 
                <input id="holdid" name="childID" value="">
                                </div>
                                
                            </div>
                            <div class="text-center">
                    <?php if ($add == "parent"):?>
                        <!-- <button id="btnparent" class="btn btn-success" name="add-parent">Register</button> -->
                    <?php elseif ($add == "teacher"):?>
                        <button id="btnparent" class="btn btn-primary" name="add-teacher">Register</button>
                    <?php endif; ?>    
                        <button class="btn btn-default">Clear</button>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer" style="color: #ffff;">
				<p>Copyright © 2018. All rights reserved.</p>
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
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
  <script>

    function sendid() {
   
    // document.getElementById('labelid').value;
    document.getElementById('holdid').value = document.getElementById('labelid').value;


    }


    function confirmth() {

      var a = document.getElementById('confirmPassword').value;
      var b = document.getElementById('inputPassword').value;
    
    if ( a == b) {

      document.getElementById('some').innerHTML = "Passwords matched!";
      document.getElementById('some').style = "color:green";
      document.getElementById('btnparent').disabled=false;

    }else if ( a != b) {

      document.getElementById('some').innerHTML = "Passwords don't match!";
      document.getElementById('some').style = "color:red";
      document.getElementById('btnparent').disabled=true;

    }

 }

  </script>
</body>

</html>