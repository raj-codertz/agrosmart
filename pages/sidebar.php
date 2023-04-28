    <?php
      include('../asset/conn.php');
      if($_SESSION['userid'] == null){
          header("location: ../index.php");
      }
    ?>
    
    <!-- (A) SIDEBAR -->
    <div id="pgside">
      <!-- (A1) BRANDING OR USER -->
      <!-- LINK TO DASHBOARD OR LOGOUT -->
      <div id="pguser">
        <img src="potato.png">
        <i class="txt"><?php echo $_SESSION['username']; ?></i>
      </div>

      <!-- (A2) MENU ITEMS -->
      <a href="profile.php" class="current">
        <i class="ico">&#9733;</i>
        <i class="txt">Crops On Sale</i>
      </a>
      <a href="createcrop.php">
        <i class="ico">&#9728;</i>
        <i class="txt">Sale Product</i>
      </a>
      <a href="#">
        <i class="ico">&#9737;</i>
        <i class="txt">My cart</i>
      </a>
      <a href="../asset/logout.php">
        <i class="ico">&#9737;</i>
        <i class="txt">Log Out</i>
      </a>
    </div>