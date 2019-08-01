<?php 
$pagetitle = 'कमेंट की लिस्ट';
include_once realpath(dirname(__FILE__)."/../header.php");

?>
<script>
	$(document).ready(function(){
        $('li#ortknw').addClass('active');
        $('li#comments').addClass('active');
	 });	
</script>
<!-- ================== End of header ================== -->

<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><b>क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel</b></li>
        
    </ul>
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> कमेंट की लिस्ट</h2>
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

                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                            	<th>यूजर का फोटो</th>
                                                <th>कमेंट का टाइप </th>
                                                <th>कमेंट की पोस्ट का नाम</th>
                                                <th>यूजर का नाम</th>
                                                <th>यूजर कमेंट</th>
                                                <th> Active</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php if( count($Comment) ): ?>
                        					<?php foreach($Comment as $res) : ?>
                                            <tr>
                                            <td width="100">
					<?php if($res->User_Thumb == ''){ ?>
                    			<img width="60" height="60" src='<?php echo base_url('uploads/no-image.jpg') ?>' alt="No Image"/>
					<?php }else{ ?>
                                <img width="60" height="60" src="<?php echo base_url('uploads/User_Pic/User_Thumb/'.$res->User_Thumb) ?>">
					<?php } ?>
                                </td>
								                <td><?php echo $res->Cmt_Type ;?></td>
												<td><?php echo $res->Cmt_On_Post; ?></td>
											
                                                <td><?php echo $res->user_fname .' '.$res->user_lname ; ?></td>
                                                <td><?php echo substr($res->Comment_Dtl ,0,190).' ........'?></td>
											    
                                                <td><? echo $res->Active ; ?></td>
                                                <td>
													<table width="100%" border="0">
  <tr>
    <td>
<?= anchor("admin/comment/editComment/{$res->Cmt_Id}",'Edit',['class'=>'btn btn-default btn-rounded btn-sm ','style'=>'margin-top:14px;']);?>

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