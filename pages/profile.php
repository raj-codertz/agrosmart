<?php
    include('../asset/conn.php');
    session_start();
    if($_SESSION['userid'] == null){
        header("location: ../index.php");
    }

    $cropname = null;
    $cropprice = null;
    $cropquantity = null;
    $cropncomments = null;
    $selectCrops = "SELECT * FROM crops";
    $resultCrops = mysqli_query($conection, $selectCrops);

    
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
  </head>
  <body>

  <?php require('sidebar.php')?>

    <!-- (B) MAIN -->
    <main id="pgmain">
      <div class="container">
        <table>
          <thead>
            <tr>
              <th>Crop name</th>
              <th>price</th>
              <th>quantity</th>
              <th>description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
                while($row = mysqli_fetch_assoc($resultCrops)){
                  $cropname = $row['crop_name'];
                  $cropprice = $row['product_price'];
                  $cropquantity = $row['quantiti'];
                  $cropncomments = $row['comments'];
                  
              ?>
              <tr>
              <td><?php echo  $cropname; ?></td>
              <td><?php echo  $cropprice; ?></td>
              <td><?php echo  $cropquantity; ?></td>
              <td><?php   ($cropncomments == null)?(print('no description')):(print($cropncomments)) ?></td>
              <td><button>Add to cart</button></td>
            </tr>
            <?php
                }
              ?>
            
          </tbody>
        </table>
      </div>
    </main>
  </body>
</html>