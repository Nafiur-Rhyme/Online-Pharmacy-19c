<?php
session_start();
include("../model/db.php");
$conError="";
$date = strtotime($_POST['dob']);
if(isset($_POST["submit"])){
    $conn=oci_connect('c##scott','tiger','orcl');
    if($conn)
        $conError = "Connection established";
    else{
        echo "Connection failed";
        $err = oci_error();
    }
    $signupError="";

    $stmt = oci_parse($conn, "INSERT INTO customer (first_name, last_name, email, username, mobile, password, dob, gender, address) VALUES 
                    (:first_name, :last_name, :email, :username, :mobile, :password, TO_DATE(:dob), :gender, :address)");

    oci_bind_by_name($stmt, ':first_name', $_POST['first_name']);
    oci_bind_by_name($stmt, ':last_name', $_POST['last_name']);
    oci_bind_by_name($stmt, ':email', $_POST['email']);
    oci_bind_by_name($stmt, ':username', $_POST['username']);
    oci_bind_by_name($stmt, ':mobile', $_POST['mobile']);
    oci_bind_by_name($stmt, ':password', $_POST['password']);
    oci_bind_by_name($stmt, ':dob', date('d-M-y', $date));
    oci_bind_by_name($stmt, ':gender', $_POST['gender']);
    oci_bind_by_name($stmt, ':address', $_POST['address']);


    $result = oci_execute($stmt);
    if($result){
        header("Location: ../view/login.php");
    }
    else{
        $e = oci_error($stmt);
        $registerError = htmlentities($e['message'], ENT_QUOTES);
    }
}

?>
