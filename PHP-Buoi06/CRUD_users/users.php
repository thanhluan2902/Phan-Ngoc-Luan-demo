<?php
    include '../validate/sql.php';

    $users = select('users');

?>

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
    <style>
        img {
            width: 45%;
        }
        th,td {
            text-align: center;
        }
    </style>
    </head>
    <body>
        <div class="container">
            <h3 class="text-center">--- USERS ---</h3>
            <a href="users_add.php" class="btn btn-primary">Add New User</a>
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
                        <a href="detail.php?id=<?php echo $user['id'] ?>" class="btn btn-primary">Detail</a>
                        <a href="edit.php?id=<?php echo $user['id'] ?>" class="btn btn-success">Edit</a>
                        <a href="delete.php?id=<?php echo $user['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </table>
        </div>
    </body>
    </html>