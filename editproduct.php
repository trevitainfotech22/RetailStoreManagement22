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
        <style>

            input[type=number]  {
                width: 20%;
                padding: 12px;
                border: 1px solid black;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical;
            }


        </style>
        <?php
        include './admin/asidebar.php';
        ?>

        <section class="home">
            <div class="text"> Welcome ...... </div>
            <br>
            <div class="main">

                &nbsp;&nbsp;&nbsp;<button><a href="product.php" style="font-size: 20px">
                        Back &raquo;</a></button>
                <br><br>
                &nbsp;&nbsp;&nbsp;<h2 class="title1">EDIT PRODUCT</h2>
                <div class="container">
                    <form method="post">
                        <p>
                            &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  


                            <label STYLE="color: #818181" for="product">Product Name</label>  &nbsp;&nbsp;&nbsp;
                            <input type="text" id="product" name="product" placeholder="Your  Product Name.."  required> 

                            &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;

                            <label  STYLE="color: #818181" for="size"> Size </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="number" id="size" name="size" placeholder="Your No of Product.."  required>


                        </p>
                        <p>

                            &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <label STYLE="color: #818181"  for="price"> Price </label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="number" id="price" name="price" placeholder="Your no Product Prize.."  required>

                            &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; 

                            <label STYLE="color: #818181"  for="category"> Category </label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="category" name="category" placeholder=" Category Product.."  required>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        <center> <input type="submit" value="Update" >
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="submit" value="Reset" > 

                        </center>        
                </div>
        </section>

        <script src="./js/myscript.js"></script>


    </body>
</html>