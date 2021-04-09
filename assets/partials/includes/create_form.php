<?php 

include_once 'classes/Blog.php';

if (isset($_POST['createblog'])) {//if button is presd colet data by POST
	$id = $_SESSION['id'];
	$title = htmlspecialchars($_POST['title']);
	$description = htmlspecialchars($_POST['description']);//instance of method and passing true some data
	
	if (!$title == '' && !$description == '') {// checking if smoe data that is get is not empty
		$blog = new Blog();
		$getid = $blog->createBlog($title,$description,$id);
		if (isset($_FILES['file']['tmp_name']) && !empty($_FILES['file']['tmp_name'])) {//if pic is added or not
		  	if ($_FILES['file']['type']=='image/jpg' || $_FILES['file']['type']=='image/png' || $_FILES['file']['type']=='image/jpeg') {// setig alowed format of pic
		    $path = "assets/img/post/".$getid;//location where pic will be stored
		    if(!file_exists($path)) {//if location is not created this wil created
		      mkdir ($path, 0777);
		      chmod ($path, 0777);
		    }
		    
		    $original_file=$path."/".$_FILES['file']['name'];      
		    move_uploaded_file ($_FILES['file']['tmp_name'], $original_file);
		    $file=$_FILES['file']['name'];//geting pic name
		    $picture = new Blog();
		    $insert = $picture->updateBlog($getid,$file);//instanc method and passing true pic name
		  } else {
		    die("Error PAGE: bad format");//if pic format is not good
		  }
		}
	}

	if ($insert == true) {//if variable $insert is true it is ok if not it will go to else
		header('Location: index.php?succ=blogok');
	}else{
		header('Location: index.php?error=noblog');
	}
	
}