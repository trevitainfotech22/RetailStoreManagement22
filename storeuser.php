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
        include './storemanager/asidebar.php';
        ?>

        <section class="home">
            <div class="text"> Welcome ...... </div>

      

           
           

            <div class="row" align ="center">
              

               


                <a href="salesman.php">
                    <img src="images/salesman.png" alt="" style="width:60%"></a>

                <a href="delivery.php">
                    <img src="images/delivery boy.png" alt="" style="width:60%"></a>


            </div>

            <div class="row" align ="center">

                <a href="salesmanager.php">
                    <img src="images/salesmanger.png" alt="" style="width:60%"></a>

                <a href="kitchen.php">
                    <img src="images/kitchen.png" alt="" style="width:60%"></a>


              


            </div>



              


            </div>




    </section>

    <script src="./js/myscript.js"></script>


</body>
</html>