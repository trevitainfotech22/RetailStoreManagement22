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

      

           
            <!-- main content start-->
            
                <div class="main">
                   
                        &nbsp;&nbsp;&nbsp;<h2 class="title1">VENDOR-LIST</h2>
                        

            <br><br>
            <div align="center">
                <table class="table"> 
                    <tr>
                       
                    <th>SR.NO</th>
                    <th>SHOP-NAME</th>
                    <th>OWER-NAME</th>
                    <th>ADDRESS</th>
                    <th>PHONE-NO</th>
                    <th>ID-PROOF</th>
                    <th>FEEDBACK</th>
                    <th>SALESMAN</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>ACTION</th>

                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      
                        
                        
                        <td>
                            <button>
                                <a href="editsvendor.php">
                                    Edit</a>
                            </button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <button>
                                <a href="">
                                    Delete</a>
                            </button>
                      
                        </td>

                    </tr>
                    <tr>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                         <td></td>
                        <td></td>

                    </tr>
                </div>
            </div>
        </table>


    </section>

    <script src="./js/myscript.js"></script>


</body>
</html>