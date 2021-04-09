<?php 

include_once 'assets/partials/header.php';

include_once 'assets/partials/includes/create_form.php';

 ?>
 <div class="row" id="logfil">
   	<div class="col-md-4 offset-md-4">
<form method="post" action="create_blog.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" >
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" placeholder="Enter your blog text hear no more then 3000 characters" pattern="[a-zA-Z0-9]+" oninvalid="setCustomValidity('Please use only alphabet and numbers')" maxlength="3000"></textarea>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1" accept=".png, .jpg, .jpeg">
  </div>
  <button type="submit" name="createblog" class="btn btn-primary">Submit Blog</button>
</form>
</div>
</div>

 <?php 

include_once 'assets/partials/footer.php';

  ?>


