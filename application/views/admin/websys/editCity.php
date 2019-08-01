<?php 

$pagetitleVal =  $CityMst->CityName.' शहर का नाम एडिट करे';

$pagetitle = $pagetitleVal;

include_once realpath(dirname(__FILE__).'/../header.php');

//$this->prd($Main_Id);
?>
<script>
	$(document).ready(function(){
        $('li#cityname').addClass('active');
        $('li#add_city').addClass('active');
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
	echo form_open_multipart("admin/websys/UpdateCity/{$CityMst->City_Id}",['class'=>'form-horizontal']);
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
                       <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">शहर का नाम</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'CityName','class'=>'form-control','placeholder'=>'शहर का नाम','value'=>set_value('CityName',$CityMst->CityName)]); 
echo form_error('CityName'); 
?>
                            </div>                                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">शहर के अंग्रजी नाम</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
<?php echo form_input(['name'=>'EngName','class'=>'form-control','placeholder'=>'शहर के अंग्रजी नाम','value'=>set_value('EngName',$CityMst->EngName)]); 
echo form_error('EngName'); 
?>
                            </div>                                            
                        </div>
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