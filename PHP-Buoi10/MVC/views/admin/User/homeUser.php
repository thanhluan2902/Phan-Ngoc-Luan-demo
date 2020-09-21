<?php 
        $conn = mysqli_connect('localhost', 'root', '', 'db_project');

        $number = mysqli_query($conn, 'SELECT count(id) as total FROM users');
        $row = mysqli_fetch_assoc($number);
        $total_records = $row['total'];

        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 3;
 
        $total_page = ceil($total_records / $limit);
 
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }

        $start = ($current_page - 1) * $limit;
        $query = "SELECT * FROM users LIMIT $start, $limit";
        // echo $query;die();
        $result = mysqli_query($conn, $query);

        // return $result;
?>


<div class="nok" style="position: absolute;top: 75px;right: 5px;opan">
  <?php 
    if(isset($_COOKIE['msg'])) {
  ?>
      <div class= "alert alert-info">
      <strong></strong><?php echo $_COOKIE['msg']; ?>
    </div>
	<?php } ?>
</div>
<h4 class="h4 mb-4 text-gray-800 lol">User List</h4>
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dataTable_length">
                            <label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label>
                            </div>
                        </div>
                    <div class="col-sm-12 col-md-6">
                
                <div id="dataTable_filter" class="dataTables_filter">
                 
                 <label>Search<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>
                 
                </div>
               
              </div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 161px;">ID</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 246px;">Name</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 115px;">Email</th>
                        <!-- <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 100px;">Avatar</th> -->
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 87px;">Created_at</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 155px;">Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <!-- <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr> -->
                  </tfoot>
                  <tbody>
                 
                  <?php foreach($result as $user) { ?>
                    <tr role="row" class="odd">
                      <td class="sorting_1"><?php echo $user['id'] ?></td>
                      <td><?php echo $user['name'] ?></td>
                      <td><?php echo $user['email'] ?></td>
                      <!-- <td><img src="https://i.pinimg.com/236x/52/bd/a2/52bda2a9b8313279b06c23f102886b2c.jpg" alt=""></td> -->
                      <td><?php echo $user['created_at'] ?></td>
                      <td>
                        <a href="?mod=admin&c=user&act=show&id=<?php echo $user['id'] ?>" class="btn btn-primary">Detail</a>
                        <a href="?mod=admin&c=user&act=edit&id=<?php echo $user['id'] ?>" class="btn btn-success">Edit</a>
                        <a href="?mod=admin&c=user&act=delete&id=<?php echo $user['id'] ?>" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                  <?php } ?>

                  </tbody>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to <?php echo $limit ?> of <?php echo $total_records ?> entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                <ul class="pagination">
                <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                  <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous
                  </a>
                </li>

                <?php for ($i = 1; $i <= $total_page; $i++){ ?>
                  <li class="paginate_button page-item">
                    <?php echo '<a class="page-link" href="index.php?mod=admin&c=user&act=index&page='. $i .'">' . $i .'</a>' ?>
                  </li>
                <?php } ?>

                <li class="paginate_button page-item next" id="dataTable_next">
                <a href="index.php?mod=admin&c=user&act=index&page=" . ($current_page+1)" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
              </div>
            </div>
          </div>
