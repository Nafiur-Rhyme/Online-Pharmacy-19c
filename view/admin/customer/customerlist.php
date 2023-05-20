<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    
</head>
<body>
<div class="container">
<button class="btn btn-primary my-5"> <a href="customeradd.php" class="text-light">Add Customer</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Date of birth</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>

<?php
 

/*echo'<tr>
 <th scope="row">'.$first_name'</th>
 <td>'.$last_name'</td>
 <td>'.$email'</td>
 <td>'$username'</td>
 <td>'$moblie'</td>
 <td>'$password'</td>
 <td>'$dob'</td>
 <td>'$gender'</td>
 <td>'$address'</td>
</tr>'*/
?>
<td>
<button class="btn btn-primary"><a href="delete.php" class="text-light">Update</a></button>
<button class="btn btn-danger"><a href="update.php" class="text-light">Delete</a></button>

</td>
  </tbody>
</table>
</div>
</body>
</html>