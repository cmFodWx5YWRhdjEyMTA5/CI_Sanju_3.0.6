<?php 
$pagetitle = $this->session->userdata('UserName').' '.'के द्वारा पोस्ट मंदिरों की लिस्ट';
include_once ('header.php'); 

?>
<script language = "Javascript">
$(document).ready(function() {
          $('li#temple').addClass('active');
		  $('li#homepage').removeClass('active');
        });
</script>
	<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2><?php echo $this->session->userdata('UserName').' '.'के द्वारा पोस्ट मंदिरों की लिस्ट';?></h2>

			</div>
		</div>
	</section>
    
    <section class="blog-wrapper">
    	<div class="container">
        	<div id="content" class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="row">
                   <div class="">
                        <div class="">
			<div class="shop_wrapper col-lg-12 col-md-9 col-sm-12 col-xs-12" style="float:left;">
				<div class="table-responsive">
                <table class="cart_table table table-hover">
                    <thead style="text-align:center;">
                    <tr>
                      <th width="17">क्र.</th>
                      <th width="70">फोटो</th>
                      <th width="119">मंदिर का नाम</th>
                      <th width="112">आर्टिकल का विवरण</th>
                      <th width="43">Active</th>
                      <th width="53">पोस्ट डेटस</th>
                      <th width="77">ACTION</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  	<?php
						if(is_array($User_Temp) and count($User_Temp)>0){
							$count = $this->uri->segment(3);
							
							foreach($User_Temp as $TempVal){
					?>
                    <tr>
                      <td><?php echo ++$count; ?></td>
                      <td>
                      	 	<?php 
							if($TempVal->Temp_Thumb =='')
							{ //$res['NewsTitle']
						?>
			<img class="img-responsive alignleft" width="65" src="<?php echo base_url('uploads/no-news.png')?>" >
            					<?php }else{ ?>
			<img class="img-thumbnail" class="img-responsive alignleft" width="65" src="<?php echo base_url('uploads/Temple_Pic/Temp_Thumb/'.$TempVal->Temp_Thumb)?>" width="330" height="185"/>
            					<? }?>	
                       </td>
                      <td><?php echo substr($TempVal->Temp_Name,0,52).' ...';?></td>
                      <td>
					  		<?php 
								echo substr($TempVal->Temp_Dtl,0,100).' ...';
							?>
                       </td>
                      <td><?php echo $TempVal->Active?></td>
                      <td><?php echo date('d M Y', strtotime($TempVal->Post_Date))?></td>
                      
                      <td>
                      	<!--<a class="remove" title="Remove this item" href="#"></a>-->
                        <table width="100%" border="0">
  <tr>
    <td>
<?= anchor("user/editTemp/{$TempVal->Temp_Id}",'Edit',['class'=>'btn btn-primary','style'=>'margin-top:14px;']);?>
    </td>
    
  </tr>
</table>
                      </td>
                    </tr>
                  	<?php
								}
								}else{ ?>
                    <tr>
                    	<td colspan="7" align="center">
                        	<img src="<?php echo base_url('uploads/DataNotFound.jpg')?>" >
                        </td>
                    </tr>
					<?php  } ?>
                  </tbody>
                  
                </table>
                </div>
            		<div class="pagination_wrapper">
               <?php echo $this->pagination->create_links();?>
            </div>    	
            </div>
            
                            <div class="clearfix"></div>
                            <hr>
                            
                        </div><!-- end col-lg-12 -->
					</div><!-- end blog-masonry -->
            	</div><!-- end row --> 
            </div><!-- end content -->
            
			<div id="" class="col-lg-3 col-md-4 col-sm-12 col-xs-12" style="">
                <div class="widget">
					<div class="title"><h1>Navigation</h2></div>
                    	
                 
                 
                    <ul class="nav nav-tabs nav-stacked">
                        <li id="profile"><a href="<?php echo base_url('user/dashboard')?>">My Profile</a></li>
                        <li id="temple"><a href="<?php echo base_url('user/usertemp')?>">मंदिर की लिस्ट</a></li>
                        <li id="newTemple"><a href="<?php echo base_url('user/addUserTemp')?>">नया मंदिर जोड़े</a></li>
                        
                        <li id="Artical"><a href="<?php echo base_url('user/userartical')?>">आर्टिकल की लिस्ट</a></li>
                        <li id="newArtical"><a href="<?php echo base_url('user/addArt')?>">नया आर्टिकल जोड़े</a></li>
                        
                        <li id="newsList"><a href="<?php echo base_url('user/usernews')?>">न्यूज़ की लिस्ट</a></li>
                        <li id="addNews"><a href="<?php echo base_url('user/addnews')?>">नयी न्यूज़ जोड़े</a></li>
                        
                        
                    </ul>                              
				</div><!-- end widget -->
			</div><!-- end sidebar -->
    	</div><!-- end container -->
    </section>
    

<?php
include_once ("footer.php");
?>