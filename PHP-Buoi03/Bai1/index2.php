<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

    <?php
            $error = array();
      
            if (empty($_POST["msv"])) {
                $error['msv'] = "Bạn phải nhập mã sinh viên";
            } else if(!empty($_POST["msv"])) {
                $msv = $_POST['msv'];
            }
    
            if (empty($_POST["name"])) {
                $error['name'] = "Bạn phải nhập họ tên";
            } else {
                $name = $_POST['name'];
            }
    
            if (empty($_POST["sdt"])) {
                $error['sdt'] = "Bạn phải nhập số điện thoại";
            } else {
                $sdt = $_POST['sdt'];
            }
    
            if (empty($_POST["email"])) {
                $error['email'] = "Bạn phải nhập email";
            } else {
                $email = $_POST['email'];
            }
                
            if (empty($_POST["gt"])) {
                $error['gt'] = "Bạn phải chọn giới tính";
            } else {
                $gt = $_POST['gt'];
            }
    
            if (empty($_POST["address"])) {
                $error['address'] = "Bạn phải nhập địa chỉ";
            } else {
                $address = $_POST['address'];
            }


        if(empty($error)) {
            // include 'post.php';
            echo 'Mã sinh viên : '.$msv."<br>";
            echo 'Họ và tên : '.$name."<br>";
            echo 'Số điện thoại  : '.$sdt."<br>";
            echo 'Email  : '.$email."<br>";
            echo 'Gioi tính : '.$gt."<br>";
            echo 'Địa chỉ  : '.$address;
        }

    ?>

    <div class="container">
            <form action="post.php" method="POST" role="form">
                <legend>Get files</legend>
                
                <div class="form-group">
                    <label for="">Mã Sinh Viên</label>
                    <input type="text" class="form-control" id="" placeholder="Nhập MSV" name="msv">
                    <?php if(isset($error['msv'])) { ?>
                        <span style="color:red;"> <?php echo $error['msv']; ?> </span>
                    <?php } ?>
                </div>
                
                <div class="form-group">
                    <label for="">Họ Và Tên</label>
                    <input type="text" class="form-control" id="" placeholder="Nhập vào họ và tên" name="name">
                    <?php if(isset($error['name'])) { ?>
                        <span style="color:red;"> <?php echo $error['name']; ?> </span>
                    <?php } ?>
                </div>  
                
                <div class="form-group">
                    <label for="">Số Điện Thoại</label>
                    <input type="text" class="form-control" id="" placeholder="Nhập vào SĐT" name="sdt">
                    <!-- <?php if(isset($error['sdt'])) { ?>
                        <span style="color:red;"> <?php echo $error['sdt']; ?> </span>
                    <?php } ?> -->
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="" placeholder="Nhập vào email" name="email">
                    <!-- <?php if(isset($error['email'])) { ?>
                        <span style="color:red;"> <?php echo $error['email']; ?> </span>
                    <?php } ?> -->
                </div>

                <div class="form-group">
                <label for="">Gioi Tinh</label><br>
                    <input type="radio" name="gt" value="Male"> Male 
                    <input type="radio" name="gt" value="Female"> Female 
                    <input type="radio" name="gt" value="Other"> Other 
                    <!-- <?php if(isset($error['gt'])) { ?>
                       <br> <span style="color:red;"> <?php echo $error['gt']; ?> </span>
                    <?php } ?> -->
                </div>

                <div class="form-group">
                    <label for="">Địa Chỉ</label>
                    <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="address">
                    <!-- <?php if(isset($error['address'])) { ?>
                        <span style="color:red;"> <?php echo $error['address']; ?> </span>
                    <?php } ?> -->
                </div>
                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
            </form>
        </div>
</body>
</html>