<?php
class db{
    function openConn(){
        $conn=oci_connect('c##scott','tiger','orcl');
        if($conn)
            echo "Connection established";
        else{
            echo "Connection failed";
            $err = oci_error();
        }
        return $conn;
    }
//ADMIN ----------------------------------------------------------------
    function adminLogin($conn, $table, $id, $password){
        $sqlQuery= "SELECT * FROM ".$table." WHERE ADMIN_ID='".$id."' AND password='".$password."'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function getAdminbyID($conn, $table, $id){
        $sqlQuery= "SELECT * FROM ".$table." WHERE admin_id='".$id."'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function addNewAdmin($conn, $table, $firstname, $lastname, $password){
        $sqlQuery = "INSERT INTO $table (first_name, last_name, password) VALUES ('$firstname', '$lastname', '$password')";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function updateAdmin($conn, $table, $id, $firstname, $lastname, $password){
        $sqlQuery = "UPDATE $table SET first_name = '$firstname', 
                                       last_name= '$lastname', 
                                       password= '$password'
                                       WHERE admin_id='$id'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function deleteAdmin($conn, $table, $id){
        $sqlQuery = "DELETE FROM $table WHERE admin_id='$id'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function showAllAdmin($conn){
        $sqlQuery = "SELECT * FROM admin";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

//CUSTOMER ----------------------------------------------------------------
    function customerLogin($conn, $table, $username, $password){
        $sqlQuery= "SELECT * FROM ".$table." WHERE username='".$username."' AND password='".$password."'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function getCustomerbyUsername($conn, $table, $username){
        $sqlQuery= "SELECT * FROM ".$table." WHERE username='".$username."'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function addNewCustomer($conn, $table, $firstname, $lastname, $email,  $username, $mobile, $password, $dob, $gender, $address){
        $sqlQuery = "INSERT INTO $table (first_name, last_name, email, username, mobile, password, dob, gender, adderess) VALUES ('$firstname', '$lastname', '$email', '$username', '$mobile', '$password', '$dob', '$gender',  '$address')";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function updateCustomer($conn, $table, $firstname, $lastname, $email,  $username, $mobile, $password, $dob, $gender, $address){
        $sqlQuery = "UPDATE $table SET first_name = '$firstname', 
                                       last_name= '$lastname', 
                                       email= '$email', 
                                       mobile= '$mobile', 
                                       password= '$password',
                                       dob= '$dob', 
                                       gender= '$gender', 
                                       address= '$address',
                                       WHERE username='$username'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function deleteCustomer($conn, $table, $username){
        $sqlQuery = "DELETE FROM $table WHERE username='$username'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function showAllCustomer($conn){
        $sqlQuery = "SELECT * FROM customer";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }


    
// MEDICINE ----------------------------------------------------------------
    function addNewMedicine($conn, $table, $name, $company, $price,  $description, $quantity_in_stock, $reorder){
        $sqlQuery = "INSERT INTO $table (name, company, price, description, qantity_in_stock, reorder) VALUES ('$name', '$company', '$price', '$description', '$quantity_in_stock', '$reorder')";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function updateMedicince($conn, $table, $name, $company, $price,  $description, $quantity_in_stock, $reorder){
        $sqlQuery = "UPDATE $table SET name = '$name', 
                                       company= '$company', 
                                       price= '$price', 
                                       description= '$description',
                                       quantity_in_stock= '$quantity_in_stock',
                                       reorder= '$reorder',
                                       WHERE name='$name'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function deleteMedicine($conn, $table, $name){
        $sqlQuery = "DELETE FROM $table WHERE name='$name'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function showAllMedicine($conn){
        $sqlQuery = "SELECT * FROM medicines";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }
    function closeConn($conn){
        $conn->close();
    }

}

?>
