<?php 
$pagetitle = 'Adding परिवार मुखिया';
$PageClass = 'Add_Parivar';
include_once realpath(dirname(__FILE__).'/../header.php'); 
//$pagetitle ='Add परिवार';
?>
<script>
	$(document).ready(function() {
        $('li#Parivar').addClass('active');
        $('li#mukhiyAdd').addClass('active');
		});	
</script>
<!-- ================== Adding Mukhiya ================== -->

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><b>क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel</b></li>
    
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            

<?php echo form_open_multipart("admin/parivar/add_new_mukhiya",['class'=>'form-horizontal'])?>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>परिवार के मुखिया का विवरण </strong> </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                
                <div class="panel-body">  
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">मुखिया का फोटो</label>
                        <div class="col-md-6 col-xs-12">
                            <?php 
                                echo form_upload(['name'=>'Mukhiya_Pic']); 
                            ?>
                            <div class="red-left">
                               <?php if(isset($upload_error) ) echo $upload_error ?>
                            </div>
                            
                            <span class="help-block">मुखिया का फोटो सेलेक्ट करे</span>
                        </div>
                    </div>                                                                      
                </div>    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">मुखिया का नाम</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'Main_Person','class'=>'form-control','placeholder'=>'मुखिया का नाम','value'=>set_value('Main_Person')]); 
echo form_error('Main_Person'); ?>
                            </div>                                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">मुखिया का फ़ोन नंबर</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'Phone_No','class'=>'form-control','placeholder'=>'मुखिया का फ़ोन नंबर','value'=>set_value('Phone_No')]); 
echo form_error('Phone_No'); ?>
                            </div>                                            
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">पिता / पति का नाम</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php 
echo form_input(['name'=>'Father_Hubby','class'=>'form-control','placeholder'=>'पिता / पति का नाम
','value'=>set_value('Father_Hubby')]);

echo form_error('Father_Hubby'); 
?>


                            </div>                                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">माता का नाम</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'Mother_Name','class'=>'form-control','placeholder'=>'माता का नाम','value'=>set_value('Mother_Name')]);

echo form_error('Mother_Name'); 
?>
                            </div>                                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">गोत्र</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'Gotra','class'=>'form-control','placeholder'=>'गोत्र','value'=>set_value('Gotra')]); 
echo form_error('Gotra'); 
?>
                            </div>                                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">व्यवसाय</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'Occupation_Type','class'=>'form-control','placeholder'=>'व्यवसाय','value'=>set_value('Occupation_Type')]); 
echo form_error('Occupation_Type'); 
?>
                            </div>                                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">जिला</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php 
//echo form_dropdown('District_Name', $dropdown, '','class="form-control" ');

echo form_dropdown('District_Name', $dropdown, set_value('District_Name'),'class="form-control"');

echo form_error('District_Name'); 
?>
                            </div>                                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">सीटी और गाव</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php 
echo form_input(['name'=>'City_Place','class'=>'form-control','placeholder'=>'सीटी और गाव','value'=>set_value('City_Place')]);

echo form_error('City_Place'); 
?>
                            </div>                                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">स्थाई पता</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon" style="vertical-align:top;">@</span>
<?php echo form_textarea(['name'=>'Address','class'=>'form-control','placeholder'=>'स्थाई पता','value'=>set_value('Address'),'cols' => 40, 'rows' => 4]); 

echo form_error('Address'); 
?>
                            </div>                                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">अन्य विवरण</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon" style="vertical-align:top;">@</span>
<?php echo form_textarea(['name'=>'Other_Dtl','class'=>'form-control','placeholder'=>'अन्य विवरण','value'=>set_value('Other_Dtl'),'cols' => 40, 'rows' => 4]); 

//echo form_error('Other_Dtl'); 
?>
                            </div>                                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">कुल देवी व स्थल</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'Kuldevi_Place','class'=>'form-control','placeholder'=>'कुल देवी व स्थल','value'=>set_value('Kuldevi_Place')]); 
//echo form_error('Kuldevi_Place');
?>
                            </div>                                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">कुल भैरू व स्थल</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'Kul_Bhairav','class'=>'form-control','placeholder'=>'कुल भैरू व स्थल','value'=>set_value('Kul_Bhairav')]); ?>
                            </div>                                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">जात जडोलिया स्थल</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'Jadoliya_Place','class'=>'form-control','placeholder'=>'जात जडोलिया स्थल','value'=>set_value('Jadoliya_Place')]); ?>                                
                            </div>                                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">ई मेल</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'Mukhiya_Email','class'=>'form-control','placeholder'=>'ई मेल','value'=>set_value('Mukhiya_Email')]); 
echo form_error('Mukhiya_Email');
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
                  'Yes'  => 'Yes',
                  'No'    => 'No',
                );
echo form_dropdown('Active', $Act_Val, '','class="form-control" ');
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