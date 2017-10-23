<?php
include('password.php');
class User extends Password{

    private $_db;

    function __construct($db){
    	parent::__construct();

    	$this->_db = $db;
    }

	private function get_user_hash($username){ 

		try {
			$stmt = $this->_db->prepare('SELECT user_pass, user_login, ID FROM wp9o_users WHERE user_login = '.$username.'');
			$stmt->execute(array('username' => $username)); 

			return $stmt->fetch();

		} catch(PDOException $e) {
		    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
		}
	}

	public function login($username,$password){ 

		$row = $this->get_user_hash($username);

		if($this->password_verify($password,$row['user_pass']) == 1){

		    $_SESSION['loggedin'] = true;
		    $_SESSION['username'] = $row['user_login'];
		    $_SESSION['memberID'] = $row['ID'];
		    return true;
		}
	}

	public function logout(){
		session_destroy();
	}

	public function is_logged_in(){
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			return true;
		}
	}

}


?>
