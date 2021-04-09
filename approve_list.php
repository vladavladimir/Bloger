<?php 

include_once 'assets/partials/header.php';

include_once 'assets/partials/includes/checker.php';

include_once 'classes/Blog.php';

include_once 'classes/Users.php';

include_once 'assets/partials/includes/admin_functions.php';

 
 if ($blogs == NULL || $blogs == 0 || empty($blogs)) {
	echo '<p>No blogs to approv jet</p>';
}else{?>
<div class="row" id="row">
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
	  	<?php 

	  	foreach ($approve as $data): ?>
	    <tr>
	      <td><?=$data->title?></td>
	      <td><?=substr($data->description, 0, 100);?></td>
	      <td><?=$data->created_at?></td>
	      <td><?=$data->name?> <?=$data->lastname?></td>
	      <td><?=$data->approved?></td>
	      <td><form id="form" method="post" action=""><button type="submit" name="approve" id="approve" class="btn btn-success" value="<?=$data->id?>">Approve Blog</button></form></td>
	    </tr>
	    <?php endforeach ?>
	  </tbody>
	</table>
</div>


 <?php }

include_once 'assets/partials/footer.php';

  ?>