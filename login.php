<?php
include_once ('./Database/mydb.php');


if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select * from userdetails where username='{$username}' and password = '{$password}'" or die(mysqli_error($connection));
    $res = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['ROLE'] = $row['role'];
        $_SESSION['IS_LOGIN'] = 'yes';
        $_SESSION['ID'] = $row['id'];
        $_SESSION['NAME'] = $row['name'];

        if ($row['role'] == 1) {
//                                admin
            $_SESSION['username'] = $row["username"];
            header("location:admindash.php");
        } 
        elseif ($row['role'] == 2) {
//                                storemanager
            $_SESSION['username'] = $row["username"];
            header("location:storedash.php ");
        }
        elseif ($row['role'] == 3) {
//                                salesman
            $_SESSION['username'] = $row["username"];
            header("location: salesdash.php");
        } 
        elseif ($row['role'] == 4) {
//                                kitchen
            $_SESSION['username'] = $row["username"];
            header("location: kitchendash.php");
        } 
        elseif ($row['role'] == 5) {
//                                deliveryboy
            $_SESSION['username'] = $row["username"];
            header("location: deliverydash.php");
        } 
        elseif ($row['role'] == 6) {
//                                salesmanager
            $_SESSION['username'] = $row["username"];
            header("location: salesmanagerdash.php");
        }
    } 
    else {
        echo "<script> alert('username and password not match.')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
    </head>
    <body>

        <div class="limiter">
            <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" method="post">
                        <span class="login100-form-logo">
                            <i class="zmdi zmdi-landscape"></i>
                        </span>

                        <span class="login100-form-title p-b-34 p-t-27">
                            Log In
                        </span>

                        <div class="wrap-input100 validate-input" data-validate = "Enter username">
                            <input class="input100" type="text" name="username" placeholder="Username">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        </div>




                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>


                    </form>
                </div>
            </div>
        </div>



    </body>
</html>