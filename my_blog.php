<?php 

include_once 'assets/partials/header.php';

include_once 'assets/partials/includes/checker.php';

include_once 'classes/Blog.php';

include_once 'assets/partials/includes/my_blog_functions.php';

 ?>

<div class="row" id="row">
	<table class="table">
		
	  <thead>
	    <tr>
	      <th scope="col">Title</th>
	      <th scope="col">Description</th>
	      <th scope="col">Created at</th>
	      <th scope="col">Approved</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php foreach ($my_blog as $data): ?>
	    <tr>
	      <td><?=$data->title?></td>
	      <td><?=substr($data->description, 0, 30);?></td>
	      <td><?=$data->created_at?></td>
	      <td><?=$data->approved?></td>
	      <td><a class="btn btn-warning" href="edit_blog.php?id=<?=$data->id?>" role="button">Edit</a> <form id="form" method="post" action=""><button type="submit" name="delete" id="delete" class="btn btn-danger" value="<?=$data->id?>">Delete</button></form></td>
	    </tr>
	    <?php endforeach ?>
	  </tbody>
	</table>
</div>


 <?php 

include_once 'assets/partials/footer.php';

  ?>