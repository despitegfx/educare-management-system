<?php
 
$id = "";
$sname='';
$other_name='';
$status = "";
$checked_by = $_SESSION['user_name'];

$permission=false;

$success=false;
$successful=" ";

if(isset($_GET['in']) || isset($_GET['out'])){

	if (isset($_GET['in'])) {
		$id = $_GET['in'];
		$status = 'In';
		$success=false;

  		$conn->query("UPDATE attendance SET status='$status' WHERE student_id = '$id'"); 
  		$conn->query("INSERT INTO attendance_records (student_id,status,checked_by) VALUES( '$id','$status', '$checked_by') "); 
  		
  		

  		// echo '<script type="text/javascript">window.location="report-page.php"</script>'; 

  	}else if (isset($_GET['out'])) {
  		$id = $_GET['out'];
  		$status = 'Out';

  		$que = $conn->query("SELECT status FROM attendance WHERE student_id='$id'");
  		$fina=$que->fetch_assoc();

  		if ($fina['status']=="Out") {
		$success=true;
		$successful="Already Checked Out!";
		
		}else{
  		$conn->query("UPDATE attendance SET status='$status' WHERE student_id = '$id'"); 
  		$conn->query("INSERT INTO attendance_records (student_id,status,checked_by) VALUES( '$id','$status', '$checked_by') "); 
  			
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
	}}

	}

 ?>