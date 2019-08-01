<?php 
$pagetitle = '( '.$UserDt->user_fname.' '. $UserDt->user_lname.')'.' का विवरण';

include_once realpath(dirname(__FILE__).'/../header.php'); 
//$pagetitle ='Add परिवार';
?>
<script>
	$(document).ready(function() {
        $('li#video').addClass('active');
        $('li#vdiedit').addClass('active');
		});	
</script>
<!-- ================== Adding Mukhiya ================== -->

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><b>क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel</b></li>
    
</ul>
<?php
        // loading Combobox Value
        
		//$this->load->model('templemodel','temple');
      //  $dropdown = $this->temple->Get_District_Name();
        //echo "<pre>"; print_r($dropdown); exit;
        
?>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            

<?php 
  echo form_open_multipart("admin/websys/userEdit/{$UserDt->user_id}",['class'=>'form-horizontal']);
?>

            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php echo $pagetitle;?></strong></h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                
                                <div class="panel-body">  
                                	 
									<div class="panel-body">  
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">यूजर का फोटो</label>
                                            <div class="col-md-6 col-xs-12">
                                                <?php 
                                                    echo form_upload(['name'=>'userPic']); 
                                                ?>
                                                <div class="red-left">
                                                   <?php if(isset($upload_error) ) echo $upload_error ?>
                                                </div>
                                                
                                                <span class="help-block">यूजर का फोटो सेलेक्ट करे</span>
                                            </div>
                                        </div>                                                                      
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">यूजर का फर्स्ट नाम</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
<?php echo form_input(['name'=>'user_fname','class'=>'form-control','placeholder'=>'यूजर का फर्स्ट नाम','value'=>set_value('user_fname', $UserDt->user_fname)]); 
echo form_error('user_fname'); ?>
												
                                            </div>                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">यूजर का लास्ट नाम</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
<?php echo form_input(['name'=>'user_lname','class'=>'form-control','placeholder'=>'यूजर का लास्ट नाम','value'=>set_value('user_lname', $UserDt->user_lname)]); 
echo form_error('user_lname'); ?>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">यूजर का ईमेल</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
<?php echo form_input(['name'=>'user_email','class'=>'form-control','placeholder'=>'यूजर का ईमेल','value'=>set_value('user_email', $UserDt->user_email)]); 
echo form_error('user_email'); ?>
                                            </div>                                            
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">यूजर ब्लॉक</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
                                               
<?php 
    $BlockedVal = array(
                  '1'  => 'Yes',
                  '0'    => 'No',
                );
echo form_dropdown('user_is_blocked', $BlockedVal, set_value('user_is_blocked',$UserDt->user_is_blocked),'class="form-control" ');

?>
                                            </div>                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">यूजर Verified</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
                                               
<?php 
    $VerifiedVal = array(
                  '1'  => 'Yes',
                  '0'    => 'No',
                );
echo form_dropdown('user_verified', $VerifiedVal, set_value('user_verified',$UserDt->user_verified),'class="form-control" ');

?>
                                            </div>                                            
                                        </div>
                                    </div>
                                    
                                  <div class="panel-footer">
                                    
<?php echo form_submit(['name'=>'Submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
<button type="button" onclick="Javascript:window.location.href='<?=base_url('admin/websys/user_list')?>';" class="btn btn-default pull-right">Back To User</button>  

                                </div>  	
                                </div>
                                
                            </div>
                
            </div>
<?php echo form_close();?>
            
        </div>
    </div>                    
    
</div>
<!-- END PAGE CONTENT WRAPPER --> 
<!-- ================== End of Adding Mukhiya ================== -->


<?php include_once realpath(dirname(__FILE__).'/../footer.php'); ?>