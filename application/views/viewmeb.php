<?php 
$pagetitle = $MainPersion->Main_Person.', ( '.$MainPersion->City_Place.' )';
include_once ("header.php");

?>
<script language = "Javascript">
$(document).ready(function() {
          $('li#parivar').addClass('active');
		  $('li#homepage').removeClass('active');
        });
</script>

	<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2><?php echo $pagetitle;?></h2>
            </div>
		</div>
	</section><!-- end post-wrapper-top -->
    
    <section class="blog-wrapper">
    	
    	<div class="container">
        	<div id="content" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">          
                <div class="buddypress_content">
                		
                <div class="clearfix"></div>
                
                <div class="general_row">
                    <div id="buddypress_features" class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-home"></i> मुखिया</a></li>
                            <li><a href="#tab2" data-toggle="tab"><i class="fa fa-users"></i> सदस्य</a></li>
                            <li><a href="#tab3" data-toggle="tab"><i class="fa fa-smile-o"></i> बच्चे</a></li>
                            <li><a href="#tab4" data-toggle="tab"><i class="fa fa-comments-o"></i> महिलाए</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                               <div class="buddypress_content  padding-top">
                                	<div class="buddy_image col-md-2 pull-left">
									<?php 
                                        if($MainPersion->Mukhiya_Pic =='')
                                    {
                                    ?><a href="#"  class="img-thumbnail">
                                        <img width="84" height="84"  src="<?=base_url('uploads/no-image.jpg')?>" ></a>
                                    <?php }else{ ?>
                                    <a href="#"  class="img-thumbnail">
<img  width="84" height="84"  src="<?php echo base_url('Parivar/Mukhiya/Thumb_Img/'.$MainPersion->Mukhiya_Pic)?>" style=""/></a>
                                    <? }?>
								</div>
                                  <div class="buddy_desc col-md-10">
                                        <strong><? echo $MainPersion->Main_Person ; ?></strong>
                                        <small></small>
                                        <p>
                                        पिता / पति का नाम :&nbsp;<? echo $MainPersion->Father_Hubby ; ?>
                                        	&nbsp;||&nbsp;
                                            
										माता का नाम :&nbsp;<? echo $MainPersion->Mother_Name ; ?>
                                        	&nbsp;||&nbsp;
                                            
                                        गोत्र :&nbsp;<? echo $MainPersion->Gotra ; ?>
                                       		&nbsp;&nbsp;&nbsp;
                                             <br /><br />
                                        
                                        कुल देवी व स्थल : <? echo $MainPersion->Kuldevi_Place ; ?>
                                        	&nbsp;||&nbsp;
                                        कुल भैरू व स्थल : <? echo $MainPersion->Kul_Bhairav ; ?>
                                        	&nbsp;||&nbsp;
                                        जडोलिया स्थल : <? echo $MainPersion->Jadoliya_Place; ?>
                                       		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <br /><br />
                                        
                                        ई मेल :&nbsp;<? echo $MainPersion->Mukhiya_Email ; ?>
                                       		&nbsp;||&nbsp;
                                        स्थाई पता:&nbsp;<? echo $MainPersion->Address ; ?>
                                       		&nbsp;||&nbsp;
                                        अन्य विवरण :&nbsp;&nbsp;<? echo $MainPersion->Other_Dtl ; ?>
                                        	&nbsp;&nbsp;&nbsp;
                                       </p>
                                       		<div class="arrow-left"></div>
                                    </div>  
                                </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                            	<div class="buddypress_content  padding-top">
                                    <?php 
										if(is_array($Mem_Data) && count($Mem_Data) > 0) 
										{
											foreach($Mem_Data as $MemDt) { 
									?>
                                    <div class="buddy_image col-md-2 pull-left">
                                        
										<?php 
                                            if($MemDt->Meb_Pic =='')
                                        {
                                        ?><a href="#"  class="img-thumbnail">
                                            <img width="84" height="84"  src="<?php echo base_url('uploads/no-image.jpg')?>" ></a>
                                        <?php }else{ ?>
                                        <a href="#"  class="img-thumbnail">
                                            <img  width="84" height="84"  src="<?php echo base_url('Parivar/Meb_Pic/'.$MemDt->Meb_Pic)?>" style=""/></a>
                                        <? }?>   
                                    </div>
                                    
                                    <div class="buddy_desc col-md-10">
                                        <strong><?php echo $MemDt->Meb_Name;?></strong>
                                        	<small></small>
                                        <p>
                                        		
										सम्बंध : <?php echo $MemDt->Relation_Type;?>
                                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;
                                        जन्म तिथि : <?php echo $MemDt->Birth_Date;?>
                                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;
										विवाहित :&nbsp;&nbsp;<?php echo $MemDt->Married;?>
                                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <br /><br />
                                            
                                        व्यवसाय :&nbsp;&nbsp;<?php echo $MemDt->Job_Type;?>
                                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;
                                        बच्चो की संख्या :&nbsp;&nbsp;<?php echo $MemDt->No_Of_Child;?>
                                          	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;
                                        कार्य स्थल :&nbsp;&nbsp;<?php echo $MemDt->Work_Place;?>
                                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        	<br /><br />
                                        ससुराल स्थल :&nbsp;&nbsp;<?php echo $MemDt->Sasural_Place;?>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;                                        
                                        शै योगीयता :&nbsp;&nbsp;<?php echo $MemDt->Education;?>
                                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;
                                        फ़ोन नंबर :&nbsp;&nbsp;<?php echo $MemDt->Phone_No;?>
                                        </p>
                                        
                                        <div class="arrow-left"></div>
                                    </div>
                            		<?php } } else{ ?>
                                     <div class=" col-md-10">
                                    	<img src="<?php echo base_url('uploads/DataNotFound.jpg')?>" >
                                    </div>
									<?php  } ?>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab3">
                               <div class="buddypress_content  padding-top">
								   <?php 
                                  		if(is_array($Mem_Data) && count($Mem_Data) > 0) 
										{
                                    		foreach($Child_Data as $Ch_Dt) { 
                                    ?>
                                    <div class="buddy_image col-md-2 pull-left">
							   <?php 
                                    if($Ch_Dt->Ch_Pic =='')
                                	{
                                ?><a href="#"  class="img-thumbnail">
                                    <img width="84" height="84"  src="<?php echo base_url('uploads/no-image.jpg')?>" ></a>
                                <?php }else{ ?>
                                <a href="#"  class="img-thumbnail">
                                    <img  width="84" height="84"  src="<?php echo base_url('Parivar/Child_Pic/'.$Ch_Dt->Ch_Pic)?>" ></a>
                                <? }?>
                                    </div>
                                    
                                    <div class="buddy_desc col-md-10" style="">&nbsp;
                                        <strong><?php echo $Ch_Dt->Ch_Name ?></strong>
                                      	<small></small>
                                        <p>
                                        		
                                        पिता का नाम :&nbsp;<?php echo $Ch_Dt->Ch_Father ?>
                                        	&nbsp;||&nbsp;
                                        माता का नाम :&nbsp;<?php echo $Ch_Dt->Ch_Mother ?>
                                        	&nbsp;||&nbsp;
                                        फोन न. :&nbsp; <?php echo $Ch_Dt->Ch_Phone ?>
                                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<br /><br />
                                        
                                        उम्र:&nbsp;<?php echo $Ch_Dt->Ch_Dob ?>
                                          	&nbsp;||&nbsp;
                                        Eduction:&nbsp;<?php echo $Ch_Dt->Ch_Eduction ?>
	                                        &nbsp;||&nbsp;
                                        अन्य विवरण:&nbsp;&nbsp;<?php echo $Ch_Dt->Ch_OtherDtl ?>
                                        </p>
                                        	<div class="arrow-left"></div>
                                    </div>
                                    <?php } } else{ ?>
                                     <div class="col-md-10">
                                    	<img src="<?php echo base_url('uploads/DataNotFound.jpg')?>" >
                                    </div>
									<?php  } ?>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab4">
                               <div class="buddypress_content  padding-top">
                                    <?php 
										if(is_array($Mem_Data) && count($Mem_Data) > 0) 
										{
										foreach($FM_Data as $FM_Dt) { 
									?>
                                    <div class="buddy_image col-md-2 pull-left">
							   <?php 
                                    if($FM_Dt->FM_Pic =='')
                                	{
                                ?><a href="#"  class="img-thumbnail">
                                    <img width="84" height="84"  src="<?php echo base_url('uploads/no-image.jpg')?>" ></a>
                                <?php }else{ ?>
                                <a href="#"  class="img-thumbnail">
                                    <img  width="84" height="84"  src="<?php echo base_url('Parivar/Woman_Pic/'.$FM_Dt->FM_Pic )?>" style=""/></a>
                                <? }?>
                                    </div>
                                    <div class="buddy_desc col-md-10" style="">&nbsp;
                                        <strong><?php echo $FM_Dt->FM_Name ?></strong>
                                      		<small></small>
                                        <p>
                                        	उम्र:&nbsp;<?php echo $FM_Dt->FM_Dob ?>
                                            	&nbsp;||&nbsp;
                                            संबंद:&nbsp;&nbsp;<?php echo $FM_Dt->Relation_Type ?>
                                            	&nbsp;||&nbsp;
                                            पति का नाम :&nbsp;<?php echo $FM_Dt->FM_Hubby ?>
                                                
                                            <br /><br />
                                            पिता का नाम :&nbsp;<?php echo $FM_Dt->FM_Fathere ?>
                                               &nbsp;||&nbsp;
                                            पिहर स्थल: &nbsp;<?php echo $FM_Dt->FM_PiharPlace ?>
                                                &nbsp;||&nbsp;
                                            Eduction:&nbsp;<?php echo $FM_Dt->FM_Education ?>
                                                &nbsp;||&nbsp;
                                            अन्य विवरण:&nbsp;<?php echo $FM_Dt->FM_OtherDtl ?>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </p>
                                        <div class="arrow-left"></div>
                                    </div>
                                    <?php } } else{ ?>
                                     <div class="col-md-10">
                                    	<img src="<?php echo base_url('uploads/DataNotFound.jpg')?>" >
                                    </div>
									<?php  } ?>
                                </div>
                            </div>
                       </div><!-- end tab-content -->
                    </div><!-- end tabbable -->
                </div><!-- end general_row -->
                
                </div><!-- buddypress_content -->

                     
            </div><!-- end content -->
            
           <div id="sidebar" class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
            
            <div class="shop-banner">
            	<div class="widget entry">
                    	<div class="title"><mark><h1>ADVERTISE<br>
							YOUR BRANDS</h1></mark></div>
                    	<img class="img-responsive" alt="" src="<?php echo base_url('demos/banner_shop_01.jpg')?>">
                        <div class="banner-hover big"></div>
                    </div>
			</div>
            
            </div>
            
    	</div><!-- end container -->
    </section><!--end white-wrapper -->
<?php 
include_once ("footer.php");
?>