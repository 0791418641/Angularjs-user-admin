<?php

include 'config.php';

$data = json_decode(file_get_contents("php://input"));

$request_type = $data->request_type;

// Get all records
if($request_type == 1){
    $sel = mysqli_query($con,"select * from users");
    $data = array();

    while ($row = mysqli_fetch_array($sel)) {
        $data[] = array("id"=>$row['id'],"fname"=>$row['fname'],"lname"=>$row['lname'],"username"=>$row['username'],"password"=>$row['password']);           
    }
    echo json_encode($data);
}

// Insert record
if($request_type == 2){
    $fname = $data->fname;
    $lname = $data->lname;
    $uname = $data->uname;
    $pass  = $data->pass;
    

    mysqli_query($con,"insert into users(fname,lname,username,password) values('".$fname."','".$lname."','".$uname."','".$pass."')");
    $lastinsert_id = mysqli_insert_id($con);

    $return_arr[] = array("id"=>$lastinsert_id,"fname"=>$fname,"lname"=>$lname,"username"=>$uname,"password"=>$pass);
    echo json_encode($return_arr);
}

// Delete record
if($request_type == 3){
    $userid = $data->userid;

    mysqli_query($con,"delete from users where id=".$userid);
    echo 1;
}

