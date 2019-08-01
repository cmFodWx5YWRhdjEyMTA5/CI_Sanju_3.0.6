<?php 
$pagetitle = 'क्षत्रिय गाछा समाज, प्रधान कार्यालय सुमेरपुर ( राजस्थान ) || आप का स्वागत करता है |';
include_once ("header.php");

?>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
<section class="slider-wrapper fullwidthbanner-container">
        <div class="tp-banner-container">
            <div class="fullwidthbanner" >
                <ul>
                 <?php 
					
					foreach($SlideData as $res) { 
				?>
                  <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <img height="400" src="<?=base_url('uploads/Slider_Pic/'.$res->Slider_Img)?>"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption high_title2 customin customout start"
							data-x="left" data-hoffset="60"
                            data-y="130"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300" style="color:#FFF; font-weight:bold;max-width:600px;"><?php echo $res->Slider_Text; ?>
                        </div>
                        
                    </li>
                <?php } ?>
               </ul>
                <div class="tp-bannertimer"></div>
            </div>
			<div class="slider-shadow"></div>
        </div>
    </section>

<section class="post-wrapper-top jt-shadow clearfix">
    <div class="container">
        <div class="col-lg-12">
            <h2>क्षत्रिय गाछा समाज, प्रधान कार्यालय सुमेरपुर ( राजस्थान ) || आप का स्वागत करता है |</h2>
           
        </div>
    </div>
</section>

<section class="blog-wrapper">
    	<div class="container">
        	<div id="content" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            	<div class="buddypress-top clearfix">
                    <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
                        <h2>समाज के परिवारों की लिस्ट <!--<mark>(20)</mark>--></h2>
                    </div>
                                    
                    
				</div>
                     	         
                     <div class="row padding-top">
                        <?php 
							$i=1;
							foreach($NewMklist as $res) { 
						?>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="group_box ">
								<!--<span class="circle">12</span>-->
                            	<div class="group_img">
                                
			<?php 
                if($res->Mukhiya_Pic =='')
            {
            ?>
                <img width="90" height="90" class="img-circle"  src="<?=base_url('uploads/no-image.jpg')?>" >
            <?php }else{ ?>
                <img width="90" height="90" class="img-circle" src="<?=base_url('Parivar/Mukhiya/'.$res->Mukhiya_Pic)?>" style=""/>
            <? }?>
                                </div><!-- end group_img -->
                                <div class="title">
                                	<h3>
                              		
<?= anchor("index/viewmeb/{$res->Main_Id}", $res->Main_Person ,['class'=>'']);?>
                                    </h3>
                                </div>
                                <div class="group_timer">
                            		<p><i class="glyphicon glyphicon-home"></i> <? echo $res->City_Place ?></p>
                            	</div><!-- end group_times  Main_Id -->
                            </div>
                            <!-- end first -->
                        </div>
                        <!-- end col-lg-6 -->
                    <?php } ?>
                    </div>
                    <!-- end row -->
                        
                <div class="clearfix"></div>
              </div>
            
            
            
           <div id="sidebar" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            	<div class="widget">
                	<h3>LATEST NEWS</h3>
                    <div id="owl-blog" class="owl-carousel">
                    	<?php 
							$i=1;
							foreach($NewsData as $res) { 
						?>
                        <div class="blog-carousel">
                            <div class="entry">
                                <!--<img src="<?php echo DEMO_IMG?>blog_01.png" alt="" class="img-responsive">-->
                                <?php 
                					if($res->News_Thumb =='')
            						{
            					?>
			<img width="490" height="249" class="img-responsive"  src="<?=base_url('uploads/no-news.png')?>" >
            					<?php }else{ ?>
			<img  class="img-responsive" src="<?=base_url('uploads/NewsPic/News_Thumb/'.$res->News_Thumb)?>"/>
            					<? }?>
                                <div class="magnifier">
                                    <div class="buttons">
		<a class="st" rel="bookmark" href="<? echo base_url('index/news/'.$res->News_Id)?>"><i class="fa fa-link"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                                <div class="post-type">
                                    <i class="fa fa-picture-o"></i>
                                </div><!-- end pull-right -->
                            </div><!-- end entry -->
                            <div class="blog-carousel-header">
                                <h4>
		<a title="<? echo $res->NewsTitle ; ?>" href="<? echo base_url('index/news/'.$res->News_Id)?>"><? echo $res->NewsTitle ; ?></a>
                                </h4>
                                <div class="blog-carousel-meta">
                                    <span><i class="fa fa-calendar"></i> <?php echo date("d M Y", strtotime($res->Post_Date))?></span>
                                    <span><i class="fa fa-user"></i> <a href="#"><? echo $res->Post_By; ?></a></span>
                                    <span><i class="fa fa-eye"></i> <a href="#">84 Views</a></span>
                                </div><!-- end blog-carousel-meta -->
                            </div><!-- end blog-carousel-header -->
                            <div class="blog-carousel-desc">
                                <p><?php echo substr($res->NewsDtl ,0,250).' ........'?></p>
                            </div><!-- end blog-carousel-desc -->
                        </div>
                        <? } ?> 
                    </div>
                </div>
			</div>
            
            
            
    	</div><!-- end container -->
    </section>
<?php 
include_once ("footer.php");
?>