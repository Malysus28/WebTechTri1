<?php

// require_once 'queryDB.php';
//  echo"<pre>";

//  print_r($_POST);

//  $FirstName = $_POST ['fname'];
//  $LastName = $_POST ['lastname'];
//  $Email = $_POST ['emailad'];
//  $Address = $_POST ['ad'];
//  $Message = $_POST ['msg'];


//  echo"</pre>";

?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Contact Us | Welcome to Keys4U</title>
    <link rel="stylesheet" href="./cssB.css">
    <script src='./formjava.js' type='text/javascript' async defer></script>
    <script src="./queryDb.php" type='text/javascript'></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />
</head>


<body class="body-contactpage">
    <header>
        <nav class="navbar">
            <div class="logo">
                <!-- <img class="imglogo" src="./images/key50px.png" alt="logo"> -->
                <li><a href="#">Keys4U</a></li>
            </div>

            <div class="navbarlist">
                <ul>
                    <li><a href="./homepage.html">Home</a></li>
                    <li><a href="./sale.html">Sale</a></li>
                    <!-- <li><a href="./products.html">Products</a></li> -->
                    <li><a href="./Keycaps.html">Keycaps</a></li>
                    <li><a href="./switches.html">Switches</a></li>
                    <li><a href="./Barebone.html">Barebone Kits</a></li>
                    <li><a href="./accessories.html">Accessories</a></li>
                    <li><a href="./contact.html">Contact Us</a></li>
                </ul>
            </div>
        </nav>
    </header>




    <!-- form -->
    <div class="forms">
        <div class="form-wrap">
            <h1>Contact Us</h1>
            <p>Feel free to ask us anything.</p>
            <form id="contactusform">

                <div action="#" method="POST"class="form-individual">
                    <label for="first-name">First Name</label>
                    <input type="text" name="fname" id="fname">
                </div>

                <div class="form-individual">
                    <label for="last-name">Last Name</label>
                    <input type="text" name="lastname" id="lastname">
                </div>

                <div class="form-individual">
                    <label for="Email">Full Address</label>
                    <input type="address" name="ad" id="ad">
                </div>

                <div class="form-individual">
                    <label for="Email">Email Address</label>
                    <input type="text" name="emailad" id="emailad">
                </div>

                <div class="form-individual">
                    <label for="Email">Message</label>
                    <textarea name="msg" id="msg" cols="50" rows="10" placeholder="Enter your message"></textarea>
                </div>

                <button input type="submit" class="btn-blue" onclick="validateForm (event)" value="submit form"> Submit</button>

            </form>


        </div>
    </div>

    <!-- footer -->
    <div class="footer">
        <footer>
            <p>&copy; Keys4U, Copyrights-2020</p>
            <i class="fa-brands fa-instagram fa-2x" style="color: #ffffff;"></i>
            <i class="fa-brands fa-square-facebook fa-2x" style="color: #ffffff;"></i>
            <i class="fa-solid fa-phone-volume fa-2x" style="color: #ffffff;"></i>
            <i class="fa-solid fa-envelope fa-2x" style="color: #ffffff;"></i>


        </footer>
    </div>

</body>