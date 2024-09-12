<?php
require_once "../dbconnect.php";

$id = $_GET['id'];


$sql = "SELECT * FROM student 

                JOIN emergency_data
                ON student.id = emergency_data.student_id
                
                JOIN significant_data
                ON emergency_data.student_id = significant_data.student_id
                
                JOIN family_data
                ON significant_data.student_id = family_data.student_id
                
                WHERE student.id LIKE '".$id."'";


$result = mysqli_query($conn, $sql);

$response = array();

if ($result ){
    
    $row = mysqli_fetch_row($result);
    
    $sname = $row[2];
    $other_name = $row[3];
    $dob = $row[4];
    $place_of_birth = $row[5];
    $home_town = $row[6];
    $mother_tongue = $row[7];
    $school_attended = $row[8];
    $sex = $row[9];
    $joindate = $row[10];

    $emergency_full_name = $row[14];
    $emergency_house_address = $row[15];
    $emergency_phone = $row[16];
    
    $significant_live_with = $row[18];
    $significant_full_name = $row[19];
    $significant_languages_spoken = $row[20];
    
    $family_full_name = $row[22];
    $family_relationship = $row[23];
    $family_occupation = $row[24];
    $family_place_of_work = $row[25];
    $family_address = $row[26];
    $family_nationality = $row[27];
    $family_religion = $row[28];
    $family_level_of_edu = $row[29];
    $family_marital_status = $row[30];
    $family_email = $row[31];
    $family_phone = $row[32];
    
    
 
    array_push($response, array("sname"=>$sname, "other_name"=>$other_name, "dob"=>$dob, "place_of_birth"=>$place_of_birth, 
                                "home_town"=>$home_town, "mother_tongue"=>$mother_tongue, "school_attended"=>$school_attended, 
                                "sex"=>$sex, "joindate"=>$joindate, "emergency_full_name"=>$emergency_full_name,
                                "emergency_house_address"=>$emergency_house_address, "emergency_phone"=>$emergency_phone,
                                "significant_live_with"=>$significant_live_with, "significant_full_name"=>$significant_full_name,
                                "significant_languages_spoken"=>$significant_languages_spoken,
                                "family_full_name"=>$family_full_name, "family_relationship"=>$family_relationship,
                                "family_occupation"=>$family_occupation, "family_place_of_work"=>$family_place_of_work,
                                "family_address"=>$family_address, "family_nationality"=>$family_nationality,
                                "family_religion"=>$family_religion, "family_level_of_edu"=>$family_level_of_edu,
                                "family_marital_status"=>$family_marital_status, "family_email"=>$family_email,
                                "family_phone"=>$family_phone));
                            
    echo json_encode($response);

    
}

 ?>