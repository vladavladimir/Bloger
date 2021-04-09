<?php 

$all_blogs = new Blog();
$admin_blog = $all_blogs->getAllBlogsAdmin();

if (isset($_POST['delete'])) {
	$id = $_POST['delete'];
	$del = new Blog();
	$msg = $del->deleteBlog($id);

	if ($msg == true) {
		header('Location: blog_list.php?succ=del');
	}else{
		header('Location: blog_list.php?error=nodel');
	}
}

$all_users = new Users();
$admin_users = $all_users->getAllUsers();

if (isset($_POST['deleteuser'])) {
	$id = $_POST['deleteuser'];
	$del_user = new Users();
	$msg = $del_user->deleteUserAdmin($id);
	if ($msg == true) {
		header('Location: users_list.php?succ=usrdel');
	}else{
		header('Location: users_list.php?error=usrwrg');
	}
}

$app_blog = new Blog();
$approve = $app_blog->getNotApprovedBlogs();

if (isset($_POST['approve'])) {
	$id = $_POST['approve'];
	$app_yes = new Blog();
	$res = $app_yes->approveBlog($id);
	if ($res == true) {
		header('Location: approve_list.php?succ=blapp');
	}else{
		header('Location: approve_list.php?error=noapp');
	}

}


