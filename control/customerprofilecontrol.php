<?php
session_start();
//"C:/xampp/htdocs/Online Pharmacy 19c/Online Pharmacy 19c/model/db.php");
require("../../model/db.php");
$registerError = '';
if(!isset($_SESSION['username'])){
    header("Location: ../login.php");
}
$username = $_SESSION['username'];
//$username = 'tofa';
$mydb = new db();
$conobj = $mydb->openConn();
$user = $mydb->getCustomerbyUsername($conobj, "customer", $username);

if(oci_execute($user)){
   $row=oci_fetch_array($user, OCI_NUM);
}


if(isset($_POST['submit'])){
    
    $registerUser = $mydb->updateCustomer(
        $conobj,
        "customer",
        $_POST['username'],
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['dob'],
        $_POST['gender'],
        $_POST['password'],
        $_POST['address']
        );
    if(oci_execute($registerUser)){
        header("Location: ../view/login.php");
    }
    else{
        $registerError = "Could not update";
    }
}


?>