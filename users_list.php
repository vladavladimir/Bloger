<<?php 

include_once 'assets/partials/header.php';

include_once 'assets/partials/includes/checker.php';

include_once 'classes/Blog.php';

include_once 'classes/Users.php';

include_once 'assets/partials/includes/admin_functions.php';

 ?>
<div class="row" style="width: 100%; padding: 50px;">
	<table class="table">
		
	  <thead>
	    <tr>
	      <th scope="col">Name</th>
	      <th scope="col">Lastnmae</th>
	      <th scope="col">Email</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php foreach ($admin_users as $data): ?>
	    <tr>
	      <td><?=$data->name?></td>
	      <td><?=$data->lastname?></td>
	      <td><?=$data->email?></td>
	      <td><form style="display: inline;" method="post" action=""><button type="submit" name="deleteuser" id="deleteuser" class="btn btn-danger" value="<?=$data->id?>">Delete</button></form></td>
	    </tr>
	    <?php endforeach ?>
	  </tbody>
	</table>
</div>


 <?php 

include_once 'assets/partials/footer.php';

  ?>