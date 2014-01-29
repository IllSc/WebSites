<?php 
/**
 * 
 */
 class Main extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 	
 	public function index()
 	{

 		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		} else {
 			$data['title']='Dashboard';
 			$data['body']='backend/index/index';
 			$this->load->vars($data);
 			$this->load->view('layout/back');
 		}

 		
 	}
 	public function profile()
 	{
 		$data['title']='Profile';
 		$data['body']='backend/index/profile';
 		$this->load->vars($data);
 		$this->load->view('layout/back');
 	}
 } ?>