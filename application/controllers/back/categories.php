<?php 
/**
 * 
 */
 class Categories extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 	public function index(){
 	if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
	$this->data['categories'] = Category::find('all');
	// array data dengan index index menyimpan hello/index.php
	$this->data['body'] = 'backend/category/index';
	$this->data['title'] = "Categories";

	// mengakses folder view/layouts/application.php yang menyimpan header dan footer
	$this->load->view('layout/back', $this->data);
	}

	public function add(){
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
	$this->data['category'] = new Category();
	$this->data['form_title'] = 'Add Category';
	$this->data['form_action'] = site_url('back/categories/create'); 
	$this->data['action'] = 'Add Category';

	$this->data['body'] = 'backend/category/add';			
	$this->data['title'] = "Add new Category";
	$this->load->view('layout/back', $this->data);
	
	}
	public function create(){
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
	$category = new Category($this->input->post('category'));
	$category->save();
	redirect(site_url('back/categories'));
	}

	//Method edit mengarah ke suatu form untuk pengisian data, perubahan data dilakukan di method update
	public function edit($id){
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
	$this->data['category'] = Category::find($id);
	$this->data['form_title'] = 'Edit Category';
	$this->data['form_action'] = site_url('back/categories/update/'.$this->data['category']->id);
	$this->data['action'] = 'Edit Category';
	$this->data['title'] = "Edit Category";

	$this->data['body'] = 'backend/category/edit';				
	$this->load->view('layout/back', $this->data);
	}

	public function update($id){
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
	$category = Category::find($id);
	$category->update_attributes($this->input->post('category'));
	$category->save();
	redirect(site_url('back/categories'));
	}
	public function destroy($id){
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
	$category = Category::find($id);
	$category->delete();
	redirect(site_url('back/categories'));
	}

 } ?>