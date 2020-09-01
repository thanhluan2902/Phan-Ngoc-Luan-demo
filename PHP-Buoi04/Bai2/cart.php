<?php
     include 'data.php';
    //  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        img {
            width: 100px;
            height:100px;
        }
        a {
            color:white;
        }
        a:hover {
            color:white;
        }
    </style>
</head>
<body>
    <div class="container">
        <center> <h3>--- PRODUCTS IN CART ---</h3> </center>
        <button class="btn btn-success"><a href="listSP.php">Back to home</a></button>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">Code</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantily</th>
                <th scope="col">Amount</th>
                <th scope="col">Image</th>
            </tr>
        </thead>

        <?php foreach($_SESSION['cart'] as $key => $value) { ?>
            <tbody>
                <tr>
                    <th><?php echo $value['code']; ?></th>
                    <th><?php echo $value['name']; ?></th>
                    <th><?php echo $value['price']; ?></th>
                    <th>
                    <button class="btn btn-danger"><a href="delete.php?id=<?php echo $key ?>">-</a></button>
                    <?php echo $value['quanlity']; ?>
                    <button class="btn btn-warning"><a href="addtocart.php?id=<?php echo $key ?>">+</a></button>
                    </th>
                    <th><?php echo $value['img']; ?></th>
                    <th><button class="btn btn-primary"><a href="delete.php?id=<?php echo $key ?>">Delete</a></button></th>
                </tr>
             </tbody>
        <?php } ?>
        
        <?php $sum=0; foreach($_SESSION['cart'] as $key => $value) { 
            $sum += $value['price']*$value['quanlity'];
        } ?>
            <tbody>
                <th colspan="2">Sum</th>
                <th><?php echo $sum; ?></th>
            </tbody>
 

        </table>
        <hr>
    </div>   

</body>
</html>