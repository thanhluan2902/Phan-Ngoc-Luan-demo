<?php
    include '../validate/connect.php';

    $id = $_GET['id'];
    $conn = connect();

    $query = "SELECT * FROM users where id = " . $id;

    $result = $conn->query($query);

    $user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>user - update</title>
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
        <h3 align="center">Update users</h3>
        <hr>
        <form action="users_edit.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name"
                    value="<?php echo $user['name']; ?>">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email"
                    value="<?php echo $user['email']; ?>">
            </div>

            <div class="form-group">
                <label for="">Created_at</label>
                <input type="date" class="form-control" id="" placeholder="" name="created_at"
                    value="<?php echo $user['created_at']; ?>">
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>

