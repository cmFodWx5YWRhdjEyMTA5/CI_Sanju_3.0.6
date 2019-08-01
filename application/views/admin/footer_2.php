
 <!-- Logout MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            
                            <?php echo anchor('admin/admin/admin_logout','Yes',['class'=>'btn btn-success btn-lg'])?>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->


        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/J_STAR_HULARA.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->             
       
       
        <!-- START PLUGINS -->
        <script src="<?=base_url('admin_assets/js/plugins/jquery/jquery.min.js')?>"></script>
        <script src="<?=base_url('admin_assets/js/plugins/jquery/jquery-ui.min.js')?>"></script>
        <script src="<?=base_url('admin_assets/js/plugins/bootstrap/bootstrap.min.js')?>"></script>
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->  
        <script src="<?=base_url('admin_assets/js/plugins/icheck/icheck.min.js')?>"></script>

<script src="<?=base_url('admin_assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')?>"></script>       

<script src="<?=base_url('admin_assets/js/plugins/scrolltotop/scrolltopcontrol.js')?>"></script>
  
 <script src="<?=base_url('admin_assets/js/plugins/morris/raphael-min.js')?>"></script>
 <script src="<?=base_url('admin_assets/js/plugins/morris/morris.min.js')?>"></script>
 <script src="<?=base_url('admin_assets/js/plugins/rickshaw/d3.v3.js')?>"></script>
 <script src="<?=base_url('admin_assets/js/plugins/rickshaw/rickshaw.min.js')?>"></script>
 <script src="<?=base_url('admin_assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?>"></script> <script src="<?=base_url('admin_assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')?>"></script>      	
<script src="<?=base_url('admin_assets/js/plugins/bootstrap/bootstrap-datepicker.js')?>"></script>
 <script src="<?=base_url('admin_assets/js/plugins/owl/owl.carousel.min.js')?>"></script> 
 <script src="<?=base_url('admin_assets/js/plugins/moment.min.js')?>"></script>
 <script src="<?=base_url('admin_assets/js/plugins/daterangepicker/daterangepicker.js')?>"></script>

        <!-- WIZARD PLUGIN -->
<script src="<?=base_url('admin_assets/js/plugins/smartwizard/jquery.smartWizard-2.0.min.js')?>"></script>
<script src="<?=base_url('admin_assets/js/plugins/jquery-validation/jquery.validate.js')?>"></script>

        <!-- TAB PLUGIN -->
<script src="<?=base_url('admin_assets/js/plugins/bootstrap/bootstrap-file-input.js')?>"></script>
<script src="<?=base_url('admin_assets/js/plugins/bootstrap/bootstrap-select.js')?>"></script>
<script src="<?=base_url('admin_assets/js/plugins/tagsinput/jquery.tagsinput.min.js')?>"></script>
        
        <!-- TABLE PLUGIN -->
<script src="<?=base_url('admin_assets/js/plugins/datatables/jquery.dataTables.min.js')?>"></script>
        
		<!-- FILE PLUGIN -->
<script src="<?=base_url('admin_assets/js/plugins/dropzone/dropzone.min.js')?>"></script>
<script src="<?=base_url('admin_assets/js/plugins/fileinput/fileinput.min.js')?>"></script>

<script src="<?=base_url('admin_assets/js/plugins/filetree/jqueryFileTree.js')?>"></script>        
        <script>
            $(function(){
				
                $("#file-simple").fileinput({
                        showUpload: false,
                        showCaption: false,
                        browseClass: "btn btn-danger",
                        fileType: "any"
                });            
                $("#filetree").fileTree({
                    root: '/',
                    script: '../assets/filetree/jqueryFileTree.php',
                    expandSpeed: 100,
                    collapseSpeed: 100,
                    multiFolder: false                    
                }, function(file) {
                    alert(file);
                }, function(dir){
                    setTimeout(function(){
                        page_content_onresize();
                    },200);                    
                });                
            });            
        </script>
        
        
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script src="<?=base_url('admin_assets/js/settings.js')?>"></script>
        <script src="<?=base_url('admin_assets/js/plugins.js')?>"></script>
        <script src="<?=base_url('admin_assets/js/actions.js')?>"></script>
        <script src="<?=base_url('admin_assets/js/demo_dashboard.js')?>"></script>

       
</body>
</html>