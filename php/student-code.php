<?php

$progress = "";

// student data
$id="";
$sname='';
$other_name='';
$dob='';
$place_of_birth='';
$home_town=''; 
$mother_tongue='';
$school_attended='';
$sex='';
$joindate='';

// family data
$family_full_name='';
$family_relationship='';
$family_occupation='';
$family_place_of_work='';
$family_address=''; 
$family_nationality='';
$family_religion='';
$family_level_of_edu='';
$family_marital_status='';
$family_email='';
$family_phone='';

// significant data
$significant_live_with='';
$significant_full_name='';
$significant_languages_spoken='';

// emergency data
$emergency_full_name='';
$emergency_house_address='';
$emergency_phone='';

$image='';

$class='';
$classfee ='';

$permission=false;
$success = false;
$edit = false;
$successful = "";
$unsuccessful = "";

$image_error="";

if(isset($_POST['admission'])){



//student data
$sname = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['sname']));
$other_name = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['other_name']));
$dob = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['dob']));
$place_of_birth = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['place_of_birth']));
$home_town = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['home_town']));
$mother_tongue = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['mother_tongue']));
$school_attended = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['school_attended']));
$sex = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['sex']));


//family data
$family_full_name = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_full_name']));
$family_relationship = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_relationship']));
$family_occupation = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_occupation']));
$family_place_of_work = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_place_of_work']));
$family_address = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_address']));
$family_nationality = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_nationality']));
$family_religion = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_religion']));
$family_level_of_edu = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_level_of_edu']));
$family_marital_status = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_marital_status']));
$family_email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_email']));
$family_phone = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_phone']));


//significant data
$significant_live_with = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['significant_live_with']));
$significant_full_name = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['significant_full_name']));
$significant_languages_spoken = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['significant_languages_spoken']));


//emergency data
$emergency_full_name = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['emergency_full_name']));
$emergency_house_address = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['emergency_house_address']));
$emergency_phone = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['emergency_phone']));

$file = $_FILES['image']['name'];
$file_type = $_FILES['image']['type'];
$file_tmp = $_FILES['image']['tmp_name'];
$folder = 'php/passport/'.$file;

$move=move_uploaded_file($file_tmp, $folder);

$progress = "Submitting...";

if (empty($sname) || empty($other_name) || empty($dob) || empty($sex) || empty($family_full_name) || 
	empty($family_relationship) || empty($family_occupation) || empty($family_place_of_work) || empty($family_address) 
	|| empty($family_religion) || empty($family_email) || empty($family_phone) ||
	empty($emergency_full_name) || empty($emergency_house_address) || empty($emergency_phone) || empty($file)) {

	$success=true;
	$progress = "";
	
}else{

if ($move) {


$sub=$conn->query("INSERT INTO admission_data (image,sname,other_name,dob,place_of_birth,home_town,mother_tongue,school_attended,sex,family_full_name, family_relationship, family_occupation, family_place_of_work, family_address, family_nationality, family_religion, family_level_of_edu, family_marital_status, family_email, family_phone, significant_live_with, significant_full_name, significant_languages_spoken, emergency_full_name, emergency_house_address, emergency_phone) 
VALUES ('{$file}','$sname','$other_name','$dob','$place_of_birth','$home_town','$mother_tongue','$school_attended','$sex', '$family_full_name','$family_relationship','$family_occupation','$family_place_of_work','$family_address',
	'$family_nationality', '$family_religion','$family_level_of_edu','$family_marital_status','$family_email', 
	'$family_phone','$significant_live_with','$significant_full_name','$significant_languages_spoken',
		'$emergency_full_name','$emergency_house_address','$emergency_phone')");
if ($sub) {
	
	$progress = "Form Submitted";
}

 }else{

 	$image_error = "Picture error!";
 }


}

 }


if(isset($_POST['admit'])){


//student data
$image = (mysqli_real_escape_string($conn,$_POST['image']));

$id = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id']));
$sname = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['sname']));
$other_name = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['other_name']));
$dob = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['dob']));
$place_of_birth = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['place_of_birth']));
$home_town = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['home_town']));
$mother_tongue = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['mother_tongue']));
$school_attended = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['school_attended']));
$sex = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['sex']));


//family data
$family_full_name = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_full_name']));
$family_relationship = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_relationship']));
$family_occupation = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_occupation']));
$family_place_of_work = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_place_of_work']));
$family_address = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_address']));
$family_nationality = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_nationality']));
$family_religion = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_religion']));
$family_level_of_edu = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_level_of_edu']));
$family_marital_status = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_marital_status']));
$family_email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_email']));
$family_phone = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_phone']));


//significant data
$significant_live_with = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['significant_live_with']));
$significant_full_name = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['significant_full_name']));
$significant_languages_spoken = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['significant_languages_spoken']));


//emergency data
$emergency_full_name = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['emergency_full_name']));
$emergency_house_address = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['emergency_house_address']));
$emergency_phone = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['emergency_phone']));

$class = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['class']));


    if ($class == "Day Care") { $classfee ="200"; }
    else if ($class == "Creche") { $classfee ="300"; }
    else if ($class == "KG1") {$classfee ="400"; } 
    else if ($class == "KG2") {$classfee ="500"; }


if (empty($sname) || empty($other_name) || empty($dob) || empty($sex) || empty($family_full_name) || 
	empty($family_relationship) || empty($family_occupation) || empty($family_place_of_work) || empty($family_address) || empty($family_religion) || empty($family_email) || empty($family_phone) ||
	empty($emergency_full_name) || empty($emergency_house_address) || empty($emergency_phone) || empty($class)) {
	$success=true;
	
	
}else{

 $student_in= $conn->query("INSERT INTO student (image,sname,other_name,dob,place_of_birth,home_town,mother_tongue,school_attended,sex,class) VALUES ('$image','$sname','$other_name','$dob','$place_of_birth','$home_town','$mother_tongue','$school_attended','$sex','$class')");

  $sid = $conn->insert_id;


$family_in = $conn->query("INSERT INTO family_data (student_id, family_full_name, family_relationship, family_occupation, family_place_of_work, family_address, family_nationality, family_religion, family_level_of_edu, family_marital_status, family_email, family_phone) VALUES ('$sid','$family_full_name','$family_relationship','$family_occupation','$family_place_of_work','$family_address','$family_nationality', '$family_religion','$family_level_of_edu','$family_marital_status','$family_email', '$family_phone')") ;


$significant_in = $conn->query("INSERT INTO significant_data (student_id, significant_live_with, significant_full_name, significant_languages_spoken) VALUES ('$sid','$significant_live_with','$significant_full_name','$significant_languages_spoken')") ;


$emergency_in = $conn->query("INSERT INTO emergency_data (student_id, emergency_full_name, emergency_house_address, emergency_phone) VALUES ('$sid','$emergency_full_name','$emergency_house_address','$emergency_phone')");

$conn->query("INSERT INTO materials (student_id) VALUES ('$sid')");

$conn->query("INSERT INTO bill (student_id, bill, balance) VALUES ('$sid','$classfee','$classfee')");  

$conn->query("INSERT INTO attendance (student_id) VALUES ('$sid')");

$conn->query("INSERT INTO report_save (student_id) VALUES ('$sid')");



if ($student_in && $family_in && $significant_in && $emergency_in) {

  	 $conn->query("UPDATE admission_data SET admitted = 'yes' WHERE  id = '$id'");

  }  

	$passwords = "Gi".$id.date("m/y");
	$password = md5($passwords);

	$hi = $conn->query("INSERT INTO parent (student_id,firstname,email,phone,password) VALUES ('$sid','$family_full_name',
		'$family_email','$family_phone','$password')");

	if ($hi) {
		
		$mail_subject = "Educare Admission Status"; 

		$mail_message = "Congratulations, ".$family_full_name.
		". \nYou ward, ".$other_name." ".$sname." has been offered admission into Golden Intellectuals International School
		\nBelow are your LOGIN CREDENTIALS\n"."Login Email: ".$family_email."\nLogin Password: ".$passwords."\n\nThank you!";

		$from = "Golden Intellectuals";
		mail($family_email, $mail_subject, $mail_message, $from);

		echo '<script type="text/javascript">window.location="student-page.php"</script>';
	}



 }




 }



 if(isset($_POST['update'])){

   $id = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id']));

   //student data
$sname = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['sname']));
$other_name = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['other_name']));
$dob = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['dob']));
$place_of_birth = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['place_of_birth']));
$home_town = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['home_town']));
$mother_tongue = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['mother_tongue']));
$school_attended = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['school_attended']));
$sex = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['sex']));


//family data
$family_full_name = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_full_name']));
$family_relationship = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_relationship']));
$family_occupation = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_occupation']));
$family_place_of_work = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_place_of_work']));
$family_address = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_address']));
$family_nationality = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_nationality']));
$family_religion = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_religion']));
$family_level_of_edu = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_level_of_edu']));
$family_marital_status = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_marital_status']));
$family_email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_email']));
$family_phone = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['family_phone']));


//significant data
$significant_live_with = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['significant_live_with']));
$significant_full_name = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['significant_full_name']));
$significant_languages_spoken = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['significant_languages_spoken']));


//emergency data
$emergency_full_name = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['emergency_full_name']));
$emergency_house_address = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['emergency_house_address']));
$emergency_phone = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['emergency_phone']));


if (empty($sname) || empty($other_name) || empty($dob) || empty($sex) || empty($family_full_name) || 
	empty($family_relationship) || empty($family_occupation) || empty($family_place_of_work) || empty($family_address) || empty($family_religion) || empty($family_email) || empty($family_phone) ||
	empty($emergency_full_name) || empty($emergency_house_address) || empty($emergency_phone) ) {

	$success=true;
	
	
}else{

   $sql = $conn->query("UPDATE  student  SET  sname = '$sname', other_name = '$other_name', dob = '$dob', place_of_birth = '$place_of_birth', home_town = '$home_town', mother_tongue = '$mother_tongue', school_attended = '$school_attended', sex = '$sex' WHERE  id  = '$id'");


   $conn->query("UPDATE  family_data  SET  family_full_name = '$family_full_name', family_relationship = '$family_relationship', family_occupation = '$family_occupation', family_place_of_work = '$family_place_of_work', family_address = '$family_address', family_nationality = '$family_nationality', family_religion = '$family_religion', family_level_of_edu = '$family_level_of_edu', family_marital_status = '$family_marital_status', family_email = '$family_email', family_phone = '$family_phone' WHERE  student_id  = '$id'");


   $conn->query("UPDATE significant_data SET significant_live_with = '$significant_live_with', significant_full_name = '$significant_full_name', significant_languages_spoken = '$significant_languages_spoken' WHERE  student_id  = '$id'");


   $conn->query("UPDATE emergency_data SET emergency_full_name = '$emergency_full_name', emergency_house_address = '$emergency_house_address', emergency_phone = '$emergency_phone' WHERE  student_id  = '$id'");

   	$successful = "Successfully updated!";
   // echo '<script type="text/javascript">window.location="../student-page.php;</script>';
}


 }



if(isset($_GET['edit'])){

$id = $_GET['edit'];

$sqlEdit = $conn->query("SELECT * 
	FROM student 

	JOIN family_data 
	ON student.id = family_data.student_id 

	JOIN significant_data 
	ON family_data.student_id = significant_data.student_id 

	JOIN emergency_data 
	ON significant_data.student_id = emergency_data.student_id 
	WHERE id='".$id."'"
);

	if($sqlEdit  ->num_rows>0){
	$rowsEdit = $sqlEdit->fetch_assoc();
	extract($rowsEdit);
	$edit = true;

		if ($id!="") {
			$permission=true;
		}

	}


}


if(isset($_GET['review-admission'])){

$id = $_GET['review-admission'];

$sqlEdit = $conn->query("SELECT * FROM admission_data WHERE id='".$id."'"
);

	if($sqlEdit  ->num_rows>0){
	$rowsEdit = $sqlEdit->fetch_assoc();
	extract($rowsEdit);
	$edit = false;

		if ($id!="") {
			$permission=true;
		}

	}


}




if (isset($_GET['id'])) {

	if ($_GET['id']=="0") {
			$permission=true;
		}
}

if(isset($_GET['wipe'])){

$conn->query("DELETE FROM  student  WHERE id='".$_GET['wipe']."'");	

}

if(isset($_GET['pending-wipe'])){

$conn->query("DELETE FROM  admission_data  WHERE id='".$_GET['pending-wipe']."'");	

}


?>