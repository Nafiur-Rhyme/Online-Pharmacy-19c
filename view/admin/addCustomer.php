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
        <input type="text" class="form-control" placeholder="First Name" name="First Name" autocomplete="off" >
      </div>
      
      <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" placeholder="Last Name" name="Last Name" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" placeholder="email" name="email" autocomplete="off" >
      </div>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" placeholder="username" name="username" autocomplete="off" >
      </div>

      <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="text" class="form-control" placeholder="mobile" name="mobile" autocomplete="off"  >
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input  type="password" placeholder="password" name="password" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input  type="date" class="form-control" placeholder="dob" name="dob" autocomplete="off">
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
    
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    
    </body>
</html>