<?php /**
* 
*/
class Products extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function detail($id)
	{
		
		$data['detail_products']=Product::find($id);
		$data['relevant_products']=$data['products']=Product::find('all',array('conditions' => array('category_id = ?', $data['detail_products']->category_id),'limit' => 4));
		$data['body']='front/details';
		$data['title']=$data['detail_products']->name;


		$data['navigasi']='front/nav';
		$data['navbar']='front/nav-bar';
		$data['categories']=Category::find('all');


		$this->load->vars($data);
		
		$this->load->view('front/layout');
	}
} ?>