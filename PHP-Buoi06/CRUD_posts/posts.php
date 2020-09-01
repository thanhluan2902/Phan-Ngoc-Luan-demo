<?php
    // include '../validate/connect.php';

    // $conn = connect();
    // $query = "SELECT * FROM posts where 1";

    // $result = $conn->query($query);

    // $posts = array();

    // while($row = $result->fetch_assoc()){
    //     $posts[] = $row;
    // }

    include_once '../validate/sql.php';
    
    $posts = select('posts');

?>

<!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POST</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <style>
        img {
            width:100%;
        }
        th,td {
            text-align: center;
        }
    </style>
    </head>
    <body>
        <div class="container">
            <h3 class="text-center">--- POST ---</h3>
            <a href="post_add.php" class="btn btn-primary">Add New Post</a>
            <table class="table" width=100%>
                <thead>
                    <th>ID</th>
                    <th width=25%>Title</th>
                    <th width=35%>Description</th>
                    <th width=15%>Thumbnail</th>
                    <th>Action</th>
                </thead>

            <?php foreach($posts as $post) { ?>
                <tr>
                    <td><?php echo $post['id'] ?></td>
                    <td><?php echo $post['title'] ?></td>
                    <td><?php echo $post['description'] ?></td>
                    <td><img src="https://znews-photo.zadn.vn/w660/Uploaded/ofh_btgazspf/2019_06_25/11.jpg" alt=""></td>
                    <td>
                        <a href="detail_posts.php?id=<?php echo $post['id'] ?>" class="btn btn-primary">Detail</a>
                        <a href="edit.php?id=<?php echo $post['id'] ?>" class="btn btn-success">Edit</a>
                        <a href="delete.php?id=<?php echo $post['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </table>
        </div>
    </body>
    </html>