<?php 
$pagetitle = 'मंदिरों की लिस्ट';
include_once realpath(dirname(__FILE__).'/../header.php'); 

?>
<script>
	$(document).ready(function() {
        $('li#temple').addClass('active');
        $('li#templeList').addClass('active');
		});	
</script>
<!-- ================== End of header ================== -->

<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><b>क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel</b></li>
        
    </ul>
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> मंदिरों की लिस्ट</h2>
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
<a class="btn btn-success btn-rounded pull-left" href="<? echo base_url('admin/temple/add');?>">&nbsp;<i class="fa fa-plus"></i></a>
</li>
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable" width="100%">
                                        <thead>
                                            <tr>
                                                <th>फोटो</th>
                                                <th width="209">मंदिर का नाम</th>
                                                <th width="170">गॉव का नाम</th>
                                                <th width="157">जिले का नाम</th>
                                                <th width="133">मंदिर का विवरण</th>
                                                <th width="190">पोस्ट बाय / Active</th>
                                                <th width="85">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                        <?php if( count($Temple) ): ?>
                        <?php foreach($Temple as $res) : ?>
                                            
                            <tr>
                                <td width="100">
					<?php if($res->Temp_Thumb == ''){ ?>
                    			<img width="50" height="50" src='<?php echo base_url('uploads/no-image.jpg') ?>' alt="No Image"/>
					<?php }else{ ?>
                                <img width="50" height="50" src="<?php echo base_url('uploads/Temple_Pic/Temp_Thumb/'.$res->Temp_Thumb) ?>">
					<?php } ?>
                                </td>
                                <td><? echo $res->Temp_Name; ?></td>
                                <td><? echo $res->VillageName; ?></td>
                                <td><? echo $res->Dist_Name; ?></td>
                                <td><?php echo substr($res->Temp_Dtl,0,190).' ........'?></td>
                                <td><? echo $res->Post_By; ?> / <? echo $res->Active; ?></td>
                                <td>
									<table width="100%" border="0">
  <tr>
    <td>
<?= anchor("admin/temple/updateTemp/{$res->Temp_Id}",'Edit',['class'=>'btn btn-default btn-rounded btn-sm ','style'=>'margin-top:14px;']);?>

    </td>
    <td>
<?=
    form_open('admin/temple/del_temple'),
    form_hidden('Temp_Id',$res->Temp_Id),
    form_hidden('Temp_Thumb',$res->Temp_Thumb),
    form_hidden('Temp_Img',$res->Temp_Img),
form_submit(['name'=>'submit','value'=>'Del','class'=>'btn btn-danger btn-rounded btn-sm fa fa-times', 'onclick'=>"return confirm('Are you sure want to delete this record')",'style'=>'margin-top:15px;']),
form_close();
?>
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

<?php include_once realpath(dirname(__FILE__).'/../footer.php'); ?>