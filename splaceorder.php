<?php 
include_once ('./Database/mydb.php');

if (!isset($_SESSION['userid'])) {
    header("location.login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!----======== CSS ======== -->
        <link rel="stylesheet" href="./css/mystyle.css">

        <!----===== Boxicons CSS ===== -->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> Retail system </title> 
    </head>
    <body>
        <?php
        include './salesman/asidebar.php';
        ?>

        <section class="home">
            <div class="text"> Welcome ...... </div>
            <br>
            <div class="main">

              
                <br><br>
                &nbsp;&nbsp;&nbsp;<h2 class="title1">PLACE-ORDER</h2>
                <div class="container">
                    <form method="post">
                        <p>
                            &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;


                            <label STYLE="color: #818181"  for="vendor"> Select Vendor</label>  &nbsp;&nbsp;&nbsp;
                            <input type="text" id="vendor" name="vendor" placeholder="Your Vendor.."  required>

                            &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; 

                            <label STYLE="color: #818181" for="delivery">Select Delivery Boy</label>  &nbsp;&nbsp;&nbsp;
                            <input type="text" id="delivery" name="delivery" placeholder="Your  Delivery Boy.." required>

                        </p>

                        &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;

                       <label STYLE="color: #818181" for="date">Delivery Date</label>  &nbsp;&nbsp;&nbsp;
                            <input type="date" id="date" name="date"   required>
                        <br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <center> <input type="submit" value="Submit" > 

                        </center>        
                </div>
        </section>

        <script src="./js/myscript.js"></script>


    </body>
</html>