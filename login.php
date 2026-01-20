<?php 
  session_start();
  include 'conn.php';

  if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

  $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
  $result = $conn->query($sql);

  
    if (mysqli_num_rows($result) > 0) {
      $_SESSION['user_data'] = $result->fetch_object();
        header('refresh:2; url=mycart.php');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>


  <body>
    <section class="container p-5">
      <div class="row justify-content-evenly mt-5">
        
      <div class="col-md-5 login_row">
        <h2>Login Here</h2><hr>
      <?php 

         if (isset($_SESSION['user_data'])) {
           echo "Welcome".$_SESSION['user_data']->name;
         } else {
           echo "Email or Password invalid";
         }

      ?>
      <form method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <a href="register.php">Not registered ? Register here</a>
        </div>
        <button name="login" class="btn btn-success">Login</button>
    </form>
    </div>
    </div>
    </section>
    

</body>
</html>
