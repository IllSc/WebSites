<?php 
class Pengguna extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$exist = User::find_by_name('admin');
		if($exist){
			die('user sudah ada');
		} else {
			$user = User::create(array(
			'name' => 'admin',
			'password' => 'poponsnurserry'
			));
		}
		
		
		die('Success');
		

	}
	public function masuk()
	{
		$user=User::validasi_username('admin','234');
	}
}
 ?>