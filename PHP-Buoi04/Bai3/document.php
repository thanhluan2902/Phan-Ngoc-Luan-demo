<?php
    // include 'addtodocument.php';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <center> <h3>< --- Documents --- ></h3> </center>
        <button class="btn btn-success"><a href="upload.php">Upload Document</a></button>

        <?php 
			if(isset($_COOKIE['msg'])) {
		?>
			<div class= "alert alert-success">
				<strong>Thông Báo : </strong><?php echo $_COOKIE['msg']; ?>
			</div>
		<?php } ?>

        <table class="table" width="100%">
        <thead>
            <tr>
                <th scope="col-3">No</th>
                <th scope="col-5" width="45%;">Name</th>
                <th scope="col-2">Dowloads</th>
                <th scope="col-2">Action</th>
            </tr>
        </thead>
        <?php $i=1; foreach($_SESSION['documents'] as $key => $value){ ?>
            <tr>
                <th><?php echo $i++; ?></th>
                <td><?php echo $value['title'] ?></td>
                <td><button class="btn btn-primary"><a href="dowload.php?id=<?php echo $key ?>"><i class="fa fa-download"></i> Dowload</a></button></td>                
                <td scope="col-2"><button class="btn btn-danger"><a href="delete.php?id=<?php echo $key ?>">Remove</a></button></td>
            </tr>            
        <?php } ?>
        </table>
    </div>   

</body>
</html>