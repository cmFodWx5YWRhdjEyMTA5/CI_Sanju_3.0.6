<?php 
$pagetitle = $MukhiyaName->Main_Person.' के परिवार के मेंबर जोड़े';

include_once realpath(dirname(__FILE__).'/../header.php'); 

//$this->prd($data);
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
    <li><b>क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel  <?php //echo $data; ?></b></li>
    
</ul>

<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            

<?php 
	echo form_open_multipart("admin/parivar/addmem/{$MukhiyaName->Main_Id}",['class'=>'form-horizontal']);
?>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong><?=$pagetitle?></strong> </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                
                <div class="panel-body">  
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">मेंबर का फोटो</label>
                        <div class="col-md-6 col-xs-12">
                            <?php 
								
                                echo form_upload(['name'=>'Meb_Pic']); 
                            ?>
                            <div class="red-left">
                               <?php if(isset($upload_error) ) echo $upload_error ?>
                            </div>
                            
                            <span class="help-block">मेंबर का फोटो सेलेक्ट करे</span>
                        </div>
                    </div>                                                                      
                </div>    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">मेंबर का नाम</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'Meb_Name','class'=>'form-control','placeholder'=>'मेंबर का नाम','value'=>set_value('Meb_Name')]); 
echo form_error('Meb_Name'); ?>
                            </div>                                            
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Gender</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php 
    $Act_Val = array(
				  ' '	  => 'Please Select Gender',
                  'Male'  => 'Male',
                  'Female'    => 'Female',
                );
echo form_dropdown('Gender', $Act_Val, set_value('Gender'),'class="form-control" ');
echo form_error('Gender');
?>
                           </div>                                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">उम्र</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'Birth_Date','class'=>'form-control','placeholder'=>'उम्र','value'=>set_value('Birth_Date')]);

echo form_error('Birth_Date'); 
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
				  'Self'  => 'Self',
                  'Brother'    => 'Brother',
				  'Son'    => 'Son',
				  'Daughter'    => 'Daughter',
				  'Bahu'    => 'Bahu',
				  'Father'    => 'Father',
				  'Siter'    => 'Siter',
                );
echo form_dropdown('Relation_Type', $Act_Val, set_value('Relation_Type'),'class="form-control" ');

echo form_error('Relation_Type'); 
?>
                            </div>                                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">विवाहित</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php 
$Dp_Val = array(
                  'No'    => 'No',
				  'Yes'  => 'Yes',
				);
echo form_dropdown('Married', $Dp_Val, '','class="form-control" ');

?>
                            </div>                                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">व्यवसाय</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'Job_Type','class'=>'form-control','placeholder'=>'व्यवसाय','value'=>set_value('Job_Type')]); 
echo form_error('Job_Type'); 
?>
                            </div>                                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">बच्चो की संख्या</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php 
echo form_input(['name'=>'No_Of_Child','class'=>'form-control','placeholder'=>'बच्चो की संख्या','value'=>set_value('No_Of_Child')]);

//echo form_error('No_Of_Child'); 
?>
                            </div>                                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">कार्य स्थल</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon" style="vertical-align:top;">@</span>
<?php echo form_input(['name'=>'Work_Place','class'=>'form-control','placeholder'=>'कार्य स्थल','value'=>set_value('Work_Place')]);

echo form_error('Work_Place'); 
?>
                            </div>                                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">ससुराल स्थल</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon" style="vertical-align:top;">@</span>
<?php echo form_input(['name'=>'Sasural_Place','class'=>'form-control','placeholder'=>'ससुराल स्थल','value'=>set_value('Sasural_Place')]); 

//echo form_error('Sasural_Place'); 
?>
                            </div>                                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">शै योगीयता</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'Education','class'=>'form-control','placeholder'=>'शै योगीयता','value'=>set_value('Education')]); 
echo form_error('Education');
?>
                            </div>                                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">फ़ोन नंबर</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'Phone_No','class'=>'form-control','placeholder'=>'फ़ोन नंबर','value'=>set_value('Phone_No')]); 

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