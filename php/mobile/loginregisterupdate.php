<?php
require_once "../dbconnect.php";

$id = $_POST['id'];


$sql = "SELECT * FROM parent WHERE student_id LIKE '".$id."'";

$result = mysqli_query($conn, $sql);
$response = array();

if ($result){
    
    $row = mysqli_fetch_row($result);
    $id = $row[1];
    $firstname = $row[2];
    $lastname = $row[3];
    $email = $row[4];
    $phone = $row[5];
    $occupation = $row[6];
    $placeofwork = $row[7];
    $address = $row[8];
    $relationship = $row[9];
    
    
 
    array_push($response, array("id"=>$id, "firstname"=>$firstname, "lastname"=>$lastname, "email"=>$email, 
                                "phone"=>$phone, "occupation"=>$occupation, "placeofwork"=>$placeofwork, 
                                "address"=>$address, "relationship"=>$relationship));
                                
    echo json_encode($response);

    
}

 ?>