<?php

$id = "";

$subject="";
$body="";

$permission=false;

$successful="";
$error="";
$read_stat=false;
$edit=false;

$p_notify = false;
$sp_notify = false; 
$g_notify = true; 


if(isset($_GET['read_stat'])){

	$id = $_GET['read_stat'];
	$read_stat=true;
	}

	
if (isset($_GET['private_notify'])){

	$p_notify = true;
	$g_notify = false;

}elseif (isset($_GET['general_notify'])) {
	$p_notify = false;
	$g_notify = true; 

}elseif (isset($_GET['send_private'])) {

	$id = $_GET['send_private'];

	$sp_notify=true;
	$p_notify = false;
	$g_notify = false; 
}

	
	// if (isset($_GET['update'])) {

	// 	$edit=true;

	// 	$id = $_GET['update'];

	// $sqlEdit = $conn->query("SELECT  class,name,email,phone,address FROM user WHERE id='".$id."'");

	// if($sqlEdit  ->num_rows>0){
	// $rowsEdit = $sqlEdit->fetch_assoc();
	// extract($rowsEdit);
	// $edit = true;

	// if ($id!="") {
	// 	$permission=true;}

	// 	} 
	// }

	
	if (isset($_POST['send'])) {
	$id = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id']));
	$subject = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['subject']));
	$body = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['body']));

	
	if (empty($subject) || empty($body)) {

	$successful="All fields are required!";

	}else{

	$hi=$conn->query("INSERT INTO notification_data (student_id,subject,body) 
					VALUES('$id','$subject','$body')");

	 if ($hi) {
	 	$successful="Message Sent";
	 	$edit=false;


	 	if ($sp_notify==true) {
	 		$formail=$conn->query("SELECT family_full_name, family_email FROM family_data 
							 WHERE student_id='".$id."'");

  		$mailfor = $formail->fetch_assoc();

		$mail_subject = "Educare Child Private Message"; 

		$mail_message = "Hi, Mr/Mrs. ".$mailfor['family_full_name'].
		". \nYou have a new private message from Golden Intellectuals.\n
			Kindly view message from notification menu from the app.\nThank you!";

		$from = "Golden Intellectuals";

		$to = $mailfor['family_email'];

		mail($to, $mail_subject, $mail_message, $from);


	 	}elseif ($g_notify==true) {
	 		$formail=$conn->query("SELECT family_full_name, family_email FROM family_data");

  		while($mailfor = $formail->fetch_assoc()){	
		$mail_subject = "Educare Child Geneal Announcement"; 

		$mail_message = "Hi, Mr/Mrs. ".$mailfor['family_full_name'].
		". \nThis is general announcement from Golden Intellectuals.\n
			Kindly view message from notification menu from the app.\nThank you!";

		$from = "Golden Intellectuals";

		$to = $mailfor['family_email'];

		mail($to, $mail_subject, $mail_message, $from);
	 		}
	 	}

	 }else{ $successful="Something went wrong, sending failed!"; }

	 	}
	}



	if(isset($_GET['id'])){

	$id = $_GET['id'];

	if ($id!="") {
	$permission=true;
	
	}else{
	$permission=false;

	
	}

}


if(isset($_POST['send_chat_message'])){

	
	$from_who = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['from_who']));
	$to_who = "admin";
	$message_body = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['message_body']));

	if (empty($message_body)) {
		
	}else{

	$hi=$conn->query("INSERT INTO chat_data (from_who,to_who,message_body) 
					VALUES('$from_who','$to_who','$message_body')");

	$permission=true;
		}

	}


 ?>