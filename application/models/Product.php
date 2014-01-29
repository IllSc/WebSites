<?php 
	/**
	* 
	*/
	class Product extends ActiveRecord\Model
	{

		//scopes
		static function latest_products($limit)
		{
			return Product::find('all',array('limit'=>5));
		}


		//JUMLAH PAGE per pagination
		static $per_page=4;


		public function page($page_number)
		{
			return Product::find('all',array('offset'=>($page_number-1) * self::$per_page,'limit'=>self::$per_page));
		}

		static $has_many = array(array('categories','through'=>'product_categories'),
			array('product_categories'));


		// belongs to association
		static $belongs_to = array(
			array('category')
			);

		//validations
		static $validates_presence_of = array(
			array('name', 'message' => 'Nama tidak boleh kosong'),
			array('price')
			);

		static $validates_numericality_of = array(
			array('price', 'greater_than' => 0, 'message' => 'Harga harus lebih besar dari 0')
			);

		// call backs
		static $after_save = array(
			'upload_image'
		);

		public function image_url(){
			if ($this->image){
				return base_url('uploads/product/' . $this->id . "/" . $this->image);
			}
			else{
				return FALSE;
			}
		}
		

		public function upload_image(){

			$CI =& get_instance();
			$CI->load->library('upload');
			
			if (isset($_FILES['product_image']['size']) && $_FILES['product_image']['size'] > 0)
			{
				
				$target_dir = getcwd() . '/uploads/product/' . $this->id;
				
				
				if(!file_exists($target_dir)){
					mkdir($target_dir,0777,true);
					
				}
					

				$config['upload_path'] = './uploads/product/'.$this->id.'/';
				$config['allowed_types'] = 'gif|png|jpg|bmp';
				$config['max_size'] = '1000000';
				$config['max_width'] = '2048';
				$config['max_height'] = '1536';
				$CI->upload->initialize($config);
				
				//delete_uploaded_image();

				if ($CI->upload->do_upload('product_image'))
				{
					$upload_data = $CI->upload->data();
					$this->image = $upload_data['file_name'];
					return true;
				}
				else{
					//echo $this->upload->display_errors();
					//$CI->session->set_flashdata('error', 'Image upload failed.');
					return false;
				}
			}
		}

		public function delete_uploaded_image(){
			$full_path = getcwd() . '/uploads/product/' . $this->id . '/' . $this->image;
			if (isset($this->image) && file_exists($full_path)){
				unlink($full_path);
			}
		}
	}
 ?>