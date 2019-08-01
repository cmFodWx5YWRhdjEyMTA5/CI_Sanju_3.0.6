<?php 
$pagetitle = 'Rest User Password';
include_once ('header.php'); 

?>




<section class="blog-wrapper">
    	<div class="container">
        
        	<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="row">
                   <div class="col-md-6">
 						<div class="widget">
                        	<div class="title">
                            	<h3>Please Enter your New Password</h3>
                            </div><!-- end title -->
                                

<?php echo form_open("index/passReset/$UserParm",['class'=>'form-horizontal'])?>

								        <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <!--<input type="text" class="form-control" placeholder="Username">-->
                                           
<?php echo form_input(['name'=>'user_password','class'=>'form-control','placeholder'=>'Enter Your Password','value'=>set_value('user_password')]); 

echo form_error('user_password'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">

<?php echo form_submit(['name'=>'Submit','value'=>'Submit','class'=>'btn btn-primary']); ?>


                                    </div>
                                </form>
                                
                        </div><!-- end widget -->
					</div>
                    
                   <div class="col-md-6">
 						<div class="widget">
                        	<div class="title">
                            	<h3>Create An Account</h3>
                            </div>
                            
	    <input type="submit" class="btn btn-primary" value="Register an account" onclick="Javascript:window.location.href='index/register';">
        
		<input type="submit" class="btn btn-primary" value="Forget Password" onclick="Javascript:window.location.href='index/forgotpass';">
                         </div>
                            
                        </div><!-- end widget -->
					</div>
                    
            	</div>
            </div><!-- end content -->
    	</div><!-- end container -->
    </section>
<?php 
include_once ("footer.php");
?>