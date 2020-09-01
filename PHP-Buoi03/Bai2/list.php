<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>	
	<style>
	tr {
		border-bottom: 1px black solid;
		text-align: left;
	}
	</style>
</head>
<body>
	<div class="container">
		<center>
		<h1>DANH SÁCH Sinh Viên</h1>
		</center>
		<a href="add.php" class="btn btn-primary">Thêm mới</a>

		<?php 
			if(isset($_COOKIE['msg'])) {
		?>
			<div class= "alert alert-success">
				<strong>Thông Báo : </strong><?php echo $_COOKIE['msg']; ?>
			</div>
		<?php } ?>

		<?php 
			session_start();
			$i = 0;
		?>
		<table width="100%">
			<tr>
				<th width="6%"> # </th>
				<th width="30%">Mã sinh viên</th>
				<th width="35%">Họ tên</th>
				<th>Action</th>
			</tr>
			<?php foreach ($_SESSION['sv'] as $key => $value) {
				$i++; 
				?>
				<tr height="50px">
					<td><?php echo $i; ?></td>
					<td><?php echo $value['code']; ?></td>
					<td><?php echo $value['name']; ?></td>
					<td>
						<a href="detail.php?id=<?php echo $key; ?>" class="btn btn-info">Detail</a>
						<a href="delete.php?id=<?php echo $key; ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>	
			<?php } ?>
		</table>
	</div>
</body>
</html>