<?php
    // $conn = new Connection();
    // $connection = $conn->connect();

    // $id = $_GET['id'];

    // $query = "SELECT * FROM categories where id = " . $id;

    // $result = $connection->query($query);

    // $category = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>edit - category</title>
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
        <h3 align="center">Update Category</h3>
        <hr>
        <form action="?mod=category&act=update&id=<?php echo $edit_tb['id']?>" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name"
                    value="<?php echo $edit_tb['name'] ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description"
                    value="<?php echo $edit_tb['description'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>