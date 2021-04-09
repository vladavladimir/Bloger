<?php  

include_once 'assets/partials/header.php';

include_once 'classes/Blog.php';

$id = $_GET['id'];
$single = new Blog();
$blog = $single->getSingleBlog($id);

?>
<div class="row">
	<center><div class="card">
	  <img src="assets/img/post/<?=$blog->id?>/<?=$blog->picture?>"  alt="Blog">
	  <div class="card-body">
	    <h3 class="card-title">Title: <br><span><?=$blog->title?></span></h3><hr>
	    <p class="card-text">Text: <br><?=$blog->description?></p><hr>
	    <p class="card-text">Author: <br><?=$blog->name?> <?=$blog->lastname?></p><hr>
	    <p class="card-text">Created at: <br><?=$blog->created_at?></p><hr>
	    <a href="index.php" class="btn btn-primary">Go back</a>
	  </div>
</div></center>
</div>

<?php 

include_once 'assets/partials/footer.php';

 ?>