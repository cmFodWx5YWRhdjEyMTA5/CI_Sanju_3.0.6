<div class="dmtop">Scroll to Top</div>
        
   <!-- end #footer-style-1 -->    
	<div id="copyrights">
    	<div class="container">
			<div class="col-lg-5 col-md-6 col-sm-12">
            	<div class="copyright-text">
                    <p>Copyright © 2014 - Designed by Jolly Themes</p>
                </div><!-- end copyright-text -->
			</div><!-- end widget -->
			<div class="col-lg-7 col-md-6 col-sm-12 clearfix">
				<div class="footer-menu">
                    <ul class="menu">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
			</div><!-- end large-7 --> 
        </div><!-- end container -->
    </div>
    <!-- end copyrights -->

<div class="dmtop">Scroll to Top</div>
        
  <!-- Main Scripts-->
  <script src="<?=base_url('ckeditor/ckeditor.js')?>"></script>
  <?php /*?><script src="<?=base_url('ckeditor/config.js')?>"></script><?php */?>

  
  <script src="<?=base_url('js/bootstrap.min.js')?>"></script>
  <script src="<?=base_url('js/menu.js')?>"></script>
  <script src="<?=base_url('js/owl.carousel.min.js')?>"></script>
  <script src="<?=base_url('js/jquery.parallax-1.1.3.js')?>"></script>
  <script src="<?=base_url('js/jquery.simple-text-rotator.js')?>"></script>
  <script src="<?=base_url('js/wow.min.js')?>"></script>
  
  <script src="<?=base_url('js/custom.js')?>"></script>
  
  <script src="<?=base_url('js/jquery.isotope.min.js')?>"></script>
  <script src="<?=base_url('js/custom-portfolio-masonry.js')?>"></script>
  
  <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
  <script src="<?=base_url('rs-plugin/js/jquery.themepunch.plugins.min.js')?>"></script>
  <script src="<?=base_url('rs-plugin/js/jquery.themepunch.revolution.min.js')?>"></script>
  <script type="text/javascript">
		jQuery(document).ready(function() {
		jQuery('.fullwidthbanner').revolution(
		{
		delay:5000,
		startwidth:1180,
		startheight:700,
		hideThumbs:10
		});
		});
  </script>
  
  
      
  <!-- Royal Slider script files -->
  <script src="<?=base_url('royalslider/jquery.easing-1.3.js')?>"></script>
  <script src="<?=base_url('royalslider/jquery.royalslider.min.js')?>"></script>
  
 
  

  <!-- Affix menu -->
<script>
	(function($) {
	  "use strict";
			$("#header-style-1").affix({
			offset: {
			  top: 100
			, bottom: function () {
				return (this.bottom = $('#copyrights').outerHeight(true))
			  }
			}
		})
	})(jQuery);
</script>

  <!-- Demo Switcher JS -->
  <script src="<?=base_url('switcher/js/fswit.js')?>"></script>
  <script src="<?=base_url('switcher/js/bootstrap-select.js')?>"></script>
  
  
</body>
</html>