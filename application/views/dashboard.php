<?php 
$pagetitle = 'Dashboard';
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
				<h2><?php echo 'Hello  '.$UserData->user_fname.' '.$UserData->user_lname?> </h2>

			</div>
		</div>
	</section>
    
    <section class="blog-wrapper">
    	<div class="container">
        	<div id="content" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="row">
                   <div class="">
                        <div class="">
			<div class="shop_wrapper col-lg-12 col-md-9 col-sm-12 col-xs-12">
				<div class="col-lg-6 col-md-6 col-sm-12">
            <?php 
               if($UserData->User_Thumb =='')
            	{
            ?>
                    <p> 
		    
			<img class="img-thumbnail"  src="<?php echo base_url('uploads/uploadImg.png') ?>" >
        <?php  }else{ ?>
			<img width="300" height="250" class="img-thumbnail" src="<?php echo base_url('uploads/User_Pic/User_Thumb/'.$UserData->User_Thumb)?>" />
		 <? } ?>
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    
                    <p>User First Name:&nbsp;&nbsp; <b> <?php echo $UserData->user_fname;?></b>.</p>
					<p>User Last Name:&nbsp;&nbsp; <b> <?php echo $UserData->user_lname?></b>.</p>
                    <p>User Email:&nbsp;&nbsp; <b> <?php echo $UserData->user_email?></b>.</p>
			    </div>
                	<?php echo anchor("user/edit/{$UserData->user_id}", 'Edit Profile' ,['class'=>'btn btn-primary']);?>
                    <?php echo anchor("user/changPass", 'Change Password' ,['class'=>'btn btn-primary']);?>
            </div>
                            <div class="clearfix"></div>
                            <hr>
                            
                        </div><!-- end col-lg-12 -->
					</div><!-- end blog-masonry -->
            	</div><!-- end row --> 
            </div><!-- end content -->
            
			<div id="sidebar" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                 
				<div class="widget">
					<div class="title"><h2>Navigation</h2></div>
                    <ul class="nav nav-tabs nav-stacked">
                        <li id="profile"><a href="<?php echo base_url('user/dashboard')?>">My Profile</a></li>
                        <li id="temple"><a href="<?php echo base_url('user/usertemp')?>">मंदिर की लिस्ट</a></li>
                        <li id="newTemple"><a href="<?php echo base_url('user/addUserTemp')?>">नया मंदिर जोड़े</a></li>
                        
                        <li id="Artical"><a href="<?php echo base_url('user/userartical')?>">आर्टिकल की लिस्ट</a></li>
                        <li id="newArtical"><a href="<?php echo base_url('user/addArt')?>">नया आर्टिकल जोड़े</a></li>
                        
                        <li id="newsList"><a href="<?php echo base_url('user/usernews')?>">न्यूज़ की लिस्ट</a></li>
                        <li id="addNews"><a href="<?php echo base_url('user/addnews')?>">नयी न्यूज़ जोड़े</a></li>
                    </ul>                              
				</div><!-- end widget -->
			</div><!-- end sidebar -->
    	</div><!-- end container -->
    </section>

<?php
include_once ("footer.php");
?>