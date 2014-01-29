<?php
	class Main extends CI_Controller
 {
 	
 	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['categories']=Category::find('all');
		$data['caraousels']=Caraousel::find('all');
		// $data['title']='Home';

		$data['body']='front/index';
		$data['navigasi']='front/nav';
		$data['navbar']='front/nav-bar';

		$this->load->vars($data);
		
		 $this->load->view('front/layout');
	}
	public function details()
	{
		$data['body']='front/details';
		$data['navigasi']='front/nav';
		$data['navbar']='front/nav-bar';

		$this->load->vars($data);
		
		$this->load->view('front/layout');
	}
	public function register()
	{
		$pengguna = $this->input->post('user');
		User::create($pengguna);
		die('Success');
	}
	// public function about()
	// {
	// 	$data['title']='About';

	// 	$data['body']='frontend/about';
		
	// 	$this->load->vars($data);
		
	// 	$this->load->view('layout/front');
	// }
	// public function cart()
	// {
	// 	$data['title']='Cart';

	// 	$data['body']='frontend/cart';
		
	// 	$this->load->vars($data);
		
	// 	$this->load->view('layout/front');
	// }
	// public function contact()
	// {
	// 	$data['title']='Contact';

	// 	$data['body']='frontend/contact';
		
	// 	$this->load->vars($data);
		
	// 	$this->load->view('layout/front');
	// }
 }
?>