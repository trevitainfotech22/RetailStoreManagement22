<?php 

include_once ('./Database/mydb.php');
if (!isset($_SESSION['userid'])) {
    header("location.login.php");
}

$editid = $_GET['eid'];

if(!isset($_GET['eid']) || empty($_GET['eid']))
{
    header("location:admin.php");
    
}
 $selectq = mysqli_query($connection, "select * from userdetails where id='{$editid}'") or die(mysqli_error($connection));
 $selectrow = mysqli_fetch_array($selectq);
$mag = "";


if($_POST)
{
    $id = $_POST['id'];
    $name= mysqli_real_escape_string($connection, $_POST['name']);
    $username=mysqli_real_escape_string($connection, $_POST['username']);
    $password=mysqli_real_escape_string($connection, $_POST['password']);
    
    
    $query = mysqli_query($connection, "update `userdetails` set `name` = '{$name}',`username` = '{$username}',`password` = '{$password}'  where `id` ='{$id}'") or die(mysqli_error($connection));
    
   
    if($query)
    {
        echo "<script>alert('record updated'); window.location='admin.php';</script>";
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

                &nbsp;&nbsp;&nbsp;<button><a href="admin.php" style="font-size: 20px">
                        Back &raquo;</a></button>
                <br><br>
                &nbsp;&nbsp;&nbsp;<h2 class="title1"> EDIT ADMIN</h2>
                <div class="container">
                    <form method="post" >
                        <p>
                            &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
                            <input type="hidden" name="id" value="<?php echo $selectrow['id'] ?>">

                            <label STYLE="color: #818181"  for="name"> Name</label>  &nbsp;&nbsp;&nbsp;
                            <input type="text" id="name" name="name" placeholder="Your name.."  value="<?php echo $selectrow['name'] ?>"  required>

                            &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;

                            <label STYLE="color: #818181" for="uname">UserName</label>  &nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="username" placeholder="Your  Username.." value="<?php echo $selectrow['username'] ?>" required>

                        </p>

                        &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;

                        <label  STYLE="color: #818181" for="pass">Password</label> &nbsp;&nbsp;&nbsp;
                        <input type="password" id="pass" name="password" placeholder="Your Password.." value="<?php echo $selectrow['password'] ?>" required>
                        <br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <center> <input type="submit" value="Update"> 
                              

                        </center>        
                </div>
        </section>

        <script src="./js/myscript.js"></script>


    </body>
</html>

