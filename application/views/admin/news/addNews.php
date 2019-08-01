<?php 
$pagetitle = 'नयी न्यूज़ जोड़े';

include_once realpath(dirname(__FILE__).'/../header.php'); 
//$pagetitle ='Add परिवार';
?>
<script>
	$(document).ready(function() {
        $('li#news').addClass('active');
        $('li#addNews').addClass('active');
		});	
</script>
<!-- ================== Adding Mukhiya ================== -->

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><b>क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel</b></li>
    
</ul>

<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            

<?php 
  echo form_open_multipart("admin/news/addNews",['class'=>'form-horizontal']);
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
                                            <label class="col-md-3 col-xs-12 control-label">न्यूज़ फोटो</label>
                                            <div class="col-md-6 col-xs-12">
                                                <?php 
                                                    echo form_upload(['name'=>'News_Pic']); 
                                                ?>
                                               <div class="red-left">
                                                   <?php if(isset($upload_error) ) echo $upload_error ?>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">न्यूज़ का नाम</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
<?php echo form_input(['name'=>'NewsTitle','class'=>'form-control','placeholder'=>'न्यूज़ का नाम','value'=>set_value('NewsTitle')]); 
echo form_error('NewsTitle'); ?>
												
                                            </div>                                            
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">न्यूज़ का विवरण</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon" style="vertical-align:top"></span>
<?php echo form_textarea(['name'=>'NewsDtl','class'=>'form-control ckeditor','placeholder'=>'न्यूज़ का विवरण','value'=>set_value('NewsDtl'),'cols' => 40, 'rows' => 4]); 


echo form_error('NewsDtl'); ?>


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
<button type="button" onclick="Javascript:window.location.href='<?=base_url('admin/news/index')?>';" class="btn btn-default pull-right">Back To Temple</button>  

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