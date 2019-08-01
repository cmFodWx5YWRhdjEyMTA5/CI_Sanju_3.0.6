<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
  <title>
		<?php echo (isset($pagetitle)) ? $pagetitle : 'क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel'; 
			//if(isset($pagetitle) ) echo $pagetitle;
		?>
        </title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php if(isset($pagetitle) ) echo $pagetitle ?>">
  <meta name="keywords" content="<?php if(isset($pagetitle) ) echo $pagetitle ?>">
  <meta name="author" content="">

  <!-- Bootstrap Styles -->

  <?= link_tag('css/bootstrap.css');?>
  <?= link_tag('style.css');?>

  <?= link_tag('css/extra.css');?>
  <!-- Styles -->
  <?= link_tag('switcher/css/orange.css');?>
  
  <!-- Carousel Slider -->
  <?= link_tag('css/owl-carousel.css');?>
  <!-- CSS Animations -->
  <?= link_tag('css/animate.min.css');?>
  
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,300italic,700,700italic,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Exo:400,300,600,500,400italic,700italic,800,900' rel='stylesheet' type='text/css'>
  
  <!-- SLIDER ROYAL CSS SETTINGS -->
  <?= link_tag('royalslider/royalslider.css');?>
  <?= link_tag('royalslider/skins/default-inverted/rs-default-inverted.css');?>
  
  <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
  <?= link_tag('rs-plugin/css/settings.css');?>
  <?= link_tag('switcher/css/switcher.css');?>
  
  <!-- END Switcher Styles -->
  <script src="<?=base_url('js/jquery.js')?>"></script>
  <script src="<?=base_url('js/js_validation.js')?>"></script>
  
<script>
	   //getajax('url','','pro_edit');
function getajax(urlval,elm_id)
{	
	//params = param.replace("?","");
	document.getElementById(elm_id).innerHTML="<img src='<?=base_url('load.gif')?>' border='0'>";
		$.ajax({ url: urlval,
		type: "POST",
		data: urlval,
		success: function(data){			
			$("#"+elm_id).html(data);			
			}
		});	
}
</script>
<!--===================================== WhatApp Share ============================-->
	<style>

.mct_whatsapp_btn {
    background: #11A518;
    color: #ffffff;
    font-size: 16px;
    padding: 6px 9px 6px 28px;
    border-radius: 2px;
    position: relative;
    transition: ease-in all 0.3s;
    moz-transition: ease-in all 0.3s;
    -o-transition:ease-in all 0.3s;
    -webkit-transition: ease-in all 0.3s;
    text-decoration: none;
    box-shadow: inset 3px 1px 1px rgba(17, 165, 24, 0.25);
    border: 1px solid #028408;
}

.mct_whatsapp_btn:before {
    content: '';
	background:url(../../img/whatsapp.png);
	position:absolute;
    top: 9px;
    left: 7px;
    width:16px;
    transition: ease-in all 0.3s;
    moz-transition: ease-in all 0.3s;
    -o-transition:ease-in all 0.3s;
    -webkit-transition: ease-in all 0.3s;
    height:16px;
	
}

.mct_whatsapp_btn:hover {
    background: #028408;
    color:white;
    border: 1px solid #11A518;
    box-shadow: inset 3px 1px 1px rgba(2, 132, 8, 0.25);
}

.mct_whatsapp_btn:hover:before {
    transform: rotate(360deg);
	
}
</style>
	<script>
$(document).ready(function() {
    $(document).on("click", '.mct_whatsapp_btn', function() {
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            
			var mytext = $(this).attr("data-text");

			mytext = mytext.replace(/<br>|<\/br\/>|<p>|<\/p>|<h4>|<\/h4>|<strong>|<\/strong>|<div>|<\/div>|<br\/>/g," ");
			
			//mytext = mytext.replace(/&lt;br&gt;|<p>|<\/p>|<strong>|<\/strong>/g," ");
			//\r\n
			var url = $(this).attr("data-link");
			
			//var myimg =$(this).attr("data-src")
			
			 //myimg.append("<img src="myimg" />")
			
			var message = encodeURIComponent(mytext) + " - " + encodeURIComponent(url);
            var whatsapp_url = "whatsapp://send?text=" + message;
            window.location.href = whatsapp_url;
        } else {
            alert("यह फंक्शन मोबाइल में ही काम करेगा.");
        }
    });
});
</script> 
<!--===================================== WhatApp Share ============================-->
</head>
<body> 
<?php
$getCity = $this->Nair->_getCity();
$getDist = $this->Nair->_getDist();
		
$NewMklist = $this->Nair->_tblmt('tbl_mukhiya','Yes','Main_Id','4' );
$MklistMix = $this->Nair->_tblmt('tbl_mukhiya','Yes','rand()','4' );

$TempDesc = $this->Nair->getTempDesc();
$TempAsc = $this->Nair->getTempAsc();

$ArtDesc = $this->Nair->getArtDesc();
$ArtAsc = $this->Nair->getArtAsc();

$AartiDesc = $this->Nair->getAartiDesc();
//$this->prd($AartiDesc);
$AartiAsc = $this->Nair->getAartiAsc();	

$RashiAsc = $this->Nair->_getRashiAsc();
$RashiDesc = $this->Nair->_getRashiDesc();

$VidioMarwadi = $this->Nair->VidioMarwadi();	
$VidioHindi = $this->Nair->VidioHindi();	
$VidioLocal = $this->Nair->VidioLocal();
?>  
<div id="topbar" class="clearfix">
    	<div class="container">
            <form name="searchfrm" id="searchfrm" onSubmit="return verifyAlls(this);" action="<? echo base_url('index/search')?>" method="post" >
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="social-icons">
                        
                        <div class="pull-left" style="padding-left:0px;">
<select class="custom-select form-control required" title="जिला सेलेक्ट करे" style="width:140px;" id="District_Name" name="District_Name">
                                <option value="">जिला सेलेक्ट करे</option>
                                <?php 
                                   
                                    //prd($Nationality_Data);
                                    foreach($getDist as $Dist)
                                    {	
                                ?>
                                <option value="<?php echo $Dist->dname ?>" ><?php echo $Dist->dname ?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="pull-left "> 
<select class="custom-select form-control required" title="सीटी सलेक्ट करे" style="width:140px;" id="CityName" name="CityName">
                                <option value="">सीटी सलेक्ट करे</option>
                                <?php 
                                    
                                    foreach($getCity as $Citdt)
                                    {	
                                ?>
                                <option value="<?php echo $Citdt->EngName ?>" ><?php echo $Citdt->CityName ?></option>
                                <?php }?>
                            </select>
                        </div>
                        
                        	<span>
                            	<div class="pull-left" style="padding-left:5px; margin-top:4px;">
                            <!--<button class="btn btn-success" type="button">Success</button>
                            <button class="btn btn-primary" type="button">Primary</button>-->
                            <input type="submit" id="btnSubmit" class="btn btn-success" value="Search">
                        </div>
                            </span>
                    </div>
                    <!-- end social icons -->
                </div>
            </form><!-- end columns -->
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
              
                <?php if(! $this->session->userdata('user_id')) {  ?>
                <div class="topmenu">
                	<span class="topbar-login"><i class="fa fa-user"></i> <a href="<?php echo base_url('index/login')?>">login</a></span>
                    <span class="topbar-login"><i class="fa fa-user"></i> <a href="<?php echo base_url('index/register')?>">Register</a></span>
                </div>
                <?php }else{ ?>
                <div class="topmenu">
                	<span class="topbar-login"><i class="fa fa-home"></i> 
                    	<a href="<?php echo base_url('user/dashboard')?>"><?='H! '.$this->session->userdata('UserName')?></a>
                    </span>
                    <span class="topbar-login"><i class="fa fa-user"></i>
	                    <?php echo anchor('index/logout','Logout',['class'=>''])?>
                    </span>
                </div>
                <?php } ?>
                
                
                
            	<div class="callus">
                	<span class="topbar-email"><i class="fa fa-envelope"></i> <a href="mailto:name@yoursite.com">sskgss2016@gmail.com</a></span>
                    <span class="topbar-phone"><i class="fa fa-phone"></i> +91 9462771152</span>
                </div><!-- end callus -->
            </div><!-- end columns -->
        </div><!-- end container -->
    </div>
<!-- end topbar -->
    

<header id="header-style-1">
		<div class="container">
			<nav class="navbar yamm navbar-default">
				<div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo base_url('index/index')?>" class="navbar-brand">Jollyany</a>
        		</div><!-- end navbar-header -->
                
				<div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
						<li class="dropdown yamm-fw active" id="homepage">
                        	<a href="<? echo base_url('index/index')?>">Home <div class="arrow-up"></div></a>
						</li>
                        <li class="dropdown yamm-fw" id="parivar"><a href="#" data-toggle="dropdown" class="dropdown-toggle">समाज के परिवार<div class="arrow-up"></div></a>
	
    <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                    <ul class="col-sm-4">
                        <li><h3><i class="fa fa-home"></i> New</h3></li>
                    <?php
            
            	    if(is_array($NewMklist) && count($NewMklist) > 0) 
                    {
                    foreach($NewMklist as $res)
                            {
                    ?>
<li>

<?= anchor("index/viewmeb/{$res->Main_Id}", $res->Main_Person ,['class'=>'']);?>
</li>

                    <?php } } ?> 
                       
                    </ul>
					<ul class="col-sm-4">
                        <li><h3><i class="fa fa-home"></i> Update</h3></li>
                    <?php
            
            	    if(is_array($MklistMix) && count($MklistMix) > 0) 
                    {
                    foreach($MklistMix as $res)
                            {
                    ?>
<li>

<?= anchor("index/viewmeb/{$res->Main_Id}", $res->Main_Person ,['class'=>'']);?>
</li>

                    <?php } } ?> 
                       
                    </ul>             
                                            <div class="col-sm-4">
                                        <div class="widget">
             <img style="border-radius:8px;"  width="300" height="200" class="img-thumbnail" src='<?php echo base_url('uploads/samajPic.jpg') ?>' />
			                            </div>
                                    </div>
                                        </div><!-- end row -->
                                    </div><!-- end yamm-content -->
                                </li>
                            </ul>
</li>
     					<li id="myNews"><a href="#">न्यूज़ / जानकारी</a></li> 
                        
                        <li class="dropdown yamm-fw" id="temple"><a href="#" data-toggle="dropdown" class="dropdown-toggle">मंदिर <div class="arrow-up"></div></a>
	
    <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                    <ul class="col-sm-4">
                        <li><h3><i class="fa fa-home"></i> New</h3></li>
                    <?php
            
            	    if(is_array($TempDesc) && count($TempDesc) > 0) 
                    {
                    foreach($TempDesc as $TempName)
                            {
                    ?>
<li>

<?= anchor("index/temple/{$TempName->Temp_Id}", $TempName->Temp_Name ,['class'=>'','title'=>$TempName->Temp_Name]);?>
</li>

                    <?php } } ?> 
                       
                    </ul>
					<ul class="col-sm-4">
                        <li><h3><i class="fa fa-home"></i> New</h3></li>
                    <?php
						 if(is_array($TempAsc) && count($TempAsc) > 0) 
							{
							foreach($TempAsc as $TempName)
									{
                    ?>
<li>
<?= anchor("index/temple/{$TempName->Temp_Id}", $TempName->Temp_Name ,['class'=>'','title'=>$TempName->Temp_Name]);?>
</li>

                    <?php }//else
                     }?>   
                    </ul>             
                                            <div class="col-sm-4">
                                        <div class="widget">
             <?php 
			 	
            	if($TempDesc[0]->Temp_Thumb =='')
            	{ //$res['NewsTitle']
            ?>
<img style="border-radius:8px;"  width="300" height="200" class="img-thumbnail" src='<?php echo base_url('uploads/noTemp.jpg') ?>' alt="No Image"/>
            <?php }else{ ?>

<img style="border-radius:8px;" width="300" height="200" class="img-thumbnail" src="<?php echo base_url('uploads/Temple_Pic/Temp_Thumb/'.$TempDesc[0]->Temp_Thumb) ?>">
            <? }?>
            
            
            
                                        
                                        </div>
                                    </div>
                                        </div><!-- end row -->
                                    </div><!-- end yamm-content -->
                                </li>
                            </ul>
</li>
                        <li class="dropdown yamm-fw" id="artical"><a href="#" data-toggle="dropdown" class="dropdown-toggle">आर्टिकल<div class="arrow-up"></div></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <ul class="col-sm-4">
                                        
                                    <?php
									if(is_array($ArtDesc) && count($ArtDesc) > 0) 
                                    {
                                    foreach($ArtDesc as $ArtVal)
                                            {
                                    ?>
<li>
<?= anchor("index/artical/{$ArtVal->Art_Id}", $ArtVal->Artical_Title ,['class'=>'']);?>

</li>
            
                                    <?php } }?>   
                                    </ul>
                                    
                                    <ul class="col-sm-4">
                                        
                                    <?php
                            		if(is_array($ArtAsc) && count($ArtAsc) > 0) 
                                    {
                                    foreach($ArtAsc as $ArtVal)
                                            {
                                    ?>
<li>
<?= anchor("index/artical/{$ArtVal->Art_Id}", $ArtVal->Artical_Title ,['class'=>'']);?>
</li>
            
                                    <?php } }?>   
                                    </ul>
                                    <div class="col-sm-4">
                                        <div class="widget">
			<?php 
			 	
            	if($ArtDesc[0]->Artical_Thumb =='')
            	{ //$res['NewsTitle']
            ?>
			<img  style="border-radius:8px;"  width="300" height="200" class="img-thumbnail" src='<?php echo base_url('uploads/noArticles.jpg') ?>' alt="No Image"/>
            <?php }else{ ?>

<img style="border-radius:8px;"  width="300" height="200" class="img-thumbnail" src="<?php echo base_url('uploads/Artical_Pic/Artical_Thumb/'.$ArtDesc[0]->Artical_Thumb) ?>">
            <? }?>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end yamm-content -->
                        </li>
                    </ul>
                </li>
                		<li class="dropdown yamm-fw" id="aarti"><a href="#" data-toggle="dropdown" class="dropdown-toggle">आरती<div class="arrow-up"></div></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <ul class="col-sm-4">
                                        
                                    <?php
									if(is_array($AartiDesc) && count($AartiDesc) > 0) 
                                    {
                                    foreach($AartiDesc as $AartiVal)
                                            {
                                    ?>
<li>
<?= anchor("index/aarti/{$AartiVal->Aarti_Id}", $AartiVal->Aarti_Title ,['class'=>'']);?>
</li>
            
                                    <?php } }?>   
                                    </ul>
                                    
                                    <ul class="col-sm-4">
                                        
                                    <?php
                            		if(is_array($AartiAsc) && count($AartiAsc) > 0) 
                                    {
                                    foreach($AartiAsc as $AartiVal)
                                            {
                                    ?>
<li>
<?= anchor("index/aarti/{$AartiVal->Aarti_Id}", $AartiVal->Aarti_Title ,['class'=>'']);?>
</li>
            
                                    <?php } }?>   
                                    </ul>
                                    <div class="col-sm-4">
                                        <div class="widget">
			<?php 
			 	
            	if($AartiAsc[0]->Aarti_Thumb =='')
            	{ //$res['NewsTitle']
            ?>
			<img style="border-radius:8px;"  width="300" height="200" class="img-thumbnail" src='<?php echo base_url('uploads/noAarti.jpg') ?>' alt="No Image"/>
            <?php }else{ ?>

<img style="border-radius:8px;"  width="300" height="200" class="img-thumbnail" class="img-thumbnail" src="<?php echo base_url('uploads/Aarti_Data/Aarti_Pic/Aarti_Thumb/'.$AartiAsc[0]->Aarti_Thumb) ?>">
            <? }?>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end yamm-content -->
                        </li>
                    </ul>
                </li>
                        <li class="dropdown yamm-fw" id="rashifal"><a href="#" data-toggle="dropdown" class="dropdown-toggle">राशिफल<div class="arrow-up"></div></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <ul class="col-sm-4">
                                        
                                    <?php
									if(is_array($RashiAsc) && count($RashiAsc) > 0) 
                                    {
                                    foreach($RashiAsc as $rashi)
                                            {
                                    ?>
<li>
<?= anchor("index/rashifal/{$rashi->Rashi_id}", $rashi->Rashi_Name ,['class'=>'']);?>
</li>
            
                                    <?php }//else
                                     }?>   
                                    </ul>
                                    
                                    <ul class="col-sm-4">
                                        
                                    <?php
                            		if(is_array($RashiDesc) && count($RashiDesc) > 0) 
                                    {
                                    foreach($RashiDesc as $rashi)
                                            {
                                    ?>
<li>
<?= anchor("index/rashifal/{$rashi->Rashi_id}", $rashi->Rashi_Name ,['class'=>'']);?>
</li>
            
                                    <?php }//else
                                     }?>   
                                    </ul>
                                    <div class="col-sm-4">
                                        <div class="widget">
					<img style="border-radius:8px;"  width="300" height="200" class="img-thumbnail" src="<?php echo base_url('uploads/rashifal.jpg') ?>">
                    
                    <?php 
					$DailyPan = $this->Nair->_getSingleData('tbl_panchang',['Active'=>'yes'] ); 
					//$this->prd($Panchange);
						
					?>
                    <p>
                    	<?php  echo $DailyPan->panchang_dtl ?>
                    </p>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end yamm-content -->
                        </li>
                    </ul>
                </li>

                        <li class="dropdown yamm-fw" id="vidio"><a href="#" data-toggle="dropdown" class="dropdown-toggle">वीडियो<div class="arrow-up"></div></a>
	
    	<ul class="dropdown-menu">
        	<li>
            	<div class="yamm-content">
              		<div class="row">
        				<ul class="col-sm-4">
                        <li><h3><i class="fa fa-book"></i> मारवाड़ी विडियो</h3></li>
                     <?php
            			if(is_array($VidioMarwadi) && count($VidioMarwadi) > 0) 
						{
						foreach($VidioMarwadi as $Marwadi)
								{
                    ?>
						<li>
                        <?= anchor("index/video/{$Marwadi->Video_Id}", $Marwadi->Video_Name ,['class'=>'']);?>
                        </li>
                    <?php } }?>   
                </ul>
						<ul class="col-sm-4">
                        <li><h3><i class="fa fa-book"></i> हिंदी विडियो</h3></li>
                     <?php
						if(is_array($VidioHindi) && count($VidioHindi) > 0) 
						{
						foreach($VidioHindi as $Hindi)
								{
                    ?>
						<li>
                        	<?= anchor("index/video/{$Hindi->Video_Id}", $Hindi->Video_Name ,['class'=>'']);?>
                        </li>
                    <?php } }?>   
                </ul>             
                		<ul class="col-sm-4">
                        <li><h3><i class="fa fa-book"></i> लोकल विडियो</h3></li>
                     <?php
            		  	if(is_array($VidioLocal) && count($VidioLocal) > 0) 
						{
						foreach($VidioLocal as $Local)
								{
                    ?>
						<li>
                        	<?= anchor("index/video/{$Hindi->Video_Id}", $Local->Video_Name ,['class'=>'']);?>
                        </li>
                    <?php } }?>   
                </ul>	
                	</div>
             	</div>
                                </li>
                            </ul>
</li>

                        <li id="about"><a href="<?php echo base_url('index/about')?>">About</a></li>
                        <li id="contact"><a href="<?php echo base_url('index/contact')?>">Contact</a></li>
					</ul><!-- end navbar-nav -->
				</div><!-- #navbar-collapse-1 -->			</nav><!-- end navbar yamm navbar-default -->
		</div><!-- end container -->
	</header>
	
<?php 
$this->load->library('session');
if($error = $this->session->flashdata('error_msg')) {?>     
<div class="container" >
	<div class="">
<div class="page-title col-lg-12">
     <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <strong><?php echo $error ?></strong> 
	 </div> 
</div>
    </div>
</div>
<?php } ?>
    
   
	
    
	