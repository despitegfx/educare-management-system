<?php

$id = "";

$report_from = "";
$report_student = "";
$report_id = "";
$report_class = "";
$report_subject = "";
$report_body = "";
$report_date = "";

$permission=false;

$successful="";
$error="";
$edit=false;


$p_notify = false;
$vcr_notify = false;
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

}elseif (isset($_GET['open_chat'])) {

	$id = $_GET['open_chat'];

	$sp_notify=true;
	$p_notify = false;
	$g_notify = false; 

}elseif (isset($_GET['view_class_report'])) {

	$id = $_GET['view_class_report'];

	$vcr_notify= true;
	$sp_notify= false;
	$p_notify = false;
	$g_notify = false;

	$sqlEdit = $conn->query("SELECT report_from,report_student,report_id,report_class,report_subject,report_body,report_date 						FROM class_report_data WHERE id='".$id."'");
	
	if($sqlEdit ->num_rows>0){
	$rowsEdit = $sqlEdit->fetch_assoc();

	$report_from = $rowsEdit['report_from'];
	$report_student = $rowsEdit['report_student'];
	$report_id = $rowsEdit['report_id'];
	$report_class = $rowsEdit['report_class'];
	$report_subject = $rowsEdit['report_subject'];
	$report_body = $rowsEdit['report_body'];
	$report_date = $rowsEdit['report_date'];
	}

}



// if(isset($_GET['viewprofile'])){

// 	$id = $_GET['viewprofile'];

// 	$sqlEdit = $conn->query("SELECT class,name,email,phone,address FROM user 	
// 		WHERE id='".$id."'");

// 	if($sqlEdit  ->num_rows>0){
// 	$rowsEdit = $sqlEdit->fetch_assoc();
// 	extract($rowsEdit);

// 		if ($id!="") {
// 			$permission=true;
// 		}

// 	}
// }
	

	
// 	if (isset($_GET['update'])) {

// 		$edit=true;

// 		$id = $_GET['update'];

// 	$sqlEdit = $conn->query("SELECT  class,name,email,phone,address FROM user WHERE id='".$id."'");

// 	if($sqlEdit  ->num_rows>0){
// 	$rowsEdit = $sqlEdit->fetch_assoc();
// 	extract($rowsEdit);
// 	$edit = true;

// 	if ($id!="") {
// 		$permission=true;}

// 		} 
// 	}

	
	if (isset($_POST['send-class-report'])) {

	$permission=true;	

	$report_from = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['report_from']));
	$report_student = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['report_student']));
	$report_id = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['report_id']));
	$report_class = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['report_class']));
	$report_subject = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['report_subject']));
	$report_body = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['report_body']));

	
	if (empty($report_subject) || empty($report_body)) {

	$successful="All fields are required!";

	}else{

	$insertReport=$conn->query("
		INSERT INTO class_report_data (report_from,report_student,report_id,report_class,report_subject,report_body)
	 	VALUES('$report_from', '$report_student', '$report_id', '$report_class', '$report_subject', '$report_body')");

	 if ($insertReport) {
	 	$successful="Report successfully sent";
	 }else{
	 	$successful="Error! Report sending failed";
	 }

	 	}
	}


if (isset($_GET['create-class-report'])) {
	
	$permission=true;

	$id = $_GET['create-class-report'];
	$report_id = $_GET['create-class-report'];

	$sqlEdit = $conn->query("SELECT sname,other_name,class FROM student WHERE id='".$report_id."'");
	$sqlEditTeacher = $conn->query("SELECT name FROM user WHERE class = 
					(SELECT class FROM student WHERE id = '".$report_id."')");

	if($sqlEdit ->num_rows>0 && $sqlEditTeacher ->num_rows>0){
	$rowsEdit = $sqlEdit->fetch_assoc();
	$rowsEditTeacher = $sqlEditTeacher->fetch_assoc();

	$report_from = $rowsEditTeacher['name'];
	$report_student = $rowsEdit['other_name']." ".$rowsEdit['sname'];
	$report_class = $rowsEdit['class'];


}
}


if(isset($_POST['send_chat_message'])){

	$from_who = "admin";
	$to_who = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['to_who']));
	$message_body = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['message_body']));

	$hi=$conn->query("INSERT INTO chat_data (from_who,to_who,message_body) 
					VALUES('$from_who','$to_who','$message_body')");

	$permission=true;
	}


 ?>