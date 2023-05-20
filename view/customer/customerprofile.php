<?php
require("../../control/customerprofilecontrol.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title>Online Pharmacy</title>
    </head>
    <body>
        <h1>Online Pharmacy</h1>


    <div class="container" my-5>
    <form method="post">
      <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" placeholder="First Name" name="firstname" autocomplete="off" value="<?php echo $row[0]; ?>">
      </div>
      
      <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" placeholder="Last Name" name="lastname" autocomplete="off" value="<?php echo $row[1];?>">
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" placeholder="email" name="email" autocomplete="off" value="<?php echo $row[2];?>">
      </div>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" placeholder="username" name="username" autocomplete="off" value="<?php echo $row[3];?>">
      </div>

      <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="text" class="form-control" placeholder="mobile" name="mobile" autocomplete="off"  value="<?php echo $row[4];?>">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input  type="text" placeholder="password" name="password" autocomplete="off"value=" <?php echo $row[5];?>">
      </div>

      <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input  type="date" class="form-control" placeholder="dob" name="dob" autocomplete="off" value="<?php echo $row[6];?>">
      </div>

      <div class="form-group">
        <label for="gender">Gender:</label>
        <input type="radio" class="form-control" name="gender" value="male">Male
        <input type="radio" class="form-control" name="gender" value="females">Female
      </div>

      <div class="form-group">
        <label for="address">Address:</label>
        <textarea placeholder="address" class="form-control" name="address" rows="4" cols="50"></textarea>
      </div>
      <button class="btn btn-primary"><a href="dashboard.php" class="text-light">Back</a></button>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
    </div>
    
    </body>
</html>