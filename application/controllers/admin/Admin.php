<?php
/**
 * Description of Admin
 *
 * @author Akash Nair
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	
		
	
	public function index()
	{
		if ($this->session->userdata('Userid'))
        { 
            redirect('admin/admin/dashboard');
        }
		
		
		$this->load->view('admin/admin');
	}

	public function admin_login()
	{
		$this->load->library('form_validation');
		// Validation form fields
		$this->form_validation->set_error_delimiters('<div class="red-left">', '</div>');
		
		if($this->form_validation->run('signup'))
		{	
			$username=$this->input->post('username');
			$password=$this->myHash($this->input->post('password'));
			
			$this->load->model('loginmodel');
			$Userid= $this->loginmodel->login_valid($username, $password);
			
			if($Userid){
				//credentials valid login..
				$this->session->set_userdata('Userid',$Userid);
				return redirect('admin/admin/dashboard');
			}else{
				// authentication failed..
				$this->session->set_flashdata('login_failed','Invalid Username or password');
				return redirect('admin/admin');
			}

		}else{
			
			$this->load->view('admin/admin');
		}
		
	}

	public function dashboard(){
		if ( ! $this->session->userdata('Userid'))
        { 
            redirect('admin/admin');
        }
		
		$this->load->model('Akashmodel','Nair');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="red-left">', '</div>');
		
		$TotalUser = $this->Nair->num_row_simple('tbl_users','user_id');
		$TotalArtical = $this->Nair->num_row_simple('nair_artical','Art_Id');
		$TotalTemple  = $this->Nair->num_row_simple('nair_temple','Temp_Id');
		$TotalParivar  = $this->Nair->num_row_simple('tbl_mukhiya','Main_Id');
		
		//$UserArtical = $this->Nair->artical_list();
		$UserArtical = $this->Nair->dashboardVal('nair_artical',['Art_Id','Artical_Title','Post_By','Active'],'Art_Id');
		$UserTemp = $this->Nair->dashboardVal('nair_temple',['Temp_Id','Temp_Name','Post_By','Active'],'Temp_Id');
		$UserNews = $this->Nair->dashboardVal('nair_news',['News_Id','NewsTitle','Post_By','Active'],'News_Id');
		
		$UserCmt = $this->Nair->_getMultiData('nair_comment',['Active'=>'No']);
		//$this->prd($UserCmt);
		
		$this->load->view('admin/dashboard',['TotalUser'=>$TotalUser,'TotalArtical'=>$TotalArtical, 'TotalTemple'=>$TotalTemple,'TotalParivar'=>$TotalParivar,'UserArtical'=>$UserArtical,'UserTemp'=>$UserTemp,'UserNews'=>$UserNews,'UserCmt'=>$UserCmt]);
	}

	public function admin_logout()
	{	
		$this->session->unset_userdata('Userid');
		return redirect('admin/admin');
	}
// ===========================================================================
}
