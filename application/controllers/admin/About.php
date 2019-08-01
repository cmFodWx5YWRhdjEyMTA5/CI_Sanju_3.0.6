<?php
/**
 * Description of About  Controller
 *
 * @author Aakash Nair
 */ 
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller 
{
	
//================================== Rashifal Master ================================== tbl_rashifal
	public function __construct() 
	{
		parent::__construct();
		if (!$this->session->userdata('Userid'))
        { 
			$this->session->set_flashdata('login_failed',"Please Login...");
            redirect('admin/admin');
        }
		$this->load->model('commodel','Vdi');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="red-left">', '</div>');
    }
	public function index()
	{	
		
		$Video = $this->Vdi->_tbldata('nair_video','Video_Id' );
		//$this->prd($Video);
		$this->load->view('admin/video/index',['Video'=>$Video]);
	}
	public function addVideo()
	{
		$this->load->view('admin/video/addVideo');	
	}
	public function StoreVideo()
	{
		$post = $this->input->post();
		unset($post['Submit']);
		$post['Post_By']='Admin';
		$post['Video_Date']=date('Y-m-d');
		
		if($this->form_validation->run('Vdi_Rules') )
		{											  //($table, $data, $condition)
			if($insert_id = $this->Vdi->_insert('nair_video',$post ) )
				{
			   		$this->session->set_flashdata('error_msg',"Video Update Successful");
			  	}else{
				$this->session->set_flashdata('error_msg',"Failed to Update Video, Please try again");
			}
		
				return redirect('admin/video/index');
			}else{
				$this->load->view('admin/video/addVideo');	
		}		
	}
	//$this->commonmodel->_update("users", array("password" => $encriptPass), array("email" => $email))
	public function editVideo($Video_Id)
	{
		$VdiVal = $this->Vdi->_getSingleData('nair_video',['Video_Id'=>$Video_Id,]);
		//$this->prd($VdiVal);
		$this->load->view('admin/video/editVideo', ['VdiVal'=>$VdiVal]);
		
	}
	public function updateVideo($Video_Id)
	{	
		$VdiVal = $this->Vdi->_getSingleData('nair_video',['Video_Id'=>$Video_Id,]);
		$post = $this->input->post();
		unset($post['Submit']);
		
		$post['Post_By']='Admin';
		$post['Video_Date']=date('Y-m-d');
		
		if($this->form_validation->run('Vdi_Rules') )
		{											  //($table, $data, $condition)
			if($insert_id = $this->Vdi->_update('nair_video',$post,['Video_Id'=>$Video_Id] ) )
				{
			   		$this->session->set_flashdata('error_msg',"Video Update Successful");
			  	}else{
				$this->session->set_flashdata('error_msg',"Failed to Update Video, Please try again");
			}
		
				return redirect('admin/video/index');
			}else{
				$this->load->view('admin/video/editVideo', ['VdiVal'=>$VdiVal]);	
		}
		
	}	
	public function delVideo()
	{	
		
		$Video = $this->Vdi->_tbldata('nair_video','Video_Id' );
		//$this->prd($Video);
		$this->load->view('admin/video/index',['Video'=>$Video]);
	}
//============================================================================================================	
//============================================================================================================
}