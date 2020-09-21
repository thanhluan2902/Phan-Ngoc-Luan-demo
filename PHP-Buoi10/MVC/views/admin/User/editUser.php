<h4 class="h4 mb-4 text-gray-800 lol">User Edit</h4>
<div class="card shadow mb-4">
    <div class="container">
        <hr>
        <form action="?mod=admin&c=user&act=update&id=<?php echo $edit_tb['id'] ?>" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name"
                    value="<?php echo $edit_tb['name']; ?>">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email"
                    value="<?php echo $edit_tb['email']; ?>">
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" id="" placeholder="" name="password"
                    value="<?php echo $edit_tb['password']; ?>">
            </div>

            <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" class="form-control" id="" placeholder="" name="avatar"
                    value="<?php echo $edit_tb['avatar']; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>