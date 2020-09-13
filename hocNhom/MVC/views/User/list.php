<!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>USERS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../validate/font-awesome-4.7.0/css/font-awesome.min.css">
    <style>
        img {
            width: 45%;
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
                    <strong></strong><?php echo $_COOKIE['msg']; ?>
                </div>
		        <?php } ?>
            </div>
            <h3 class="text-center">--- USERS ---</h3>
            <a href="?mod=user&act=create" class="btn btn-primary">Add New User</a>
            <table class="table" width=100%>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Avatar</th>
                    <th>Created_at</th>
                    <th>Action</th>
                </thead>

            <?php foreach($users as $user) { ?>
                <tr>
                    <td><?php echo $user['id'] ?></td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><img src="https://i.pinimg.com/236x/52/bd/a2/52bda2a9b8313279b06c23f102886b2c.jpg" alt=""></td>
                    <td><?php echo $user['created_at'] ?></td>
                    <td>
                        <a href="?mod=user&act=show&id=<?php echo $user['id'] ?>" class="btn btn-primary">Detail</a>
                        <a href="?mod=user&act=edit&id=<?php echo $user['id'] ?>" class="btn btn-success">Edit</a>
                        <a href="?mod=user&act=delete&id=<?php echo $user['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </table>
        </div>
    </body>
    </html>