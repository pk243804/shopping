<?php 
   include 'conn.php';
   $sql = "SELECT * FROM products2 WHERE featured=1";
   $result = $conn->query($sql);
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
    <title>Ekart</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>


  <body>
   <!-- main content goes here-->
   <section class="container-fluid">
    	<div class="row">
    		<h2 class="text-center mb-3">Laptop Details</h2><hr>
    		<?php 
               while ($product = mysqli_fetch_assoc($result)) {
               	    
    		?>
    		<div class="col-md-5 main">
    			<h4><?= $product['name']; ?></h4>
    			<img src="<?= $product['image']; ?>">
    			<p class="price">Rs<?= $product['price']; ?> </p>
    			<p class="desc"><?= $product['description']; ?> </p>
          <p class="bname"><?= $product['brand']; ?> </p>
    		</div>
    	<?php } ?>
    	</div>
    </section>


 </body>
 </html>