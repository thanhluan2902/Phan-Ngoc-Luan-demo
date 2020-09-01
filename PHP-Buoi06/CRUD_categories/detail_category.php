<?php
    include '../validate/connect.php';

    $id = $_GET['id'];
    $conn = connect();

    $query = "SELECT * FROM categories where id = " . $id;

    $result = $conn->query($query);

    // print_r($result);
    $categories = $result->fetch_assoc();
    
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
  <h2>Chi Tiết Thể Loại Bài Post</h2>
  <p>-->>>>Phan Ngọc Luân<<<<--</p>
  <table class="table table-dark">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Thumbnail</th>
        <th>Slug</th>
        <th>Created_at</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $categories['id']  ?></td>
        <td><?php echo $categories['name']  ?></td>
        <td><?php echo $categories['description']  ?></td>
        <td><?php echo $categories['thumbnail']  ?></td>
        <td><?php echo $categories['slug']  ?></td>
        <td><?php echo $categories['created_at']  ?></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
