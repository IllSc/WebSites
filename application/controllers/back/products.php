<?php /**
* 
*/
class Products extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index($page = 1)
	{
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		} else {
 			$data['products']=Product::page($page);
		$data['title']='Product List';
		$data['body']='backend/product/index';
		$data['title']='Product List';

		$this->load->vars($data);
		$this->load->view('layout/back');
 		}

		
	}
	public function add()
	{
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
		$this->data['product'] = new Product();
		$this->data['form_title'] = 'Add Product';
		$this->data['form_action'] = site_url('back/products/create');
		$this->data['action'] = 'Add';
		$this->data['title']='Add Product';
		$this->data['body'] = 'backend/product/add';
		$this->data['categories']=Category::find('all');
		$this->load->view('layout/back', $this->data);
	}
	public function create()
	{
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}

		$this->data['product'] = new Product($this->input->post('product'));

		if ($this->data['product']->save()){

			if ($this->data['product']->upload_image()){
				
				$this->data['product']->save();
			}
				
				redirect(site_url('back/products'));
		} else{
			$this->data['form_title'] = 'Add Product';
			$this->data['form_action'] = site_url('back/products/create');
			$this->data['action'] = 'Add';
			$this->data['title']='Add Product';
			$this->data['body'] = 'backend/product/add';
			$this->load->view('layout/back', $this->data);
		}
	}
	public function edit($id)
	{
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
		$this->data['categories']=Category::find('all');
		$this->data['product'] = Product::find($id);
		$this->data['form_action']=site_url('back/products/update/'.$this->data['product']->id);
		$this->data['body'] = 'backend/product/edit';
		$this->data['action'] = 'Edit';
		$this->data['title']='Edit Product';
		$this->data['form_title'] = 'Edit Product';
		$this->load->view('layout/back', $this->data);
	}
	public function update($id)
	{		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
			$this->data['product'] = Product::find($id);
			$this->data['product']->update_attributes($this->input->post('product'));
			if($this->data['product']->save()){
				if($this->data['product']->upload_image()){
					$this->data['product']->save();
					redirect(site_url('back/products'));
				}
					
				
			} else {
				$this->data['form_action'] = site_url('backend/products/edit');
				$this->data['form_title'] = 'Edit product';
				$this->data['body'] = 'backend/products/edit';
				$this->data['action'] = 'Edit ';
				$this->load->view('layout/back', $this->data);
			}

	}
	public function destroy($id)
	{
		if ($this->session->userdata('login_state') == FALSE) {
 			redirect('/back/login/', 'refresh');
 		}
		$product=Product::find($id);
		$product->delete();
		redirect(site_url('back/products'));
	}
} ?>