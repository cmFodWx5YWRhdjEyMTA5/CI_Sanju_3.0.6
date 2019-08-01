<?php 
$pagetitle = $TempVal->Temp_Name;
include_once ('header.php'); 

// यदि कोई दुर्बल मानव तुम्हारा अपमान करे तो उसे क्षमा कर दो, क्योंकि क्षमा करना ही वीरों का काम है, परंतु यदि अपमान करने वाला बलवान हो तो उसको अवश्य दण्ड दो 
?>

<script type="text/javascript">
$(document).ready(function() {
	$('li#temple').addClass('active');
	$('li#homepage').removeClass('active');
        
		$('#submitCmt').click(function(){
				var UserName= $('#UserName').val();
				var Temp_Id = $('#Temp_Id').val();
				var Temp_Name = $('#Temp_Name').val();
				var tempCmt = $('#tempCmt').val();
				
				if(tempCmt=="")
            	{	
					document.getElementById('errorCmt').innerHTML = 'प्लीज कमेंट खली न छोडे';
                	//alert('प्लीज कमेंट खली न छोडे');                    
            	}else{ 
				//alert(UserName+Temp_Id+Temp_Name+tempCmt);
					document.getElementById('cmtDiv').innerHTML="<img src='<?php echo base_url('images/AjaxLoader.gif')?>' border='0'>";
					$.ajax({
						url:'<?php echo site_url("user/tempCmt")?>',
						type:'post',
						data:{
								UserName:UserName,
								Temp_Id:Temp_Id,
								Temp_Name:Temp_Name,
								tempCmt:tempCmt
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
				<h2><?php echo $TempVal->Temp_Name?></h2>
                <!--<ul class="breadcrumb pull-right">
                    <li><a href="index-2.html">Home</a></li>
                    <li>BuddyPress</li>
                </ul>-->
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
								<?php 
                					if($TempVal->Temp_Img =='')
            						{ //$res['NewsTitle']
            					?>
			<img class="img-responsive"  src="<?php echo base_url('uploads/noTemp.jpg')?>" >
            					<?php }else{ ?>
			<img  class="img-responsive" src="<?php echo base_url('uploads/Temple_Pic/'.$TempVal->Temp_Img)?>" width="330" height="185"/>
            					<? }?>
                                    
                                    <div class="magnifier">
                                        <div class="buttons">
                                            <a class="st" rel="bookmark" href="#"><i class="fa fa-heart"></i></a>
                                        </div><!-- end buttons -->
                                    </div><!-- end magnifier -->
                                    <div class="post-type">
                                        <i class="fa fa-picture-o"></i>
                                    </div><!-- end pull-right -->
                                </div><!-- end entry -->
                                <div class="blog-carousel-header">
                                   <h1><? $TempVal->Temp_Name ; ?></h1>
                                    <div class="blog-carousel-meta">
                                        <span><i class="fa fa-calendar"></i> <?php echo date("d M Y", strtotime($TempVal->Post_Date))?></span>
                                        <span><i class="fa fa-user"></i> <a href="#"><? echo $TempVal->Post_By; ?></a></span>
                                        
<span>
<a data-text="<?php echo substr($TempVal->Temp_Dtl,0,3000)."\n\n"."  -अधिक जानकारी के लिए यहाँ क्लिक करे "."\n"?>" data-link="<?php echo base_url('index/temple/'.$TempVal->Temp_Id)?>" class="mct_whatsapp_btn" style="color:#FFF;">Share</a>
</span>

                                    </div><!-- end blog-carousel-meta -->
                                </div><!-- end blog-carousel-header -->
                                <div class="blog-carousel-desc">
                                 	<? echo $TempVal->Temp_Dtl  ?>	
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
									if(is_array($CmtTempData) && count($CmtTempData) > 0) 
										{
											foreach($CmtTempData as $cmtTemp)
                           			 		{
								?>
                                    <article class="comment">
                                    	<?php 
                							if($cmtTemp->User_Thumb =='')
            								{
            							?>
										<img class="img-circle comment-avatar"  src="<?=base_url('uploads/no-image.jpg')?>" >
            					<?php }else{ ?>
			<img class="img-circle comment-avatar" src="<?=base_url('uploads/User_Pic/User_Thumb/'.$cmtTemp->User_Thumb)?>" />
                                        <? } ?>
                                        <div class="comment-content">
                                        <h4 class="comment-author">
                                        <? echo $cmtTemp->user_fname .'  '.$cmtTemp->user_lname ; ?>
                                        <small class="comment-meta"><?php echo date("d M Y", strtotime($cmtTemp->Cmt_Date))?></small>
                                        
                                        </h4>
                                        <? echo $cmtTemp->Comment_Dtl ; ?>. 
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
                                <input type="hidden" id="Temp_Id" value="<?php echo $TempVal->Temp_Id ?>">
                                <input type="hidden" id="Temp_Name" value="<?php echo $TempVal->Temp_Name ?>">
                                <textarea class="form-control" id="tempCmt" rows="6" placeholder="Your Comment..."></textarea>
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
                            <div class="title">
                                <h3>अन्य मन्दिर </h3>
                            </div><!-- end title -->
                            <ul class="footer_post">
                                <?php 
									$tempRend = $this->Nair->_tblmt('nair_temple','Yes','rand()','15' );
									
									foreach($tempRend as $tempRend) { 
								?>
					<li>

								

<a href="<? echo base_url('index/temple/'.$tempRend->Temp_Id )?>">
								<?php 
                					if($tempRend->Temp_Thumb =='')
            						{
            					?>
			<img width="81" height="69" class="img-rounded"  src="<?=base_url('uploads/noTemp_min.jpg')?>" >
            					<?php }else{ ?>
<img width="81" height="69" class="img-rounded" title="<? echo $tempRend->Temp_Name ; ?>" src="<?=base_url('uploads/Temple_Pic/Temp_Thumb/'.$tempRend->Temp_Thumb) ; ?>" />
            

            					<? }?>
                        	
						</a>
					</li>
                                
                                <?php }?>
                            </ul><!-- recent posts -->  
                        </div>
            </div>
          <!-- end left-sidebar -->
                    
    	</div><!-- end container -->
    </section>
<?php 
include_once ("footer.php");
?>