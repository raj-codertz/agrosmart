

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
     <!-- Beggining of header -->
     <header>
        <a href="#" class="logo"><i class="fa-solid fa-tractor"></i>AgroSmart.</a>
        <nav class="navbar">
            <a class="active" href="#home">Home</a>
            <a href="#AboutUs">About us</a>
            <a href="#Mazaoyetu">Mazao</a>
            <a href="#about">BwanaMazaoContact</a>
            <button class="loginButoon" id="loginButooni">Login</button>
        </nav>
        <div class="icons" id="burgerIcon">
            <i class="fa-solid fa-bars"></i>
         </div>
    
    </header>
     <!--  End of header -->


    <!-- signup page -->
    <div class="signPage" id="signUpPageOpena">
    <?php
    include('asset/conn.php');

    if(isset($_POST['Submit'])){
        // check if the email is allready exist 
        $emailfromDB = null;
        $selectEmail = "SELECT * FROM users";
        $resultEmail = mysqli_query($conection, $selectEmail);

        while($row = mysqli_fetch_assoc($resultEmail)){
            $emailfromDB = $row['userEmail'];
        }


        $uzaname = $_POST['uzaname'];
        $emailis = $_POST['emailis'];
        $phones = $_POST['phones'];
        $countri = $_POST['countri'];
        $passwordis = $_POST['passwordis'];

        if($emailfromDB == $emailis){
            echo 'Email is already exist!';
        }
        else{
            $query = "INSERT INTO users(username, userEmail, phoneNumber, country, passworde)
                        VALUES('$uzaname', '$emailis', '$phones', '$countri', '$passwordis')";

            $tumaData = mysqli_query($conection, $query);
            if($tumaData){
                echo 'SUCCESSFUL';
            }else{
                echo 'failed';
            }
        }
        
    }

?>
        <div class="credin">

            <form action="signup.php" method="post">
                <label for="username">Username</label>
                <input type="text" name="uzaname" required>
                <label for="Email">Email</label>
                <input type="email" name="emailis">
                <label for="phone">Phone number</label>
                <input type="phone" name="phones" required>
                <label for="country">Country</label>
                <input type="text" name="countri" required>
                <label for="password">Password</label>
                <input type="password" name="passwordis" required>
                <button class="loginSubmit" id="loginSubmiti" name="Submit">Submit</button>
                <p >Back <a href="index.html">Home</a> to login</p>
            </form>
        </div>
    </div>
    <script src="scripts/nav.js"></script>
    <script src="scripts/logiin.js"></script>
</body>
</html>