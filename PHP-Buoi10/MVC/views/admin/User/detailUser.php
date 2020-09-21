<h4 class="h4 mb-4 text-gray-800 lol">User Detail</h4>
<div class="card shadow mb-4">
    <div class="container">
    <h3></h3>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>avatar</th>
                    <th>Created_at</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $detail_table['id']  ?></td>
                    <td><?php echo $detail_table['name']  ?></td>
                    <td><?php echo $detail_table['email']  ?></td>
                    <td><?php echo $detail_table['password']  ?></td>
                    <td>
                        <img src="http://localhost/PHP-Buoi10/images/<?php echo $detail_table['avatar']  ?>" alt="" style="width: 150px; height: 200px;">
                    </td>
                    <td><?php echo $detail_table['created_at']  ?></td>
                </tr>
            </tbody>
    </table>
    <a href="?mod=admin&c=user&act=index"><button class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
    <h3></h3>
    </div>
</div>