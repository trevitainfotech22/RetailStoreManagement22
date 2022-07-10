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

                &nbsp;&nbsp;&nbsp;<button><a href="svendor.php" style="font-size: 20px">
                        Back &raquo;</a></button>
                <br><br>
                &nbsp;&nbsp;&nbsp;<h2 class="title1">EDIT VENDOR</h2>
                <div class="container">
                    <form method="post">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <p>
                            &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;


                            <label STYLE="color: #818181" for="sname">Shop Name</label>  &nbsp;&nbsp;&nbsp;
                            <input type="text" id="sname" name="sname" placeholder="Your  Shop Name.."  required> 


                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

                            <label STYLE="color: #818181"  for="oname">  Ower Name</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="oname" name="oname" placeholder="Your Ower Name.."  required>




                        </p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <p>


                            &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; 

                            <label STYLE="color: #818181"  for="feedback"> Feedback </label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="feedback" name="feedback" placeholder="Your Feedback.."  required>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <label STYLE="color: #818181" for="address">Address</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <textarea type="text" id="address" name="address" placeholder="Your  Address.."  required></textarea>


                        </p>


                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <p>

                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <label STYLE="color: #818181" for="salesman">Choose your salesman:</label>

                            <select name="salesman" id="salesman">
                                <option value="select">Select</option>
                                <option value="Vinnet">Vinnet Saini</option>
                                <option value="Sumit">Sumit Sharma</option>
                                <option value="Maneesh">Maneesh Patel</option>
                                <option value="Neha">Neha Sani</option>
                            </select>
                        </p>   
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                        <p> 


                            &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;

                            <label STYLE="color: #818181" for="uname">UserName</label>  &nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="username" placeholder="Your  Username.."  required>

                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <label  STYLE="color: #818181" for="pass">Password</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="password" id="pass" name="password" placeholder="Your Password.."  required>

                        </p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <p>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <label STYLE="color: #818181"  for="phone"> Phone-No</label>  &nbsp;&nbsp;&nbsp;
                            <input type="text" id="phone" name="phone" placeholder="Your PhoneNumber.."  required>
                           
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <label  STYLE="color: #818181" for="id">ID Proof</label> 
                            <input type="file" id="proof" name="proof" placeholder="Your ID Proof.."  required>

                        </p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <center> <input type="submit" value="Update" > 
                            <input type="submit" value="Reset" > 

                        </center>        
                </div>
        </section>

        <script src="./js/myscript.js"></script>


    </body>
</html>
