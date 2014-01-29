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
			      	<input name = "user[name]" type="text" id="inputRealName" placeholder="" value = "<?php echo $user->name ?>">
			    </div>
		  	</div>
		  	 <div class="control-group">
			    <label class="control-label" for="inputUserName">User Name</label>
			    <div class="controls">
			      	<input name = "user[username]" type="text" id="inputUserName" placeholder="" value = "<?php echo $user->name ?>">
			    </div>
		  	</div>

			<div class="control-group">
			    <label class="control-label" for="inputDescription">Email</label>
			    <div class="controls">
			      	<input name = "user[email]" type="email" id="inputEmail" placeholder="" value = "<?php echo $user->email ?>">
			    </div>
			</div>

			<div class="control-group">
			    <label class="control-label" for="inputPrice">Password</label>
			    <div class="controls">
			      	<input name = "user[password_crypt]" type="password" id="inputPassword" placeholder="" value = "<?php echo $user->password_crypt ?>">
			    </div>
		  	</div>

		  	<div class="control-group pull-right">
			    <button class="btn btn-success">Add</button>
		  	</div>
		</form>
	</div>