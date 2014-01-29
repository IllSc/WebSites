<?php /**
* 
*/
class Customs extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function detail($id)
	{
		$data['categories']=Category::find('all');	
		$data['detail_custom']=Custom::find($id);
		$data['body']='front/customs';
		$data['title']=$data['detail_custom']->name;


		$data['navigasi']='front/nav';
		$data['navbar']='front/nav-bar';
		$data['categories']=Category::find('all');


		$this->load->vars($data);
		
		$this->load->view('front/layout');
	}
} ?>