<?php 

include_once 'classes/Database.php';

class Blog extends Database
{
	// method for creating Blog
	public function createBlog($title,$description,$id){
		$db = $this->connection();
		$currentTime = date('Y-m-d h:i:s');
		$stmt = $db->prepare("INSERT INTO blogs (user_id, title, description,created_at) VALUES (:user_id, :title, :description, :created_at)");
		$stmt->execute(['user_id'=>$id,'title'=>$title,'description'=>$description,'created_at'=>$currentTime]);
		$id = $db->lastInsertId();
		return $id;
	}

	public function updateBlog($id,$picture){
		// method to insert picture into blog it gets id from method createBlog
		$db = $this->connection();
		$stmt = $db->prepare("UPDATE blogs SET picture = :picture  WHERE id = :id");
		$stmt->execute(['id'=>$id,'picture'=>$picture]);
		return true;
	}

	public function getAllBlogs(){
		// method toget all blogs ther are approved
		$db = $this->connection();
		$stmt = $db->prepare("SELECT b.title, b.picture, b.id, b.created_at, u.name, u.lastname, u.email FROM blogs b JOIN users u ON b.user_id = u.id WHERE b.approved='yes' ORDER BY b.created_at DESC");
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $result;
	}

	public function getSingleBlog($id){
		// method to get single Blog by id
		$db = $this->connection();
		$stmt = $db->prepare("SELECT b.picture, b.title, b.id, b.description, b.created_at, u.name, u.lastname FROM blogs b JOIN users u ON b.user_id = u.id WHERE b.id = :id");
		$stmt->execute(['id'=>$id]);
		$single_result = $stmt->fetch(PDO::FETCH_OBJ);
		return $single_result;
	}

	public function getAllMyBlogs($id){
		// method to get all blogs by user id for user
		$db = $this->connection();
		$stmt = $db->prepare("SELECT * FROM blogs WHERE user_id = :id");
		$stmt->execute(['id'=>$id]);
		$my_result = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $my_result;
	}

	public function upateMyBlog($title,$description,$id){
		// method to update users blog by user id and it is seting approved to no 
		$db = $this->connection();
		$currentTime = date('Y-m-d h:i:s');
		$app = 'no';
		$stmt = $db->prepare("UPDATE blogs SET title = :title, description = :description, created_at = :created_at, approved = :approved WHERE id = :id");
		$stmt->execute(['title'=>$title, 'description'=>$description, 'created_at'=>$currentTime,'approved'=>$app, 'id'=>$id]);
		return true;
	}

	public function deleteBlog($id){
		// delete blog
		$db = $this->connection();
		$stmt = $db->prepare("DELETE FROM blogs WHERE id = :id");
		$stmt->execute(['id'=>$id]);
		return true;
	}

	public function getAllBlogsAdmin(){
		// admin geting all blogs approved or not
		$db = $this->connection();
		$stmt = $db->prepare("SELECT b.title, b.picture, b.id, b.created_at,b.description,b.approved, u.name, u.lastname, u.email FROM blogs b JOIN users u ON b.user_id = u.id ORDER BY b.created_at DESC");
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $result;
	}

	public function getNotApprovedBlogs(){
		// admin method to see all unapproved blogs 
		$db = $this->connection();
		$stmt = $db->prepare("SELECT b.id, b.title, b.description, b.created_at, b.approved, u.name, u.lastname FROM blogs b JOIN users u ON b.user_id = u.id WHERE approved = 'no'");
		$stmt->execute();
		$res_blogs = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $res_blogs;

	}

	public function approveBlog($id){
		// admin method to approve blogs
		$db = $this->connection();
		$approved = 'yes';
		$stmt = $db->prepare("UPDATE blogs SET approved = :approved WHERE id = :id");
		$stmt->execute(['approved'=>$approved, 'id'=>$id]);
		return true;
	}

}


