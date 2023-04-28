<?php
    session_start();
    include('asset/conn.php');
    if(isset($_POST['submit'])){
        $emaili = $_POST['emaili'];
        $passwordi = $_POST['passwordi'];

        $emailfromDB = null;
        $passwordfromDB = null;
        $userNamefromDB = null;
        $userIdfromDB = null;

        $selectuser = "SELECT * FROM users";
        $resultuser = mysqli_query($conection, $selectuser);

        while($row = mysqli_fetch_assoc($resultuser)){
            $emailfromDB = $row['userEmail'];
            $passwordfromDB = $row['passworde'];
            $userIdfromDB = $row['id'];
            $userNamefromDB = $row['username'];
        }


        if(($emailfromDB == $emaili) & ($passwordfromDB == $passwordi)){
            $_SESSION['userid'] = $userIdfromDB;
            $_SESSION['username'] = $userNamefromDB;
            header('location: pages/profile.php');
        }
        else{
            echo 'Failed to login';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <!-- css file link -->
     <link rel="stylesheet" href="style/style.css">
     <link rel="stylesheet" href="style/query-media.css">
     <link rel="stylesheet" href="style/lgin-sigup.css">
      
     <!-- Font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <title>AgroSmart</title>
</head>
<body>
    <!-- Login page -->
    <div class="loginPage" id="loginPageOpena">
        
        <div class="credin">
            <span class="closepage" id="closePage">X</span>
            <form action="index.php" method="post">
                <label for="Email">Email</label>
                <input type="email" name="emaili" required>
                <label for="password">Password</label>
                <input type="password" name="passwordi" required>
                <button class="loginSubmit" id="loginSubmiti" name="submit">Submit</button>
                <p>Click <a href="signup.php">here</a></span> if don't have an account</p>
            </form>
        </div>
    </div>
    <!-- Login page end -->
    <!-- Beggining of header -->
    <header>
        <a href="#" class="logo"><i class="fa-solid fa-tractor"></i>AgroSmart.</a>
        <nav class="navbar">
            <a class="active" href="index.php">Home</a>
            <a href="#Mazaoyetu">Mazao</a>
            <a href="#AboutUs">About us</a>
            <a href="#services">Services</a>
            <button class="loginButoon" id="loginButooni">Login</button>
        </nav>
        <div class="icons" id="burgerIcon">
            <i class="fa-solid fa-bars"></i>
         </div>
    
    </header>
     <!--  End of header -->

    <!-- Beggining of first section -->
    <section class="first_section">
        <div class="row">
            <div class="headline">
                <h1>Safe your Life with Agriculture</h1>
                <p>We are everything to your problem and give you all the most possible solution.</p>

                <button class="chaguaButton" onclick="window.location.href='pages/mkoa.html'">Chagua Mkoa</button>
            </div>

            <div class="first_agricultureimage">
                <img src="farmers-smartphone-abugrafie-shutterstock_1356572210.jpg.jpeg">
            </div>
        </div>
        
    </section>
    <!-- Ending of first section -->
   
    <!--Beggining of second section -->
    <section class="second_section">

        <h2 id="Mazaoyetu">Mazao yetu</h2>
     <div class="container_body">
          <div class="container">
            <div class="image">
                <img src="beans.jpg">
            </div>
            <div class="details">
                <h3>Maharage</h3>
            <p>Location: Mbeya</p>
            <p>Cost Price: Tsh 1200/=</p>
            <p>Contact: 072351844</p>
            </div>
           </div>
    
           <div class="container">
            <div class="image">
                <img src="tomatoes_helios4eos_gettyimages-edit.jpeg">
            </div>
            <div class="details">
                <h3>Nyanya</h3>
            <p>Location: Iringa </p>
            <p>Cost Price: Tsh 200/=</p>
            <p>Contact: 072351844</p>
            </div>
           </div>
    
           <div class="container">
            <div class="image">
                <img src="corn-vs-maize-01.jpg">
            </div>
            <div class="details">
                <h3>Mahindi</h3>
            <p>Location: Tabora</p>
            <p>Cost Price: Tsh 1200/=</p>
            <p>Contact: 072351844</p>
            </div>
           </div>
    
           <div class="container">
            <div class="image">
                <img src="organic-coorg-cashew-nuts-500-gm-coorg-dry-fruits-whole-big-size.20220919003557.webp">
            </div>
            <div class="details">
                <h3>Korosho</h3>
                <p>Location: Tabora</p>
                <p>Cost Price: Tsh 1200/=</p>
                <p>Contact: 072351844</p>
            </div>
           </div>

           <div class="container">
            <div class="image">
                <img src="onions.jpeg">
            </div>
            <div class="details">
                <h3>Vitunguu</h3>
                <p>Location: Tabora</p>
                <p>Cost Price: Tsh 1200/=</p>
                <p>Contact: 072351844</p>
            </div>
           </div>
    
           <div class="container">
            <div class="image">
                <img src="mpunga.jpeg">
            </div>
            <div class="details">
                <h3>Mpunga</h3>
                <p>Location: Tabora</p>
                <p>Cost Price: Tsh 1200/=</p>
                <p>Contact: 072351844</p>
            </div>
           </div>
    
           <div class="container">
            <div class="image">
                <img src="types-of-flour-pin.jpg">
            </div>
            <div class="details">
                <h3>Ngano</h3>
                <p>Location: Tabora</p>
                <p>Cost Price: Tsh 1200/=</p>
                <p>Contact: 072351844</p>
            </div>
           </div>
    
           <div class="container">
            <div class="image">
                <img src="asali.webp">
            </div>
            <div class="details">
                <h3>Asali</h3>
                <p>Location: Tabora</p>
                <p>Cost Price: Tsh 1200/=</p>
                <p>Contact: 072351844</p>
            </div>
           </div>
     </div>
       

    </section>
    <!-- Ending of second section -->

    <!-- Beggining of third section -->
    <section class="third_section">
        <h2 id="AboutUs">About Us</h2>
        <div class="container_body2">
            <div class="about_image">
                <img src="crop-monitoring-via-mobile-device.svg">
            </div>
            <div class="aboutus_text">
                <h3 style="font-size: 25px; padding: 20px;">Our Agriculture life</h3>
                <p style="font-size: 20px;">
                   Agrosmart ni tovuti inayowawezesha wakulima wadogo kujifunza jinsi ya kufanya kilimo
                sahihi kwa mazao ya kibiashara kwa kiwango kidogo.Tovuti hii inatoa maelezo ya njia bora za kilimo kwa kiwango 
            kidogo pamoja na kupendekeza mazao yanayostahili kwa eneo husika huku ikiwapatia taarifa kuhusu bei za mazao.
        Kwa kutumia AgroSmart, wakulima wadogo wanaweza kupata ufahamu wa jinsi ya kuendesha kilimo chao kwa ufasihi kwa njia 
    ya video na maandiko kulingana na mkoa pamoja na mazao husika.</p>
    <h3 style="font-size: 20px;">Agrosmart inatoa msaada mkubwa kwa wakulima wanaotafuta njia bora za kuendesha kilimo
    chao kwa ufanisi zaidi na kupata faida zaidi kutokana na kilimo chao.</h3>
            
            </div>
        </div>        
    </section>
<!-- End of third section -->


 <!--Beggining of forth section -->
 <section class="second_section" id="services">

    <h2>Services</h2>
 <div class="container_body2">
      

       <div class="container">
        <div class="image">
            <img src="farmers-using-smart-device-for-crop-monitoring.svg">
        </div>
        <div class="details">
            <a href="bwanashambaContacts.html" class="servicesbutoon">Bwana Shamba contact</a>
        </div>
       </div>

       <div class="container ">
        <div class="image">
            <img src="Build-An-Organic-E-commerce-Platform.png">
        </div>
        <div class="details">
            <a href="login.html" class="servicesbutoon">Sell / Buy</a>
      
        </div>
       </div>
 </div>
   

</section>
<!-- Ending of second section -->



<section class="footer">
    <div class="box-container">

        <div class="box">
            <h3>Locations</h3>
            <a href="#">Mabibo</a>
            <a href="#">Magomeni-mapipa</a>
            <a href="#">Makumbusho</a>
            <a href="#">Chuo kikuu cha Dar es Salaam</a>
            <a href="#">Chuo kikuu cha Dar es Salaam</a>
        </div>

        <div class="box">
            <h3>Quick links</h3>
            <a href="#home">Home</a>
            <a href="#dishes">About us</a>
            <a href="#about">Mazao</a>
            <a href="#about">BwanaMazaoContact</a>
        </div>

        <div class="box">
            <h3>Contact info</h3>
            <a href="#">+255 678 479 598</a>
            <a href="#">+255 653 250 210</a>
            <a href="#">Dar-es-salaam -tanzania</a>
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedln</a>
        </div>

    </div>

    <div class="credit">copyright @ 2023 by <span>Dark army Group</span></div>

</section>
<script src="scripts/nav.js"></script>
<script src="scripts/logiin.js"></script>
</body>
</html>