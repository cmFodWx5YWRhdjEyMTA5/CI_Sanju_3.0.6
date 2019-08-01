<?php 
$pagetitle = ' वीडियो की लिस्ट';
include_once realpath(dirname(__FILE__).'/../header.php'); 

?>
<script>
	$(document).ready(function() {
        $('li#video').addClass('active');
        $('li#vdiadd').addClass('active');
		});	
</script>
<!-- ================== End of header ================== -->

<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><b>क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel</b></li>
        
    </ul>
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> वीडियो की लिस्ट</h2>
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
<a class="btn btn-success btn-rounded pull-left" href="<? echo base_url('admin/video/addVideo');?>">&nbsp;<i class="fa fa-plus"></i></a>
</li>
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th width="52">क्र. स.</th>
                                                <th width="138">वीडियो का नाम</th>
                                                <th width="46">केटेगरी</th>
                                                <th width="131">वीडियो का विवरण</th>
                                                <th width="65">वीडियो का लिंक</th>
                                                <th width="71">पोस्ट बाय</th>
                                                <th width="43">Active</th>
                                                <th width="43">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                        <?php if( count($Video) ): 
							$i=1;
						?>
                        <?php foreach($Video as $res) :  ?>
                                            
                            <tr>
                                <td><? echo $i++; ?></td>
                                <td><? echo $res->Video_Name; ?></td>
                                <td><? echo $res->Video_Cat; ?></td>
                                <td><?php echo substr($res->Video_Dtl,0,190)?></td>
                                <td><? echo $res->Video_Link; ?></td>
                                <td><? echo $res->Post_By; ?></td>
                                <td><? echo $res->Active; ?></td>
                                <td>
									<table width="100%" border="0">
  <tr>
    <td>
<?= anchor("admin/video/editVideo/{$res->Video_Id}",'Edit',['class'=>'btn btn-default btn-rounded btn-sm ','style'=>'margin-top:14px;']);?>

    </td>
    <td>
<?=
    form_open('admin/video/delVideo'),
    form_hidden('Video_Id',$res->Video_Id),
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