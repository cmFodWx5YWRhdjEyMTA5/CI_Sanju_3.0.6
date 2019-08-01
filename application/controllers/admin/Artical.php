<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artical extends MY_Controller {

	public function __construct() 
	{
		parent::__construct();
		if (!$this->session->userdata('Userid'))
        { 
			$this->session->set_flashdata('login_failed',"Please Login...");
            redirect('admin/admin');
        }
		//$this->load->model('articlesmodel','artical');
		$this->load->model('Akashmodel','Nair');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="red-left">', '</div>');
	}
	public function index()
	{	$load_artical = $this->Nair->_tbldata('nair_artical','Art_Id');
		//$this->prd($load_artical);
		
		$this->load->view('admin/artical/index', ['Art_Data'=> $load_artical]);
	}
	// Adding New Artical
	public function add_artical()
	{	
		if($post = $this->input->post() )
		{	
						unset($post['Submit']);
						$post['Post_By'] = 'Admin';
						$post['Post_Date'] = date('Y-m-d');
					if($this->form_validation->run('Artical_Rules') )
					{
						if($insertId = $this->Nair->_insert('nair_artical', $post) )
						{
						$this->session->set_flashdata('error_msg', 'Artical Added Successful');
					}else{
						$this->session->set_flashdata('error_msg', 'Failed to add Artical, Please try again');
					}
//======================= Loading Image Library and Config ========================================
						$config =	[
						'upload_path'   => './uploads/Artical_Pic/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => date("d-M-Y").'__'.'Artical_Pic'.'__'.rand(10000,9000),
							];
						$this->load->library('upload',$config);
						$userfile = "Artical_Pic";
							if ( ! $this->upload->do_upload('Artical_Pic'))
							{	  
						$error = $this->upload->display_errors();
					 	$this->load->view('admin/artical/add_artical', compact('error'));
					
				
					}else{	
							$data = $this->upload->data();
							$Img_Source =$data['full_path'];
					
							$Artical_Pic = $data['raw_name'].$data['file_ext'] ;
							$Thumb_Name = date("d-M-Y").'__'.'Artical_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
							$thumb_Save_Path = './uploads/Artical_Pic/Artical_Thumb/'.$Thumb_Name;
		
							$this->resize_img($Img_Source, $thumb_Save_Path,'150','150');
								
							$post['Artical_Img'] = $Temp_Img;
							$post['Artical_Thumb'] = $Thumb_Name;
						
							$this->Nair->_update('nair_artical',$post,['Art_Id'=>$insertId] );
					}
						return redirect('admin/artical/index');
					}
					$this->load->view('admin/artical/add_artical');
		}else{
			$this->load->view('admin/artical/add_artical');
		}
	}
	//Editing Articals
	public function edit_artical($Art_Id)
	{
		$Art_Val = $this->Nair->_getSingleData('nair_artical',['Art_Id'=>$Art_Id]);
		if($post = $this->input->post() )
		{		unset($post['Submit']);
				if( $this->form_validation->run('Artical_Rules') )
				{
					if( $this->Nair->_update('nair_artical',$post,['Art_Id'=>$Art_Id]) ){
			   			$this->session->set_flashdata('error_msg',"Failed to Update Artical, Please try again");
					}else{
						$this->session->set_flashdata('error_msg',"Artical Update Successful");
					}
//======================= Loading Image Library and Config ========================================
						$config =	[
						'upload_path'   => './uploads/Artical_Pic/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => date("d-M-Y").'__'.'Artical_Pic'.'__'.rand(10000,9000),
									];
						$this->load->library('upload',$config);
						$userfile = "Artical_Pic";
						
						if( ! $this->upload->do_upload('Artical_Pic'))
						{	  
							$error = $this->upload->display_errors();
							$this->load->view('admin/artical/edit_artical', ['Art_Val'=>$Art_Val]);
						}else{
							$Pic_Dir = './uploads/Artical_Pic/'.$Art_Val->Artical_Img;
							$Thumb_Dir = './uploads/Artical_Pic/Artical_Thumb/'.$Art_Val->Artical_Thumb;
							
							$data = $this->upload->data();
							$Img_Source =$data['full_path'];
					
							$Artical_Pic = $data['raw_name'].$data['file_ext'] ;
							$Thumb_Name = date("d-M-Y").'__'.'Artical_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
							$thumb_Save_Path = './uploads/Artical_Pic/Artical_Thumb/'.$Thumb_Name;
							
							@unlink($Pic_Dir);
	 						@unlink($Thumb_Dir);
							
							$this->resize_img($Img_Source, $thumb_Save_Path,'100','100');
						
							$post['Artical_Img'] = $Artical_Pic;
							$post['Artical_Thumb'] = $Thumb_Name;
							$this->Nair->_update('nair_artical',$post,['Art_Id'=>$Art_Val->Art_Id]);
						}
						return redirect('admin/artical/index/');
				}else{
					$this->load->view('admin/artical/edit_artical', ['Art_Val'=>$Art_Val]);
				}
					
		}else{
			$this->load->view('admin/artical/edit_artical', ['Art_Val'=>$Art_Val]);
		}
	}
	public function del_artical()
	{
		$Art_Id= $this->input->post('Art_Id');

		$Artical_Img= $this->input->post('Artical_Img');
		$Artical_Thumb= $this->input->post('Artical_Thumb');
		//$this->prd($Artical_Thumb);
		
		

			$dir_pic= './uploads/Artical_Pic/';
			$thub= './uploads/Artical_Pic/Artical_Thumb/';
		
		

	}



}