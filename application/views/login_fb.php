<?php 
$pagetitle = 'Facebook Login Details...';
include_once ('header.php'); 

?>

<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>Loging With Facebook</h2>
			</div>
		</div>
</section>
	
<section class="blog-wrapper">
	<div class="container">
        
	<a href="<?php echo $this->facebook->login_url(); ?>">Login With Facebook</a>  
    
   
    </div>
</section>


<?php 
include_once ("footer.php");
?>