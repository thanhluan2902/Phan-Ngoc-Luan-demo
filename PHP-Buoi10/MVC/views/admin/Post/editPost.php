<h4 class="h4 mb-4 text-gray-800 lol">Post Edit</h4>
<div class="card shadow mb-4">
<div class="container">
        <hr>
        <form action="?mod=admin&c=post&act=update&id=<?php echo $post['id'] ?>" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title"
                    value="<?php echo $post['title'] ?>">
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description"
                    value="<?php echo $post['description'] ?>">
            </div>

            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail" value="<?php echo $post['thumbnail'] ?>">

            </div>

            <div class="form-group">
                <label for="">noiDung</label>
                <textarea name="noiDung" class="form-control"><?php echo $post['noiDung'] ?></textarea>
                <script>
                    CKEDITOR.replace('noiDung');
                </script>
            </div>

            <div class="form-group">
                <label for="">Category_id</label>
                <input type="text" class="form-control" name="category_id" value="<?php echo $post['category_id'] ?>">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>