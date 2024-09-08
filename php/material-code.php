<?php
 
$id = "";
$sname='';
$other_name='';

$tissue="";
$diaper="";

$addtissue = "";
$adddiaper = "";

$add1=0;
$add2=0;

$up1=" ";
$up2=" ";

$permission=false;

$edit=false;
$successful="0";
$error="";

if(isset($_POST['add-material']) || isset($_POST['take-material'])){


	$id = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id']));
	$tissue = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['tissue']));
	$diaper = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['diaper']));

	$sqlview = $conn->query("SELECT tissue, diaper FROM materials WHERE student_id='".$id."'");
	$rowsview = $sqlview->fetch_assoc();
	$addtissue = $rowsview['tissue'];
	$adddiaper = $rowsview['diaper'];


if (isset($_POST['add-material'])) {

	if (empty($tissue) && empty($diaper)) {
		$error="Empty entries, at least make 1 entey!";
	}else{

	$add1=((int)$addtissue+(int)$tissue);
	$add2=((int)$adddiaper+(int)$diaper);

	$up1= (string)$add1;
	$up2= (string)$add2;

	$see=$conn->query("UPDATE materials SET tissue='$up1', diaper= '$up2' WHERE student_id = '$id' "); 
	if ($see) {$successful=$tissue." Tissue(s)"." and ".$diaper." Diaper(s)"." added";}
	} 

}else if (isset($_POST['take-material'])) {

if (empty($tissue) && empty($diaper)) {
		$error="Empty entries, at least make 1 entey!";
	}else{

	if ((int)$tissue>(int)$addtissue || (int)$diaper>(int)$adddiaper) {
		$edit=false;
		$error="Insufficient materials available!";

			
	}else{

	$add1=((int)$addtissue-(int)$tissue);
	$add2=((int)$adddiaper-(int)$diaper);

	$up1= (string)$add1;
	$up2= (string)$add2;

	$see=$conn->query("UPDATE materials SET tissue='$up1', diaper= '$up2' WHERE student_id = '$id' "); 
	if ($see) {$successful=$tissue." Tissue(s)"." and ".$diaper." Diaper(s)"." taken";}
	// echo '<script type="text/javascript">window.location="material-page.php"</script>'; 
}
		}
	}


}


if (isset($_GET['addmaterial'])) {
	$edit=false;
	$id = $_GET['addmaterial'];
	
	if ($id!="") {
		$permission=true;
	}
	

}else if (isset($_GET['takematerial'])) {
	$edit=true;
	$id = $_GET['takematerial'];
	
	if ($id!="") {
		$permission=true;
	} 
}





 ?>