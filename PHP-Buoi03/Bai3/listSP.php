<?php
    include 'data.php';
    session_start();
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
        table {
            border:1px black solid;
        }
        th,td {
            text-align: center;
            border: 1px red solid;
        }
    
    </style>
</head>
<body>
    <div class="container">

        <table width="60%">

            <tr>
				<th colspan="3"> DANH SÁCH SẢN PHẨM </th>
				<th><a href="cart.php">Xem giỏ hàng</a></th>
			</tr>
            <tr>
				<th width="6%">ID</th>
                <th width="40%">Tên sản phẩm</th>
                <th width="24%">Đơn giá</th>
				<th width="30%">Hành động</a></th>
			</tr>

            <?php foreach($datas as $key => $value) {  ?>
                <tr>
                    <td><?php echo $value['msp']; ?></td>
                    <td><?php echo $value['tenSP']; ?></td>
                    <td><?php echo $value['dongia']; ?></td>
                    <td><a href="add_gioHang.php?msp=<?php echo $key ?>">Add to cart</a></td>
                </tr>
            <?php }  ?>

        </table>
    </div>
</body>
</html>