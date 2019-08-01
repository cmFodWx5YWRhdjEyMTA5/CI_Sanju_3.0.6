<?php
/**
 * Description of LoginFb Controller
 *
 * @author Aakash Nair
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginFb extends CI_Controller {
	public function __construct() 
	{
	       	parent::__construct();
		
		$this->load->model('Akashmodel','Nair');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="red-left">', '</div>');
    	}
	public function index()
	{	
		$data['user'] = array();
		// Check if user is logged in
		if ($this->facebook->is_authenticated())
		{
			// User logged in, get user details
$user = $this->facebook->request('get', '/me?fields=id,name,first_name,last_name,email,gender,picture');

				if (!isset($user['error']))
				{
					$data['user'] = $user;
				}
				//$this->prd( $user );
$this->session->set_userdata(['user_id'=>$data['user']->id, 'UserName'=>$user->name,'user_fname'=>$user->first_name,'user_lname'=>$user->last_name,'user_email'=>$user->email,'User_Thumb'=>$user->picture]);
				$this->load->view('fb_data',['user'=>$user]);
				
		}else{
			$this->load->view('login_fb');
		}
	}
	
	public function user_info()
	{
		
		
	}
	public function logout()
	{
		$this->facebook->destroy_session();
		redirect('loginFb');
	}
	 
	
}
