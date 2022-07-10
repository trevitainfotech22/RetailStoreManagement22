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
                <br /><br />
                
                <div class="col-div-8">
                    <div class="box-8">
                        <div class="content-box">
                            <p><b> USER DETAILS </b></p>
                            <br/> 
                            <table >
                                <thead>                                                                
                                    <th>id</th>
                                    <th>name</th>
                                    <th>username</th>
                                    <th>password</th>
                                    <th>Role</th>
                                </thead>
                                <tbody>
                                    <?php $counter=1;
                                    
                                    while($res = mysqli_fetch_array($result)){
                                        ?>
                                    <tr>
                                        <td> <?php echo $counter ?></td>
                                        <td> <?php echo $res['name'] ?></td>
                                        <td> <?php echo $res['username'] ?></td>
                                        <td> <?php echo $res['password'] ?></td>
                                        <td><?php if($res['role']==1){
                                                     echo 'Admin';
                              }
                            if($res['role']==2){
                          echo 'StoreManager';
                         }
                           if($res['role']==3){
                          echo 'Saleaman';
                           }
                           if($res['role']==4){
                             echo 'Kitchen';
                        }
                           if($res['role']==5){
                          echo 'DeliveryBoy';
                            }
                         if($res['role']==6){
                           echo 'Salesmanager';
                           }?></td>
                            </tr> <?php $counter++; } ?>
                     </tbody>
                           
                            </table>
                        </div>
                    </div>
                </div>
                    
                
       

                
        </section>

        <script src="./js/myscript.js"></script>


    </body>
</html>