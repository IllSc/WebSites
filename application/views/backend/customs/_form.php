	<div class="container">
		<ul class="breadcrumb">
        <li><?php echo anchor('back/main', 'Dashboard'); ?> <span class="divider">/</span></li>
        <li class="active"><?php echo anchor('back/users', 'User List'); ?><span class="divider">/</span></li>
        <li class="active"><?php echo $action; ?></li>
    </ul>
    
	</div>
	<div class="container">
		<div class="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, dolores, saepe esse eius fugit deleniti autem illum obcaecati corrupti eum consequuntur tenetur tempore numquam eaque soluta. Eveniet maxime vel voluptatum.
			</div>
		<form class="form-horizontal" method="POST" action="<?php echo $form_action ?>">

		  	<div class="control-group">
			    <label class="control-label" for="inputRealName">Name</label>
			    <div class="controls">
			      	<input name = "customs[name]" type="text" id="inputRealName" placeholder="" value = "<?php echo $customs->name ?>">
			    </div>
		  	</div>

		  	 <div class="control-group">
			    <label class="control-label" for="inputUserName">Description</label>
			    <div class="controls">
			      	<textarea class="input-block-level" rows="7" name = "customs[description]" type="text" id="inputUserName" placeholder="" value = "<?php echo $customs->description ?>">
			    	</textarea>
			    </div>
		  	</div>

		  	<div class="control-group pull-right">
			    <button class="btn btn-success">Add</button>
		  	</div>
		</form>
	</div>