<?php 
$pagetitle = 'Create a new account';
include_once ('header.php'); 

//echo $localIP = getHostByName(getHostName()); 

//echo exec('getmac');

function get_Mac_Addr()
	{
		ob_start(); // Turn on output buffering
		system('ipconfig /all'); //Execute external program to display output
		$mycom=ob_get_contents(); // Capture the output into a variable
		ob_clean(); // Clean (erase) the output buffer

		 $findme = "Physical";
		 $pmac = strpos($mycom, $findme); // Find the position of Physical text
		 $mac=substr($mycom,($pmac+36),17); // Get Physical Address
		 return $mac.'_'.$_SERVER['HTTP_USER_AGENT'];

	}
//echo $myMac = get_Mac_Addr();

?>
<script>
	$(document).ready(function() {
		$('#user_email').blur(function(){
			var user_email = $('#user_email').val();
			//alert(user_email);	
			if(user_email =='')
			{
				document.getElementById('email_result').innerHTML='<label class="text-danger"><span class="glyphicon glyphicon-remove"></span>&nbsp; Email not left blank</span></label>';
				
			}else{
				$.ajax({
					url:"<?php echo base_url('index/check_email')?>",
					type:'post',
					data:{user_email:user_email},
					success:function(data)
					{
						//document.getElementById('email_result').innerHTML=data;
						$('#email_result').html(data);
					},
					error:function(){
						alert('somthnig worng');
					}
					
				});	
			}
		})
		
});
</script>

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
<?php if($error = $this->session->flashdata('errorMsg')) {?> 
 <div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <strong>Oh snap!  </strong> <?php echo '&nbsp;&nbsp;'.$error ?>
</div> 
<?php } ?>
                <div class="row">
                   <div class="col-md-6">
 						<div class="widget">
                        	<div class="title">
                            	<h3>Please Enter Username Password</h3>
                            </div><!-- end title -->
                                

<?php echo form_open('index/register',['class'=>'form-horizontal'])?>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <!--<input type="text" class="form-control" placeholder="Username">-->
                                           
<?php echo form_input(['name'=>'user_fname','class'=>'form-control','placeholder'=>'Enter your first name','value'=>set_value('user_fname')]); 

echo form_error('user_fname'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <!--<input type="text" class="form-control" placeholder="Username">-->
                                           
<?php echo form_input(['name'=>'user_lname','class'=>'form-control','placeholder'=>'Enter your last name','value'=>set_value('user_lname')]); 

echo form_error('user_lname'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <!--<input type="text" class="form-control" placeholder="Username">-->
                                           
<?php echo form_input(['name'=>'user_email','id'=>'user_email','class'=>'form-control','placeholder'=>'Enter your mail id','value'=>set_value('user_email')]); 

echo form_error('user_email'); ?>
                                        </div>
                                        <span id="email_result"></span>
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