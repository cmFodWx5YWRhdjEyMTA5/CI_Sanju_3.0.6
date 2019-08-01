<?php
$pagetitle = 'नयी आरती का विवरण';

include_once realpath(dirname(__FILE__).'./../header.php');
?>
<script>
	$(document).ready(function(){
        $('li#aarati').addClass('active');
		$('li#aaratiAdd').addClass('active');
    });	
</script>
<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">

<?php echo form_open_multipart('admin/aarati/add_aarati',['class'=>'form-horizontal'])?>
	<div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>नयी आरती का विवरण</strong></h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                
                                <div class="panel-body">  
                                	<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">आरती का फोटो</label>
                                        <div class="col-md-6 col-xs-12">                                      
										<?php 
                                            echo form_upload(['name'=>'Aarti_Pic']);
										?>    

<!--<input type="file" class="fileinput btn-primary" name="filename" id="filename" title="Browse file"/>-->
                                            <span class="help-block">Input type file</span>
                                        </div>
                                    </div>                                                                      
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">आरती का नाम</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
<?php 
echo form_input(['name'=>'Aarti_Title','class'=>'form-control','placeholder'=>'आरती का नाम','value'=>set_value('Aarti_Title')]); 
echo form_error('Aarti_Title'); 
?>
                                            </div>                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">आरती का लिंक</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                
<?php 
echo form_input(['name'=>'Aarti_Audio_Link','class'=>'form-control','placeholder'=>'आरती का लिंक','value'=>set_value('Aarti_Audio_Link')]); 
//echo form_error('Aarti_Title'); 
?>
                                            </div>                                            
                                        </div>
                                    </div>
                                   
                                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Active</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
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
                                        <label class="col-md-3 col-xs-12 control-label">आरती का विवरण</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                       <span class="input-group-addon" style="vertical-align:top"><span class="fa fa-pencil"></span></span>
<?php echo form_textarea(['name'=>'Aarti_Dtl','class'=>'form-control ckeditor','placeholder'=>'आरती का विवरण','value'=>set_value('Aarti_Dtl'),'cols' => 40, 'rows' => 4]); 

echo form_error('Aarti_Dtl'); 
?>
                                            </div>                                            
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">आरती की ऑडियो फाइल</label>
                                        <div class="col-md-6 col-xs-12">                                      
										 
<?php 	echo form_upload(['name'=>'Aarti_Audio']);?>
<!--<input type="file" class="fileinput btn-primary" name="filename" id="filename" title="Browse file"/>-->
                                            <span class="help-block">Input type file</span>
                                        </div>
                                    </div>
<div class="panel-footer">
                                    
<?php echo form_submit(['name'=>'Submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
<button type="button" onclick="Javascript:window.location.href='<?php base_url("admin/aarati/index")?>'" class="btn btn-default pull-right">Back To Artical</button> 
                                </div>
                                
                                    	
                                </div>
                                
                            </div>
<?php echo form_close(); ?>                           
    	</div>
    </div>                    
</div>

<?php include_once realpath(dirname(__FILE__).'./../footer.php')?>