<?php 
/**
 * 
 */
 class ProductCategory extends ActiveRecord\Model
 {
 	static $belongs_to = array(array('product'),array('category'));
 	
 }
 ?>