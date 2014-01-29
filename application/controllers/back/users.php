<?php 
/**
 * 
 */
 class Users extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 	public function index(){

 		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		} else {
 			$this->data['users'] = User::find('all');
	// array data dengan index index menyimpan hello/index.php
	$this->data['body'] = 'backend/user/index';
	$this->data['title'] = "Home";

	// mengakses folder view/layouts/application.php yang menyimpan header dan footer
	$this->load->view('layout/back', $this->data);
 		}

	
	}

	public function add(){

		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		} else {
 			$this->data['user'] = new User();
	$this->data['form_title'] = 'Add User';
	$this->data['form_action'] = site_url('back/users/create'); 
	$this->data['action'] = 'Add User';

	$this->data['body'] = 'backend/user/add';			
	$this->data['title'] = "Register";
	$this->load->view('layout/back', $this->data);
 		}


	
	
	}
	public function create(){

		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		} else {
 			$user = new User($this->input->post('user'));
	$user->save();
	redirect(site_url('back/users'));
 		}
	
	}

	//Method edit mengarah ke suatu form untuk pengisian data, perubahan data dilakukan di method update
	public function edit($id){

		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		} else {
 				$this->data['user'] = User::find($id);
	$this->data['form_title'] = 'Edit User';
	$this->data['form_action'] = site_url('back/users/update/'.$this->data['user']->id);
	$this->data['action'] = 'Edit User';
	$this->data['title'] = "Edit User";

	$this->data['body'] = 'backend/user/edit';				
	$this->load->view('layout/back', $this->data);
 		}



	}

	public function update($id){

		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		} else {
 			$user = User::find($id);
			$user->update_attributes($this->input->post('user'));
			$user->save();
			redirect(site_url('back/users'));
 		}

	
	}
	public function destroy($id){
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		} else {
 			$user = User::find($id);
			$user->delete();
			redirect(site_url('back/users'));
 		}



	}

 } ?>