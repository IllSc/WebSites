<?php /**
* 
*/
class Categories extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function detail($id)
	{
		$kode_produk=Category::find($id);
		$data['products']=Product::find('all',array('conditions' => array('category_id = ?', $id)));


		$data['categories']=Category::find('all');
		// $data['title']='Home';

		



		$data['body']='front/categories';
		$data['navigasi']='front/nav';
		$data['navbar']='front/nav-bar';
		$data['title']=$kode_produk->name;
		$this->load->vars($data);
		
		$this->load->view('front/layout');
	}
} ?>