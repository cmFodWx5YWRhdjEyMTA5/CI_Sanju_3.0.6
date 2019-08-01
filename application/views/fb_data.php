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
        
	<h1>Facebook Data are here </h1>
	<?php var_dump($user); ?>
    <br /><br />
    
    	<ul>
                <li>User ID : <?php echo $user['id']; ?></li><br />
                <li>UserName : <?php echo $user['name']; ?></li><br />
		<li>First Name : <?php echo $user['first_name']; ?></li><br />
		<li>First Name : <?php echo $user['last_name']; ?></li><br />
		<li>First Name : <?php echo $user['last_name']; ?></li><br />
		<li>First Name : <?php echo $user['email']; ?></li><br />
                <li>First Name : <?php echo $user['gender']; ?></li><br />
                <li><img class="img-thumbnail"  src="<?php echo $user['picture']['data']['url']; ?>" ></li><br />
        </ul>
    
    <br /><br />
   	<a href="<?php echo $this->facebook->login_url(); ?>">Logout</a>
    </div>
</section>


<?php 
include_once ("footer.php");
?>