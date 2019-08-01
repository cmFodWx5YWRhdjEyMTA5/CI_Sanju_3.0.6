<?php 
$pagetitle = 'नया वीडियो जोड़े';

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
  echo form_open_multipart("admin/video/addVideo",['class'=>'form-horizontal']);
        //echo form_hidden('Temp_Id',$Temple_Val->Temp_Id);
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
                                            <label class="col-md-3 col-xs-12 control-label">वीडियो फाइल</label>
                                            <div class="col-md-6 col-xs-12">
                                                <?php 
                                                    echo form_upload(['name'=>'Video_File']); 
                                                ?>
                                                <div class="red-left">
                                                   <?php if(isset($upload_error) ) echo $upload_error ?>
                                                </div>
                                                
                                                <span class="help-block">वीडियो फाइल सेलेक्ट करे</span>
                                            </div>
                                        </div>                                                                      
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">वीडियो का नाम</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
<?php echo form_input(['name'=>'Video_Name','class'=>'form-control','placeholder'=>'वीडियो का नाम','value'=>set_value('Video_Name')]); 
echo form_error('Video_Name'); ?>
												
                                            </div>                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">वीडियो का लिंक</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
<?php


echo form_input(['name'=>'Video_Link','class'=>'form-control','placeholder'=>'वीडियो का लिंक','value'=>set_value('Video_Link')]);
 
?>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">वीडियो का विवरण</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon" style="vertical-align:top"></span>
<?php echo form_textarea(['name'=>'Video_Dtl','class'=>'form-control ckeditor','placeholder'=>'वीडियो का विवरण','value'=>set_value('Video_Dtl'),'cols' => 40, 'rows' => 4]); 


echo form_error('Video_Dtl'); ?>


                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">केटेगरी</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
                                               
<?php 
    $Cat_Val = array(
				  		'' =>'Select Category', 
                  'Hindi'  => 'Hindi',
                  'Marwadi'    => 'Marwadi',
				  'Local City'    => 'Local City',
                );
echo form_dropdown('Video_Cat', $Cat_Val, set_value('Video_Cat'),'class="form-control" ');
echo form_error('Video_Cat');
?>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Active</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
                                               
<?php 
    $Act_Val = array(
                  	 ''  => 'Please select',
				  'Yes'  => 'Yes',
                  'No'    => 'No',
                );
echo form_dropdown('Active', $Act_Val, set_value('Active'),'class="form-control" ');
echo form_error('Active');
?>
                                            </div>                                            
                                        </div>
                                    </div>
                                    
                                    
                                    
                                  <div class="panel-footer">
                                    
<?php echo form_submit(['name'=>'Submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
<button type="button" onclick="Javascript:window.location.href='<?=base_url('admin/video/index')?>';" class="btn btn-default pull-right">Back To Temple</button>  

                                </div>  	
                                </div>
                                
                            </div>
                
            </div>
<?php echo form_close(); ?>
            
        </div>
    </div>                    
    
</div>
<!-- END PAGE CONTENT WRAPPER --> 
<!-- ================== End of Adding Mukhiya ================== -->

<?php include_once realpath(dirname(__FILE__).'/../footer.php'); ?>