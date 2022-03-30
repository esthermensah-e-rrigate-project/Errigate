<!--The first page for the web application-->

<?php
    //session_start();

    // require __DIR__ ."../../../Errigate/db.php";
    include '../../db.php';

    $error = "";
    if (isset($_POST['submit']))  {
        $conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);


        if($conn->connect_error){
            die("Connection failed: ".$conn->connect_error);
            echo "Connection failed";
        }
        else {

            //this will have to change coz I'm not using sign up
            $Email = $_POST["email"];
            $Password=$_POST["password"];
            // need a table for this in data base 
            $stmt = $conn -> prepare("SELECT * FROM `admin` WHERE `email`=? AND `password`=?");
            $stmt -> bind_param("ss",$Email,$Password);
            $user = null;

            $stmt->execute();

            $result = $stmt->get_result();

            //there will be two options for this coz i have admiin and student interface
            if($result -> fetch_assoc()) {

                header( 'Location: adminHome.php');

            }
            else {
                $error = " Wrong credentials: User does not exist. Try again";
            }


        }
}
?>





























<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleAdmin.css">
    <title>E-Irrigation</title>
</head>

<body>
    <!--Looking the page-->

    <body onload="myFunction()" style="margin:0;">

        <div id="loader"></div>
        <div style="display:none;" id="myDiv" class="animate-bottom">

            <!-- Image logo-->
            <img src="../assets/Elogo.png" alt="Logo image" width="150" height="150">

            <!--container of sign in as the user-->
            <div class="container">
                <form id="form" class="form" method="POST" >
                    <h1>Sign In As Admin</h1>
                    <?php if (isset($_GET['error'])) { ?>

                    <p class="error">
                        <?php echo $_GET['error']; ?>
                    </p>

                    <?php } ?>

                    <!-- <div class="form-control">
                        <input type="text" placeholder="Username" id="isername" required>
                        <small id='fullnameError'></small>
                    </div> -->
                    <!-- <div class="form-control">
                        <input type="text" placeholder="Phone Number" id="phone" required>
                        <small id='phoneError'></small>
                    </div> -->
                    <div class="form-control">
                        <input type="text" placeholder="Email Address" id="email" required>
                        <small id='emailError'></small>
                    </div>
                    <div class="form-control">
                        <input type="password" placeholder="Password" id="password" required>
                        <small id='passwordError'></small>
                    </div>
                    <small id='success'></small>
                    <button type="submit" id='submitBtn'>Sign in</button><br>
                    <div class="admin">
                        <label for="Admin">Sign in as an <a href="../user/loginUser.php"; style="color:#018749; font: 1em sans-serif; text-decoration: none;">User</a></label>
                    </div><br>

                    <div class="forgot">
                        <label for="Forgotpassword"><a href="forgotAdmin.html"; style="color:#018749; font: 1em sans-serif; text-decoration: none;" >forgotten password?</a></label>
                    </div>
                </form>
            </div>


        </div>

        <!--script that allow the page to take sometimes to load for the next page-->
        <script>
            var myVar;

            function myFunction() {
                myVar = setTimeout(showPage, 500);
            }

            function showPage() {
                document.getElementById("loader").style.display = "none";
                document.getElementById("myDiv").style.display = "block";
            }
        </script>

        <!--displaying the sentences on the page-->
        <div class="sentence1">
            <h>Worry less, your Crops can rely entirely on E-rrigate
                <h/>
        </div>
        <div class="sentence2">
            <h>for deep moisturizing.
                <h/>
        </div>

        <!--codes that support the script and jquery library-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="./script.js"></script>

    </body>
    <!--End of the body instrustructions-->

</html>