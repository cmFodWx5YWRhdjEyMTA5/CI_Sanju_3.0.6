<?php 

$pagetitleVal =	$Single_Rashi->Rashi_Name.' एडिट करे';

$pagetitle = $pagetitleVal;

include_once realpath(dirname(__FILE__).'/../header.php');

//$this->prd($Main_Id);
?>
<script>
	$(document).ready(function(){
        $('li#ortknw').addClass('active');
        $('li#rashifal').addClass('active');
	 });	
</script>
<!-- ================== Adding Mukhiya ================== -->

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><b>क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel  <?php //echo $Main_Id; ?></b></li>
    
</ul>

<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            

<?php 
	echo form_open_multipart("admin/rashifal/editRashi/{$Single_Rashi->Rashi_id}",['class'=>'form-horizontal']);
?>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong><?php echo $pagetitle ; ?></strong> </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                
                <div class="panel-body">  
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">राशि का फोटो</label>
                        <div class="col-md-6 col-xs-12">
                            <?php 
								echo form_upload(['name'=>'Rashi_Pic']);
								//echo (isset($error)) ? $error :'' 
							?>
                            <div class="red-left">
                               <?php if(isset($error) ) echo $error ;?>
                            </div>
                            
                            <span class="help-block">राशि का फोटो सेलेक्ट करे</span>
                        </div>
                    </div>                                                                      
                </div>    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">राशि के बारे में भरे</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php 
echo form_textarea(['name'=>'Rashi_fal','class'=>'form-control ckeditor','placeholder'=>'राशि के बारे में भरे','value'=>set_value('Rashi_fal', $Single_Rashi->Rashi_fal),'cols' => 40, 'rows' => 4]); 
echo form_error('Rashi_fal'); 
?>
                            </div>                                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Active</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php 
$Act_Val = array(
                  ' '  => 'Please Select Active',
				  'Yes'  => 'Yes',
                  'No'    => 'No',
				);
echo form_dropdown('Active', $Act_Val, set_value('Active',$Single_Rashi->Active),'class="form-control" ');

echo form_error('Active'); 
?>
                            </div>                                            
                        </div>
                    </div>
                  
                     
                  <div class="panel-footer">
                    
    <?php echo form_submit(['name'=>'Submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
                    <button class="btn btn-default pull-right">Clear Form</button>  
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