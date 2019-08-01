<?php 
$pagetitle = 'Meet Our Team';
include_once ('header.php'); 

// यदि कोई दुर्बल मानव तुम्हारा अपमान करे तो उसे क्षमा कर दो, क्योंकि क्षमा करना ही वीरों का काम है, परंतु यदि अपमान करने वाला बलवान हो तो उसको अवश्य दण्ड दो 
?>


<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>क्षत्रिय गाछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || About Us</h2>
               
			</div>
		</div>
	</section>
    
    <section class="blog-wrapper">
    	<div class="container">
        	<div id="content" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            	<div class="buddypress-top clearfix">
                    <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
                        <h2>Meet Our Team<!--<mark>(20)</mark>--></h2>
                    </div>
                                    
                    
				</div>
                     	         
                     <div class="row padding-top">
                        <?php 
							$i=1;
							foreach($TeamData as $res) { 
						?>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="group_box ">
								<!--<span class="circle">12</span>-->
                            	<div class="group_img">
                                
			<?php 
                if($res->About_Pic=='')
            {
            ?>
                <img width="90" height="90" class="img-circle"  src="<?=base_url('uploads/no-image.jpg')?>" >
            <?php }else{ ?>
                <img width="90" height="90" class="img-circle" src="<?=base_url('uploads/About_Pic/'.$res->About_Pic)?>" style=""/>
            <? }?>
                                
                                	
                                </div><!-- end group_img -->
                                <div class="">
                                	<h3>
                              		<a class="" href="#">
										<? echo $res->About_Name; ?>
                                    </a>
                                    </h3>
                                </div>
                                <div class="group_timer">
                            		<p><i class="glyphicon glyphicon-home"></i> <? echo $res->About_Phone; ?></p>
                            	</div><!-- end group_times  Main_Id -->
                            </div>
                            <!-- end first -->
                        </div>
                        <!-- end col-lg-6 -->
                    <?php } ?>
                    </div>
                    <!-- end row -->
                        <div class="pagination_wrapper">
               <?php echo $this->pagination->create_links();?>
            </div>
                <div class="clearfix"></div>
                
                
                     
            </div>
            
            
            
           <div id="sidebar" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="shop-banner">
            	<div class="widget entry">
                    	<div class="title"><mark><h1>ADVERTISE<br>
							YOUR BRANDS</h1></mark></div>
                    	<img class="img-responsive" alt="" src="<?php echo base_url('uploads/AddBanner.jpg')?>">
                        <div class="banner-hover big"></div>
                    </div>
			</div>
            
                        
                        
                    </div>
            
            
            
    	</div><!-- end container -->
    </section>
<?php 
include_once ("footer.php");
?>