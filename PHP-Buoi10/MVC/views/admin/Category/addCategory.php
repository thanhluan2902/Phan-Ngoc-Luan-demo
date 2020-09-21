<h4 class="h4 mb-4 text-gray-800 lol">Add new category</h4>
<div class="card shadow mb-4">
<div class="container">
    <hr>
        <form action="?mod=admin&c=category&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
                <script>
                    CKEDITOR.replace('noiDung');
                </script>
            </div>
            <div class="form-group">
                <label for="">Parent-id</label>
                <input type="text" class="form-control" id="" placeholder="" name="parent_id">
            </div>

            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>        
</div>
