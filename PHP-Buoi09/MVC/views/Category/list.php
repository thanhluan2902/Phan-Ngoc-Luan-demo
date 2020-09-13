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
    <link rel="stylesheet" href="../validate/font-awesome-4.7.0/css/font-awesome.min.css">
    <style>
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
                    <strong></strong><?php echo $_COOKIE['msg']; ?>
                </div>
		        <?php } ?>
            </div>
            <h3 class="text-center">--- CATEGORIES ---</h3>
            <a href="?mod=category&act=create" class="btn btn-primary">Add New Category</a>
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Thumbnail</th>
                    <th>Description</th>
                    <th>Action</th>
                </thead>

                <?php foreach($categories as $category) {?>
                    <tr>
                        <td><?php echo $category['id']; ?></td>
                        <td><?php echo $category['name']; ?></td>
                        <td>
                        <img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px">
                        </td>
                        <td><?php echo $category['description']; ?></td>
                        <td>
                            <a href="?mod=category&act=show&id=<?php echo $category['id'] ?>" class="btn btn-primary">Detail</a>
                            <a href="?mod=category&act=edit&id=<?php echo $category['id'] ?>" class="btn btn-success">Edit</a>
                            <a href="?mod=category&act=delete&id=<?php echo $category['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </body>
    </html>