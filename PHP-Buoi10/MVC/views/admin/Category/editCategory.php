<h4 class="h4 mb-4 text-gray-800 lol">Category Edit</h4>
<div class="card shadow mb-4">
<div class="container">
        <hr>
        <form action="?mod=admin&c=category&act=update&id=<?php echo $edit_tb['id']?>" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name: </label>
                <input type="text" class="form-control" id="" placeholder="" name="name"
                    value="<?php echo $edit_tb['name'] ?>">
            </div>
            <div class="form-group">
                <label for="">Description: </label>
                <input type="text" class="form-control" id="" placeholder="" name="description"
                    value="<?php echo $edit_tb['description'] ?>">
            </div>

            <div class="form-group">
                <label for="">Thumbnail: </label>
                <input type="text" class="form-control" id="" placeholder="" name="thumbnail"
                    value="<?php echo $edit_tb['thumbnail'] ?>">
            </div>

            <div class="form-group">
                <label for="">Slug: </label>
                <input type="text" class="form-control" id="" placeholder="" name="slug"
                    value="<?php echo $edit_tb['slug'] ?>">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
