<?php 
$pagetitle = 'स्लाइडर की लिस्ट';
include_once realpath(dirname(__FILE__)."/../header.php");

?>
<script>
	$(document).ready(function(){
        $('li#slider').addClass('active');
        $('li#sliderList').addClass('active');
	 });	
</script>
<!-- ================== End of header ================== -->

<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><b>क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel</b></li>
        
    </ul>
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> स्लाइडर की लिस्ट</h2>
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
                                                <th>स्लाइडर का नाम</th>
                                                <th>Active</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php if( count($SliderMst) ): ?>
                        					<?php foreach($SliderMst as $res) : ?>
                                            <tr>
								<td width="100">
					<?php if($res->Slider_Thumb == ''){ ?>
                    			<img width="80" height="80" src='<?php echo base_url('uploads/no-image.jpg') ?>' alt="No Image"/>
					<?php }else{ ?>
                                <img width="80" height="80" src="<?php echo base_url('uploads/Slider_Pic/Slider_Thumb/'.$res->Slider_Thumb) ?>">
					<?php } ?>
                                </td>
                                                <td><? echo $res->Slider_Text; ?></td>
												<td><? echo $res->Active; ?></td>
                                                <td>
													<table width="100%" border="0">
  <tr>
    <td>
<?= anchor("admin/websys/editSlider/{$res->Slide_Id}",'Edit',['class'=>'btn btn-default btn-rounded btn-sm ','style'=>'margin-top:14px;']);?>

    </td>
    <td>
<?php echo
    form_open('admin/websys/delSlider'),
    form_hidden('Slide_Id',$res->Slide_Id),
    form_hidden('Slider_Img',$res->Slider_Img),
    form_hidden('Slider_Thumb',$res->Slider_Thumb),
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

<?php include_once realpath(dirname(__FILE__)."/../footer.php"); ?>