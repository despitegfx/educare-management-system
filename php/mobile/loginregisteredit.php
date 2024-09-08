<?php
require_once "../dbconnect.php";

$id = $_POST['id'];
$firstname = htmlspecialchars($_POST['firstname']);
$lastname = htmlspecialchars($_POST['lastname']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$occupation = htmlspecialchars($_POST['occupation']);
$placeofwork = htmlspecialchars($_POST['placeofwork']);
$address = htmlspecialchars($_POST['address']);
$relationship = htmlspecialchars($_POST['relationship']);




$sql = "UPDATE parent SET firstname = '".$firstname."', lastname = '".$lastname."', email = '".$email."',
                                 phone = '".$phone."', occupation = '".$occupation."', placeofwork = '".$placeofwork."',
                                 address = '".$address."', relationship = '".$relationship."'
                                 WHERE student_id = '".$id."'";

$result = mysqli_query($conn, $sql);
$response = array();

if ($result){
    
    $code = "reg_success";
    $message = "Successfully Updated";
    array_push($response, array("code"=>$code, "message"=>$message));
    echo json_encode($response);
    
 
    
}else{
    
   
    $code = "reg_failed";
    $message = "Update Failed";
    array_push($response, array("code"=>$code, "message"=>$message));
    echo json_encode($response);

}

 ?>