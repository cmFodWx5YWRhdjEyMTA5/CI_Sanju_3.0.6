<?php 
$pagetitle = 'राशिफल की लिस्ट';
include_once realpath(dirname(__FILE__)."/../header.php");

?>
<script>
	$(document).ready(function(){
        $('li#ortknw').addClass('active');
        $('li#rashifal').addClass('active');
	 });	
</script>
<!-- ================== End of header ================== -->

<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><b>क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel</b></li>
        
    </ul>
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> राशिफल की लिस्ट</h2>
</div>
<!-- END BREADCRUMB -->

<!--=================== PAGE CONTENT WRAPPER =================-->
    <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    
                                    <ul class="panel-controls">
<li style="width:50px;">
<a class="btn btn-success btn-rounded pull-left" href="<? echo base_url('admin/websys/addSlider')?>">&nbsp;<i class="fa fa-plus"></i></a>
</li>
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                            	<th>फोटो</th>
                                                <th>राशि का नाम</th>
                                                <th>Active</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php if( count($RashiMst) ): ?>
                        					<?php foreach($RashiMst as $res) : ?>
                                            <tr>
								<td width="100">
					<?php if($res->Rashi_Thumb == ''){ ?>
                    			<img width="80" height="80" src='<?php echo base_url('uploads/no-image.jpg') ?>' alt="No Image"/>
					<?php }else{ ?>
                                <img width="80" height="80" src="<?php echo base_url('uploads/Rashi_Pic/Rashi_Thumb/'.$res->Rashi_Thumb) ?>">
					<?php } ?>
                                </td>
                                                <td><? echo $res->Rashi_Name; ?></td>
												<td><? echo $res->Active; ?></td>
                                                <td>
													<table width="100%" border="0">
  <tr>
    <td>
<?= anchor("admin/rashifal/editRashi/{$res->Rashi_id}",'Edit',['class'=>'btn btn-default btn-rounded btn-sm ','style'=>'margin-top:14px;']);?>

    </td>
    
  </tr>
</table>
												</td>
                                            </tr>
                                           <?php endforeach; ?>
                        					<?php else: ?>
                                            <tr>
                                                 <td  colspan="7">No Record Found...</td>
                                            </tr>
                                        <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->

                            

                        </div>
                    </div>                                
                    
                </div>
<!--=================== PAGE CONTENT WRAPPER =================-->



<!-- ================== footer Page ================== -->

<?php include_once realpath(dirname(__FILE__)."/../footer.php"); ?>