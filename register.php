<?php 
  session_start();
  include 'conn.php';


  if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
  
   $sql = "INSERT INTO users (name, email, password, contact, gender, address) VALUES ('$name', '$email', '$password', '$contact', '$gender', '$address')";
   $result = $conn->query($sql);
  
   if ($result == TRUE) {
     echo "Data inserted successfully.";
     header("refresh:3; url:login.php");
   } else {
     echo "Data not inserted.";
     header("refresh:3; url:register.php");
   }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>


  <body>
    <section class="container p-5">
      <form class="row g-3 register_row" method="post">
          <h2>Register Here</h2><hr>
              <div class="col-md-6">
                <label for="inputName4" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName4" name="name">
              </div>
              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email">
              </div>
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="password">
              </div>
              <div class="col-md-6">
                <label for="inputContact4" class="form-label">Contact</label>
                <input type="number" class="form-control" id="inputContact4" name="contact">
              </div>

              <div class="col-md-6">
                <label for="Gender" class="form-label">Gender</label><br>
                
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" checked>
                    <label class="form-check-label" for="gridRadios1"> Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">
                    <label class="form-check-label" for="gridRadios2">Female </label>
                  </div>
             
            </div>
              <div class="col-md-6">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="address">
              </div>
              
              <div class="col-12">
                <button name="register" class="btn btn-primary">Register</button>
              </div>
              <div class="col-12">
                <button name="register" class="btn btn-primary">Login</button>
              </div>
</form>
</section>


  </body>
  </html>