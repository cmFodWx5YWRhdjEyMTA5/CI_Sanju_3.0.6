<?php 
$pagetitle = $RashiVal->Rashi_Name;
include_once ('header.php'); 

?>
<script language = "Javascript">
$(document).ready(function() {
          $('li#rashifal').addClass('active');
		  $('li#homepage').removeClass('active');
        });
</script>

<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2><?php echo $RashiVal->Rashi_Name?></h2>
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
                					if($RashiVal->Rashi_Img =='')
            						{ //$res['NewsTitle']
            					?>
			<img class="img-responsive"  src="<?php echo base_url('uploads/rashifal.jpg')?>" >
            					<?php }else{ ?>
			<img  class="img-responsive" src="<?php echo base_url('uploads/Rashi_Pic/'.$RashiVal->Rashi_Img)?>" width="330" height="185"/>
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
                                    <?php /*?><h1><? echo $RashiVal->Rashi_Name; ?></h1><?php */?>
                                    <div class="blog-carousel-meta">
                                        <span>
                                        
 <a data-text="<? echo $RashiVal->Rashi_Name; ?>" data-link="<?php base_url('temple/Temp_Id/{$RashiVal->Rashi_id}')?>" class="whatsapp" style="color:#FFF;">Share on whatsapp</a>
                                        
                                        	
                                        </span>
                                        
                                    </div><!-- end blog-carousel-meta -->
                                </div><!-- end blog-carousel-header -->
                                <div class="blog-carousel-desc">
                                 	<?php
										if($Bhaskar_Rashi !='')
										{
											echo $Bhaskar_Rashi;
										}else{
											echo $RashiVal->Rashi_fal;
										}
									?>
                                </div><!-- end blog-carousel-desc -->
                            </div><!-- end blog-carousel -->
                        </div><!-- end col-lg-12 -->
					</div><!-- end blog-masonry -->
                    
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
                                <h3>अन्य राशि</h3>
                            </div><!-- end title -->
                            <ul class="footer_post">
                                <?php 
									$i=1;
									foreach($AllRashi as $ReDt) { 
								?>
					<li>

								

<a href="<? echo base_url('index/rashifal/'.$ReDt->Rashi_id )?>">
								<?php 
                					if($ReDt->Rashi_Thumb =='')
            						{
            					?>
			<img width="81" height="69" class="img-rounded"  src="<?=base_url('uploads/rashifal.jpg')?>" >
            					<?php }else{ ?>
<img width="81" height="69" class="img-rounded" title="<? echo $ReDt->Rashi_Name ; ?>" src="<?=base_url('uploads/Rashi_Pic/Rashi_Thumb/'.$ReDt->Rashi_Thumb) ; ?>" />
            

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