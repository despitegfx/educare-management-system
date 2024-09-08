<?php
require_once "../dbconnect.php";

$Email = htmlspecialchars($_POST['email']);
$Password = md5(htmlspecialchars($_POST['password']));


$sql = "SELECT * FROM parent WHERE email = '".$Email."' AND password = '".$Password."'";
$result = mysqli_query($conn, $sql);

$response = array();

if (mysqli_num_rows($result)>0){
    
    $row = mysqli_fetch_row($result);
    $id = $row[1];
    $firstname = $row[2];
    $lastname = $row[3];

   
    
    $code = "login_success";
    array_push($response, array("code"=>$code, "id"=>$id, "firstname"=>$firstname, "lastname"=>$lastname));
    echo json_encode($response);

    
}else{
    
    
    $code = "login_failed";
    $message = "User doesn't exist";
    array_push($response, array("code"=>$code, "message"=>$message));
    echo json_encode($response);
}

 ?>