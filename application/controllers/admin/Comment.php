<?php
/**
 * Description of Comment Controller
 *
 * @author Aakash Nair
 */ 
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends MY_Controller 
{
	public function __construct() 
	{
		
		parent::__construct();
		if (!$this->session->userdata('Userid'))
        { 
			$this->session->set_flashdata('login_failed',"Please Login...");
            redirect('admin/admin');
        }
		//$this->load->model('Aaratimodel','Arati');
		$this->load->model('Akashmodel','Nair');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="red-left">', '</div>');
	
	}
//================================== Rashifal Master ================================== tbl_rashifal
	public function index()
	{	
		$Comment = $this->Nair->Comment_List();
		$this->load->view('admin/comment/index',['Comment'=>$Comment]);
	}
	public function editComment($Cmt_Id)
	{
		$CmtVal = $this->Nair->_getSingleData('nair_comment',['Cmt_Id'=>$Cmt_Id,]);
			if( $post = $this->input->post() )
			{	unset($post['Submit']);
					if($this->form_validation->run('Cmt_Rules'))
					{
						if($this->Nair->_update('nair_comment',$post,['Cmt_Id'=>$Cmt_Id]))
						{
							$this->session->set_flashdata('error_msg',"Failed to Update Comment, Please try again");
						}else{
							$this->session->set_flashdata('error_msg',"Comment Update Successful");
						}
						return redirect('admin/comment/index');
					}
					$this->load->view('admin/comment/editComment', ['CmtVal'=>$CmtVal]);
			}else{
				$this->load->view('admin/comment/editComment', ['CmtVal'=>$CmtVal]);
			}
	}
	
//============================================================================================================
}