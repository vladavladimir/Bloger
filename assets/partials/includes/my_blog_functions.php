<?php 

$id = $_SESSION['id'];
$my_all_blogs = new Blog();
$my_blog = $my_all_blogs->getAllMyBlogs($id);

if (isset($_POST['delete'])) {
	$id = $_POST['delete'];
	$del = new Blog();
	$msg = $del->deleteBlog($id);

	if ($msg == true) {
		header('Location: my_blog.php?succ=del');
	}else{
		header('Location: my_blog.php?error=nodel');
	}
}

