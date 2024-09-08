<?php

$id = "";
$firstname='';
$lastname='';
$email="";
$phone="";
$password = "";

$permission=false;
$add="parent";
$successful="";
$error="";


if(isset($_POST['add-parent']) || isset($_POST['add-teacher'])){
	
	$permission=true;
	
	$select = $conn->query("SELECT id, sname, other_name FROM student 
            				where account like 'no' order by id desc ");

if (isset($_POST['add-parent'])) {

	$child = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['child']));
	if ($select->num_rows>0) {
	$id = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['childID']));}
	$firstname = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['firstname']));
	$lastname = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['lastname']));
	$email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['email']));
	$phone = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['phone']));
	$password = htmlspecialchars(md5(mysqli_real_escape_string($conn,$_POST['password'])));

	$test = $conn->query("SELECT email from parent where email like '$email' ");

	if ($child=="Select Child" || empty($firstname) || empty($lastname) || empty($email) || empty($phone) || empty($password)) {
		$successful="All fields are required!";

	}else if($test->num_rows>0){
		$successful="Email already exist!";
	
	}else{

	$hi=$conn->query("INSERT INTO parent (student_id,firstname,lastname,email,phone,password)
  				VALUES ('$id','$firstname','$lastname','$email','$phone','$password')");

	 if ($hi) {
	 	$sql = $conn->query("UPDATE  student  SET  account = 'yes' WHERE  id  = '$id'");
	 	if ($sql) {
	 		$successful="New parent added";

	 	}
	
	}else{
	 		
	 	$successful="Something went wrong, adding failed!";}
	 	
	 }
	 


}else if (isset($_POST['add-teacher'])) {

	$child = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['child']));
	$name = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['name']));
	$email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['email']));
	$phone = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['phone']));
	$password = htmlspecialchars(md5(mysqli_real_escape_string($conn,$_POST['password'])));

	$tea = $conn->query("SELECT email from user where email like '$email' and 
						name like '$lastname' ");

if ($child=="Select Class" || empty($name) || empty($email) || empty($phone) || empty($password)) {

	$successful="All fields are required!";

	}else if($tea->num_rows>0){
		$successful="Email/Name already exist!";
	}else{

	 $hi= $conn->query("INSERT INTO user (name,email,phone,password,class) 
	 					VALUES ('$name','$email','$phone','$password','$child')");

	 if ($hi) {
	 	$successful="New teacher added";
	 }else{
	 	$successful="Something went wrong, adding failed!"; }

	 	}
	}

}

if (isset($_GET['id'])) {

	if ($_GET['id']=="0") {
			$permission=true;
		}
}


if (isset($_GET['addparent'])) {
	$add="parent";
	$permission=true;


}else if (isset($_GET['addteacher'])) {
	$add="teacher";
	$permission=true;}



 ?>