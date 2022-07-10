<?php 
include_once ('./Database/mydb.php');
if (!isset($_SESSION['userid'])) {
    header("location.login.php");
}

if($_POST['submit'])
{
 $name= mysqli_real_escape_string($connection, $_POST['name']);
 $username=mysqli_real_escape_string($connection, $_POST['username']);
 $password=mysqli_real_escape_string($connection, $_POST['password']);
 $role = 1;


$query = mysqli_query($connection, "insert into userdetails(name,username,password,role) values('{$name}','{$username}','{$password}','{$role}')") or die(mysqli_error($connection));

 if($query)
 {
 echo "<script>alert('record inserted');</script>";
 }
 echo "<script> window.location='admin.php'; </script>";
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
            <br>
            <div class="main">

                &nbsp;&nbsp;&nbsp;<button><a href="admin.php" style="font-size: 20px">
                        Back &raquo;</a></button>
                <br><br>
                &nbsp;&nbsp;&nbsp;<h2 class="title1">ADD ADMIN</h2>
                <div class="container">
                    <form method="post">
                        <p>
                            &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;


                            <label STYLE="color: #818181"  for="name"> Name</label>  &nbsp;&nbsp;&nbsp;
                            <input type="text" id="name" name="name" placeholder="Your name.."  required>

                            &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;

                            <label STYLE="color: #818181" for="uname">UserName</label>  &nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="username" placeholder="Your  Username.." required>

                        </p>

                        &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;

                        <label  STYLE="color: #818181" for="pass">Password</label> &nbsp;&nbsp;&nbsp;
                        <input type="password" id="pass" name="password" placeholder="Your Password.."  required>
                        <br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <center> <input type="submit" value="Submit" name="submit"> 

                        </center>        
                </div>
        </section>

        <script src="./js/myscript.js"></script>


    </body>
</html>