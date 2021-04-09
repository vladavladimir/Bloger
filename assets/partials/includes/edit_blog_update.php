<?php

include_once 'classes/Blog.php';

$id = $_GET['id'];//instance to method to get single blog by passing id of blog
$getid = $_GET['id'];
$update = new Blog();
$up_result = $update->getSingleBlog($id);

if (isset($_POST['updateblog'])) {//on butoon press geting data
	$title = htmlspecialchars($_POST['title']);
	$description = htmlspecialchars($_POST['description']);
	if (!$title == '' && !$description == '') {//check if data is not empty
		$my_blog_up = new Blog();
		$new = $my_blog_up->upateMyBlog($title,$description,$id); //instancig method and passing true some data
		if (isset($_FILES['file']['tmp_name']) && !empty($_FILES['file']['tmp_name'])) {
		  	if ($_FILES['file']['type']=='image/jpg' || $_FILES['file']['type']=='image/png' || $_FILES['file']['type']=='image/jpeg') {// seting which type of pic is allowed
		    $path = "assets/img/post/".$getid;//location of pic storage
		    if(!file_exists($path)) {//if location is not made this will make it
		      mkdir ($path, 0777);
		      chmod ($path, 0777);
		    }
		    
		    $original_file=$path."/".$_FILES['file']['name'];      
		    move_uploaded_file ($_FILES['file']['tmp_name'], $original_file);
		    $file=$_FILES['file']['name'];// getig pic name 
		    $picture = new Blog();
		    $insert = $picture->updateBlog($getid,$file);//updating blog and adding pic name to blog
		  } else {
		    die("Error PAGE: bad format");//if pic format is wrong
		  }
		}
	}
	if ($insert == true || $new == true) {// if one of two var is true this will be set true
		header('Location: my_blog.php?succ=blogup');
	}else{
		header('Location: my_blog.php?error=blogno');
	}
}

