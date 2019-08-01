<?php 
$pagetitle = $singleAarti->Aarti_Title;
include_once ('header.php'); 

// यदि कोई दुर्बल मानव तुम्हारा अपमान करे तो उसे क्षमा कर दो, क्योंकि क्षमा करना ही वीरों का काम है, परंतु यदि अपमान करने वाला बलवान हो तो उसको अवश्य दण्ड दो 
?>
<script language = "Javascript">
$(document).ready(function() {
          $('li#aarti').addClass('active');
		  $('li#homepage').removeClass('active');

		$('#submitCmt').click(function(){
				
				var UserName= $('#UserName').val();
				var Aarti_Id = $('#Aarti_Id').val();
				var Aarti_Title = $('#Aarti_Title').val();
				var AartiCmt = $('#AartiCmt').val();
				
				if(AartiCmt=="")
            	{	
					document.getElementById('errorCmt').innerHTML = 'प्लीज कमेंट खली न छोडे';
                	//alert('प्लीज कमेंट खली न छोडे');                    
            	}else{ 
				//alert(UserName+Temp_Id+Temp_Name+tempCmt);
					document.getElementById('cmtDiv').innerHTML="<img src='<?php echo base_url('images/AjaxLoader.gif')?>' border='0'>";
					$.ajax({
						url:'<?php echo site_url("user/aartiCmt")?>',
						type:'post',
						data:{
								UserName:UserName,
								Aarti_Id:Aarti_Id,
								Aarti_Title:Aarti_Title,
								AartiCmt:AartiCmt
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



<script src="<?=base_url('mp3-player/script/soundmanager2.js')?>"></script>
<script src="<?=base_url('mp3-player/demo/bar-ui/script/bar-ui.js')?>"></script>
<?= link_tag('mp3-player/demo/bar-ui/css/bar-ui.css');?>


<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2><?php echo $singleAarti->Aarti_Title?></h2>
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
                					if($singleAarti->Aarti_Pic =='')
            						{ //$res['NewsTitle']
            					?>
			<img class="img-responsive"  src="<?php echo base_url('uploads/noAarti.jpg')?>" >
            					<?php }else{ ?>
			<img  class="img-responsive" src="<?php echo base_url('uploads/Aarti_Data/Aarti_Pic/'.$singleAarti->Aarti_Pic)?>" width="330" height="185"/>
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
                                   <h1><? $singleAarti->Aarti_Title ; ?></h1>
                                    <div class="blog-carousel-meta">
                                        <span><i class="fa fa-calendar"></i> <?php echo date("d M Y", strtotime($singleAarti->Post_Date))?></span>
                                        <span><i class="fa fa-user"></i> <a href="#"><? echo $singleAarti->Post_By; ?></a></span>

 

                                    </div><!-- end blog-carousel-meta -->
                                </div><!-- end blog-carousel-header -->
                                <div class="blog-carousel-desc">
<!--======================================== Audio Player ==============================================-->
                                       
                                     <div align="center">
                                     <div class="sm2-bar-ui compact">

 <div class="bd sm2-main-controls">

  <div class="sm2-inline-texture"></div>
  <div class="sm2-inline-gradient"></div>

  <div class="sm2-inline-element sm2-button-element">
   <div class="sm2-button-bd">
    <a href="#play" class="sm2-inline-button play-pause">Play / pause</a>
   </div>
  </div>

  <div class="sm2-inline-element sm2-inline-status">

   <div class="sm2-playlist">
    <div class="sm2-playlist-target">
     <!-- playlist <ul> + <li> markup will be injected here -->
     <!-- if you want default / non-JS content, you can put that here. -->
     <noscript><p>JavaScript is required.</p></noscript>
    </div>
   </div>

   <div class="sm2-progress">
    <div class="sm2-row">
    <div class="sm2-inline-time">0:00</div>
     <div class="sm2-progress-bd">
      <div class="sm2-progress-track">
       <div class="sm2-progress-bar"></div>
       <div class="sm2-progress-ball"><div class="icon-overlay"></div></div>
      </div>
     </div>
     <div class="sm2-inline-duration">0:00</div>
    </div>
   </div>

  </div>

  <div class="sm2-inline-element sm2-button-element sm2-volume">
   <div class="sm2-button-bd">
    <span class="sm2-inline-button sm2-volume-control volume-shade"></span>
    <a href="#volume" class="sm2-inline-button sm2-volume-control">volume</a>
   </div>
  </div>

 </div>

 <div class="bd sm2-playlist-drawer sm2-element">

  <div class="sm2-inline-texture">
   <div class="sm2-box-shadow"></div>
  </div>

  <!-- playlist content is mirrored here -->
<? 
if($singleAarti->Aarti_Audio =='') {

$FileVal = $singleAarti->Aarti_Audio_Link; 
}else{
$FileVal =	base_url('./uploads/Aarti_Data/Aarti_Audio/'.$singleAarti->Aarti_Audio);
}
?>
  <div class="sm2-playlist-wrapper" >
    <ul class="sm2-playlist-bd">
     	<li>
     		<a href="<?php echo $FileVal ?>">
	 			<span style="font-size:11px;">
        		<?php echo $singleAarti->Aarti_Title  ?>
                </span>
        	</a> 
     	</li>
    </ul>
  </div>

 </div>

</div> 
									</div>
<!--======================================== Audio Player ==============================================-->
                                 	<? echo $singleAarti->Aarti_Dtl  ?>	
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
									if(is_array($AartiCmtData) && count($AartiCmtData) > 0) 
										{
											foreach($AartiCmtData as $AartiCmt)
                           			 		{
								?>
                                    <article class="comment">
                                    	<?php 
                							if($AartiCmt->User_Thumb =='')
            								{
            							?>
										<img class="img-circle comment-avatar"  src="<?=base_url('uploads/no-image.jpg')?>" >
            					<?php }else{ ?>
			<img class="img-circle comment-avatar" src="<?=base_url('uploads/User_Pic/User_Thumb/'.$AartiCmt->User_Thumb)?>" />
                                        <? } ?>
	
                                        <div class="comment-content">
                                        <h4 class="comment-author">
                                        <? echo $AartiCmt->user_fname .'  '.$AartiCmt->user_lname ; ?>
                                        <small class="comment-meta"><?php echo date("d M Y", strtotime($AartiCmt->Cmt_Date))?></small>
                                        
                                        </h4>

                                        <? echo $AartiCmt->Comment_Dtl ; ?>. 
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
                            <input type="hidden" id="Aarti_Id" value="<?php echo $AartiVal->Aarti_Id ?>">
                            <input type="hidden" id="Aarti_Title" value="<?php echo $AartiVal->Aarti_Title ?>">
                            <textarea class="form-control" id="AartiCmt" rows="6" placeholder="Your Comment..."></textarea>
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
                                <h3>अन्य आरती</h3>
                            </div><!-- end title -->
                            <ul class="footer_post">
                                <?php 
									$aarti_thumb = $this->Nair->_tblmt('nair_aarati','Yes','rand()','25' );
									
									foreach($aarti_thumb as $aarti_thumb) { 
								?>
					<li>

								

<a href="<? echo base_url('index/aarti/'.$aarti_thumb->Aarti_Id )?>">
								<?php 
                					if($aarti_thumb->Aarti_Thumb =='')
            						{
            					?>
			<img width="81" height="69" class="img-rounded"  src="<?=base_url('uploads/noAarti_min.jpg')?>" >
            					<?php }else{ ?>
<img width="81" height="69" class="img-rounded" title="<? echo $aarti_thumb->Aarti_Title ; ?>" src="<?=base_url('uploads/Aarti_Data/Aarti_Pic/Aarti_Thumb/'.$aarti_thumb->Aarti_Thumb) ; ?>" />
            

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