<?php 
include_once ('./Database/mydb.php');
if (!isset($_SESSION['userid'])) {
    header("location.login.php");
}
include_once ('./Database/mydb.php');
if(isset($_POST['submit']))
{
 $name= mysqli_real_escape_string($connection, $_POST['name']);
 $date=mysqli_real_escape_string($connection, $_POST['date']);
 $phone=mysqli_real_escape_string($connection, $_POST['phone']);
 $username= mysqli_real_escape_string($connection, $_POST['username']);
 $address=mysqli_real_escape_string($connection, $_POST['address']);
 $password=mysqli_real_escape_string($connection, $_POST['password']);
 $proof="string";
 $role = 3;

 $query = mysqli_query($connection, "insert into userdetails(name,username,password,role) values('{$name}','{$username}','{$password}','{$role}')") or die(mysqli_error($connection));

$query1 = mysqli_query($connection, "insert into personaldetail(p_name,p_address,p_username,p_password) values('{$name}','{$address}','{$username}' ,'{$password}')") or die(mysqli_error($connection));
$lastinsertid = mysqli_insert_id($connection);
echo($lastinsertid);

$query2 = mysqli_query($connection, "insert into sale(s_dob,s_phone,p_id) values('{$date}','{$phone}','{$lastinsertid}')") or die(mysqli_error($connection));
 if($query1 && $query2 )
 {
 echo "<script>alert('record inserted');</script>";
 }
 
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

                &nbsp;&nbsp;&nbsp;<button><a href="salesman.php" style="font-size: 20px">
                        Back &raquo;</a></button>
                <br><br>
                &nbsp;&nbsp;&nbsp;<h2 class="title1">SALESMAN</h2>
                <div class="container">
                    <form  method="post" enctype="multipart/form-data">
                        <p>
                            &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;


                            <label STYLE="color: #818181"  for="name"> Name</label>  &nbsp;&nbsp;&nbsp;
                            <input type="text" id="name" name="name" placeholder="Your name.."  required>

                            &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;

                            <label STYLE="color: #818181" for="date">Date Of Birth</label>  &nbsp;&nbsp;&nbsp;
                            <input type="date" id="lname" name="date" placeholder="Your BirthDate.."  required>
                        </p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

                            <label STYLE="color: #818181"  for="phone"> PhoneNo</label>  &nbsp;&nbsp;&nbsp;
                            <input type="text" id="phone" name="phone" placeholder="Your PhoneNumber.."  required>

                            &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;

                            <label STYLE="color: #818181" for="uname">UserName</label>  &nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="username" placeholder="Your  Username.."  required>
                        </p>


                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

                            <label STYLE="color: #818181" for="address">Address</label>  &nbsp;&nbsp;&nbsp;
                            <textarea type="text" id="address" name="address" placeholder="Your  Address.."  required></textarea>

                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <label  STYLE="color: #818181" for="pass">Password</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="password" id="pass" name="password" placeholder="Your Password.."  required>

                        </p>   
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                        <p> 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

                            <label  STYLE="color: #818181" for="id">ID Proof</label> &nbsp;&nbsp;&nbsp;
                            <input type="file" id="proof" name="proof" placeholder="Your ID Proof.."  >

                        </p>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <center> <button type="submit" name="submit" value = "submit" > 
                                            Add Salesman
                                    </button>
                        </center>   
</form>     
                </div>
        </section>

        <script src="./js/myscript.js"></script>


    </body>
</html>