<?php 
$pagetitle = 'changePass '.$this->session->userdata('UserName');
include_once ('header.php'); 

?>


<script language = "Javascript">
$(document).ready(function() {
          $('li#profile').addClass('active');
		  $('li#homepage').removeClass('active');
        });
</script>
	<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2><?php echo 'Hello  '.$this->session->userdata('UserName')?> </h2>

			</div>
		</div>
	</section>

<section class="blog-wrapper">
    	<div class="container">
        	<div id="content" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="row">
                   <div class="col-md-11">
 						<div class="widget" >
                        	<div class="title">
                            	<h3>Edit Password</h3>
                            </div><!-- end title -->
                                <?php //echo $UserData->user_id;?>

<?php 	echo form_open_multipart('user/changPass',['class'=>'form-horizontal']); ?>
									<div class="form-group" style="margin-left:20px;">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
<?php
echo form_input(['name'=>'old_password','class'=>'form-control','placeholder'=>'Old password','value'=>set_value('old_password')]); 
echo form_error('old_password'); 
?>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-left:20px;">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
<?php
echo form_input(['name'=>'new_password','class'=>'form-control','placeholder'=>'New password','value'=>set_value('new_password')]); 
echo form_error('new_password'); 
?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
<?php echo form_submit(['name'=>'Submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
                                    </div>
                                
                                
                        </div><!-- end widget -->
					</div>
            	</div> 
            </div> 
            
			<div id="sidebar" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                 
				<div class="widget">
					<div class="title"><h2>Navigation</h2></div>
                    <ul class="nav nav-tabs nav-stacked">
                        <li id="profile"><a href="<?php echo base_url('user/dashboard')?>">My Profile</a></li>
                        <li id="temple"><a href="<?php echo base_url('user/usertemp')?>">मंदिर</a></li>
                        <li id="Artical"><a href="<?php echo base_url('user/userartical')?>">आर्टिकल</a></li>
                    </ul>                              
				</div><!-- end widget -->
			</div><!-- end sidebar -->
    	</div><!-- end container -->
    </section>
<?php 
include_once ("footer.php");
?>