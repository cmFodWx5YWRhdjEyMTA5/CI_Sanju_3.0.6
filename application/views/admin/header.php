<!DOCTYPE html>
<html lang="en">

   	<head>        
        <!-- META SECTION -->
        <title>
		<?php echo (isset($pagetitle)) ? $pagetitle : 'क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel'; 
			//if(isset($pagetitle) ) echo $pagetitle;
		?>
        </title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        
        
        <script src="<?=base_url('assets/js/plugins/jquery/jquery.min.js')?>"></script>
        <?= link_tag('assets/css/theme-default.css');?>
        <?= link_tag('assets/extra.css');?>
        <!-- EOF CSS INCLUDE -->                                    
    </head>

 <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="<?php echo base_url('admin/admin/dashboard')?>">H! Admin</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
							<img src='<?php echo base_url('uploads/user6.jpg') ?>' alt="Aakash Nair"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
    							<img src="<?php echo base_url('uploads/user6.jpg') ?>" alt="Aakash Nair"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">Aakash Nair</div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div>
                            <div class="profile-controls">
                                <a href="<?php echo base_url()?>" target="_blank" class="profile-control-left"><span class="glyphicon glyphicon-globe"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="glyphicon glyphicon-cog"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    
                    
                    <li id="dashboard">
                        <a href="<?php echo base_url('admin/admin/dashboard')?>"><span class="fa fa-desktop"></span> 
                        <span class="xn-text">Dashboard</span></a>                        
                    </li>                    
                    <li class="xn-openable " id="Parivar">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">परिवार के मुखिया </span></a>
                        <ul>
                            <li id="Parivar_List"><a href="<?php echo base_url('admin/parivar/index')?>">
                            <span class="fa fa-users"></span> मुखिया की लिस्ट</a>
                            </li>
                            
                            <li id="mukhiyAdd"><a href="<?php echo base_url('admin/parivar/add_mukhiya')?>">
                            <span class="fa fa-user"></span> नया मुखिया जोड़े</a>
                            </li>
                        </ul>
                    </li>
                    <li class="xn-openable" id="temple">
                        <a href="#"><span class="fa fa-home"></span> <span class="xn-text">मंदिर </span></a>
                        <ul>
                            <li id="templeList">
                            	<a href="<?php echo base_url('admin/temple/index')?>"><span class="fa fa-home"></span> मंदिरों की लिस्ट</a>
                            </li>
                            <li id="templeAdd">
                            	<a href="<?php echo base_url('admin/temple/add')?>"><span class="fa fa-home"></span> नया मंदिर जोड़े</a>
                            </li>
                        </ul>
                    </li>
                    <li class="xn-openable" id="artical">
                        <a href="#"><span class="fa fa-pencil-square-o"></span> <span class="xn-text">आर्टिकल </span></a>
                        <ul>
                            <li id="articalList">
                            <a href="<?php echo base_url('admin/artical/index')?>"><span class="fa fa-pencil-square-o"></span>आर्टिकल की लिस्ट</a>
                            </li>
                            <li id="articalEdit">
                            <a href="<?php echo base_url('admin/artical/add_artical')?>"><span class="fa fa-pencil-square-o"></span> नया आर्टिकल जोड़े</a>
                            </li>
                        </ul>
                    </li>
                                        
                    <li class="xn-openable" id="aarati">
                        <a href="#"><span class="fa fa-bell"></span> <span class="xn-text">आरतीया </span></a>
                        <ul>
                            <li id="aaratiList"><a href="<?php echo base_url('admin/aarati/index')?>"><span class="fa fa-bell"></span>आरतीयों की लिस्ट</a></li>
                            <li id="aaratiAdd"><a href="<?php echo base_url('admin/aarati/add_aarati')?>"><span class="fa fa-bell"></span> नयी आरती जोड़े</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable" id="news">
                        <a href="#"><span class="fa fa-pencil-square-o"></span> <span class="xn-text">न्यूज़</span></a>
                        <ul>
                            <li id="newsList"><a href="<?php echo base_url('admin/news/index')?>"><span class="fa fa-pencil-square-o"></span>न्यूज़ की लिस्ट</a></li>
                            <li id="addNews"><a href="<?php echo base_url('admin/news/addNews')?>"><span class="fa fa-pencil-square-o"></span>नयी न्यूज़ जोड़े</a></li>
                        </ul>
                    </li>
                    
                    <li class="xn-openable" id="slider">
                        <a href="#"><span class="glyphicon glyphicon-film"></span> <span class="xn-text">स्लाइडर</span></a>
                        <ul>
                            <li id="sliderList">
                            <a href="<?php echo base_url('admin/websys/slider')?>"><span class="fa fa-pencil-square-o"></span>स्लाइडर की लिस्ट</a>
                            </li>
                            <li id="sliderAdd">
                            <a href="<?php echo base_url('admin/websys/addSlider')?>"><span class="fa fa-pencil-square-o"></span> स्लाइडर जोड़े</a>
                            </li>
                        </ul>
                    </li>
                   
                   <li class="xn-openable" id="ortknw">
                        <a href="#"><span class="fa fa-pencil-square-o"></span> <span class="xn-text">अन्य जानकारी</span></a>
                        <ul>
                             
                			 <li id="panchang">
                             	<a href="<?php echo base_url('admin/panchang/index')?>">
                                <span class="fa fa-pencil-square-o"></span>पंचांग</a>
                            </li>       
                 			<li id="comments">
                            	<a href="<?php echo base_url('admin/comment/index')?>">
                                <span class="fa fa-comments"></span> <span class="xn-text">कमेंट्स</span></a>
                           </li>   
                        </ul>
                   </li>
                   <li class="xn-openable" id="video">
                        <a href="#"><span class="fa fa-pencil-square-o"></span> <span class="xn-text">वीडियो</span></a>
                        <ul>
                            <li id="vdiadd"><a href="<?php echo base_url('admin/video/index')?>"><span class="fa fa-pencil-square-o"></span>वीडियो की लिस्ट</a></li>
                            <li id="vdiedit"><a href="<?php echo base_url('admin/video/addVideo')?>"><span class="fa fa-pencil-square-o"></span> वीडियो जोड़े</a></li>
                        </ul>
                    </li> 
                   <li class="xn-openable" id="userdata">
                        <a href="#"><span class="fa fa-pencil-square-o"></span> <span class="xn-text">यूजर</span></a>
                        <ul>
                            <li id="userlist"><a href="<?php echo base_url('admin/websys/user_list')?>"><span class="fa fa-pencil-square-o"></span>यूजर की लिस्ट</a></li>
                            <li id="newuser"><a href="<?php echo base_url('admin/websys/newUser')?>"><span class="fa fa-pencil-square-o"></span>नया यूजर जोड़े</a></li>
                        </ul>
                    </li>
                   <li class="xn-openable" id="cityname">
                        <a href="#"><span class="fa fa-pencil-square-o"></span> <span class="xn-text">शहर के नाम</span></a>
                        <ul>
                            <li id="citylist">
                            <a href="<?php echo base_url('admin/websys/citylist')?>"><span class="fa fa-pencil-square-o"></span>शहर की लिस्ट</a>
                            </li>
                            <li id="add_city">
                            <a href="<?php echo base_url('admin/websys/adCity')?>"><span class="fa fa-pencil-square-o"></span> शहर जोड़े</a>
                            </li>
                        </ul>
                    </li>
                                 
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-envelope"></span> <span class="xn-text">Mailbox</span></a>
                        <ul>
                            <li><a href="pages-mailbox-inbox.html"><span class="fa fa-inbox"></span> Inbox</a></li>
                            <li><a href="pages-mailbox-message.html"><span class="fa fa-file-text"></span> Message</a></li>
                            <li><a href="pages-mailbox-compose.html"><span class="fa fa-pencil"></span> Compose</a></li>
                        </ul>
                    </li>                    
                    
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                   
                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->  
<!-- ================== Error Msg ================== -->

<?php 
$this->load->library('session');
if($error = $this->session->flashdata('error_msg')) {?> 
<div class="page-title">
     <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <strong><?php echo $error ?></strong> 
</div> 
</div>
<?php } ?>
<!-- ================== Error Msg ================== -->