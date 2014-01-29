	<div class="container">
		<ul class="breadcrumb">
        <li><?php echo anchor('back/main', 'Dashboard'); ?> <span class="divider">/</span></li>
        <li class="active"><?php echo anchor('back/users', 'Category List'); ?><span class="divider">/</span></li>
        <li class="active"><?php echo $action; ?></li>
    </ul>
    
	</div>
	<div class="container">
		<div class="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, dolores, saepe esse eius fugit deleniti autem illum obcaecati corrupti eum consequuntur tenetur tempore numquam eaque soluta. Eveniet maxime vel voluptatum.
			</div>
		<form class="form-horizontal" method="POST" action="<?php echo $form_action ?>" enctype="multipart/form-data">

		  	<div class="control-group">
			    <label class="control-label" for="inputRealName">Name</label>
			    <div class="controls">
			      	<input class="input-block-level" name = "product[name]" type="text" id="inputRealName" placeholder="" value = "<?php echo $product->name ?>">
			    </div>
		  	</div>
		  	 <div class="control-group">
			    <label class="control-label" for="inputUserName">Description</label>
			    <div class="controls">
			      	<textarea class="input-block-level" rows="7" name = "product[description]" type="text" id="inputUserName" placeholder="" value = "<?php echo $product->description ?>">
			    	</textarea>
			    </div>
		  	</div>

			<div class="control-group">
			    <label class="control-label" for="inputDescription">Price</label>
			    <div class="controls">
			      	<input class="input-block-level" name = "product[price]" type="number" id="inputEmail" placeholder="" value = "<?php echo $product->price ?>">
			    </div>
			</div>

			<div class="control-group">
			    <label class="control-label" for="inputUpdateImage">Upload Image</label>
			    <div class="controls">
					<input name = "product_image" type="file">
					<?php if($product->image_url()): ?>
					<img class = "img-polaroid" src="<?php echo $product->image_url() ?>" alt="" width = "200">
				<?php endif; ?>
			    </div>			    
		  	</div>
			<div class="control-group">
			    <label class="control-label" for="inputUpdateImage">Category</label>
			    <div class="controls">
					
					<?php
						$options=array();

						foreach ($categories as $category) {
							$options[$category->id]=$category->name;
						}

						
						echo form_dropdown('product[category_id]', $options, $product->category_id);
					 ?>
					
				
			    </div>			    
		  	</div>>

		  	<!--
			<div class="control-group">
			    <label class="control-label" for="inputUpdateImage">Featured?</label>
			    <div class="controls">
					

					<?php
						//$options=array('0'=>'No','1'=>"Yes");
						//echo form_dropdown('product[isfeatured]', $options, $product->isfeatured);
					 ?>
					
				
			    </div>			    
		  	</div>
			-->

		  	<div class="control-group pull-right">
			    <button class="btn btn-success">Add</button>
		  	</div>
		</form>
	</div>