<?php 

class User extends ActiveRecord\Model{



	function before_save()
	{
			$password = $this->hash_password($this->password);
			$this->password = $password;
	}
	private function hash_password($password){
		return md5($password);
	}

	public static function login($user_id){
		$CI =& get_instance();
		$CI->session->set_userdata('user_id', $user_id);
	}

	public static function validasi_username($username,$password){
		$user=User::find_by_name($username);

		if($user && $user->validasi_password($password)){
			// User::login($username);
			return true;
		} else {
			return false;
		}

		//User::login($username);

	}
	public function validasi_password($pass){

		return $this->password == md5($pass);
	}
}

 ?>