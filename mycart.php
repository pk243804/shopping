<?php 

session_start();
include 'conn.php';
  
 
 /* if (isset($_POST['addcart'])) {
    $prod_name = $_POST['name'];
    $prod_price = $_POST['price'];
    $prod_quantity = $_POST['quantity'];

    $_SESSION['cart'][] = array('prod_name' => $prod_name, 'prod_price' => $prod_price, 'prod_quantity' => $prod_quantity);
    print_r($_SESSION['cart']);
  }*/

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>MyCart</title>
  </head>
  <body>
<div>
	<h2 class="text-center">My Cart</h2>
</div>

<section class="container"> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sr.</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  	 <?php 
         if(isset($_SESSION['cart']))  {  
       
         foreach($_SESSION['cart'] as $key => $value) { ?>

    <tr>
      <th scope="row"><?php  echo $key; ?></th>
      <td><?php echo $value['prod_name']; ?></td>
      <td><?php echo $value['prod_price']; ?></td>
      <td><?php echo $value['prod_quantity']; ?></td>
      <td><a href="#" class="btn btn-danger" name="remove">Remove</a></td>
    </tr>
 
   <?php  
       }
      }
   ?>

  </tbody>
  <?php  
  if (isset($_POST['remove'])) {
unset($_SESSION['cart']);
session_destroy();
//header('location:login.php');
}
  ?>
</table>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>