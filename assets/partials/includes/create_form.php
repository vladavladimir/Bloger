<?php 

include_once 'classes/Blog.php';

if (isset($_POST['createblog'])) {
	$id = $_SESSION['id'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	
	if (!$title == '' && !$description == '') {
		$blog = new Blog();
		$getid = $blog->createBlog($title,$description,$id);
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

	if ($insert == true) {
		header('Location: index.php?succ=blogok');
	}else{
		header('Location: index.php?error=noblog');
	}
	
}