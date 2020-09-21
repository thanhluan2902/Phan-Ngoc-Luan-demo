<h4 class="h4 mb-4 text-gray-800 lol">Add new Post</h4>
<div class="card shadow mb-4">
<div class="container">
    <hr>
        <form action="?mod=admin&c=post&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tite</label>
                <input type="text" class="form-control" id="" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>

            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>

            <div class="form-group">
                <label for="">Content</label>
                <textarea name="noiDung" class="form-control"></textarea>
                <script>
                    CKEDITOR.replace('noiDung');
                </script>
            </div>

            <div class="form-group">
                <label for="">Category_id</label>
                <select class="form-control" name= "category_id">
                    <?php foreach($categories as $value) { ?>
                        <option name ="category_id" ><?php echo $value['id'] ?> - <?php echo $value['name'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="">View-count</label>
                <input type="text" class="form-control" id="" placeholder="" name="view_count">
            </div>
            
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
