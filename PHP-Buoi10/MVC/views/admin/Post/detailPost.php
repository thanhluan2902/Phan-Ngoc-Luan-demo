<div class="col-md-12">
  <div class="panel panel-primary">
    <div class="panel-heading"><b>Chi tiết bài viết</b></div>
    <hr style="width: 15%;float:left;">
    <div class="col-md-3">
      <img src="http://localhost/PHP-Buoi10/images/<?php echo $posts['thumbnail']  ?>" alt="" style="width:100%;">
    </div>
    <div class="col-md-9">
        <h2 style="margin:0;"><?php echo $posts['title']  ?></h2>
        <p style="margin-top:10px; font-style: italic;">
          <b>Mô tả: </b>
          <?php echo $posts['description']  ?>
        </p>
    </div>
    <div class="col-md-12">
        <div>
          <legend>Nội dung: </legend>
          <?php echo $posts['noiDung']  ?>
        </div>
        <div style="display=flex;list-style: none;">
          <ul>
            <li style="float: left; margin-left: -20px;"><b>view: </b><?php echo $posts['view_count']  ?></li> 
            <li style="float: left; margin-left: 30px;"><b>Created_at: </b><?php echo $posts['created_at']  ?></li>
          </ul>
        </div>
        <div style="clear: left; margin-top: 50px;">
        <a href="?mod=admin&c=post&act=edit&id=<?php echo $posts['id'] ?>" class="btn btn-primary">Cập nhật</a>
        <a href="?mod=admin&c=post&act=index" class="btn btn-success">Quay lại</a>
        </div>
    </div>
  </div>
</div>
<h3></h3>