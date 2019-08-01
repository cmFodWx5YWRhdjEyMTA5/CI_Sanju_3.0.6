<!DOCTYPE html>
<html lang="en" class="body-full-height"><head>        
        <!-- META SECTION -->
        <title>क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->    
        <?= link_tag('assets/css/theme-default.css');?>
        <?= link_tag('assets/css/extra.css');?>    
        
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>

<?php if($error = $this->session->flashdata('login_failed')) {?> 
 <div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <strong>Oh snap!</strong> <?php echo $error ?>
</div> 
<?php } ?>
                  <?php echo form_open('admin/admin/admin_login',['class'=>'form-horizontal'])?>
				  	<div class="form-group">
	                  <div class="col-md-12">
	                  	<?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Usernam','value'=>set_value('username')]); ?>
	                  </div>
	                  	<?php echo form_error('username'); ?>
	                  	
	                </div>
	                <div class="form-group">
	                        <div class="col-md-12">
	 				<?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']); ?>
	                        </div>
	         					<?php echo form_error('password'); ?>
	                </div>
	                <div class="form-group">
	                        <div class="col-md-6">
	                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
	                        </div>
	                        <div class="col-md-6">
	      <?php echo form_submit(['name'=>'Submit','value'=>'Log in','class'=>'btn btn-info btn-block']); ?>
	                            
	                        </div>
	                </div>
                    </form>

                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान)
                    </div>
                    <div class="pull-right">
                        <a href="#">Ver <?php echo CI_VERSION; ?></a>

                        <!-- <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a> -->
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>






