<!DOCTYPE html>
<!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7">
    <![endif]-->
<!--[if IE 7]>
        <html class="no-js lt-ie9 lt-ie8">
        <![endif]-->
<!--[if IE 8]>
            <html class="no-js lt-ie9">
            <![endif]-->
<!--[if gt IE 8]>
                <!-->
<html class="no-js" lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <title>
            <?php echo $title ?>

        </title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/').'/normalize.min.css' ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/').'/bootstrap.css' ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/').'/style.css' ?>" type="text/css"><!--[if lt IE 9]>
                        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js">
                                                                                                                                                                                                                                                
                        </script>
                        <script src="js/HTML5Shiv.js">
                                                                                                                                                                                                                                                
                        </script>
                    <![endif]-->
    </head>
    <body>
        <nav class="user-nav">
            <div class="container">
                <ul>
                    <li>Welcome Guest!
                    </li>
                    <li>
                        <a href="#LogIn" data-toggle="modal">Log In</a>
                    </li>
                    <li>
                        <a href="#SignUp" data-toggle="modal">Sign Up</a>
                    </li>
                    <li>
                        <?php echo anchor('front/main/cart', 'Cart'); ?>
                    </li>
                </ul>
            </div>
        </nav>
        <header class="user-head">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <img src="<?php echo base_url('assets/img/').'/logo.png' ?>">
                    </div>
                    <div class="span8">
                        <nav class="main-nav">
                            <ul>
                                <li>                                    
                                   <?php echo anchor('front/main', 'Home'); ?>
                                </li>
                                <li>
                                    <a href="">Baju</a>
                                </li>
                                <li>
                                    <a href="">Celana</a>
                                </li>
                                <li>
                                    <a href="">Sepatu</a>
                                </li>
                                <li>
                                    <a href="">Aksesoris</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>


<?php $this->load->view($body); ?>



        <footer class="foty">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <ul>
                            <li style="list-style: none">
                                <a href="#"></a>
                            </li>
                            <li>
                                <img src="<?php echo base_url('assets/img/').'/ico-facebook.png' ?>" alt="Facebook"><br>
                                <b>FACEBOOK</b>
                            </li>
                            <li style="list-style: none">
                                <a href="#"></a>
                            </li>
                            <li>
                                <img src="<?php echo base_url('assets/img/').'/ico-twitter.png' ?>" alt="Twitter"><br>
                                <b>@SUITSHOP</b>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="span12">
                        <b><?php echo anchor('front/main/about', 'ABOUT'); ?></b> · <a href="#"><b>PRIVACY POLICY</b></a> · <b><?php echo anchor('front/main/contact', 'CONTACT'); ?></b>
                    </div>
                </div>
                <div class="row">
                    <div class="span12">
                        <b>©Who Am I</b>
                    </div>
                </div>
            </div>
        </footer>
        <div id="LogIn" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">
                    Log In
                </h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                            <input type="text" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Password</label>
                        <div class="controls">
                            <input type="password" id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <label class="checkbox"><input type="checkbox"> Remember me</label> <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
        <div id="SignUp" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel2">
                    Sign Up
                </h3>
            </div>
            <form class="form-horizontal" method="POST" action="registration/sign_up">
            <div class="modal-body">
                     <div class="control-group">
                        <label class="control-label" for="inputEmail">Full Name</label>
                        <div class="controls">
                            <input name="user[name]" type="text" id="inputEmail2" placeholder="Full Name" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">User Name</label>
                        <div class="controls">
                            <input name="user[username]" type="text" id="inputEmail2" placeholder="User Name"  required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                            <input name="user[email]" type="text" id="inputEmail2" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Password</label>
                        <div class="controls">
                            <input name="user[password]" type="password" id="inputPassword2" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputConfirmPassword">Confirm Password</label>
                        <div class="controls">
                            <input name="confirm_password" type="password" id="inputPassword3" placeholder="Confirm Password" required>
                            <input name="activated" value='0' type="hidden" id="inputPassword3">
                        </div>
                    </div>
               
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit">Sign Up</button>
            </div>
             </form>
        </div><script type="text/javascript">
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