<?php 

$id = $_SESSION['id'];
$my_all_blogs = new Blog();//instancing method to get all blogs by user
$my_blog = $my_all_blogs->getAllMyBlogs($id);

if (isset($_POST['delete'])) {
	$id = htmlspecialchars($_POST['delete']);
	$del = new Blog();
	$msg = $del->deleteBlog($id);//deleting post by user
	if ($msg == true) {
		header('Location: my_blog.php?succ=del');
	}else{
		header('Location: my_blog.php?error=nodel');
	}
}

