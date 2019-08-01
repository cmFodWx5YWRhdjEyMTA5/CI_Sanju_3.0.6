<?php 
//$this->prd($Meb_list);
if(is_array($Meb_list) && count($Meb_list) > 0) {

$pagetitleVal = ' '.$Meb_list[0]->Main_Person.' के परिवार के मेंबर';
}else{
$pagetitleVal =	' परिवार के मेंबर का नाम जोड़े ';
}
$pagetitle = $pagetitleVal;
//$PageClass = "Parivar";
include_once realpath(dirname(__FILE__).'/../header.php'); 


//$this->prd($Main_Id);
?>
<script>
	$(document).ready(function() {
        $('li#Parivar').addClass('active');
        $('li#Parivar_List').addClass('active');
		});	
</script>
<!-- ================== Dashboard Page ================== -->

<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><b>क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel</b></li>
        
    </ul>
    <div class="page-title">                    
        <h2><span class="fa fa-arrow-circle-o-left"></span><strong>(<?php echo $pagetitleVal; ?>)</strong></h2>
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
<a class="btn btn-success btn-rounded pull-left" href="<?php echo base_url('admin/parivar/addmem/').'/'.$Main_Id?>">&nbsp;<i class="fa fa-plus"></i></a>


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
                                                
                                                <th>मेंबर का नाम</th>
                                                <th>मेंबर का सम्बंध</th>
                                                <th>मेंबर का कार्य</th>
                                              	<th>मेंबर का कार्य स्थल</th>
                                                <th>मेंबर का फ़ोन न.</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php if( count($Meb_list) ): ?>
                                           <?php foreach($Meb_list as $res) : ?>
                                            <tr>
                                 <td width="81">
                                 <?php //echo $res->Mukhiya_Pic ?>
				<?php if($res->Meb_Thumb_Pic == ''){ ?>
                    			<img width="50" height="50" src='<?php echo base_url('uploads/no-image.jpg') ?>' alt="No Image"/>
					<?php }else{ ?>
                                <img width="50" height="50" src="<?php echo base_url('uploads/Parivar/Meb_Pic/Meb_Thumb/'.$res->Meb_Thumb_Pic) ?>">
					<?php } ?>
								</td>
                                              <td><?php echo $res->Meb_Name?></td>
                                                <td><?php echo $res->Relation_Type?></td>
                                                <td><?php echo $res->Job_Type?></td>
                                                <td><?php echo $res->Work_Place?></td>
                                              <td><?php echo $res->Phone_No?></td>
                                                <td valign="top">
<?php if($res->Relation_Type =='Self'){?>
<table width="100%" border="0">
	<tr>
  		<td></td>
	</tr>
</table>
<?php }else{ ?>
<table width="100%" border="0">
  <tr>
    <td width="25%">
    	<?= anchor("admin/parivar/viewchild/{$res->Meb_id}",'View Child',['class'=>'btn btn-info btn-rounded','style'=>'margin-top:14px;']);?>
    </td>
    <td width="23%">
    	<?= anchor("admin/parivar/parivarchild/{$res->Meb_id}/{$res->Main_Id}",'Add Child',['class'=>'btn btn-success btn-rounded','style'=>'margin-top:14px;']);?>
    </td>
    
    <td width="6%" >
    <?= anchor("admin/parivar/editMeb/{$res->Meb_id}",'Edit',['class'=>'btn btn-default btn-rounded btn-sm','style'=>'margin-top:14px;']);?>
    </td>
    <td width="7%">
        <?=
    form_open('admin/parivar/del_mukhiya'),
    form_hidden('Meb_id',$res->Meb_id),
    form_hidden('Meb_Thumb_Pic',$res->Meb_Thumb_Pic),
    form_hidden('Meb_Pic',$res->Meb_Pic),
form_submit(['name'=>'submit','value'=>'Del','class'=>'btn btn-danger btn-rounded btn-sm fa fa-times', 'onclick'=>"return confirm('Are you sure want to delete this record')",'style'=>'margin-top:15px;']),
form_close();
?>
    </td>
  </tr>
</table>
<?php } ?>
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