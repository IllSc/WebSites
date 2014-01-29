<?php 
	/**
	* 
	*/
	class Custom extends ActiveRecord\Model
	{
		
		static $has_many = array(
			array('children', 'class_name' => 'category', 'foreign_key' => 'parent_id'),
			array('products')
			);

		static $belongs_to = array(
			array('children', 'class_name' => 'category', 'foreign_key' => 'parent_id')
			);


		//JUMLAH PAGE per pagination
		static $per_page=4;


		public function page($page_number)
		{
			return Custom::find('all',array('offset'=>($page_number-1) * self::$per_page,'limit'=>self::$per_page));
		}
	}
 ?>