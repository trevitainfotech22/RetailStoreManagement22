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
            <br>
            <br>
            <div class="main">

            
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
            <label STYLE="color: #818181" for="salesman">Choose your Delivery Boy:</label>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <select name="delivery" id="delivery">
                                <option value="select">Select</option>
                                <option value="abdul">Abdul </option>
                                <option value="anush">Anush</option>
                                <option value="arjun">Arjun</option>
                            </select>
            
             
                    
                     </section>
        
        <script src="./js/myscript.js"></script>


    </body>
</html>