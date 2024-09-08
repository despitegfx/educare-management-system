<?php
 
$id = "";
$sname='';
$other_name='';

$bill="";
$paid="";
$balance="";
$received_from="";
$received_by=$_SESSION['user_name'];

$addpaid = "";
$add=0;
$addup="";

$permission=false;

$ok=false;
$edit=false;

$successful="";
$success=false;
$error="";
$successfully="";

if(isset($_POST['take-bill'])){




	$id = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id']));
	$bill= htmlspecialchars(mysqli_real_escape_string($conn,$_POST['bill']));
	$paid = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['paid']));
	$actualpay = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['actualpay']));
	$balance = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['balance']));
	$received_from = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['received_from']));
	$received_by = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['received_by']));


	if (empty($received_from)) {
		$success = true;
		$successful=" (This field is required)";

	}else{

	$upda = $conn->query("UPDATE bill SET paid='$paid',  balance='$balance' WHERE student_id = '$id' ");

  	$ins = $conn->query("INSERT INTO bill_records (student_id,bill,paid,balance,received_from,received_by) 
  				VALUES ('$id','$bill','$actualpay','$balance','$received_from','$received_by')");

  	if ($upda && $ins) {
  			$successfully="Payment successful!";
  		}else{
  			$error="Payment failed!";
  		}	

	}


}



if (isset($_GET['takebill'])) {
	$edit=false;
	$id = $_GET['takebill'];

	$sqlview = $conn->query("SELECT student.id, student.sname, student.other_name, bill.bill, bill.paid, bill.balance 
          FROM student 
          JOIN bill 
          ON student.id = bill.student_id 
          WHERE student.id = '$id' ");

	if ($sqlview->num_rows>0) {
	$rowsview = $sqlview->fetch_assoc();
	$bill = $rowsview['bill'];
	$paid = $rowsview['paid'];
	$balance = $rowsview['balance'];
	
		if ($id!="") {
			$permission=true;
		}
	}

	
}



if (isset($_GET['view'])) {
	$id = $_GET['view'];

	$sqlview = $conn->query("SELECT sname, other_name FROM student 	WHERE id='".$id."'");

	if($sqlview->num_rows>0){
	$rowsview = $sqlview->fetch_assoc();
	extract($rowsview); 
	
	if ($id!="") {
			$permission=true;
		}
	}

	}
	
 ?>