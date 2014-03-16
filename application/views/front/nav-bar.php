<div id="SignUp" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   
	<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body">
        <form id="myForm" method="post" action="<?php echo site_url('front/main/register'); ?>">
          <div class="control-group">
                        <label class="control-label" for="inputEmail">Username</label>
                        <div class="controls">
                            <input name="user[name]" type="text" id="inputEmail2">
                        </div>
            </div>
            <div class="control-group">
                        <label class="control-label" for="inputPassword">Password</label>
                        <div class="controls">
                            <input name="user[password]" type="password" id="inputPassword2" placeholder="Password">
                        </div>
            </div>
            <div class="modal-footer">
        
        		<button class="btn btn-primary" type="submit">Save</button>
    		</div>
        </form>
    </div>
    
</div>


<div class="row">
	<div class="span12">
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a> <a href="<?php echo site_url("front/main"); ?>" class="brand">Popon's Nursery</a>
					<div class="nav-collapse collapse navbar-responsive-collapse">
						<ul class="nav">
										<li class="active">
											<a href="<?php echo site_url("front/main"); ?>">Home</a>
										</li>
										<li>
											
										</li>
											
						</ul>
						
						
					</div>			
				</div>
			</div>				
		</div>
	</div>
</div>
