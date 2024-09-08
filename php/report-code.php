<?php
 
$id = "";
$sname='';
$other_name='';

$health='';
$meal='';
$mood='';
$bathroom='';
$activities=''; 
$note=''; 

$permission=false;

$success=false;
$individualview = false;
$individualedit = false;
$createreport=false;
$successful=" ";


if(isset($_POST['send']) || isset($_POST['update']) || isset($_POST['report-save'])){

//report data from user inputs
$id =  htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id']));
$health = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['health']));
$mood = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['mood']));
$activities = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['activities']));
$note = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['note']));
$user = $_SESSION['user_name'];

if (!empty($_POST['bath'])) {
	$k=''; 
	foreach ($_POST['bath'] as $selected) {$k=$k.",".$selected;}
		$bathroom = (string) substr($k, 1);
}


if (!empty($_POST['meal'])) {
	$m=''; 
	foreach ($_POST['meal'] as $select) {$m=$m.",".$select;}
		$meal=substr($m, 1);
}


if (isset($_POST['report-save'])) {
	$success=false;
	$conn->query("UPDATE report_save SET health='$health', meal='$meal', mood='$mood', bathroom='$bathroom', 
		activities='$activities', note='$note' WHERE student_id = '$id'"); 
  		$successful="Successfully updated!";
}

if (isset($_POST['send']) || isset($_POST['update'])) {


if (empty($health) || empty($meal) || empty($mood) || empty($bathroom) || empty($activities)) {
		$success=true;
		$successful="No field should be left blank!";
		
}else{


	if (isset($_POST['send'])) {
  		$fin = $conn->query("INSERT INTO report (student_id,health,meal,mood,bathroom,activities,note,created_by) 
  				VALUES ('$id','$health','$meal','$mood','$bathroom','$activities','$note','$user')");
  		if ($fin) {
  		$conn->query("UPDATE report_save SET health='', meal='', mood='', bathroom='', activities='', note='' WHERE student_id = '$id'"); 


  		$formail=$conn->query("SELECT s.sname, s.other_name, f.family_full_name,
  							f.family_email
							 FROM student s JOIN family_data f ON s.id = f.student_id
							 WHERE s.id='".$id."'");

  		$mailfor = $formail->fetch_assoc();

		$mail_subject = "Educare Child Daily Report"; 

		$mail_message = "Hi, Mr/Mrs. ".$mailfor['family_full_name'].
		". \nCheck out the wellbeing of your ward, (".$mailfor['other_name']." ".
		$mailfor['sname'].") today in school.\nThank you!";

		$from = "Golden Intellectuals";

		$to = $mailfor['family_email'];

		mail($to, $mail_subject, $mail_message, $from);


  		}if ($user="admin") {
  			echo '<script type="text/javascript">window.location="report-page.php"</script>'; 
  		}else{
  			echo '<script type="text/javascript">window.location="teacher-report-page.php"</script>'; 
  		}
  		

  	}else if (isset($_POST['update'])) {
  		$conn->query("UPDATE report SET health='$health', meal='$meal', mood='$mood',bathroom='$bathroom', activities='$activities', note='$note' WHERE id = '$id'"); 
  			$successful="Successfully updated!";}

	}

}

	
}

if(isset($_GET['view']) || isset($_GET['create']) || isset($_GET['viewSingleReport']) || isset($_GET['editSingleReport']) || isset($_GET['wipe']) || isset($_GET['page-send'])){



 if (isset($_GET['create'])) {

 	$createreport=true;
	$id = $_GET['create'];

	$sqlview = $conn->query("SELECT s.sname, s.other_name, rs.health, rs.meal, rs.mood, rs.bathroom, rs.activities, rs.note
							 FROM student s JOIN report_save rs ON s.id = rs.student_id
							 WHERE s.id='".$id."'");

	if($sqlview->num_rows>0){
	$permission=true;
	$rowsview = $sqlview->fetch_assoc();
	extract($rowsview); 
	

}


}else if (isset($_GET['page-send'])) {

 	$createreport=true;
	$id = $_GET['page-send'];

	$sqlview = $conn->query("SELECT * FROM report_save WHERE student_id='".$id."'");

	if($sqlview->num_rows>0){
	$permission=true;
	$rowsview = $sqlview->fetch_assoc();

	$health = htmlspecialchars($rowsview['health']);
	$meal = htmlspecialchars($rowsview['meal']);
	$mood = htmlspecialchars($rowsview['mood']);
	$bathroom = htmlspecialchars($rowsview['bathroom']);
	$activities = htmlspecialchars($rowsview['activities']);
	$note = htmlspecialchars($rowsview['note']);
	$user = $_SESSION['user_name'];

	$fin = $conn->query("INSERT INTO report (student_id,health,meal,mood,bathroom,activities,note,created_by) 
  				VALUES ('$id','$health','$meal','$mood','$bathroom','$activities','$note','$user')");
  		if ($fin) {
  		$conn->query("UPDATE report_save SET health='', meal='', mood='', bathroom='', activities='', note='' WHERE student_id = '$id'"); 


  		$formail=$conn->query("SELECT s.sname, s.other_name, f.family_full_name,
  							f.family_email
							 FROM student s JOIN family_data f ON s.id = f.student_id
							 WHERE s.id='".$id."'");

  		$mailfor = $formail->fetch_assoc();

		$mail_subject = "Educare Child Daily Report"; 

		$mail_message = "Hi, Mr/Mrs. ".$mailfor['family_full_name'].
		".\nCheck out the wellbeing of your ward, (".$mailfor['other_name']." ".
		$mailfor['sname'].") today in school.\nThank you!";

		$from = "Golden Intellectuals";

		$to = $mailfor['family_email'];

		mail($to, $mail_subject, $mail_message, $from);


  		}
	
}


}else if (isset($_GET['view'])) {
	$id = $_GET['view'];

	$sqlview = $conn->query("SELECT sname, other_name FROM student 	WHERE id='".$id."'");

	if($sqlview->num_rows>0){
	$permission=true;
	$rowsview = $sqlview->fetch_assoc();
	extract($rowsview); 
	}



}else if (isset($_GET['viewSingleReport'])) {
	$individualview = true;

	$id = $_GET['viewSingleReport'];
	$sqlviewreport = $conn->query("SELECT * FROM report WHERE id='".$id."'");

	if($sqlviewreport->num_rows>0){
	$permission=true;
	$rowsviewreport = $sqlviewreport->fetch_assoc();
	extract($rowsviewreport); }

	$sqlview = $conn->query("SELECT sname, other_name FROM student 	
	WHERE id='".$rowsviewreport['student_id']."'");
	if($sqlview->num_rows){
	$rowsview = $sqlview->fetch_assoc();
	extract($rowsview); }

	

}else if (isset($_GET['editSingleReport'])) {

	$individualedit = true;

	$id = $_GET['editSingleReport'];
	$sqleditreport = $conn->query("SELECT * FROM report WHERE id='".$id."'");

	if($sqleditreport->num_rows>0){
	$permission=true;
	$rowseditreport = $sqleditreport->fetch_assoc();
	extract($rowseditreport);

	$id = $rowseditreport['id'];
	$health = $rowseditreport['health'];
	$meal = $rowseditreport['meal'];
	$mood = $rowseditreport['mood'];
	$bathroom = $rowseditreport['bathroom'];
	$activities = $rowseditreport['activities']; }

	$sqlview = $conn->query("SELECT sname, other_name FROM student 	
	WHERE id='".$rowseditreport['student_id']."'");
	if($sqlview->num_rows){
	$rowsview = $sqlview->fetch_assoc();
	extract($rowsview); }


// if (isset($_GET['editcancel'])) {
	
// 	$permission=true;
// }


}else if(isset($_GET['wipe'])){

	$sqlview = $conn->query("SELECT student_id FROM report WHERE id='".$_GET['wipe']."'");

	if($sqlview->num_rows){
	$rowsview = $sqlview->fetch_assoc();
	extract($rowsview);

	$id = $rowsview['student_id']; }

	$conn->query("UPDATE report SET seen=1 WHERE id='".$_GET['wipe']."'");

	$successful="Report deleted!";

	$permission=true;
	}
	



}


 ?>