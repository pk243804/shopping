<?php 
   session_start();
   include 'conn.php';

   if (isset($_POST['addcart'])) {
    $prod_name = $_POST['name'];
    $prod_price = $_POST['price'];
    $prod_quantity = $_POST['quantity'];

    $_SESSION['cart'][] = array('prod_name' => $prod_name, 'prod_price' => $prod_price, 'prod_quantity' => $prod_quantity);
  
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Laptop</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>


  <body>
    <!-- Nav-bar goes here -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><h2>Ekart</h2></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li> 
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="index.php">Phones</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="laptop.php">Laptops</a></li>
                  </ul>
                </li>

              </ul>
               <a class="btn btn-success loginbtn" href="login.php">Login</a>
               <a class="btn btn-success ms-auto" href="mycart.php">MyCart<span class="badge bg-danger">
                 <?php  if (isset($_SESSION)) {
                   echo count($_SESSION['cart']);
                 } else {
                   echo '0';
                 }
                 ?>
               </span></a>
            </div>
          </div>
        </nav>





 
      <!-- main content goes here --> 
    <section class="container-fluid">
      <div class="row px-5">
        <h2 class="text-center my-3">Top Laptops</h2><hr>
        <?php 
            $sql = "SELECT * FROM products2";
            $result = $conn->query($sql);

              while ($product = mysqli_fetch_assoc($result)) {          
        ?>
      <div class="col-md-4 mt-5">
        <form method="post" action="laptop.php">
        <div class="card">
          <img src="<?php echo $product['image']; ?>" class="img-fluid">
          <div class="card-body text-center">
            <h5 class="card-title"><?php echo $product['name']; ?></h5>
            <p class="card-text"><?php echo $product['description']; ?></p>
            <span class="badge bg-success">4.5</span>
            <p class="card-text">&#8377;<?php echo $product['price']; ?></p>
            <input type="hidden" name="name" value="<?php echo $product['name']; ?>">
              <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
              <input type="number" name="quantity" value="">
              <input type="submit" name="addcart" class="btn btn-success" value="Add to Cart">
          </div>
        </div>
      </form>
      </div>
              <?php } ?>
    </div>
    </section>





<!--footer goes here-->
<section class="container-fluid mt-5">
    <div class="row text-center"><hr>
      <p>COPYRIGHT © 2021 EKART.COM, LTD.</p>
    </div>
</section>


</body>
</html>
