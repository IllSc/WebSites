<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/').'/normalize.min.css' ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/').'/bootstrap.css' ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/').'/style.css' ?>" type="text/css">
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="js/HTML5Shiv.js"></script>
	<![endif]-->
</head>
<body>
	<header class="main-header">
		<div class="container">
			<div class="navbar">
	  			<div class="navbar-inner">
	    			<a class="brand" href="#">Suit Shop CMS</a>
	    			<ul class="nav pull-right">
						<li><a href="">User List</a></li>
	      				<li><?php echo anchor('#', 'Product List'); ?></li>

	      				<li><a href="#">Content Management</a></li>
	      				<li><?php echo anchor('#', 'Register'); ?></li>
	      				
	      				<li class="dropdown">
	      					<a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#">
    							Hello, Admin
    							<b class="caret"></b>
  							</a>
  							<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
    							<li><?php echo anchor('back/main/profile', '<i class="icon-user"></i>  Profile'); ?></li>
    							<li><a href="#"><i class="icon-cog"></i>  Change Password</a></li>
    							<li class="divider"></li>
    							<li><a href="#"><i class="icon-lock"></i>  Logout</a></li>
  							</ul>
							
						</li>
	    			</ul>
	  			</div>
			</div>
		</div>	
	</header>


<?php $this->load->view($body); ?>


	<footer>
		<div class="container">
			<p align="center">&copy 2013 - Suit Shop</p>
		</div>
	</footer>
	
	<script type="text/javascript">
window.jQuery || document.write('<script src="<?php echo base_url('assets/js/').'/jquery-1.10.1.min.js' ?>" type="text/javascript"><\/script>')


        </script><script src="<?php echo base_url('assets/js/').'/bootstrap.min.js' ?>" type="text/javascript">
        </script><script src="<?php echo base_url('assets/js/').'/jquery.elevateZoom-2.5.5.min.js' ?>" type="text/javascript">
        </script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="<?php echo base_url('assets/js/').'/gmaps.js' ?>"></script>
        <script src="<?php echo base_url('assets/js/').'/main.js' ?>" type="text/javascript">
</script>
</body>
</html>