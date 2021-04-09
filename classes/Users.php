<?php 

include_once 'Database.php';


class Users extends Database
{
	
	public null|string $password;
	public string $hash;

	public function __construct(null|string $password=null){//set to hash blowfish password in PDO
		$this->password = $password;
		$this->hash = password_hash($password, PASSWORD_BCRYPT);
	}

	public function register($name,$lastname,$email){
		try{ //first checking if username and email are reg or not
			$db = $this->connection();
			$check = $db->prepare("SELECT email FROM users");
			$check->execute();
			$userRow = $check->fetchAll(PDO::FETCH_ASSOC);
			$chk = true;
			foreach ($userRow as $row) {
				if($email==$row['email']){	
					$chk = false;	
				}
			}
			if(!$chk) {
				
			} else {
				// if everything is ok then reg
				$stmt = $db->prepare("INSERT INTO users (name,lastname,email,password) VALUES (:name, :lastname, :email, :hash)");
				$stmt->execute(['name'=>$name, 'lastname'=>$lastname, 'email'=>$email, 'hash'=>$this->hash,]);
				return true;
			}

		} catch (Exception $e) {
			var_dump($e);
		}
	}

	public function login($email){
		// log in chk if pas and email match
		$db = $this->connection();
		$stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
		$stmt->execute(['email'=>$email]);
		$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
		if ($stmt->rowCount() > 0) {
			if (password_verify($this->password, $userRow['password'])) {
				$_SESSION['id'] = $userRow['id'];
				$_SESSION['admin'] = $userRow['admin'];
				return true;
			}else{
				header('Location: login.php?error=wrng');
				return false;
			}
		} else {
			header('Location: login.php?error=err');
			return false;
		}
	}

	public function getAllUsers(){
		// selecting all users and returning it tru variable
		$db = $this->connection();
		$stmt = $db->prepare("SELECT id,name,lastname,email FROM users ORDER BY name ASC");
		$stmt->execute();
		$admin_users = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $admin_users;
	}	

	public function deleteUserAdmin($id){
		// delete user by admin method
		$db = $this->connection();
		$stmt = $db->prepare("DELETE FROM users WHERE id = :id");
		$stmt->execute(['id'=>$id]);
		return true;
	}
}