<?php
 
$email='';
$password = "";

$add="parent";
$successful="";
$error="";

if(isset($_POST['login'])){

	$email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['email']));
	$password = htmlspecialchars(md5(mysqli_real_escape_string($conn,$_POST['password'])));
	// $password = md5(mysqli_real_escape_string($conn,$_POST['password']));

	if (empty($email) || empty($password) ) {

		$successful="Enter login details!";

	}else{

	$test = $conn->query("SELECT email,password from user where email like '$email' and password like '$password' ");

	if($test->num_rows>0){
		
		$true = $conn->query("SELECT id,name,class from user where email like '$email' and password like '$password' ");
		$my = $true->fetch_assoc();

		$_SESSION['id'] = $my['id'];
		$_SESSION['user_name'] = $my['name'];
		
		if ($_SESSION['user_name']=="admin") {
			echo '<script type="text/javascript">window.location="index.php"</script>';

		}else{
			$_SESSION['class'] = $my['class'];
			echo '<script type="text/javascript">window.location="teacher-page.php"</script>'; 
		}
		
	
	}else{

	$successful="Incorrect email/password!";
		}
	
	}
}

 ?>