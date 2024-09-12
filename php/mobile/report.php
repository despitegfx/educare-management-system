<?php
require_once "../dbconnect.php";

$id = $_GET['id'];
 

$sql = "SELECT * FROM student
        JOIN report 
        ON student.id = report.student_id
        WHERE student.id LIKE '".$id."' AND report.seen = 0 ORDER BY report.id DESC ";

$result = mysqli_query($conn, $sql);

$response = array();


if ($result){
    
    while( $row = mysqli_fetch_array($result)){
        
        $row_array ['firstname'] = $row['other_name']; 
        $row_array ['lastname'] = $row['sname']; 
        $row_array ['health'] = $row['health']; 
        $row_array ['meals'] = $row['meal']; 
        $row_array ['mood'] = $row['mood']; 
        $row_array ['bathroom'] = $row['bathroom'];
        $row_array ['activities'] = $row['activities']; 
        $row_array ['note'] = $row['note']; 
        $row_array ['date'] = $row['date']; 
        
        array_push($response, $row_array); 
        
    }
    
    echo '{"response" : '.json_encode($response).' }';  
}

 ?>