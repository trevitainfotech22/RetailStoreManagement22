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
        include './salesmanager/asidebar.php';
        ?>

        <section class="home">
            <div class="text"> Welcome ...... </div>
            
            
            
           <img src="./images/Wall post-amico.png" alt=" kitchen " width="500" height="600" 
                style="left:500px; top: 00px; position: absolute;" >  
           
        </section>
        
        <script src="./js/myscript.js"></script>


    </body>
</html>