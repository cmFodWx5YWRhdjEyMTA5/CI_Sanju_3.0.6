<?php 
if(is_array($Female_List) && count($Female_List) > 0) {
$pagetitleVal = ' '.$Female_List[0]->Main_Person.' के परिवार की महिला मेंबर';
}else{
$pagetitleVal =	'परिवार की महिला मेंबर का नाम जोड़े ';
}
$pagetitle = $pagetitleVal;

include_once realpath(dirname(__FILE__).'/../header.php');

//$this->prd($Main_Id);
?>
<script>
	$(document).ready(function(){
        $('li#Parivar').addClass('active');
        $('li#mukhiyAdd').addClass('active');
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
	echo form_open_multipart("admin/parivar/storeFemale/{$Main_Id}",['class'=>'form-horizontal']);
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
                        <label class="col-md-3 col-xs-12 control-label">महिला का फोटो</label>
                        <div class="col-md-6 col-xs-12">
                            <?php 
								
                                echo form_upload(['name'=>'Meb_Pic']); 
                            ?>
                            <div class="red-left">
                               <?php if(isset($upload_error) ) echo $upload_error ?>
                            </div>
                            
                            <span class="help-block">महिला का फोटो सेलेक्ट करे</span>
                        </div>
                    </div>                                                                      
                </div>    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">महिला का नाम</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'FM_Name','class'=>'form-control','placeholder'=>'महिला का नाम','value'=>set_value('FM_Name')]); 
echo form_error('FM_Name'); 
?>
                            </div>                                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">सम्बंध</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php 
$Act_Val = array(
                  ' '  => 'Please Select Relation',
				  'Wife'  => 'Wife',
                  'Bahu'    => 'Bahu',
				  'Mother'    => 'Mother',
				  'Daughter'    => 'Daughter',
				);
echo form_dropdown('Relation_Type', $Act_Val, set_value('Relation_Type'),'class="form-control" ');

echo form_error('Relation_Type'); 
?>
                            </div>                                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">उम्र</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'FM_Dob','class'=>'form-control','placeholder'=>'उम्र','value'=>set_value('FM_Dob')]);

echo form_error('FM_Dob'); 
?>
                            </div>                                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">पति का नाम</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php 
echo form_input(['name'=>'FM_Hubby','class'=>'form-control','placeholder'=>'पति का नाम','value'=>set_value('FM_Hubby')]);
echo form_error('FM_Hubby');
?>
                            </div>                                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">पिता का नाम</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'FM_Fathere','class'=>'form-control','placeholder'=>'पिता का नाम','value'=>set_value('FM_Fathere')]); 
echo form_error('FM_Fathere'); 
?>
                            </div>                                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">पिहर स्थल</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php 
echo form_input(['name'=>'FM_PiharPlace','class'=>'form-control','placeholder'=>'पिहर स्थल','value'=>set_value('FM_PiharPlace')]);

echo form_error('FM_PiharPlace'); 
?>
                            </div>                                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">शै योग्यता</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon" style="vertical-align:top;">@</span>
<?php echo form_input(['name'=>'FM_Education','class'=>'form-control','placeholder'=>'शै योग्यता','value'=>set_value('FM_Education')]);

//echo form_error('Work_Place'); 
?>
                            </div>                                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">कार्य एव वर्ष</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon" style="vertical-align:top;">@</span>
<?php echo form_input(['name'=>'FM_JobType','class'=>'form-control','placeholder'=>'कार्य एव वर्ष','value'=>set_value('FM_JobType')]); 

//echo form_error('Sasural_Place'); 
?>
                            </div>                                            
                        </div>
                    </div>
                                       
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">फ़ोन नंबर</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'FM_Phone','class'=>'form-control','placeholder'=>'फ़ोन नंबर','value'=>set_value('FM_Phone')]); 

?>
                            </div>                                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">अन्य</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_textarea(['name'=>'FM_OtherDtl','class'=>'form-control','placeholder'=>'अन्य','value'=>set_value('FM_OtherDtl'),'cols' => 40, 'rows' => 4]); 

//echo form_error('Address'); 
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