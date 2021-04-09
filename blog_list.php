<?php 

include_once 'assets/partials/header.php';

include_once 'assets/partials/includes/checker.php';

include_once 'classes/Blog.php';

include_once 'assets/partials/includes/admin_functions.php';

 ?>

<div class="row" style="width: 100%; padding: 50px;">
	<table class="table">
		
	  <thead>
	    <tr>
	      <th scope="col">Title</th>
	      <th scope="col">Description</th>
	      <th scope="col">Created at</th>
	      <th scope="col">Created by</th>
	      <th scope="col">Approved</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php foreach ($admin_blog as $data): ?>
	    <tr>
	      <td><?=$data->title?></td>
	      <td><?=substr($data->description, 0, 30);?></td>
	      <td><?=$data->created_at?></td>
	      <td><?=$data->name?> <?=$data->lastname?></td>
	      <td><?=$data->approved?></td>
	      <td><form style="display: inline;" method="post" action=""><button type="submit" name="delete" id="delete" class="btn btn-danger" value="<?=$data->id?>">Delete</button></form></td>
	    </tr>
	    <?php endforeach ?>
	  </tbody>
	</table>
</div>

 <?php 

include_once 'assets/partials/footer.php';

  ?>