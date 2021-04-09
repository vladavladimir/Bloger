<?php 

include_once 'assets/partials/header.php';

include_once 'assets/partials/includes/edit_blog_update.php';

 ?>


<div class="row" id="logfil">
   	<div class="col-md-4 offset-md-4">
<form method="post" action="" enctype="multipart/form-data">
  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="<?=$up_result->title?>">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description"  pattern="[a-zA-Z0-9]+" oninvalid="setCustomValidity('Please use only alphabet and numbers')" maxlength="3000" style="height: 500px"><?=$up_result->description?></textarea>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1" accept=".png, .jpg, .jpeg">
  </div>
  <button type="submit" name="updateblog" class="btn btn-primary">Update Blog</button>
</form>
</div>
</div>

 <?php 

include_once 'assets/partials/footer.php';

  ?>