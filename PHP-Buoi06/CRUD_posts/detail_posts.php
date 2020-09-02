<?php
    // include '../validate/connect.php';

    // $id = $_GET['id'];
    // $conn = connect();

    // $query = "SELECT * FROM posts where id = " . $id;

    // $result = $conn->query($query);

    // // print_r($result);
    // $post = $result->fetch_assoc();

    include '../validate/sql.php';

    $detail = detail('posts');
    
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
  <h2>Chi Tiết Bài Post</h2>
  <p>-->>>>Phan Ngọc Luân<<<<--</p>
  <table class="table table-dark">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Thumbnail</th>
        <th>Content</th>
        <th>View_count</th>
        <th>Category_id</th>
        <th width=10%>Created_at</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $detail['id']  ?></td>
        <td><?php echo $detail['title']  ?></td>
        <td><?php echo $detail['description']  ?></td>
        <td><?php echo $detail['thumbnail']  ?></td>
        <td><?php echo $detail['content']  ?></td>
        <td><?php echo $detail['view_count']  ?></td>
        <td><?php echo $detail['category_id']  ?></td>
        <td><?php echo $detail['created_at']  ?></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
