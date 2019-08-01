<?php 
$pagetitle = 'आरती की लिस्ट';
include_once realpath(dirname(__FILE__).'/../header.php'); 

//echo realpath(dirname(__FILE__));

?>
<?= link_tag('assets/mp3-player/demo/360-player/360player.css');?>
<script src="<?=base_url('assets/mp3-player/demo/360-player/script/berniecode-animator.js')?>"></script>
<script src="<?=base_url('assets/mp3-player/script/soundmanager2.js')?>"></script>
<script src="<?=base_url('assets/mp3-player/demo/360-player/script/360player.js')?>"></script>
<script>
	$(document).ready(function(){
        $('li#aarati').addClass('active');
		$('li#aaratiList').addClass('active');
    });	
</script>
<!-- ================== Dashboard Page ================== -->

<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><b>क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel</b></li>
        
    </ul>
    <div class="page-title">                    
        <h2><span class="fa fa-arrow-circle-o-left"></span> आरती की लिस्ट</h2>
    </div>
<!-- END BREADCRUMB -->
               
<!-- PAGE CONTENT WRAPPER -->
	<div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    
                                    <ul class="panel-controls">
<li style="width:50px;">
<a class="btn btn-success btn-rounded pull-left" href="<? echo base_url('admin/aarati/add_aarati');?>">&nbsp;<i class="fa fa-plus"></i></a>
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
                                                <th>Mp3 ऑडियो</th>
                                                <th>आरती का नाम</th>
                                                <th>आरती का विवरण</th>
                                                <th>पोस्ट बाय </th>
                                                <th> Active</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if( count($arti) ): ?>
                        					<?php foreach($arti as $res) : ?>
                                            <tr>
                                                <td width="100">
					<?php if($res->Aarti_Thumb == ''){ ?>
                          <img width="50" height="50" src='<?php echo base_url('uploads/no-image.jpg') ?>' alt="No Image"/>
                    <?php }else{ ?>
                          <img width="50" height="50" src="<?php echo base_url('uploads/Aarti_Data/Aarti_Pic/Aarti_Thumb/'.$res->Aarti_Thumb) ?>">
                    <?php } ?>
                                                </td>
												<td>
												<? 
													if($res->Aarti_Audio =='') {
													
													$aartiVal = $res->Aarti_Audio_Link;
													}else{
													$aartiVal =	base_url('./uploads/Aarti_Data/Aarti_Audio/'.$res->Aarti_Audio);
													}
												?>
												<?php 
													if($res->Aarti_Audio =='' && $res->Aarti_Audio_Link =='')
													{
												?>
                                                    No File OR Link Found
                                                <?php }else{ ?>
                                                    <div style="float:left;display:inline;min-width:50px; margin-top:5px; "> 
 														<div class="ui360" style="margin-top:-0.55em">
                                                        	<a href="<?php echo $aartiVal ?>"></a>
                                                        </div>
													</div>
												<? }?>	
                                                </td>
                                                
                                                <td><? echo $res->Aarti_Title ; ?></td>
                                                
                                                <td><?php echo substr($res->Aarti_Dtl ,0,190).' ........'?></td>
											    <td><? echo $res->Post_By ; ?></td>
                                                <td><? echo $res->Active ; ?></td>

                                                <td>
													<table width="100%" border="0">
  <tr>
    <td>
<?= anchor("admin/aarati/edit/{$res->Aarti_Id}",'Edit',['class'=>'btn btn-default btn-rounded btn-sm ','style'=>'margin-top:14px;']);?>

    </td>
    <td>
<?=
    form_open('admin/aarati/del_aarati'),
    form_hidden('Aarti_Id',$res->Aarti_Id),
    form_hidden('Aarti_Pic',$res->Aarti_Pic),
    form_hidden('Aarti_Thumb',$res->Aarti_Thumb),
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
                                            <tr colspan="7">
                                                 <td  align="center">No Record Found...</td>
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
<!-- PAGE CONTENT WRAPPER -->  

<?php include_once realpath(dirname(__FILE__).'/../footer.php'); ?>