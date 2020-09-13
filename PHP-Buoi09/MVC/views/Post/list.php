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
    <link rel="stylesheet" href="../validate/font-awesome-4.7.0/css/font-awesome.min.css">  
    <style>
        img {
            width:100%;
        }
        th,td {
            text-align: center;
        }
        .lol {
            position: absolute;
            top: 10px;
            right: 5px;
        }
    </style>
    </head>
    <body>
        <div class="container">
            <div class="lol">
                <?php 
                    if(isset($_COOKIE['msg'])) {
                ?>
                <div class= "alert alert-success">
                    <strong> <i class="fa fa-smile-o" aria-hidden="true"> </i> </strong><?php echo $_COOKIE['msg']; ?>
                </div>
		        <?php } ?>
            </div>
            <h3 class="text-center">--- POST ---</h3>
            <a href=" " class="btn btn-primary">Add New Post</a>
            <table class="table" width=100%>
                <thead>
                    <th>ID</th>
                    <th width=20%>Title</th>
                    <th width=35%>Description</th>
                    <th width=17%>Thumbnail</th>
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