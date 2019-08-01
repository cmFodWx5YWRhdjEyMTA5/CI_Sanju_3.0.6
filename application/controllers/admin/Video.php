<?php
/**
 * Description of Video Controller
 *
 * @author Aakash Nair
 */ 
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends MY_Controller 
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
		
		$Video = $this->Nair->_tbldata('nair_video','Video_Id' );
		//$this->prd($Video);
		$this->load->view('admin/video/index',['Video'=>$Video]);
	}
	public function addVideo()
	{
			if($post = $this->input->post())
			{
				unset($post['Submit']);
				$post['Post_By']='Admin';
				$post['Video_Date']=date('Y-m-d');
				$post['Video_Dtl'] = $this->input->post('Video_Dtl', FALSE);
				
					if( $this->form_validation->run('Vdi_Rules') )
					{
						if($insert_id = $this->Nair->_insert('nair_video',$post))
						{
							$this->session->set_flashdata('error_msg',"Add Video Successful");
							}else{
							$this->session->set_flashdata('error_msg',"Failed to add Video, Please try again");
						}
//======================= Loading Image Library and Config ========================================
						$Video_config = array();
							
						$Video_config['upload_path'] = './uploads/Video_File/';
						$Video_config['allowed_types'] = 'avi|mp4|3gp';
						$Video_config['file_name'] = date("d-M-Y").'__'.'Video_File'.'__'.rand(10000,9000);
						
						$this->load->library('upload',$Video_config);
						$userfile = "Video_File";
							if ( ! $this->upload->do_upload('Video_File'))
							{	  
						$error = $this->upload->display_errors();
					 	$this->load->view('admin/video/addVideo');
					
				
					}else{	
							$data = $this->upload->data();
							
							$Video_File = $data['raw_name'].$data['file_ext'] ;
							
							$post['Video_File'] = $Video_File;
						
							$this->Nair->_update('nair_video',$post,['Video_Id'=>$insert_id] );
					}
					
						return redirect('admin/video/index');
					}
				$this->load->view('admin/video/addVideo');
			}else{
				$this->load->view('admin/video/addVideo');
			}
	}
	public function editVideo($Video_Id)
	{	
			$VdiVal = $this->Nair->_getSingleData('nair_video',['Video_Id'=>$Video_Id,]);
			if($post = $this->input->post())
			{
				unset($post['Submit']);
				$post['Video_Dtl'] = $this->input->post('Video_Dtl', FALSE);
				
					if( $this->form_validation->run('Vdi_Rules') )
					{
						if($this->Nair->_update('nair_video',$post,['Video_Id'=>$Video_Id]))
						{
							$this->session->set_flashdata('error_msg',"Failed to Update Video, Please try again");	
							}else{
							$this->session->set_flashdata('error_msg',"Video Update Successful");
						}
//======================= Loading Image Library and Config ========================================
						$Video_config = array();
							
						$Video_config['upload_path'] = './uploads/Video_File/';
						$Video_config['allowed_types'] = 'avi|mp4|3gp';
						$Video_config['file_name'] = date("d-M-Y").'__'.'Video_File'.'__'.rand(10000,9000);
						
						$this->load->library('upload',$Video_config);
						$userfile = "Video_File";
						
						$Del_Video = './uploads/Video_File/'.$VdiVal->Video_File;
						
							if ( ! $this->upload->do_upload('Video_File'))
							{	  
						$error = $this->upload->display_errors();
					 	$this->load->view('admin/video/addVideo');
					
				
					}else{	
							$data = $this->upload->data();
							@unlink($Del_Video);
							$Video_File = $data['raw_name'].$data['file_ext'] ;
							
							$post['Video_File'] = $Video_File;
						
							$this->Nair->_update('nair_video',$post,['Video_Id'=>$VdiVal->Video_Id] );
					}
					
						return redirect('admin/video/index');
					}
				$this->load->view('admin/video/editVideo', ['VdiVal'=>$VdiVal]);
			}else{
				$this->load->view('admin/video/editVideo', ['VdiVal'=>$VdiVal]);
			}
	}
	
	public function weditVideo($Video_Id)
	{
		$VdiVal = $this->Vdi->_getSingleData('nair_video',['Video_Id'=>$Video_Id,]);
		//$this->prd($VdiVal);
		$this->load->view('admin/video/editVideo', ['VdiVal'=>$VdiVal]);
		
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