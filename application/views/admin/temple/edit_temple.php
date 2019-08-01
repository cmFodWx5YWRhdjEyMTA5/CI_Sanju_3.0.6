<?php 
$pagetitle = 'मंदिर का विवरण';

include_once realpath(dirname(__FILE__).'/../header.php'); 
//$pagetitle ='Add परिवार';
?>
<script>
	$(document).ready(function(){
        $('li#temple').addClass('active');
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
  echo form_open_multipart("admin/temple/updateTemp/{$TempVal->Temp_Id}",['class'=>'form-horizontal']);
?>

            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>मंदिर का विवरण</strong></h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                
                                <div class="panel-body">  
                                    <div class="panel-body">  
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">मंदिर का फोटो</label>
                                            <div class="col-md-6 col-xs-12">
                                                <?php 
                                                    echo form_upload(['name'=>'Temple_Pic']); 
                                                ?>
                                                <div class="red-left">
                                                   <?php if(isset($upload_error) ) echo $upload_error ?>
                                                </div>
                                                
                                                <span class="help-block">मंदिर का फोटो सेलेक्ट करे</span>
                                            </div>
                                        </div>                                                                      
                                    </div>                                                                      
                                   
                                   <div class="form-group">
                        				<label class="col-md-3 col-xs-12 control-label">मंदिर का नाम</label>
                        				<div class="col-md-6 col-xs-12">                                            
                            			<div class="input-group">
                                			<span class="input-group-addon"></span>
<?php 
echo form_input(['name'=>'Temp_Name','class'=>'form-control','placeholder'=>'मंदिर का नाम','value'=>set_value('Temp_Name',$TempVal->Temp_Name)]); 
echo form_error('Temp_Name'); 
?>
                            			</div>                                            
                        				</div>
                    				</div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">गॉव का नाम</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
<?php
echo form_input(['name'=>'VillageName','class'=>'form-control','placeholder'=>'गॉव का नाम','value'=>set_value('VillageName',$TempVal->VillageName)]); 
echo form_error('VillageName');

?>
                                            </div>                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">जिले का नाम</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
<?
echo form_dropdown('Dist_Name', $dropdown, set_value('Dist_Name',$TempVal->Dist_Name),'class="form-control"');

echo form_error('Dist_Name'); 

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
                  'Yes'  => 'Yes',
                  'No'    => 'No',
                );
echo form_dropdown('Active', $Act_Val, set_value('Active',$TempVal->Active),'class="form-control" ');
?>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">मंदिर का विवरण</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                              <span class="input-group-addon" style="vertical-align:top"></span>
<?php echo form_textarea(['name'=>'Temp_Dtl','class'=>'form-control ckeditor','placeholder'=>'मंदिर का विवरण','value'=>set_value('Temp_Dtl',$TempVal->Temp_Dtl),'cols' => 40, 'rows' => 4]); 

echo form_error('Temp_Dtl'); 
?>
                                            </div>                                            
                                        </div>
                                    </div>
                                    
                                    
                                  <div class="panel-footer">
                                    
<?php echo form_submit(['name'=>'Submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
<button type="button" onclick="Javascript:window.location.href='<?php base_url('admin/temple/index')?>'" class="btn btn-default pull-right">Back To Temple</button> 
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