<?php
  include('../asset/conn.php');
  session_start();
  if($_SESSION['userid'] == null){
      header("location: ../index.php");
  }
  if(isset($_POST['submit'])){


    $crop_name = $_POST['crop_name'];
    $product_price = $_POST['product_price'];
    $quantiti = $_POST['quantiti'];
    $comments = $_POST['comments'];

    $query = "INSERT INTO crops(crop_name, product_price, quantiti, comments)
                    VALUES('$crop_name', '$product_price', '$quantiti', '$comments')";

    $tumaData = mysqli_query($conection, $query);
    if($tumaData){
        echo 'SUCCESSFUL PRODUCT CREATED';
    }else{
        echo 'failed to create product';
    }
    
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Pure HTML CSS Admin Template</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
    <link rel="stylesheet" href="../style/profile.css">
    <link rel="stylesheet" href="../style/table.css">
    <link rel="stylesheet" href="../style/croponsale.css">
  </head>
  <body>
  <?php require('sidebar.php')?>

    <!-- (B) MAIN -->
    <main id="pgmain">
     
<div class="container">
  <div class="row header">
    <h1>PROMOTE YOUR CROP &nbsp;</h1>
    <h3>Fill out the form below to publish your crop!</h3>
  </div>
  <div class="row body">
    <form action="createcrop.php" method="post">
      <ul>
        
        <li>
          <p class="left">
            <label for="product_name">crop name</label>
            <input type="text" name="crop_name" placeholder="viazi" required/>
          </p>
          <p class="pull-right">
            <label for="product_price">Product price</label>
            <input type="text" name="product_price" placeholder="12,000" required/>      
          </p>
        </li>
        
        <li>
          <p>
            <label for="quantiti">quantiti <span class="req">*</span></label>
            <input type="quantiti" name="quantiti" placeholder="12kg" required/>
          </p>
        </li>        
        <li><div class="divider"></div></li>
        <li>
          <label for="comments">comments</label>
          <textarea cols="46" rows="3" name="comments"></textarea>
        </li>
        
        <li>
          <button class="btn btn-submit" name="submit" value="Submit">SUBMIT</button>
          <small>or press <strong>enter</strong></small>
        </li>
        
      </ul>
    </form>  
  </div>
</div>
    </main>
  </body>
</html>