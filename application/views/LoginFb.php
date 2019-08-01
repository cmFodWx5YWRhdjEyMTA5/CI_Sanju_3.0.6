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
		$this->load->library('facebook');
		$this->load->model('Akashmodel','Nair');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="red-left">', '</div>');
    }
	public function index()
	{	
		if ($this->facebook->is_authenticated())
		{
			// User logged in, get user details
			$user = $this->facebook->request('get', '/me?fields=id,name,email');
			if (!isset($user['error']))
			{
				$data['user'] = $user;
			}

		}
	}
	public function user_info()
	{	
		
	}
	
	
}
