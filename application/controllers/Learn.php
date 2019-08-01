<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Learn extends My_Controller{
	
	public function encrypt_learn()
	{	
		echo 'encrypt';
		echo br(2);
		
		$this->load->library('encrypt');
		$pass = 'admin123';				
		$myEncrypt = $this->encrypt->encode->sha1($pass);
			
		echo $myEncrypt;
		echo br(2);
		//echo $pass;
		
		$myDecrypt = $this->encrypt->decode($myEncrypt);
		echo $myDecrypt;
		
	}
	
	public function myHashnew()
	{
		$this->load->helper('security');
		$pass = 'sanjay@1978';		
		$str = do_hash( $pass ); // MD5
		
		echo $str;
	}
	
	public function mydri()
	{
		$this->createDirectory('AkashNair');
		echo 'Password';
		echo br(2);
		
		$pass = 'admin123';
	}
	


	
}