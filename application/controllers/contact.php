<?php 
$pagetitle = 'Meet Our Team';
include_once ('header.php'); 

// यदि कोई दुर्बल मानव तुम्हारा अपमान करे तो उसे क्षमा कर दो, क्योंकि क्षमा करना ही वीरों का काम है, परंतु यदि अपमान करने वाला बलवान हो तो उसको अवश्य दण्ड दो 
?>


<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>Sanjay Kumar Sisodiya, Sumerpur  || Welcome to You</h2>
               
			</div>
		</div>
	</section>
    
    <section class="white-wrapper">
        <div class="container">
        
            <div class="general-title">

                <h2>Contact Us</h2>
                <hr>
                <p class="lead">Sanjay Kumar Sisodiya, Sumerpur || +91 9462771152</p>
            </div><!-- end general title -->    
            <div class="contact_form">
                <div id="message"></div>

<?php echo form_open_multipart("index/contact",['class'=>'form-horizontal']); ?>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <!--<input type="text" name="name" id="name" class="form-control" placeholder="Name">
                        <input type="text" name="name" id="email" class="form-control" placeholder="Email Address"> 
                        <input type="text" name="mobileno" id="mobileno" class="form-control" placeholder="Mobile No">  -->
                        
<?php 
	echo form_input(['name'=>'Mail_Name','class'=>'form-control','placeholder'=>'अपना नाम भरे','value'=>set_value('Mail_Name')]);  
	echo form_error('Mail_Name');
?>
<?php 
	echo form_input(['name'=>'Mail_Email','class'=>'form-control','placeholder'=>'अपना ईमेल भरे','value'=>set_value('Mail_Email')]);  
	echo form_error('Mail_Email');	
?>
<?php
	 echo form_input(['name'=>'Mail_Mobile','class'=>'form-control','placeholder'=>'अपना मोबाइल नंबर डाले','value'=>set_value('Mail_Mobile')]);  
	 echo form_error('Mail_Mobile');
?>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<?php 
	echo form_textarea(['name'=>'Msg_Dtl','class'=>'form-control','placeholder'=>'अपना मेसेज टाइप करे','value'=>set_value('Msg_Dtl'),'cols' => 40, 'rows' => 4]); 
	echo form_error('Msg_Dtl');
?>						<br />
                        <button type="submit" value="SEND" id="submit" class="btn btn-lg btn-primary pull-right">Send Msg</button>
                    </div>
                </form>    
            </div><!-- end contact-form -->
        </div><!-- end container -->
	</section>
<?php 
include_once ("footer.php");
?>