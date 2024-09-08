<?php

$id = "";

$email="";
$phone="";
$address = "";

$permission=false;

$successful="";
$error="";
$edit=false;


if(isset($_GET['viewprofile'])){

	$id = $_GET['viewprofile'];

	$sqlEdit = $conn->query("SELECT class,name,email,phone,address FROM user 	
		WHERE id='".$id."'");

	if($sqlEdit  ->num_rows>0){
	$rowsEdit = $sqlEdit->fetch_assoc();
	extract($rowsEdit);

		if ($id!="") {
			$permission=true;
		}

	}
}
	

	
	if (isset($_GET['update'])) {

		$edit=true;

		$id = $_GET['update'];

	$sqlEdit = $conn->query("SELECT  class,name,email,phone,address FROM user WHERE id='".$id."'");

	if($sqlEdit  ->num_rows>0){
	$rowsEdit = $sqlEdit->fetch_assoc();
	extract($rowsEdit);
	$edit = true;

	if ($id!="") {
		$permission=true;}

		} 
	}

	
	if (isset($_POST['save'])) {

	$id = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id']));
	$email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['email']));
	$phone = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['phone']));
	$address = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['address']));

	
	if (empty($email) || empty($phone)) {

	$successful="All fields are required!";

	}else{

	$hi=$conn->query("UPDATE user SET phone='$phone', email='$email', address='$address'
	 					WHERE id='$id' ");

	 if ($hi) {
	 	$successful="New teacher added";
	 	$edit=false;

	 $sqlEdit = $conn->query("SELECT  class,name,email,phone,address FROM user WHERE id='".$id."'");

	if($sqlEdit  ->num_rows>0){
	$rowsEdit = $sqlEdit->fetch_assoc();
	extract($rowsEdit);

	if ($id!="") {$permission=true;}

		} 

	 }else{ $successful="Something went wrong, adding failed!"; }

	 	}
	}



 ?>