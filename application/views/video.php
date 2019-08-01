<?php 
$pagetitle = $VideoVal->Video_Name;
include_once ('header.php'); 

// यदि कोई दुर्बल मानव तुम्हारा अपमान करे तो उसे क्षमा कर दो, क्योंकि क्षमा करना ही वीरों का काम है, परंतु यदि अपमान करने वाला बलवान हो तो उसको अवश्य दण्ड दो 
?>
<script language = "Javascript">
$(document).ready(function() {
          $('li#vidio').addClass('active');
		  $('li#homepage').removeClass('active');
		
		$('#submitCmt').click(function(){
				
				var UserName= $('#UserName').val();
				var Video_Id = $('#Video_Id').val();
				var Video_Name = $('#Video_Name').val();
				var VideoCmt = $('#VideoCmt').val();
				
				if(VideoCmt=="")
            	{	
					document.getElementById('errorCmt').innerHTML = 'प्लीज कमेंट खली न छोडे';
                	//alert('प्लीज कमेंट खली न छोडे');                    
            	}else{ 
				//alert(UserName+Temp_Id+Temp_Name+tempCmt);
					document.getElementById('cmtDiv').innerHTML="<img src='<?php echo base_url('images/AjaxLoader.gif')?>' border='0'>";
					$.ajax({
						url:'<?php echo site_url("user/uservideoCmt")?>',
						type:'post',
						data:{
								UserName:UserName,
								Video_Id:Video_Id,
								Video_Name:Video_Name,
								VideoCmt:VideoCmt
							 },
							success:function(data)
							{
								//alert(data);
								//document.getElementById('errorCmt').hidden();
								document.getElementById('cmtDiv').innerHTML=data;
							},
							error:function(){
								alert('somthnig worng');
								//document.getElementById('cmtDiv').innerHTML=data;
							}				
					});
				}
		});
});
</script>

<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2><?php echo $VideoVal->Video_Name?></h2>
            </div>
		</div>
	</section>

<section class="blog-wrapper">
    	<div class="container">
        	<div id="content" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="row">
                   <div class="blog-masonry">
                        <div class="col-lg-12">
                            <div class="blog-carousel">
                                <div class="entry">

<!--https://www.youtube.com/watch?v=nuzCykdjriw-->
<?php
$VidioLink = str_replace("https://www.youtube.com/watch?v=", "" ,$VideoVal->Video_Link);
//echo $VidioLink;
?>
<div class="video-container">

<iframe width="700" height="315" src="https://www.youtube.com/embed/<?php echo $VidioLink ?>?modestbranding=1&amp;title=<?php echo $VideoVal->Video_Name?>&amp;rel=0&amp;controls=1&amp;showinfo=0&autoplay=1&loop=0" frameborder="0" allowfullscreen></iframe>
</div>

                                   
                                </div><!-- end entry -->
                                <div class="blog-carousel-header">
                                    <h1><? echo $VideoVal->Video_Name ; ?></h1>
                                    <div class="blog-carousel-meta">
                                        <span><i class="fa fa-calendar"></i> <?php echo date("d M Y", strtotime($VideoVal->Video_Date ))?></span>
                                        <span><i class="fa fa-user"></i> <a href="#"><? echo $VideoVal->Post_By ; ?></a></span>
                                    </div><!-- end blog-carousel-meta -->
                                </div><!-- end blog-carousel-header -->
                                <div class="blog-carousel-desc">
                                   <? echo $VideoVal->Video_Dtl ; ?>	
					
                                </div><!-- end blog-carousel-desc -->
                            </div><!-- end blog-carousel -->
                        </div><!-- end col-lg-12 -->
					</div><!-- end blog-masonry -->
                    <div class="clearfix"></div>
                    
                    <!-- Comment Part -->
                    <div id="comments" class="padding-top">
                        <h3>Comments</h3>
                        	<div class="comments_wrapper">
                            <ul class="comment-list">
                                <li>
                                <?php 
									if(is_array($VideoCmt) && count($VideoCmt) > 0) 
										{
											foreach($VideoCmt as $VideoCmt)
                           			 		{
								?>
                                    <article class="comment">
                                    	<?php 
                							if($VideoCmt->User_Thumb =='')
            								{
            							?>
										<img class="img-circle comment-avatar"  src="<?=base_url('uploads/no-image.jpg')?>" >
            					<?php }else{ ?>
			<img class="img-circle comment-avatar" src="<?=base_url('uploads/User_Pic/User_Thumb/'.$VideoCmt->User_Thumb)?>" />
                                        <? } ?>
	
                                        <div class="comment-content">
                                        <h4 class="comment-author">
                                        <? echo $VideoCmt->user_fname .'  '.$VideoCmt->user_lname ; ?>
                                        <small class="comment-meta"><?php echo date("d M Y", strtotime($VideoCmt->Cmt_Date))?></small>
                                        
                                        </h4>

                                        <? echo $VideoCmt->Comment_Dtl ; ?>. 
                                        </div>
                                    </article>
                                 <?php } } else{ ?>
                                 	<article class="comment">
                                    	<div class="comment-content">
                                            <h4 class="comment-author">
                                                No Comments Found
                                            </h4>
                                        
                                        </div>
                                    </article>
								 <?php } ?>
                                </li>
                            </ul><!-- End .comment-list -->      
                        </div>
                        
                        	<div class="clearfix"></div>
                           <?php if($this->session->userdata('user_id')) {  ?>       
         <div class="comments_form">
                    <div class="title"><h3>Leave a comment</h3></div> 
                        <div class="clearfix"></div>
                        
                <div id="cmtDiv">
                    <div class="red-left"id="errorCmt"></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="User_Comment">
                            <input type="hidden" id="UserName" value="<?php echo $this->session->userdata('UserName') ?>">
                            <input type="hidden" id="Video_Id" value="<?php echo $VideoVal->Video_Id ?>">
                            <input type="hidden" id="Video_Name" value="<?php echo $VideoVal->Video_Name ?>">
                            <textarea class="form-control" id="VideoCmt" rows="6" placeholder="Your Comment..."></textarea>
                        </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="submitCmt" class="btn btn-primary">Submit</button>
                    
                </div>
                </div>
         </div>
                        
                        <?php } else {?>
                        	<div class="comments_form">
                            <div class="title"><h3>Leave a comment</h3></div> 
							
    		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input type="button" value="Login to comment" id="comments_form_submit" class="btn btn-primary" onclick="Javascript:window.location.href='<?=base_url('index/login')?>';">
            
			</div>

                        </div>
                        <?php } ?> 
                    </div>
                    <!-- Comment Part -->
                    <div class="clearfix"></div>
                   
            	</div><!-- end row --> 
            </div><!-- end content -->
            
       <div id="sidebar" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="shop-banner">
            	<div class="widget entry">
                    	<div class="title"><mark><h1>ADVERTISE<br>
							YOUR BRANDS</h1></mark></div>
                    	<img class="img-responsive" alt="" src="<?php echo base_url('uploads/AddBanner.jpg')?>">
                        <div class="banner-hover big"></div>
                    </div>
			</div>
       		<div class="widget">
			<h3>अन्य विडियो</h3>
               	<div id="accordion-first" class="clearfix">
                    <div class="accordion" id="accordion4">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapseOne1">
                                <em class="fa fa-plus icon-fixed-width"></em>हिंदी विडियो
                              </a>
                            </div>
                            <div id="collapseOne1" class="accordion-body collapse">
                              <?php 
									$HindiListing = $this->Nair->_getMultiLimt('nair_video',['Active'=>'Yes','Video_Cat'=>'Hindi'],'rand()','10' );
									
									foreach($HindiListing as $HindiList) { 
								?>
                              <div class="accordion-inner">
                                 <?= anchor("index/video/{$HindiList->Video_Id}", $HindiList->Video_Name ,['class'=>'']);?>
                              </div>
                              <? }?>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapseTwo1">
                                <em class="fa fa-plus icon-fixed-width"></em>मारवाड़ी विडियो
                              </a>
                            </div>
                            <div id="collapseTwo1" class="accordion-body collapse">
                              <?php 
									$MarwadiListing = $this->Nair->_getMultiLimt('nair_video',['Active'=>'Yes','Video_Cat'=>'Marwadi'],'rand()','10' );
									
									foreach($MarwadiListing as $MarwadiList) { 
								?>
                              <div class="accordion-inner">
                                 <?= anchor("index/video/{$MarwadiList->Video_Id}", $MarwadiList->Video_Name ,['class'=>'']);?>
                              </div>
                              <? }?>
                            </div>
                        </div>
                    	<div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapseThree1">
                                <em class="fa fa-plus icon-fixed-width"></em>लोकल विडियो
                              </a>
                            </div>
                            <div id="collapseThree1" class="accordion-body collapse">
                              <?php 
									$myCityListing = $this->Nair->_getMultiLimt('nair_video',['Active'=>'Yes','Video_Cat'=>'Local City'],'rand()','10' );
									
									foreach($myCityListing as $myCityList) { 
								?>
                              <div class="accordion-inner">
                                 <?= anchor("index/video/{$myCityList->Video_Id}", $myCityList->Video_Name ,['class'=>'']);?>
                              </div>
                              <? }?>
                            </div>
						</div> 
                    </div>
             	</div>
            </div>
       </div>

			<!-- end left-sidebar -->
                    
    	</div><!-- end container -->
    </section>
<?php 
include_once ("footer.php");
?>