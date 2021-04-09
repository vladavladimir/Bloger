<li><a class="nav-link scrollto active" href="index.php">Home</a></li>
<?php if (isset($_SESSION['admin']) && $_SESSION['admin']=='yes'): ?>
<li><a class="nav-link" href="users_list.php">Users List</a></li>
<li><a class="nav-link" href="blog_list.php">Blog List</a></li>
<li><a class="nav-link" href="approve_list.php">Approve Blogs</a></li>
<?php endif ?>

<?php 
if (isset($_SESSION['admin']) && $_SESSION['admin'] == 'no'){ ?>
	<li><a class="nav-link scrollto" href="create_blog.php">Write Blog</a></li>
	<li><a class="nav-link scrollto" href="my_blog.php">My Blogs</a></li>
<?php } elseif(!isset($_SESSION['admin']) || (isset($_SESSION['admin']) && $_SESSION['admin']=="no" )){ ?>
	<li><a class="nav-link scrollto" href="register.php">Register</a></li>
	<li><a class="nav-link scrollto" href="login.php">Login</a></li> 
<?php } ?>

<?php if (isset($_SESSION['id']) && $_SESSION['id']!=''): ?>
	<li><a class="nav-link" href="logout.php">Logout</a></li>
<?php endif ?>