<?php 
$pagetitle = 'आर्टिकल का विवरण';

include_once realpath(dirname(__FILE__)."/../header.php");


?>

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
  echo form_open_multipart("admin/artical/edit_artical/{$Art_Val->Art_Id}",['class'=>'form-horizontal']);
        //echo form_hidden('Temp_Id',$Temple_Val->Temp_Id);
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
                                            <label class="col-md-3 col-xs-12 control-label">आर्टिकल का नया फोटो सेलेक्ट करे</label>
                                            <div class="col-md-6 col-xs-12">
                                                <?php 
                                                    echo form_upload(['name'=>'Artical_Pic']); 
                                                ?>
                                                <div class="red-left">
                                                   <?php if(isset($upload_error) ) echo $upload_error ?>
                                                </div>
                                                
                                                <span class="help-block">मंदिर का फोटो सेलेक्ट करे</span>
                                            </div>
                                        </div>                                                                      
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">आर्टिकल का नाम</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
<?php echo form_input(['name'=>'Artical_Title','class'=>'form-control','placeholder'=>'आर्टिकल का नाम','value'=>set_value('VillageName',$Art_Val->Artical_Title)]); 
echo form_error('Artical_Title'); ?>
												
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
echo form_dropdown('Active', $Act_Val, set_value('Active', $Art_Val->Active),'class="form-control" ');
?>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">आर्टिकल का विवरण</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon" style="vertical-align:top"></span>
<?php echo form_textarea(['name'=>'Artical_Dtl','class'=>'form-control summernote','placeholder'=>'आर्टिकल का विवरण','value'=>set_value('Artical_Dtl',$Art_Val->Artical_Dtl),'cols' => 40, 'rows' => 4]); 


echo form_error('Artical_Dtl'); ?>


                                            </div>                                            
                                        </div>
                                    </div>
                                    
                                    
                                    
                                  <div class="panel-footer">
                                    
<?php echo form_submit(['name'=>'Submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
<button type="button" onclick="Javascript:window.location.href='<?=base_url('admin/artical/index')?>';" class="btn btn-default pull-right">Back To Artical</button>  

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