<?php 
$pagetitle = 'परिवार के मुखिया';
//$PageClass = "Parivar";
include_once realpath(dirname(__FILE__).'/../header.php'); 
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
        <h2><span class="fa fa-arrow-circle-o-left"></span> परिवार के मुखिया </h2>
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
<a class="btn btn-success btn-rounded pull-left" href="<? echo base_url('admin/parivar/add_mukhiya');?>">&nbsp;<i class="fa fa-plus"></i></a>
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
                                                <th width="179">मुखिया</th>
                                                <th width="157">पिता / पति का नाम</th>
                                                <th width="129">माता का नाम</th>
                                                <th width="76">गोत्र</th>
                                                <th width="109">सीटी / गाव</th>
                                                <th width="144">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php if( count($Mukhiya) ): ?>
                                           <?php foreach($Mukhiya as $res) : ?>
                                            <tr>
                                 <td width="59">
                                 <?php //echo $res->Mukhiya_Pic ?>
				<?php if($res->Mukhiya_Thumb_Img == ''){ ?>
                    			<img width="50" height="50" src='<?php echo base_url('uploads/no-image.jpg') ?>' alt="No Image"/>
					<?php }else{ ?>
                                <img width="50" height="50" src="<?php echo base_url('uploads/Parivar/Mukhiya/Thumb_Img/'.$res->Mukhiya_Thumb_Img) ?>">
					<?php } ?>

                                 </td>
                                              <td><?php echo $res->Main_Person?></td>
                                                <td><?php echo $res->Father_Hubby?></td>
                                                <td><?php echo $res->Mother_Name?></td>
                                                <td><?php echo $res->Gotra?></td>
                                              <td><?php echo $res->City_Place?></td>
                                                <td valign="top">


<table width="100%" border="0">
  <tr>
    <td width="17%">
    	<?= anchor("admin/parivar/members/{$res->Main_Id}",'Member List',['class'=>'btn btn-info btn-rounded','style'=>'margin-top:14px;']);?>
    </td>
    <td width="16%">
   		<?= anchor("admin/parivar/addmem/{$res->Main_Id}",'Add Member',['class'=>'btn btn-success btn-rounded','style'=>'margin-top:14px;']);?>
    </td>
    <td width="17%">
    	<?= anchor("admin/parivar/females/{$res->Main_Id}",'Females',['class'=>'btn btn-info btn-rounded','style'=>'margin-top:14px;']);?>
    </td>
    <td width="15%">
    	<?= anchor("admin/parivar/addfem/{$res->Main_Id}",'Add Females',['class'=>'btn btn-success btn-rounded','style'=>'margin-top:14px;']);?>
    </td>
    
    <td width="18%" >
    <?= anchor("admin/parivar/edit_mukhiya/{$res->Main_Id}",'Edit',['class'=>'btn btn-default btn-rounded btn-sm','style'=>'margin-top:14px;']);?>
    </td>
    <td width="17%">
        <?=
    form_open('admin/parivar/del_mukhiya'),
    form_hidden('Main_Id',$res->Main_Id),
    form_hidden('Mukhiya_Thumb_Img',$res->Mukhiya_Thumb_Img),
    form_hidden('Mukhiya_Pic',$res->Mukhiya_Pic),
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