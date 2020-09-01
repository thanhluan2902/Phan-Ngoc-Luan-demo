<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="get.php" method="GET" role="form">
            <legend>Get files</legend>
            
            <div class="form-group">
                <label for="">Tên đăng nhập</label>
                <input type="text" class="form-control" id="" placeholder="Nhập tên đăng nhập" name="user">
            </div>
            
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="pwd">
            </div>  
            
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>