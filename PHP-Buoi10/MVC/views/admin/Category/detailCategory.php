<h4 class="h4 mb-4 text-gray-800 lol">Category Detail</h4>
<div class="card shadow mb-4">
    <div class="container">
    <!-- <h2>Chi Tiết Thể Loại Bài Post</h2> -->
    <h3></h3>
    <table class="table table-dark">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Thumbnail</th>
            <th>Slug</th>
            <th>Created_at</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $detail_table['id']  ?></td>
            <td><?php echo $detail_table['name']  ?></td>
            <td><?php echo $detail_table['description']  ?></td>
            <td><?php echo $detail_table['thumbnail']  ?></td>
            <td><?php echo $detail_table['slug']  ?></td>
            <td><?php echo $detail_table['created_at']  ?></td>
        </tr>
        </tbody>
    </table>
    <a href="?mod=admin&c=category&act=index"><button class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
    <h3></h3>
    </div>
</div>