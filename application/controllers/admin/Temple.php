<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temple extends MY_Controller 
{

	public function __construct() 
	{
		parent::__construct();
		if (!$this->session->userdata('Userid'))
        { 
			$this->session->set_flashdata('login_failed',"Please Login...");
            redirect('admin/admin');
        }
		$this->load->model('templemodel','temple');
		$this->load->model('Akashmodel','Nair');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="red-left">', '</div>');
	}
	public function index()
	{
		$temple_list = $this->temple->temple_list();
		$this->load->view('admin/temple/index', ['Temple'=>$temple_list]);
	}
	// Adding New Temple 
	public function add()
	{
		$data['dropdown'] = $this->Nair->Get_District_Name();
		if($post = $this->input->post() )
		{	unset($post['Submit']);	
			$post['Post_By'] = 'Admin';
			$post['Post_Date'] = date('Y-m-d');
			if($this->form_validation->run('Temple_Rules') )
			{
				if($insertId = $this->Nair->_insert('nair_temple', $post) )
				{
					$this->session->set_flashdata('error_msg', 'Temple Added Successful');
				}else{
					$this->session->set_flashdata('error_msg', 'Failed to add temple, Please try again');
				}
//======================= Loading Image Library and Config ========================================
						$config =	[
						'upload_path'   => './uploads/Temple_Pic/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => date("d-M-Y").'__Temple_Pic__'.rand(10000,90000),
							];
						$this->load->library('upload',$config);
						$userfile = "Temp_Img";
				if ( ! $this->upload->do_upload('Temp_Img')){	  
						$error = $this->upload->display_errors();
					 	$this->load->view('admin/temple/add', $data, compact('error'));
					
				}else{	
							$data = $this->upload->data();
							$Img_Source =$data['full_path'];
					
							$Temp_Img = $data['raw_name'].$data['file_ext'] ;
							$Thumb_Name = date("d-M-Y").'__'.'Temp_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
							$thumb_Save = './uploads/Temple_Pic/Temp_Thumb/'.$Thumb_Name;
		
							$this->resize_img($Img_Source, $thumb_Save,'150','150');
								
							$post['Temp_Img'] = $Temp_Img;
							$post['Temp_Thumb'] = $Thumb_Name;
						
					$this->Nair->_update('nair_temple',$post,['Temp_Id'=>$insertId] );
					return redirect('admin/temple/index');
				}
				
			}
			$this->load->view('admin/temple/add', $data);
		}else{
			$this->load->view('admin/temple/add', $data);
		}
	}
	// Editing Temple Data
	public function updateTemp($Temp_Id)
	{	
		$data['dropdown'] = $this->Nair->Get_District_Name();
		$TempVal = $this->Nair->_getSingleData('nair_temple',['Temp_Id'=>$Temp_Id]);
		//$this->prd($TempVal);
		if($post = $this->input->post() )
		{
			unset($post['Submit']);
			if($this->form_validation->run('Temple_Rules'))
			{
				if( $this->Nair->_update('nair_temple',$post,['Temp_Id'=>$Temp_Id]) ){
			   			$this->session->set_flashdata('error_msg',"Failed to Update Temple, Please try again");
					}else{
						$this->session->set_flashdata('error_msg',"Temple Update Successful");
					}
//======================= Loading Image Library and Config ========================================
						$config =	[
						'upload_path'   => './uploads/Temple_Pic/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => date("d-M-Y").'__Temple_Pic__'.rand(10000,90000),
									];
						$this->load->library('upload',$config);
						$userfile = "Temple_Pic";
						
						if( ! $this->upload->do_upload('Temple_Pic'))
						{	  
							$error = $this->upload->display_errors();
							$this->load->view('admin/temple/edit_temple',['TempVal'=>$TempVal,'dropdown'=>$data]);
						}else{
							$Pic_Dir = './uploads/Temple_Pic/'.$TempVal->Temp_Img;
							$Thumb_Dir = './uploads/Temple_Pic/Temp_Thumb/'.$TempVal->Temp_Thumb;
							
							$data = $this->upload->data();
							$Img_Source =$data['full_path'];
					
							$Temple_Pic = $data['raw_name'].$data['file_ext'] ;
							$Thumb_Name = date("d-M-Y").'__'.'Temp_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
							$thumb_Save = './uploads/Temple_Pic/Temp_Thumb/'.$Thumb_Name;
							
							@unlink($Pic_Dir);
	 						@unlink($Thumb_Dir);
							
							$this->resize_img($Img_Source, $thumb_Save,'250','250');
						
							$post['Temp_Img'] = $Temple_Pic;
							$post['Temp_Thumb'] = $Thumb_Name;
							$this->Nair->_update('nair_temple',$post,['Temp_Id'=>$TempVal->Temp_Id]);
						}
						return redirect('admin/temple/index/');
			}
				$this->load->view('admin/temple/edit_temple',['TempVal'=>$TempVal,'dropdown'=>$data]);
		}else{
			$this->load->view('admin/temple/edit_temple',['TempVal'=>$TempVal,'dropdown'=>$data]);
		}
	}

}