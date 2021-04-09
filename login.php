<?php 
if (isset($_SESSION['id'])) {
	header('Location: index.php?error=loged');
}
include_once 'assets/partials/includes/checker.php';

include_once 'assets/partials/header.php';

include_once 'assets/partials/includes/login_form.php';

 ?>
<center><h1 id="h1log">Login and enter as a Bloger</h1></center>
<div class="row" id="logfil">
   	<div class="col-md-4 offset-md-4">
    	<form id="formlog" action="login.php" method="post">
  			<div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Email address :</label>
			    <input type="email" class="form-control" id="email" name="email" required placeholder="Insert your email">
		    	<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		  	</div>
  			<div class="mb-3">
    			<label for="exampleInputPassword1" class="form-label">Password :</label>
    			<input type="password" class="form-control" pattern="[a-zA-Z0-9]+" oninvalid="setCustomValidity('Please use only alphabet and numbers')" id="password" name="password" required placeholder="Enter your password">
  			</div>
  			<button type="submit" class="btn btn-primary" id="loginbtn" name="loginbtn">Submit</button>
		</form>
	</div>
</div>

 <?php 

include_once 'assets/partials/footer.php';

  ?>