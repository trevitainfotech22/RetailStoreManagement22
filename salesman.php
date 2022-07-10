<?php 
include_once ('./Database/mydb.php');
$result = mysqli_query($connection,"SELECT personaldetail.p_name,personaldetail.p_address,personaldetail.p_username,personaldetail.p_password,sale.s_dob,sale.s_phone 
FROM personaldetail INNER JOIN sale ON personaldetail.p_id = sale.s_id;");



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

      

           
            <!-- main content start-->
            
                <div class="main">
                   
                        &nbsp;&nbsp;&nbsp;<h2 class="title1">SALESMAN</h2>
                        <br>
                        &nbsp;&nbsp;&nbsp;<button><a href="addsales.php" style="font-size: 20px">
                                Add Salesman &raquo;</a></button>

            <br><br>
            <div class="col-div-8">
                    <div class="box-8">
            <div align="center">
                <table class="table"> 
                    <tr>
                        <th>SR.NO</th>
                        <th>NAME</th>
                        <th>USERNAME</th>
                        <th>PASSWORD</th>
                        <th>ADDRESS</th>
                        <th>DOB</th>
                        <th>PHONE-NO</th>
                        <th>ACTION</th>
                    </tr>
                    <tbody>
                    <?php $counter=1;
                                    if (isset($_GET['did'])) {
                                        $did = $_GET['did'];
                                        $deleteq = mysqli_query($connection, "delete from personaldetails where id ='{$did}'")or die(mysqli_error($connection));
                                        if ($deleteq) {
                                            echo "<script>alert('Record Deleted');</script>";
                                            echo "<script> window.location='salesman.php'; </script>";
                                        }
                                    }
                                    while($res = mysqli_fetch_array($result)) 
                                    {
                                        ?>
                                    <tr>
                                    <?php 
                                         echo "<td>". $counter."</td>";
                                        echo "<td>".$res['p_name']."</td>";
                                        echo "<td>". $res['p_username']."</td>";
                                        echo "<td>".$res['p_password']."</td>";
                                        echo "<td>".$res['p_address']."</td>";
                                        echo "<td>". $res['s_dob']."</td>";
                                        echo "<td>".$res['s_phone']."</td>";
                                       //echo "<td> <a href='editsales.php?eid={$res['p_id','id','s_id']}'>Edit</a> | <a href='salesman.php ? did={$res['p_id','id','s_id']}]'>Delete</a> </td>";
                                        
                                        ?>
                            </tr> <?php $counter++; } ?>
          </tbody>

</div>
</div>
                </div>
            </div>
                               
        </table>


    </section>

    <script src="./js/myscript.js"></script>


</body>
</html>