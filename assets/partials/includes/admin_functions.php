<?php 

$all_blogs = new Blog();
$admin_blog = $all_blogs->getAllBlogsAdmin();//instance of admin metjod

if (isset($_POST['delete'])) {//when button is pressed
	$id = htmlspecialchars($_POST['delete']);
	$del = new Blog();
	$msg = $del->deleteBlog($id);//instance of method to delete blog

	if ($msg == true) {
		header('Location: blog_list.php?succ=del');//error or succes returne param
	}else{
		header('Location: blog_list.php?error=nodel');
	}
}

$all_users = new Users();
$admin_users = $all_users->getAllUsers();//admin instance to get all users

if (isset($_POST['deleteuser'])) {//if this button is pressed
	$id = htmlspecialchars($_POST['deleteuser']);
	$del_user = new Users();
	$msg = $del_user->deleteUserAdmin($id);// instance to delete user by admin
	if ($msg == true) {
		header('Location: users_list.php?succ=usrdel');
	}else{
		header('Location: users_list.php?error=usrwrg');
	}
}

$app_blog = new Blog();
$approve = $app_blog->getNotApprovedBlogs();//geting all unapproved blogs

if (isset($_POST['approve'])) {//if approve button is pressed
	$id = htmlspecialchars($_POST['approve']);
	$app_yes = new Blog();
	$res = $app_yes->approveBlog($id);//instance to approve blog
	if ($res == true) {
		header('Location: approve_list.php?succ=blapp');
	}else{
		header('Location: approve_list.php?error=noapp');
	}

}


