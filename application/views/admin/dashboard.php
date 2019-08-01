<?php 
$pagetitle = 'Aakash Nair';
$PageClass = "dashboard";

include_once('header.php'); 
?>
<script>
	$(document).ready(function() {
        $('li#dashboard').addClass('active');
        });	
</script>
<!-- ================== Dashboard Page ================== -->

<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li class="active">Dashboard</li>
</ul>
<!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
	<div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-default widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                    
                                        <div class="widget-title">Register User</div>                                        
                                        <div class="widget-subtitle">Total on your website</div>
                                        <div class="widget-int"><?php echo $TotalUser?></div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Artical</div>
                                        <div class="widget-subtitle">Total on your website</div>
                                        <div class="widget-int"><?php echo $TotalArtical?></div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Temple</div>
                                        <div class="widget-subtitle">Total on your website</div>
                                        <div class="widget-int"><?php echo $TotalTemple?></div>
                                    </div>
                                </div>                            
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                             
                            </div>         
                            <!-- END WIDGET SLIDER -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='#';">
                                <div class="widget-item-left">
                                    <span class="fa fa-envelope"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count">48</div>
                                    <div class="widget-title">New messages</div>
                                    <div class="widget-subtitle">In your mailbox</div>
                                </div>      
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='<?php echo base_url('admin/parivar/index')?>';">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count"><?php echo $TotalParivar?></div>
                                    <div class="widget-title">Registred Parivar</div>
                                    <div class="widget-subtitle">On your website</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>                            
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                    <!-- END WIDGETS -->                    
                    
                    <div class="row">
                    	<!-- START PROJECTS BLOCK -->
                       	<div class="col-md-7">
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <div class="panel-title-box">
                                        <h3>कमेंट पोस्ट ( यूजर )</h3>
                                    </div> 
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th >क्र.</th>
                                                <th width="44%">पोस्ट का नाम</th>
                                                <th >कमेंट</th>
                                                <th width="31%">यूजर का नाम</th>
                                                <th width="11%">Active</th>
                                                <th width="14%">Activity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?
												if(is_array($UserCmt) and count($UserCmt)>0){
													$count = $this->uri->segment(4);
													foreach($UserCmt as $cmtUser)
													{
											?>
                                            <tr>
                                                	<td><strong><?php echo ++$count; ?></strong></td>
                                                    <td><strong><?php echo substr($cmtUser->Cmt_On_Post, 0,50) ?></strong></td>
                                                    <td><strong><?php echo substr($cmtUser->Comment_Dtl, 0,50) ?></strong></td>
                                                    <td><strong><?php echo $cmtUser->UserName ?></strong></td>
                                                    <td><span class="label label-danger"><?php echo $cmtUser->Active ?></span></td>
                                                    <td valign="top">
				<?= anchor("admin/comment/editComment/{$cmtUser->Cmt_Id}",'Vews Comment',['class'=>'btn btn-default btn-rounded btn-sm']);?>
                                                    </td>
                                                </tr>
                                           <? } 
												}else{ ?>
                                                <tr>
                                                    <td colspan="4" align="center">
                                                    	<span style="font-size:12px" class="label label-danger">Sorry No User Comment Update</span>
                                                    </td>
                                                </tr>
											<?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-5">
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <div class="panel-title-box">
                                        <h3>आर्टिकल पोस्ट ( यूजर )</h3>
                                    </div> 
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th >क्र.</th>
                                                <th width="44%">आर्टिकल का नाम</th>
                                                <th width="31%">यूजर का नाम</th>
                                                <th width="11%">Active</th>
                                                <th width="14%">Activity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?
												if(is_array($UserArtical) and count($UserArtical)>0){
													$count = $this->uri->segment(4);
													foreach($UserArtical as $userArt)
													{
											?>
                                            <tr>
                                                	<td><strong><?php echo ++$count; ?></strong></td>
                                                    <td><strong><?php echo substr($userArt->Artical_Title,0,50) ?></strong></td>
                                                    <td><strong><?php echo $userArt->Post_By ?></strong></td>
                                                    <td><span class="label label-danger"><?php echo $userArt->Active ?></span></td>
                                                    <td valign="top">
				<?= anchor("admin/artical/edit_artical/{$userArt->Art_Id}",'Vews Artical',['class'=>'btn btn-default btn-rounded btn-sm']);?>
                                                    </td>
                                                </tr>
                                           <? } 
												}else{ ?>
                                                <tr>
                                                    <td colspan="4" align="center">
                                                    	<span style="font-size:12px" class="label label-danger">Sorry No User Artical Update</span>
                                                    </td>
                                                </tr>
											<?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                        <!-- END PROJECTS BLOCK -->
                    </div>
                    
                    <div class="row">
                    	<!-- START PROJECTS BLOCK -->
                       	<div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <div class="panel-title-box">
                                         <h3>मंदिर पोस्ट ( यूजर )</h3>
                                    </div> 
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th >क्र.</th>
                                                <th width="44%">मंदिर का नाम</th>
                                                <th width="31%">यूजर का नाम</th>
                                                <th width="11%">Active</th>
                                                <th width="14%">Activity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?
												if(is_array($UserTemp) and count($UserTemp)>0){
													$count = $this->uri->segment(4);
													foreach($UserTemp as $UserTemp)
													{
											?>
                                            <tr>
                                                	<td><strong><?php echo ++$count; ?></strong></td>
                                                    <td><strong><?php echo substr($UserTemp->Temp_Name,0,50) ?></strong></td>
                                                    <td><strong><?php echo $UserTemp->Post_By ?></strong></td>
                                                    <td><span class="label label-danger"><?php echo $UserTemp->Active ?></span></td>
                                                    <td valign="top">
				<?= anchor("admin/temple/updateTemp/{$UserTemp->Temp_Id}",'Vews Temple',['class'=>'btn btn-default btn-rounded btn-sm']);?>
                                                    </td>
                                                </tr>
                                           <? } 
												}else{ ?>
                                                <tr>
                                                    <td colspan="4" align="center">
                                                    	<span style="font-size:12px" class="label label-danger">Sorry No User Temple Update</span>
                                                    </td>
                                                </tr>
											<?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <div class="panel-title-box">
                                        <h3>न्यूज़ पोस्ट ( यूजर )</h3>
                                    </div> 
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th >क्र.</th>
                                                <th width="44%">न्यूज़ का नाम</th>
                                                <th width="31%">यूजर का नाम</th>
                                                <th width="11%">Active</th>
                                                <th width="14%">Activity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?
												if(is_array($UserNews) and count($UserNews)>0){
													$count = $this->uri->segment(4);
													foreach($UserNews as $userNews)
													{
											?>
                                            <tr>
                                                	<td><strong><?php echo ++$count; ?></strong></td>
                                                    <td><strong><?php echo substr($userNews->NewsTitle,0,50) ?></strong></td>
                                                    <td><strong><?php echo $userNews->Post_By ?></strong></td>
                                                    <td><span class="label label-danger"><?php echo $userNews->Active ?></span></td>
                                                    <td valign="top">
				<?= anchor("admin/news/editNews/{$userNews->News_Id}",'Vews News',['class'=>'btn btn-default btn-rounded btn-sm']);?>
                                                    </td>
                                                </tr>
                                           <? } 
												}else{ ?>
                                                <tr>
                                                    <td colspan="4" align="center">
                                                    	<span style="font-size:12px" class="label label-danger">Sorry No User News Update</span>
                                                    </td>
                                                </tr>
											<?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                        <!-- END PROJECTS BLOCK -->
                    </div>
	</div>
</div>

<!-- ================== Dashboard Page ================== -->

<?php 
//$this->prd($this->session->all_userdata());

include_once('footer.php'); ?>