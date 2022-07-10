<?php
 
include_once ('./Database/mydb.php');
$result = mysqli_query($connection,"SELECT * FROM userdetails ORDER BY role ASC");

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
        include './admin/asidebar.php';
        ?>

        <section class="home">
            <div class="text"> Welcome ...... </div>



            <div class="clearfix"></div>
            <br/>
            
            
            <div class="">
                <div class="col-div-3">
                    <div class="box">
                        <p><br /><span>Today's Order</span></p>
                        <i class="fa fa-first-order box-icon" style="font-size:48px"></i>
                    </div>
                </div>

                <div class="col-div-3">
                    <div class="box">
                        <p><br /><span>Today's Sale</span></p>
                        <i class="fa fa-list box-icon"></i>
                    </div>
                </div>

                <div class="col-div-3">
                    <div class="box">
                        <p><br /><span>Total Orders</span></p>
                        <i class="fa fa-shopping-bag box-icon"></i>
                    </div>
                </div>

                <div class="col-div-3">
                    <div class="box">
                        <p><br /><span>Top Salesman</span></p>
                        <i class="fa fa-tasks box-icon"></i>
                    </div>
                </div>


                <div class="clearfix"></div>
                <br /><br />


                <div class="col-div-3">
                    <div class="box">
                        <p><br /><span>Top Vendor</span></p>
                        <i class="fa fa-users box-icon"></i>
                    </div>
                </div>

                <div class="col-div-3">
                    <div class="box">
                        <p><br /><span>Total Vendor</span></p>
                        <i class="fa fa-list box-icon"></i>
                    </div>
                </div>

                <div class="col-div-3">
                    <div class="box">
                        <p><br /><span>Total Revenue</span></p>
                        <i class="fa fa-shopping-bag box-icon"></i>
                    </div>
                </div>

                <div class="col-div-3">
                    <div class="box">
                        <p><br /><span>Top Product</span></p>
                        <i class="fa fa-tasks box-icon"></i>
                    </div>
                </div>

                
                <div class="clearfix"></div>
                <br /><br />
                
           
       

                
        </section>

        <script src="./js/myscript.js"></script>


    </body>
</html>