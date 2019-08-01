<?php 
$pagetitle = 'Edit Profile of '.$this->session->userdata('UserName');
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
                            	<h3>Edit User Details</h3>
                            </div><!-- end title -->
                                <?php //echo $UserData->user_id;?>

<?php 	echo form_open_multipart("user/updateUser/{$UserData->user_id}",['class'=>'form-horizontal']); ?>
									<div class="form-group" style="margin-left:20px;">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
												<?php 
                                                    echo form_upload(['name'=>'User_Pic','class'=>'form-control','style'=>'padding-bottom:45px;']); 
                                                ?>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-left:20px;">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
<?php
echo form_input(['name'=>'user_fname','class'=>'form-control','placeholder'=>'First Name','value'=>set_value('user_email',$UserData->user_fname)]); 
echo form_error('user_fname'); 
?>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-left:20px;">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
<?php
echo form_input(['name'=>'user_lname','class'=>'form-control','placeholder'=>'Last Name','value'=>set_value('user_email',$UserData->user_lname)]); 
echo form_error('user_fname'); 
?>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-left:20px;">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
<?php
echo form_input(['name'=>'user_email','class'=>'form-control','placeholder'=>'Email ID','value'=>set_value('user_email',$UserData->user_email)]); 
echo form_error('user_email'); 
?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
<?php echo
    form_open('user/updateUser'),
    form_hidden('user_id',$UserData->user_id),
    form_hidden('user_image',$UserData->user_image),
    form_hidden('User_Thumb',$UserData->User_Thumb),
form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary','style'=>'margin-left:50px;']),
form_close();
?>
<?php //echo form_submit(['name'=>'Submit','value'=>'Submit','class'=>'btn btn-primary', 'style'=>'margin-left:50px;']); ?>
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