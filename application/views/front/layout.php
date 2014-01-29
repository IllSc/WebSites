<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/').'/normalize.min.css' ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/').'/bootstrap.css' ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/').'/style.css' ?>" type="text/css">
		<title>Popon's Nursery</title>
	</head>
	<body>
        <div class="container"><?php $this->load->view($navbar); ?></div>
        
        


		<?php $this->load->view($body); ?>
		
            <div class="container">
                <div class="row">

                     <footer class="foty">

                    <!-- <div class="span12">
                        <div class="span6">
                            <div class="row">
                                <h3>Popon's Nursery</h3>

                            </div>
                            <div class="row">
                                <h4>Alamat</h4><br>    
                                <h4>Telepon</h4>
                            </div>
                        </div>
                        <div class="span6">
                        </div>

                    </div> -->

                <div class="row">
                    <div class="span12">
                        <ul>
                            <li style="list-style: none">
                                <a href="https://www.facebook.com/poponsnursery"></a>
                            </li>
                            <li>
                                <img src="<?php echo base_url('assets/img/').'/facebook-icon.png' ?>" alt="Facebook" width = 30 height = 30><br>
                                <b>FACEBOOK</b>
                            </li>
                            <li style="list-style: none">
                                <a href="http://id.linkedin.com/pub/puriyani-hasanah/57/14b/60b"></a>
                            </li>
                            <li>
                                <img src="<?php echo base_url('assets/img/').'/linkedin-icon.png' ?>" alt="LinkedIn" width = 30 height = 30><br>
                                <b>LinkedIn</b>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="span12">
                        <a href="#"><b>ABOUT</b></a> · <a href="#"><b>PRIVACY POLICY</b></a> · <a href="#"><b>CONTACT</b></a>
                    </div>
                </div>
                <div class="row">
                    <div class="span12">
                        <b>© Who Am I</b>
                    </div>
                </div>
                 </footer>

                </div>
               
            </div>
       
	</body>
    <script src="<?php echo base_url('assets/js/').'/jquery-1.10.2.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/').'/bootstrap.js' ?>" type="text/javascript"></script>
    
</html>