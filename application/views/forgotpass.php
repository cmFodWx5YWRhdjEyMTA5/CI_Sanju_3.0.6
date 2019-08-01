<?php 
$pagetitle = 'Forget Password';
include_once ('header.php'); 

// यदि कोई दुर्बल मानव तुम्हारा अपमान करे तो उसे क्षमा कर दो, क्योंकि क्षमा करना ही वीरों का काम है, परंतु यदि अपमान करने वाला बलवान हो तो उसको अवश्य दण्ड दो 
?>




<section class="blog-wrapper">
    	<div class="container">
        
        	<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="row">
                   <div class="col-md-6">
 						<div class="widget">
                        	<div class="title">
                            	<h3>Please Enter your Email id</h3>
                            </div><!-- end title -->
                                

<?php echo form_open('index/forgotpass',['class'=>'form-horizontal'])?>

								        <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <!--<input type="text" class="form-control" placeholder="Username">-->
                                           
<?php echo form_input(['name'=>'user_email','class'=>'form-control','placeholder'=>'Enter your mail id','value'=>set_value('user_email')]); 

echo form_error('user_email'); ?>
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