<?php
//Bước 1 : kết nối CSDL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_php_25";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_errno) {
        echo "fail" .  $conn->connect_error;
        exit(); 
    }
    // echo "Thanh coong";
    // die();
//Bước 2: Thực hiện truy vấn SQL
    $query = "SELECT * FROM categories where 1";
    // $user_id = "";
    // $query = "UPDATE categories SET name = 'Tin lol' WHERE ID = " . $user_id;
    // $query = "SELECT posts.id, posts.title,categories.name FROM posts INNER JOIN categories ON posts.category_id = categories.id where posts.id = 1 and categories.name = 'Thời sự'";
    // echo $query;




//Bước 3: chạy câu lệnh SQL
    $result = $conn->query($query);

    $categories = array();


//Bước 4: xử lí dữ liệu
    while($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }
    // echo "<pre>";
    //     var_dump($categories);
    // echo "</pre>";
    // die();
?>
 <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h3 class="text-center">--- CATEGORIES ---</h3>
            <a href="#" class="btn btn-primary">Add New Category</a>
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Thumbnail</th>
                    <th>Description</th>
                    <th>Action</th>
                </thead>

                <?php foreach($categories as $key => $category) {?>
                    <tr>
                        <td><?php echo $category['id']; ?></td>
                        <td><?php echo $category['name']; ?></td>
                        <td>
                        <img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px">
                    </td>
                        <td><?php echo $category['description']; ?></td>
                        <td>
                        <a href="delete.php?id=<?php echo $key; ?>" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>
                <?php } ?>
                <!-- <tr>
                    <td>1</td>
                    <td>Thời sự</td>
                    <td>
                        <img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px">
                    </td>
                    <td>Tin về thời sự</td>
                    <td>
                        <a href="#" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bóng đá</td>
                    <td>
                        <img src="https://image.thanhnien.vn/660/uploaded/quangtuyen/2019_03_05/u23tuanlinh_fpjh.jpg" width="100px" height="100px">
                    </td>
                    <td>Tin về bóng đá</td>
                    <td>
                        <a href="#" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr> -->
            </table>
        </div>
    </body>
    </html>