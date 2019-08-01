<?php 
$pagetitle = 'शहर के नाम';
include_once realpath(dirname(__FILE__)."/../header.php");

?>
<script>
	$(document).ready(function(){
        $('li#cityname').addClass('active');
        $('li#citylist').addClass('active');
	 });	
</script>
<!-- ================== End of header ================== -->

<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><b>क्षत्रिय गांछा समाज, प्रधान कार्यालय सुमेरपुर (राजस्थान) || Admin Panel</b></li>
        
    </ul>
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> शहर के नाम</h2>
</div>
<!-- END BREADCRUMB -->

<!--=================== PAGE CONTENT WRAPPER =================-->
    <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    
                                    <ul class="panel-controls">
<li style="width:50px;">
<a class="btn btn-success btn-rounded pull-left" href="<? echo base_url('admin/websys/adCity')?>">&nbsp;<i class="fa fa-plus"></i></a>
</li>
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>शहर के नाम</th>
                                                <th>शहर के अंग्रजी नाम</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php if( count($CityMst) ): ?>
                        					<?php foreach($CityMst as $res) : ?>
                                            <tr>
                                                <td><? echo $res->CityName; ?></td>
												<td><? echo $res->EngName; ?></td>
                                                <td>
													<table width="100%" border="0">
  <tr>
    <td>
<?= anchor("admin/websys/editCity/{$res->City_Id}",'Edit',['class'=>'btn btn-default btn-rounded btn-sm ','style'=>'margin-top:14px;']);?>

    </td>
    <td>
<?php echo
    form_open('admin/websys/delCity'),
    form_hidden('City_Id',$res->City_Id),
    
form_submit(['name'=>'submit','value'=>'Del','class'=>'btn btn-danger btn-rounded btn-sm fa fa-times', 'onclick'=>"return confirm('Are you sure want to delete this record')",'style'=>'margin-top:15px;']),
form_close();
?>
    </td>
  </tr>
</table>
												</td>
                                            </tr>
                                           <?php endforeach; ?>
                        					<?php else: ?>
                                            <tr>
                                                 <td  colspan="7">No Record Found...</td>
                                            </tr>
                                        <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->

                            

                        </div>
                    </div>                                
                    
                </div>
<!--=================== PAGE CONTENT WRAPPER =================-->



<!-- ================== footer Page ================== -->

<?php include_once realpath(dirname(__FILE__)."/../footer.php"); ?>