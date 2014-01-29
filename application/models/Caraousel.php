<?php 

	/**
	* 
	*/
	class Caraousel extends ActiveRecord\Model
	{
		
		public function image_url(){
			if ($this->image){
				return base_url('uploads/caraousel/' . $this->id . "/" . $this->image);
			}
			else{
				return FALSE;
			}
		}
				static $per_page=4;


		public function page($page_number)
		{
			return Caraousel::find('all',array('offset'=>($page_number-1) * self::$per_page,'limit'=>self::$per_page));
		}


		public function upload_image(){

			$CI =& get_instance();
			$CI->load->library('upload');
			
			if (isset($_FILES['caraousel_image']['size']) && $_FILES['caraousel_image']['size'] > 0)
			{
				
				$target_dir = getcwd() . '/uploads/caraousel/' . $this->id;
				
				
				if(!file_exists($target_dir)){
					mkdir($target_dir,0777,true);
					
				}
					

				$config['upload_path'] = './uploads/caraousel/'.$this->id.'/';
				$config['allowed_types'] = 'gif|png|jpg|bmp';
				$config['max_size'] = '1000000';
				$config['max_width'] = '2048';
				$config['max_height'] = '1536';
				$CI->upload->initialize($config);
				
				//delete_uploaded_image();

				if ($CI->upload->do_upload('caraousel_image'))
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
			$full_path = getcwd() . '/uploads/caraousel/' . $this->id . '/' . $this->image;
			if (isset($this->image) && file_exists($full_path)){
				unlink($full_path);
			}
		}


	}
 ?>