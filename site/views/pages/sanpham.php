

<div class="container">
 <div class="row">
   <div class="col-md-6">
    <button style="margin-right: 10%;" type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-outline-dark">Light</button>
   </div>

   <div class="col-md-6">
    <img style="width: 14%;;" src="public/img/lampart-logo.jpg" alt="Không load đưuọc ảnh">
   </div>

  </div>

 <div class="row" style="margin-top: 3%;" >
    <div class="input-group rounded">
      <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <span class="input-group-text border-0" id="search-addon">
          <i class="fas fa-search"></i>
        </span>
    </div>
  </div>

  <div class="row" style="margin-top: 2%;">
    <div class="col-md-6">
      <p class="text-left">Search found 15 results</p> 
    </div>
    <div class="col-md-6">
    <button type="button" style="float:right" class="btn btn-outline-light rounded-circle" data-toggle="modal" data-target="#exampleModalCenter">+</button>
    </div>

  </div>

  <div class="row">
    <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product name</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($sanpham as $sp) { ?>
    <tr>
      <th scope="row"> <?php echo $sp->ma_san_pham  ?></th>
      <td> <?php echo $sp->ten_san_pham  ?> </td>
      <td> <?php echo $sp->ten_danh_muc  ?> </td>
      <td> <img style="width:18%;" src="public/upload/sanpham/sp01.jpg" alt="Không load được ảnh"> </td>
      <td>
      <i class="fas fa-edit"></i>
      <i class="fa fa-trash"></i>
      </td>
    </tr>
  <?php } ?>
  </tbody>
    </table>
  </div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add new product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo 'site/controllers/sanpham_controller.php';?>" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1">Product name</label>
            <input type="text" name="txttensanpham" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" id="exampleFormControlSelect1">
            <?php foreach($sanpham as $loai) { ?>
              <option value="<?php echo $loai->ma_danh_muc ?>"> <?php echo $loai->ten_danh_muc?> </option>
            <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      
    </div>
  </div>
</div>

