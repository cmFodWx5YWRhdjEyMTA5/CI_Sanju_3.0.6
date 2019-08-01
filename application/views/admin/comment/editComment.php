<?php 

$pagetitleVal =	$CmtVal->Cmt_On_Post.' का कमेंट एडिट करे';

$pagetitle = $pagetitleVal;

include_once realpath(dirname(__FILE__).'/../header.php');

//$this->prd($Main_Id);
?>
<script>
	$(document).ready(function(){
        $('li#ortknw').addClass('active');
        $('li#panchang').addClass('active');
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
	echo form_open_multipart("admin/comment/editComment/{$CmtVal->Cmt_Id}",['class'=>'form-horizontal']);
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
                        
                    </div>                                                                      
                </div>    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">कमेंट का विवरण</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php 
echo form_textarea(['name'=>'Comment_Dtl','class'=>'form-control','placeholder'=>'आज का पंचांग भरे','value'=>set_value('panchang_dtl', $CmtVal->Comment_Dtl),'cols' => 40, 'rows' => 4]); 
echo form_error('Comment_Dtl'); 
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
echo form_dropdown('Active', $Act_Val, set_value('Active',$CmtVal->Active),'class="form-control" ');

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