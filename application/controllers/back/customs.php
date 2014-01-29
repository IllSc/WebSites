<?php 
/**
 * 
 */
 class Customs extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 	public function index(){
 	if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
	$this->data['customs'] = Custom::find('all');
	// array data dengan index index menyimpan hello/index.php
	$this->data['body'] = 'backend/customs/index';
	$this->data['title'] = "Customs";

	// mengakses folder view/layouts/application.php yang menyimpan header dan footer
	$this->load->view('layout/back', $this->data);
	}

	public function add(){
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
	$this->data['customs'] = new Custom();
	$this->data['form_title'] = 'Add Customs';
	$this->data['form_action'] = site_url('back/customs/create'); 
	$this->data['action'] = 'Add customs';

	$this->data['body'] = 'backend/customs/add';			
	$this->data['title'] = "Add new Customs";
	$this->load->view('layout/back', $this->data);
	
	}
	public function create(){
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
	$customs = new Custom($this->input->post('customs'));
	$customs->save();
	redirect(site_url('back/customs'));
	}

	//Method edit mengarah ke suatu form untuk pengisian data, perubahan data dilakukan di method update
	public function edit($id){
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
	$this->data['customs'] = Custom::find($id);
	$this->data['form_title'] = 'Edit customs';
	$this->data['form_action'] = site_url('back/customs/update/'.$this->data['customs']->id);
	$this->data['action'] = 'Edit customs';
	$this->data['title'] = "Edit customs";

	$this->data['body'] = 'backend/customs/edit';				
	$this->load->view('layout/back', $this->data);
	}

	public function update($id){
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
	$customs = Custom::find($id);
	$customs->update_attributes($this->input->post('customs'));
	$customs->save();
	redirect(site_url('back/customs'));
	}
	public function destroy($id){
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
	$customs = Custom::find($id);
	$customs->delete();
	redirect(site_url('back/customs'));
	}

 } ?>