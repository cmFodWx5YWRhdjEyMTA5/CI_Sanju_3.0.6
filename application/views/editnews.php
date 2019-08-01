<?php 
$pagetitle = $NewsVal->NewsTitle;
include_once ('header.php'); 

?>
<script language = "Javascript">
$(document).ready(function() {
          $('li#newsList').addClass('active');
		  $('li#myNews').addClass('active');
		  $('li#homepage').removeClass('active');
        });
</script>
	<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2><?php echo $pagetitle;?></h2>

			</div>
		</div>
	</section>
    
    <section class="blog-wrapper">
    	<div class="container">
        	<div id="content" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
               <div class="row">
                   <div class="col-md-12">
                   	<div class="box">
                    				
<?php echo form_open_multipart("user/editnews/{$NewsVal->News_Id}",['class'=>'form-horizontal']); ?>
                                    <br>
							<?php 
								echo form_upload(['name'=>'News_Pic']);
								
							?>
                            <div class="red-left">
                               <?php if(isset($upload_error) ) echo $upload_error ?>
                            </div>
                                    <br>
									
<?php echo form_input(['name'=>'NewsTitle','class'=>'form-control','placeholder'=>'न्यूज़ का नाम','value'=>set_value('NewsTitle',$NewsVal->NewsTitle)]); 
echo form_error('NewsTitle'); ?>
									<br>
<?php 
echo form_textarea(['name'=>'NewsDtl','class'=>'form-control ckeditor','placeholder'=>'न्यूज़ का विवरण','value'=>set_value('NewsDtl',$NewsVal->NewsDtl),'cols' => 40, 'rows' => 4]); 
echo form_error('NewsDtl'); ?>
                                    <br>
<?php echo form_submit(['name'=>'Submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
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
                        <li id="temple"><a href="<?php echo base_url('user/usertemp')?>">मंदिर की लिस्ट</a></li>
                        <li id="newTemple"><a href="<?php echo base_url('user/addUserTemp')?>">नया मंदिर जोड़े</a></li>
                        
                        <li id="Artical"><a href="<?php echo base_url('user/userartical')?>">आर्टिकल की लिस्ट</a></li>
                        <li id="newArtical"><a href="<?php echo base_url('user/addArt')?>">नया आर्टिकल जोड़े</a></li>
                        
                        <li id="newsList"><a href="<?php echo base_url('user/usernews')?>">न्यूज़ की लिस्ट</a></li>
                        <li id="addNews"><a href="<?php echo base_url('user/addnews')?>">नयी न्यूज़ जोड़े</a></li>
                    </ul>                              
				</div>
			</div>
    	</div>
    </section>

<?php
include_once ("footer.php");
?>