<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php echo (isset($pagetitle)) ? $pagetitle : 'Akhil Bhartiya Ghacha Samaj | Admin'; ?></title>

    
    <!-- CSS INCLUDE -->        
    
    <?= link_tag('admin_assets/css/theme-default.css');?>
    
    
    <!-- EOF CSS INCLUDE -->

</head>

<body>
	<div class="page-container">
		<div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="<?php echo base_url('admin/admin'); ?>">H! Admin</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
        <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="<?php echo base_url('admin_assets/assets/images/users/user6.jpg'); ?>" alt="Aakash Nair"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url('admin_assets/assets/images/users/user6.jpg'); ?>" alt="Aakash Nair"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">Aakash Nair</div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
            <li class="xn-title">Navigation</li>
            
            <li class="active" id="dash">
                <a href="<?php echo base_url('admin/admin/dashboard')?>"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
            </li>
<!--============================== परिवार ================================================-->    
            <li class="xn-openable" id="parivar">
                <a href="#"><span class="fa fa-users"></span> <span class="xn-text">परिवार के मुखिया </span></a>
            <ul>
                <li id="parivar_list"><a href="<?php echo base_url('admin/parivar/index')?>"><span class="fa fa-tasks"></span> मुखिया की लिस्ट</a></li>
                <li><a href="<?php echo base_url('admin/parivar/add_mukhiya')?>"><span class="fa fa-user"></span> Add परिवार </a></li>
            </ul>
        </li>
<!--============================= मंदिर =================================================--> 
        <li class="xn-openable">
            <a href="#"><span class="fa fa-home"></span> <span class="xn-text">मंदिर</span></a>
            <ul>
                <li id="parivar_list"><a href="<?php echo base_url('admin/temple/index')?>"><span class="fa fa-tasks"></span> मंदिरों की लिस्ट</a></li>
                <li><a href="<?php echo base_url('admin/temple/add')?>"><span class="fa fa-user"></span> Add मंदिर </a></li>
                
            </ul>
        </li>
<!--======================= आर्टिकल =================================================--> 
            <li class="xn-openable" id="art">
                <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text"> आर्टिकल</span></a>

            <ul>
                <li id="art_ch"><a href="<?php echo base_url('admin/artical/index')?>"><span class="fa fa-tasks"></span> आर्टिकल की लिस्ट</a></li>
                <li><a href="<?php echo base_url('admin/artical/add')?>"><span class="fa fa-user"></span> Add आर्टिकल</a></li>
            </ul>
        </li>
<!--=========================== कमेंट्स ==============================================--> 
            <li class="xn-openable" id="art">
                <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text"> कमेंट्स</span></a>
            <ul>
                <li id="art_ch"><a href="<?php echo base_url('admin/comment/index')?>"><span class="fa fa-tasks"></span> कमेंट्स की लिस्ट</a></li>
                
            </ul>
        </li>   
<!--============================== आरती ==========================================-->               
            <li class="xn-openable open" id="art">
                <a href="#"><span class="fa fa-bell"></span> <span class="xn-text"> आरती</span></a>
            <ul>
                <li id="art_ch"><a href="<?php echo base_url('admin/aarati/index')?>"><span class="fa fa-bell"></span> आरती की लिस्ट</a></li>
                <li><a href="<?php echo base_url('admin/aarati/add')?>"><span class="fa fa-bell"></span> Add आरती </a></li>
            </ul>
        </li>  
<!--========================== शहर का नाम ============================================--> 
            <li class="xn-openable open" id="art">
                <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text"> शहर के नाम</span></a>
            <ul>
                <li id="art_ch"><a href="<?php echo base_url('admin/area/index')?>"><span class="fa fa-tasks"></span> शहर की लिस्ट</a></li>
                <li><a href="<?php echo base_url('admin/area/cityadd')?>"><span class="fa fa-user"></span> Add शहर </a></li>
            </ul>
        </li>
<!--======================== होम पेज स्लाइडर  =========================================--> 
            <li class="xn-openable open" id="art">
                <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text"> स्लाइडर के नाम</span></a>
            <ul>
                <li id="art_ch"><a href="<?php echo base_url('admin/slider/index')?>"><span class="fa fa-tasks"></span> स्लाइडर की लिस्ट</a></li>
                <li><a href="<?php echo base_url('admin/slider/add')?>"><span class="fa fa-user"></span> Add स्लाइडर </a></li>
            </ul>
        </li>       
       
<!--====================== होम पेज स्लाइडर  ==========================================--> 
            <li class="xn-openable open" id="art">
                <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text"> राशिफल</span></a>
            <ul>
                <li id="art_ch"><a href="<?php echo base_url('admin/rashifal/index')?>"><span class="fa fa-tasks"></span> राशिफल की लिस्ट</a></li>
            </ul>
        </li> 

<!--============================= पंचांग  ==============================================--> 
            <li class="xn-openable open" id="art">
                <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text"> पंचांग</span></a>
            <ul>
                <li id="art_ch"><a href="<?php echo base_url('admin/rashifal/panchang')?>"><span class="fa fa-tasks"></span> पंचांग की लिस्ट</a></li>
            </ul>
        </li>   
        
<!--================================= वीडियो  =======================================--> 
            <li class="xn-openable open" id="art">
                <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text"> वीडियो</span></a>
            <ul>
                <li id="art_ch"><a href="<?php echo base_url('admin/video/index')?>"><span class="fa fa-tasks"></span> वीडियो की लिस्ट</a></li>
            </ul>
        </li> 

<!--================================= मेंबर  ==========================================--> 
            <li class="xn-openable open" id="art">
                <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text"> मेंबर</span></a>
                <ul>
                    <li id="art_ch"><a href="<?php echo base_url('admin/about/index')?>"><span class="fa fa-tasks"></span> मेंबर की लिस्ट</a></li>
                </ul>
        </li>         
       
        </ul>
                <!-- END X-NAVIGATION -->
    </div>
	<div class="page-content">
            		<!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel" style="padding-bottom:5px;">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                </ul>

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
<?}?>
<!-- ================== Error Msg ================== -->