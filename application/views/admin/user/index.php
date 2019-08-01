<?php 
$pagetitle = 'यूजर की लिस्ट';
include_once realpath(dirname(__FILE__)."/../header.php");

?>
<script>
	$(document).ready(function() {
        $('li#userdata').addClass('active');
        $('li#userlist').addClass('active');
		});	
</script>
<!-- ================== End of header ================== -->

<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><b>क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel</b></li>
        
    </ul>
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> <?php echo $pagetitle?></h2>
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
<a class="btn btn-success btn-rounded pull-left" href="<? echo base_url('admin/websys/newUser')?>">&nbsp;<i class="fa fa-plus"></i></a>
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
                                                <th>यूजर का नाम</th>
                                                <th>यूजर की ईमेल</th>
                                                <th>यूजर स्टेटस</th>
                                                <th>यूजर वेरीफाई</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php if( count($UserList) ): ?>
                        					<?php foreach($UserList as $res) : ?>
                                            <tr>
                                                <td width="100">
            		<?php if($res->User_Thumb == ''){ ?>
                    			<img width="50" height="50" src='<?php echo base_url('uploads/no-image.jpg') ?>' alt="No Image"/>
					<?php }else{ ?>
                                <img width="50" height="50" src="<?php echo base_url('uploads/User_Pic/User_Thumb/'.$res->User_Thumb) ?>">
					<?php } ?>
            
            
                                                </td>
                                                <td><? echo $res->user_fname.' '.$res->user_lname; ?></td>
                                                <td><? echo $res->user_email?></td>
                                                <?php 
												if($res->user_is_blocked=='1')
												{
												?>
                                                <td><span class="label label-success">Active</span></td>
                                                <?php }else{?>
                                                <td><span class="label label-danger">Deactive</span></td>
												<?php } ?>
                                                
                                                <?php 
												if($res->user_verified=='1')
												{
												?>
                                                <td><span class="label label-success">Yes</span></td>
                                                <?php }else{?>
                                                <td><span class="label label-danger">No</span></td>
												<?php } ?>
                                                
                                               

                                                <td>
													<table width="100%" border="0">
  <tr>
    <td>
<?= anchor("admin/websys/userEdit/{$res->user_id}",'Edit',['class'=>'btn btn-default btn-rounded btn-sm ','style'=>'margin-top:14px;']);?>

    </td>
    <td>
<?=
    form_open('admin/artical/del_artical'),
    form_hidden('user_id',$res->user_id),
    form_hidden('user_image',$res->user_image),
    form_hidden('User_Thumb',$res->User_Thumb),
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