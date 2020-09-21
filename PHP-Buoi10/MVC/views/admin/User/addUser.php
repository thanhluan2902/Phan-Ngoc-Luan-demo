<h4 class="h4 mb-4 text-gray-800 lol">Add new User</h4>
<div class="card shadow mb-4">
<div class="container">
    <hr>
        <form action="?mod=admin&c=user&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email">
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" placeholder="" name="password">
            </div>

            <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" class="form-control" id="" placeholder="" name="avatar">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>