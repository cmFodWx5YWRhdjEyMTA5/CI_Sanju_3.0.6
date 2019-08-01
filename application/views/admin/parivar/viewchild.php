<?php 
if(is_array($Chile_List) && count($Chile_List) > 0) {

$pagetitleVal = ' '.$Chile_List[0]->Ch_Father.' के बच्चे ';
}else{
$pagetitleVal =	' नाम जोड़े बच्चे का ';
}

$pagetitle = $pagetitleVal;
//$PageClass = "Parivar";
include_once realpath(dirname(__FILE__).'/../header.php'); 


?>
<script>
	$(document).ready(function() {
        $('li#Parivar').addClass('active');
        //$('li#Parivar_List').addClass('active');
		});	
</script>
<!-- ================== Dashboard Page ================== -->

<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><b>क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel</b></li>
        
    </ul>
    <div class="page-title">                    
        <h2><span class="fa fa-arrow-circle-o-left"></span> 
        <strong>
        (<?php echo $pagetitleVal; ?>)
        </strong></h2>
    </div>
<!-- END BREADCRUMB -->


    <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">मुखियाओ का नाम</h3>
                                    <ul class="panel-controls"> 
<li style="width:50px;">
<a class="btn btn-success btn-rounded pull-left" href="<? echo base_url('admin/parivar/parivarchild/'.$Meb_id);?>">&nbsp;<i class="fa fa-plus"></i></a>
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
                                                
                                                <th>बच्चे का नाम</th>
                                                <th>पिता का नाम</th>
                                                <th>माता का नाम</th>
                                              	<th>बच्चे की आयु</th>
                                                <th>बच्चे की शिक्षा</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php if( count($Chile_List) ): ?>
                                           <?php foreach($Chile_List as $res) : ?>
                                            <tr>
                                 <td width="81">
                                 <?php //echo $res->Mukhiya_Pic ?>
				<?php if($res->Ch_Thumb_Pic == ''){ ?>
                    			<img width="50" height="50" src='<?php echo base_url('uploads/no-image.jpg') ?>' alt="No Image"/>
					<?php }else{ ?>
                        <img width="50" height="50" src="<?php echo base_url('./uploads/Parivar/Child_Pic/Child_Thumb/'.$res->Ch_Thumb_Pic) ?>">
					<?php } ?>
								</td>
                                              <td><?php echo $res->Ch_Name?></td>
                                                <td><?php echo $res->Ch_Father?></td>
                                                <td><?php echo $res->Ch_Mother?></td>
                                                <td><?php echo $res->Ch_Dob?> वर्ष</td>
                                              <td><?php echo $res->Ch_Eduction?></td>
                                                <td valign="top">


<table width="100%" border="0">
  <tr>
      
    <td width="6%" >
    <?= anchor("admin/parivar/editChild/{$res->Child_id}",'Edit',['class'=>'btn btn-default btn-rounded btn-sm','style'=>'margin-top:14px;']);?>
    </td>
    <td width="7%">
        <?=
    form_open('admin/parivar/del_mukhiya'),
    form_hidden('Meb_id',$res->Meb_id),
    form_hidden('Ch_Pic',$res->Ch_Pic),
    form_hidden('Ch_Thumb_Pic',$res->Ch_Thumb_Pic),
form_submit(['name'=>'submit','value'=>'Del','class'=>'btn btn-danger btn-rounded btn-sm fa fa-times', 'onclick'=>"return confirm('Are you sure want to delete this record')",'style'=>'margin-top:15px;']),
form_close();
?>
    </td>
  </tr>
</table>
<!-- <a class="btn btn-danger btn-rounded btn-sm fa fa-times" href="#" onclick="return confirm('Are you sure want to delete this record')"></a> -->


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
<!-- ================== Dashboard Page ================== -->

<?php include_once realpath(dirname(__FILE__).'/../footer.php'); ?>