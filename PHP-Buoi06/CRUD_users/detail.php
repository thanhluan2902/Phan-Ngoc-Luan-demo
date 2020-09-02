<?php
    // include '../validate/connect.php';

    // $connect = connect();

    // $data = $_GET['id'];

    // $query = "SELECT * FROM users where id = $data";

    // $result = $connect->query($query);
    
    // $user = $result->fetch_assoc();
    include '../validate/sql.php';

    $detail = detail('users');
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Chi Tiết User</h2>
  <p>-->>>>Phan Ngọc Luân<<<<--</p>
  <table class="table table-dark">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created_at</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $detail['id']  ?></td>
        <td><?php echo $detail['name']  ?></td>
        <td><?php echo $detail['email']  ?></td>
        <td><?php echo $detail['created_at']  ?></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>

