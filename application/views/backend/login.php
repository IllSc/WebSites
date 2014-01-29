<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login CMS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link rel="stylesheet" href="<?php echo base_url('assets/css/').'/normalize.min.css' ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/').'/bootstrap.css' ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/').'/style.css' ?>" type="text/css"><!--[if lt IE 9]>
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<h3 class="text-center text-info">
				CMS Login
			</h3>


			<?php
			$attributes = array('class' => 'form-horizontal');
			echo form_open('back/login/verificate',$attributes);

			//Username
			echo '<div class="control-group">';

			$attributes_label = array('class' => 'control-label');
			echo form_label('Username', 'inputUsername', $attributes_label);

			echo '<div class="controls">';
			echo form_input('inputUsername', '', 'id="inputUsername"');
			echo '</div>';

			echo '</div>';

			//Password
			echo '<div class="control-group">';

			$attributes_label = array('class' => 'control-label');
			echo form_label('Password', 'inputPassword', $attributes_label);

			echo '<div class="controls">';
			echo form_password('inputPassword', '', 'id="inputPassword"');
			echo '</div>';

			echo '</div>';
			
			//Submit
			echo '<div class="control-group">';


			echo '<div class="controls">';
			echo '<button type="submit" class="btn">Log in</button>';
			echo '</div>';

			echo '</div>';

			echo form_close();

			?>
			<div class="errors"><?php echo validation_errors(); ?></div>
			<!-- <form action="http://localhost/Projects/CodeIgniter/index.php/back/login/verificate" method="post" class="form-horizontal">
				<div class="control-group">

					 <label class="control-label" for="inputEmail">Email</label>
					<div class="controls">
						<input type="text" id="inputEmail">
					</div>
				</div>
				<div class="control-group">
					 <label class="control-label" for="inputPassword">Password</label>
					<div class="controls">
						<input type="password" id="inputPassword">
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						  <button type="submit" class="btn">Sign in</button>
					</div>
				</div>
			</form> -->
		</div>
	</div>
</div>
</body>
</html>
