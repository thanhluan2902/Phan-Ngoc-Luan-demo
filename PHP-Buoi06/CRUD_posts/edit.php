<?php
    include '../validate/connect.php';

    $id = $_GET['id'];
    $conn = connect();

    $query = "SELECT * FROM posts where id = " . $id;

    $result = $conn->query($query);

    // print_r($result);
    $post = $result->fetch_assoc();

    // print_r($post);
    // die();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>edit - posts</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <h3 align="center">Phan Ngọc Luân - Dev Lười Code Nhất Hệ Mặt Trời</h3>
        <h3 align="center">Update Posts</h3>
        <hr>
        <form action="post_edit.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title"
                    value="<?php echo $post['title']; ?>">
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description"
                    value="<?php echo $post['description']; ?>">
            </div>

            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" name="thumbnail" value="<?php echo $post['slug'] ?>">
            </div>

            <div class="form-group">
                <label for="">Content</label>
                <input type="text" class="form-control" name="content" value="<?php echo $post['content'] ?>">
            </div>

            <div class="form-group">
                <label for="">Category_id</label>
                <input type="text" class="form-control" name="category_id" value="<?php echo $post['category_id'] ?>">
            </div>

            <div class="form-group">
                <label for="">Created_at</label>
                <input type="date" class="form-control" name="created_at" value="<?php echo $post['created_at'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>