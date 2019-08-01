<?php 
$pagetitle = $UserArtVal->Artical_Title;
include_once ('header.php'); 

?>
<script language = "Javascript">
$(document).ready(function() {
          $('li#userartical').addClass('active');
		  $('li#artical').addClass('active');
		  $('li#homepage').removeClass('active');
        });
</script>
	<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2><?php echo $UserArtVal->Artical_Title;?></h2>

			</div>
		</div>
	</section>
    
    <section class="blog-wrapper">
    	<div class="container">
        	<div id="content" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
               <div class="row">
                   <div class="col-md-12">
                   	<div class="box">
                    				
<?php echo form_open_multipart("user/updateArt/{$UserArtVal->Art_Id}",['class'=>'form-horizontal']); ?>
                                    <br>
							<?php 
								echo form_upload(['name'=>'Artical_Pic']);
								//echo (isset($error)) ? $error :'' 
							?>
                                    <br>
									
<?php echo form_input(['name'=>'Artical_Title','class'=>'form-control','placeholder'=>'आर्टिकल का नाम','value'=>set_value('Artical_Title',$UserArtVal->Artical_Title)]); 
echo form_error('Artical_Title'); ?>
                                    <br>

<?php echo form_textarea(['name'=>'Artical_Dtl','class'=>'form-control ckeditor','placeholder'=>'आर्टिकल का विवरण','value'=>set_value('Artical_Dtl',$UserArtVal->Artical_Dtl),'cols' => 40, 'rows' => 4]); 

echo form_error('Artical_Dtl'); ?>
                                    <br>

<?php echo form_submit(['name'=>'Submit','value'=>'Update','class'=>'btn btn-primary']); ?>
                                    <br>
<?php echo form_close(); ?>
					</div>
                   
                   </div>
               </div> 
            </div><!-- end content -->
            
			<div id="sidebar" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="widget">
                	<div class="title"><h1>Navigation</h1></div>
                    <ul class="nav nav-tabs nav-stacked">
                        <li id="profile"><a href="<?php echo base_url('user/dashboard')?>">My Profile</a></li>
                        <li id="temple"><a href="<?php echo base_url('user/usertemp')?>">मंदिर</a></li>
                        <li id="userartical"><a href="<?php echo base_url('user/userartical')?>">आर्टिकल</a></li>
                        
                        <li id="newArtical"><a href="<?php echo base_url('user/addArt')?>">नया आर्टिकल</a></li>
                        <li id="newTemple"><a href="<?php echo base_url('user/addUserTemp')?>">नया मंदिर</a></li>
                        <li id="newKnw"><a href="<?php echo base_url('user/addUserKnw')?>">नयी जानकारी</a></li>
                    </ul>                              
				</div>
			</div>
    	</div>
    </section>

<?php
include_once ("footer.php");
?>