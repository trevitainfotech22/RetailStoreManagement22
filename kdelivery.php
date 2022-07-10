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
        include './kitchen/asidebar.php';
        ?>

        <section class="home">
            <div class="text"> Welcome ...... </div>

      

           
            <!-- main content start-->
            
                <div class="main">
                   
                        &nbsp;&nbsp;&nbsp;<h2 class="title1">DELIVERY BOY</h2>
                         &nbsp;&nbsp;&nbsp;  
                        

            <div class="container">
                 
                <label STYLE="color: #818181" for="delivery"> Delivery Boy:</label>

                                <select name="delivery" id="delivery">
                                    <option value="select">Select</option>
                                    <option value="raj">Raj</option>
                                    <option value="vijay">Vijay</option>
                                    <option value="Maneesh">Mahesh</option>
                                    <option value="jay">Jay</option>
                                </select>
             </center>
             
              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                <input type="submit" value="Print" >  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
                 
              
             
             
             </p>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
                </div>

    </section>

    <script src="./js/myscript.js"></script>


</body>
</html>