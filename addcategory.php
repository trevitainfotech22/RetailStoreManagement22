<?php 
include_once ('./Database/mydb.php');
$result = mysqli_query($connection,"SELECT * FROM product ");

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
                   
                        &nbsp;&nbsp;&nbsp;<h2 class="title1">PRODUCT</h2>
                        <br>
                        &nbsp;&nbsp;&nbsp;<button><a href="product.php" style="font-size: 20px">
                                Back &raquo;</a></button>
                              
            <br><br>


            <div class="container">
                    <form method="post">
                    <p>
                            &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  


                            <label STYLE="color: #818181" for="category">Category</label>  &nbsp;&nbsp;&nbsp;
                            <input type="text" id="category" name="category" placeholder="Your  Category Name.."  required> 

                            &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;

                        </p>
                        </p>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <center> <input type="submit" value="Add"  name = "add" action="" > 

                        </center>        

</div>
            <br><br>
            <div class="col-div-8">
                    <div class="box-8">
            <div style = "align:'center'">
                <table class="table"> 
                    <tr>
                        <th>CATEORY</th>
                        
                        <td>
                        <button>
                            Delete
</button>
                        
                    </tr>
 
                  
</div>
</div>
                </div>
            </div>
        </table>


    </section>

    <script src="./js/myscript.js"></script>


</body>
</html>