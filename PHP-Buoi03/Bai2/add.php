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
        <form action="add_process.php" method="POST" role="form">
            <legend>Form Nhập Thông Tin Sinh Viên</legend>
            
            <div class="form-group">
                <label for="">Mã Sinh Viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập MSV" name="code">
            </div>
            
            <div class="form-group">
                <label for="">Họ Và Tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào họ và tên" name="name">
            </div>  
            
            <div class="form-group">
                <label for="">Số Điện Thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào SĐT" name="sdt">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="Nhập vào email" name="email">
            </div>

            <div class="form-group">
            <label for="">Gioi Tinh</label><br>
                <input type="radio" name="gt" value="Male"> Male 
                <input type="radio" name="gt" value="Female"> Female 
                <input type="radio" name="gt" value="Other"> Other 
            </div>

            <div class="form-group">
                <label for="">Địa Chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="address">
            </div>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>

            <?php setcookie('msg','Thêm mới thành công' , time() + 5); ?>
        </form>
    </div>
</body>
</html>