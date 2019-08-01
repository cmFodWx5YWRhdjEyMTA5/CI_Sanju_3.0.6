<?php 
$pagetitle = 'Login Your Account';
include_once ('header.php'); 

// यदि कोई दुर्बल मानव तुम्हारा अपमान करे तो उसे क्षमा कर दो, क्योंकि क्षमा करना ही वीरों का काम है, परंतु यदि अपमान करने वाला बलवान हो तो उसको अवश्य दण्ड दो 
?>


<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>Login Your Account</h2>
                <!--<ul class="breadcrumb pull-right">
                    <li><a href="index-2.html">Home</a></li>
                    <li>BuddyPress</li>
                </ul>-->
			</div>
		</div>
</section>

<section class="blog-wrapper">
    	<div class="container">
        
        	<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<?php if($error = $this->session->flashdata('login_failed')) {?> 
 <div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <strong>Oh snap!  </strong> <?php echo '&nbsp;&nbsp;'.$error ?>
</div> 
<?php } ?>
                <div class="row">
                   <div class="col-md-6">
 						<div class="widget">
                        	<div class="title">
                            	<h3>Login Your Account</h3>
                            </div><!-- end title -->
                                
<?php echo form_open('index/login_home',['class'=>'form-horizontal'])?>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
<?php echo form_input(['name'=>'user_email','class'=>'form-control','placeholder'=>'Enter your mail id','value'=>set_value('user_email')]); 

echo form_error('user_email'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <!--<input type="password" class="form-control" placeholder="Password">-->
<?php echo form_password(['name'=>'user_password','class'=>'form-control','placeholder'=>'Password']); 
echo form_error('user_password');
?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
<?php echo form_submit(['name'=>'Submit','value'=>'Log in','class'=>'btn btn-primary']); ?>

<a class="btn btn-primary" href="<?php echo $this->facebook->login_url(); ?>" style="background: #3d5a98;">Login With Facebook</a>
<?php /*?>

<a class="btn btn-primary" href="<?php echo base_url('loginFb')?>" style="background: #3d5a98;">Login With Facebook</a>
<a class="btn btn-primary" href="<?php echo base_url('user/userartical')?>" style="background: #3d5a98 none repeat scroll 0 0; border: medium none;">Login With Facebook</a><?php */?>
                                    </div>
                                </form>
                                
                        </div><!-- end widget -->
					</div>
                    
                   <div class="col-md-6">
 						<div class="widget">
                        	<div class="title">
                            	<h3>Create An Account</h3>
                            </div>
                            
	    <input type="submit" class="btn btn-primary" value="Register an account" onclick="Javascript:window.location.href='register';" style="padding-bottom:5px;">
        
        <input type="submit" class="btn btn-primary" value="Forget Password" onclick="Javascript:window.location.href='fbLogin';">
                         </div>
                            
                        </div><!-- end widget -->
					</div>
            </div><!-- end content -->
    	</div><!-- end container -->
    </section>
<?php 
include_once ("footer.php");
?>