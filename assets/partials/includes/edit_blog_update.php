<?php

include_once 'classes/Blog.php';

$id = $_GET['id'];
$getid = $_GET['id'];
$update = new Blog();
$up_result = $update->getSingleBlog($id);

if (isset($_POST['updateblog'])) {
	$title = $_POST['title'];
	$description = $_POST['description'];
	if (!$title == '' && !$description == '') {
		$my_blog_up = new Blog();
		$new = $my_blog_up->upateMyBlog($title,$description,$id);
		if (isset($_FILES['file']['tmp_name']) && !empty($_FILES['file']['tmp_name'])) {
		  	if ($_FILES['file']['type']=='image/jpg' || $_FILES['file']['type']=='image/png' || $_FILES['file']['type']=='image/jpeg') {
		    $path = "assets/img/post/".$getid;
		    if(!file_exists($path)) {
		      mkdir ($path, 0777);
		      chmod ($path, 0777);
		    }
		    
		    $original_file=$path."/".$_FILES['file']['name'];      
		    move_uploaded_file ($_FILES['file']['tmp_name'], $original_file);
		    $file=$_FILES['file']['name'];
		    $picture = new Blog();
		    $insert = $picture->updateBlog($getid,$file);
		  } else {
		    die("Error PAGE: bad format");
		  }
		}
	}
	if ($insert == true || $new == true) {
		header('Location: my_blog.php?succ=blogup');
	}else{
		header('Location: my_blog.php?error=blogno');
	}
}

