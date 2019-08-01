<?php
/**
 * Description of Rashifal Controller
 *
 * @author Aakash Nair
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Panchang extends MY_Controller 
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
		$Panchang = $this->Nair->_tbldata('tbl_panchang','panchang_id');
		$this->load->view('admin/panchang/index',['Panchang'=>$Panchang]);
	}
	public function editPanchang($panchang_id)
	{
		$PanchangVal = $this->Nair->_getSingleData('tbl_panchang',['panchang_id'=>$panchang_id]);
			if( $post = $this->input->post() )
			{		unset($post['Submit']);
					$post['panchang_dtl'] = $this->input->post('panchang_dtl', FALSE);
					if($this->form_validation->run('Panchang_Rules'))
					{
						if($this->Nair->_update('tbl_panchang',$post,['panchang_id'=>$panchang_id]))
						{
							$this->session->set_flashdata('error_msg',"Failed to Update Panchang, Please try again");	
						}else{
							$this->session->set_flashdata('error_msg',"Panchang Update Successful");
						}
						return redirect('admin/panchang/index');
					}
					$this->load->view('admin/panchang/editPanchang', ['PanchangVal'=>$PanchangVal]);
			}else{
				$this->load->view('admin/panchang/editPanchang', ['PanchangVal'=>$PanchangVal]);
			}
	}
	

//============================================================================================================
}