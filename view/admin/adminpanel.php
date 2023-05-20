<?php
/*session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Online Pharmacy | Home</title>
    <link rel="stylesheet" href="../../css/style.css">

    <header>
        <h1>Online Pharmacy </h1>
    </header>

</head>

<body>
    <div class=sticky>
        <div class=navbar>
            <a href="medicine/medicinelist.php">Medicine</a>
            <a href="orders/orderslist.php">Orders</a>
            <a href="../../control/logoutcontrol.php">Log out</a>
            <a href="display.php">Report</a>
            <div class=dropdown>
                <button class=dropbtn>Users</button>
                <div class="dropdown-content">
                    <a href="admindisplay.php">Admin</a>
                    <a href="customer/customerlist.php">Customer</a>   
                </div>
            </div>
            
            
        </div>
    </div>
        <main>
            
        </main>
         
</body>
</html>