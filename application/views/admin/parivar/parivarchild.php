<?php 
if($Get_Father->Meb_Name !='') {

$pagetitleVal = ' '.$Get_Father->Meb_Name.' के बच्चे का विवरण';
}else{
$pagetitleVal =	$Get_Father->Meb_Name.' के बच्चे का नाम जोड़े ';
}
$pagetitle = $pagetitleVal;

$PageClass = 'Add_Parivar';
include_once realpath(dirname(__FILE__).'/../header.php'); 
//$pagetitle ='Add परिवार';

$Meb_id =  $Meb_id;

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
    <li><b>क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel  </b></li>
    
</ul>

<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            

<?php 
//echo form_open_multipart('admin/parivar/add_new_male',['class'=>'form-horizontal'])

	echo form_open_multipart("admin/parivar/parivarchild/{$Meb_id}",['class'=>'form-horizontal']);
//$Main_Id

?>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong><?php echo $Get_Father->Meb_Name; ?> के बच्चे का विवरण भरे</strong> </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                
                <div class="panel-body">  
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">बच्चे का फोटो</label>
                        <div class="col-md-6 col-xs-12">
                            <?php 
								
                                echo form_upload(['name'=>'Ch_Pic']); 
                            ?>
                            <div class="red-left">
                               <?php if(isset($upload_error) ) echo $upload_error ?>
                            </div>
                            
                            <span class="help-block">बच्चे का फोटो सेलेक्ट करे</span>
                        </div>
                    </div>                                                                      
                </div>    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">बच्चे का नाम</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'Ch_Name','class'=>'form-control','placeholder'=>'बच्चे का नाम','value'=>set_value('Ch_Name')]); 
echo form_error('Ch_Name'); ?>
                            </div>                                            
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">बच्चे के पिता का नाम</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php 
echo form_input(['name'=>'Ch_Father','class'=>'form-control','placeholder'=>'बच्चे के पिता का नाम','value'=>$Get_Father->Meb_Name, 'readonly'=>'true','style'=>'background-color: #F9F9F9; color:#999']); 
?>
                           </div>                                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">बच्चे की माता का नाम</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'Ch_Mother','class'=>'form-control','placeholder'=>'बच्चे की माता का नाम','value'=>set_value('Ch_Mother')]);

echo form_error('Ch_Mother'); 
?>
                            </div>                                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">बच्चे की उम्र</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'Ch_Dob','class'=>'form-control','placeholder'=>'बच्चे की उम्र','value'=>set_value('Ch_Dob')]);

echo form_error('Ch_Dob'); 
?>
                            </div>                                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">शैक्षणिक योग्यता</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php  
echo form_input(['name'=>'Ch_Eduction','class'=>'form-control','placeholder'=>'बच्चे की शैक्षणिक योग्यता','value'=>set_value('Ch_Eduction')]);

?>
                            </div>                                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">फोन न.</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php  
echo form_input(['name'=>'Ch_Phone','class'=>'form-control','placeholder'=>'बच्चे का फोन न.','value'=>set_value('Ch_Phone')]);

?>
                            </div>                                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">अन्य विवरण</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span> 
<?php echo form_textarea(['name'=>'Ch_OtherDtl','class'=>'form-control','placeholder'=>'बच्चे अन्य विवरण जैसे डांस, योग, स्पोर्ट्स,पेंटिंग, होबी, कोई भी एक्टिविटी बताये','value'=>set_value('Ch_OtherDtl'),'cols' => 40, 'rows' => 4]);

//echo form_error('No_Of_Child'); 
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