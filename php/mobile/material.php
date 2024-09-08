<?php
require_once "../dbconnect.php";

$id = $_POST['id'];


$sql = "SELECT * FROM student 

                JOIN materials
                ON student.id = materials.student_id
                
                WHERE student.id LIKE '".$id."'";


$result = mysqli_query($conn, $sql);

$response = array();

if ($result ){
    
    $row = mysqli_fetch_row($result);
    
    $firstname = $row[3];
    $lastname = $row[2];

    $diaper = $row[15];
    $tissue = $row[16];
    $date = $row[17];
 
    array_push($response, array("firstname"=>$firstname, "lastname"=>$lastname,"food"=>$food,
                                "water"=>$water, "diaper"=>$diaper,"tissue"=>$tissue, "date"=>$date));
                            
    echo json_encode($response);

    
}

 ?>