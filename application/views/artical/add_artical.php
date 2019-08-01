<?php 
$pagetitle = 'आर्टिकल का विवरण';
include_once realpath(dirname(__FILE__).'/../header.php'); 
//$pagetitle ='Add परिवार';
?>

<!-- ================== Adding Mukhiya ================== -->

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><b>क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel</b></li>
    
</ul>
<?php
        // loading Combobox Value
        $this->load->model('articlesmodel', 'artical');
		$dropdown = $this->artical->Get_District_Name();

        //echo BASEPATH; 
?>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            


<?php echo form_open_multipart('admin/artical/store_artical',['class'=>'form-horizontal'])?>

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
                                            <label class="col-md-3 col-xs-12 control-label">आर्टिकल फोटो</label>
                                            <div class="col-md-6 col-xs-12">
                                                <?php 
                                                    echo form_upload(['name'=>'Artical_Img']); 
                                                ?>
                                                <div class="red-left">
                                                   <?php if(isset($upload_error) ) echo $upload_error ?>
                                                </div>
                                                
                                                <span class="help-block">आर्टिकल का फोटो सेलेक्ट करे</span>
                                            </div>
                                        </div>                                                                      
                                    </div>                                                                      
                                   
                                   <div class="form-group">
                        				<label class="col-md-3 col-xs-12 control-label">आर्टिकल का नाम</label>
                        				<div class="col-md-6 col-xs-12">                                            
                            			<div class="input-group">
                                			<span class="input-group-addon"></span>
<?php 
echo form_input(['name'=>'Artical_Title','class'=>'form-control','placeholder'=>'आर्टिकल का नाम','value'=>set_value('Artical_Title')]); 
echo form_error('Artical_Title'); 
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
echo form_dropdown('Active', $Act_Val, '','class="form-control" ');
?>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">आर्टिकल का विवरण</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                              <span class="input-group-addon" style="vertical-align:top"></span>
<?php echo form_textarea(['name'=>'Artical_Dtl','class'=>'form-control summernote','placeholder'=>'आर्टिकल का विवरण','value'=>set_value('Artical_Dtl'),'cols' => 40, 'rows' => 4]); 

echo form_error('Artical_Dtl'); 
?>
                                            </div>                                            
                                        </div>
                                    </div>
                                    
                                    
                                  <div class="panel-footer">
                                    
<?php echo form_submit(['name'=>'Submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
<button type="button" onclick="Javascript:window.location.href='<?php base_url("admin/artical/index")?>'" class="btn btn-default pull-right">Back To Artical</button> 
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

<?php include_once realpath(dirname(__FILE__)."/../footer.php"); ?>