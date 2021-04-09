<?php 
if (isset($_SESSION['id'])) {
	header('Location: index.php?error=loged');
}
include_once 'assets/partials/includes/checker.php';
include_once 'assets/partials/header.php';

include_once 'assets/partials/includes/registration_form.php';
 ?>
<center><h1>Registartion form</h1></center>
 <div class="row" id="regi">
	<div class="col-md-4 offset-md-4">
		<form id="formreg" method="post" action="register.php">
		  	<div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Email address :</label>
			    <input type="email" class="form-control" id="email" name="email" required placeholder="Insert your email">
		    	<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		  	</div>
		  	<div class="mb-3">
			    <label for="InputEmail1" class="form-label" pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Please use only alphabet')">Name :</label>
			    <input type="text" class="form-control" id="name" name="name" required placeholder="Insert your name">
		    	
		  	</div>
		  	<div class="mb-3">
			    <label for="exampleInputEmail2" class="form-label">Lastname :</label>
			    <input type="text" class="form-control" id="Lastname" name="lastname" required placeholder="Insert your Lastname" pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Please use only alphabet')">
			    
		  	</div>
		  	<div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Password :</label>
			    <input type="password" class="form-control" id="password" name="password" pattern="[A-Za-z0-9]+" oninvalid="setCustomValidity('Please use only alphabet and numbers')" required placeholder="Insert your password,min lenght of 4 characters">
			    <div id="emailHelp" class="form-text">Make sure your remember your password</div>
		  	</div>
		  	<button type="submit" class="btn btn-primary" id="registerbtn" name="registerbtn">Submit</button>
		</form>
	</div>
</div>

<?php 

include_once 'assets/partials/footer.php';

 ?>