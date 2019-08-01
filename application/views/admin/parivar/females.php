<?php 
if(is_array($Female_List) && count($Female_List) > 0) {
$pagetitleVal = ''.$Female_List[0]->Main_Person.' के परिवार की महिला मेंबर ';
}else{
$pagetitleVal =	'परिवार की महिला मेंबर का नाम जोड़े ';
}
$pagetitle = $pagetitleVal;

include_once realpath(dirname(__FILE__).'/../header.php'); 


//$this->prd($Main_Id);
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
        <h2><span class="fa fa-arrow-circle-o-left"></span><strong> (<?php echo $pagetitleVal; ?>)</strong></h2>
    </div>
<!-- END BREADCRUMB -->


    <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">महिला मेंबर का नाम</h3>
                                    <ul class="panel-controls"> 
<li style="width:50px;">
<a class="btn btn-success btn-rounded pull-left" href="<?php echo base_url('admin/parivar/addfem').'/'.$Main_Id?>">&nbsp;<i class="fa fa-plus"></i></a>


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
                                                
                                                <th width="78">महिला का नाम</th>
                                                <th width="87">मुखिया से सम्बंध</th>
                                                <th width="64">पति का नाम</th>
                                              	<th width="121">महिला के पिता का नाम</th>
                                                <th width="99">महिला का पीहर</th>
                                                <th width="44">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php if( count($Female_List) ): ?>
                                           <?php foreach($Female_List as $res) : ?>
                                            <tr>
                                 <td width="81">
                                 <?php //echo $res->Mukhiya_Pic ?>
				<?php if($res->Fm_Thumb_Pic == ''){ ?>
                    			<img width="50" height="50" src='<?php echo base_url('uploads/no-image.jpg') ?>' alt="No Image"/>
					<?php }else{ ?>
                                <img width="50" height="50" src="<?php echo base_url('uploads/Parivar/Woman_Pic/FM_Thumb/'.$res->Fm_Thumb_Pic) ?>">
					<?php } ?>
								</td>
                                              <td><?php echo $res->FM_Name?></td>
                                                <td><?php echo $res->Relation_Type?></td>
                                                <td><?php echo $res->FM_Hubby?></td>
                                                <td><?php echo $res->FM_Fathere?></td>
                                              <td><?php echo $res->FM_PiharPlace?></td>
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
    
    
    
    <td width="6%" >
    <?= anchor("admin/parivar/editFM/{$res->FM_Id}",'Edit',['class'=>'btn btn-default btn-rounded btn-sm','style'=>'margin-top:14px;']);?>
    </td>
    <td width="7%">
        <?=
    form_open('admin/parivar/del_females'),
    form_hidden('FM_Id',$res->FM_Id),
    form_hidden('Fm_Thumb_Pic',$res->Fm_Thumb_Pic),
    form_hidden('FM_Pic',$res->FM_Pic),
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