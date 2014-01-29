<?php 
class Caraousels extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index($page = 1)
	{
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
		$data['caraousels']=Caraousel::page($page);
		$data['title']='Caraousel List';
		$data['body']='backend/caraousel/index';
		$data['title']='Caraousel List';

		$this->load->vars($data);
		$this->load->view('layout/back');
	}
	public function add()
	{
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
		$this->data['caraousel'] = new Caraousel();
		$this->data['form_title'] = 'Add Caraousel';
		$this->data['form_action'] = site_url('back/caraousels/create');
		$this->data['action'] = 'Add';
		$this->data['title']='Add Caraousel';
		$this->data['body'] = 'backend/caraousel/add';
		
		$this->load->view('layout/back', $this->data);
	}
	public function create()
	{
		
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
		$this->data['caraousel'] = new Caraousel($this->input->post('caraousel'));

		if ($this->data['caraousel']->save()){

			if ($this->data['caraousel']->upload_image()){
				
				$this->data['caraousel']->save();
			}
				
				redirect(site_url('back/caraousels'));
		} else{
			$this->data['form_title'] = 'Add Caraousel';
			$this->data['form_action'] = site_url('back/caraousels/create');
			$this->data['action'] = 'Add';
			$this->data['title']='Add Caraousel';
			$this->data['body'] = 'backend/caraousels/add';
			$this->load->view('layout/back', $this->data);
		}
	}
	public function edit($id)
	{
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
		$this->data['caraousel'] = Caraousel::find($id);
		$this->data['form_action']=site_url('back/caraousels/update/'.$this->data['product']->id);
		$this->data['body'] = 'backend/caraousel/edit';
		$this->data['action'] = 'Edit';
		$this->data['title']='Edit Caraousel';
		$this->data['form_title'] = 'Edit Caraousel';
		$this->load->view('layout/back', $this->data);
	}
	public function update($id)
	{		
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
			$this->data['caraousel'] = Caraousel::find($id);
			$this->data['caraousel']->update_attributes($this->input->post('product'));
			if($this->data['caraousel']->save()){
				if($this->data['caraousel']->upload_image()){
					$this->data['caraousel']->save();
					redirect(site_url('back/caraousels'));
				}
					
				
			} else {
				$this->data['form_action'] = site_url('backend/caraousels/edit');
				$this->data['form_title'] = 'Edit Caraousel';
				$this->data['body'] = 'backend/caraousels/edit';
				$this->data['action'] = 'Edit ';
				$this->load->view('layout/back', $this->data);
			}

	}
	public function destroy($id)
	{
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
		$product=Caraousel::find($id);
		$product->delete();
		redirect(site_url('back/caraousels'));
	}
} ?>