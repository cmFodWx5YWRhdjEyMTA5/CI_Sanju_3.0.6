<?php

/**
 * Description of Aarati
 *
 * @author Akash Nair
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Aarati extends MY_Controller 
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
	public function index()
	{
		$Arati=$this->Nair->_tbldata('nair_aarati','Aarti_Id');
		$this->load->view('admin/aarati/index', ['arti'=>$Arati]);
	}

	public function add_aarati()
	{
		if($post = $this->input->post())
		{	unset($post['Submit']);
			$post['Post_By'] = 'Admin';
			$post['Post_Date'] = date('Y-m-d');
			$post['Aarti_Dtl'] = $this->input->post('Aarti_Dtl', FALSE);
			if( $this->form_validation->run('Aarti_Rules') )
			{
					if($insertId = $this->Nair->_insert('nair_aarati',$post))
					{
						$this->session->set_flashdata('error_msg',"Aarati Added Successful");
					}else{
						$this->session->set_flashdata('error_msg',"Failed to Add Artical, Please try again");
					}
//======================= Loading Image Library and Config ========================================
						$Aarti_Pic_config = array();
							
						$Aarti_Pic_config['upload_path'] = './uploads/Aarti_Data/Aarti_Pic/';
						$Aarti_Pic_config['allowed_types'] = 'gif|jpg|jpeg|png';
						$Aarti_Pic_config['file_name'] = date("d-M-Y").'__'.'Aarti_Pic'.'__'.rand(10000,9000);
							
						
						$this->load->library('upload',$Aarti_Pic_config);
						$userfile = "Aarti_Pic";
							if ( ! $this->upload->do_upload('Aarti_Pic'))
							{	  
						$error = $this->upload->display_errors();
					 	$this->load->view('admin/aarati/add_aarati', compact('error'));
					
				
					}else{	
							$data = $this->upload->data();
							//$this->prd($data);
							$Img_Source =$data['full_path'];
					
							$Aarti_Pic = $data['raw_name'].$data['file_ext'] ;
							$Thumb_Name = date("d-M-Y").'__'.'Aarti_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
							$thumb_Save_Path = './uploads/Aarti_Data/Aarti_Pic/Aarti_Thumb/'.$Thumb_Name;
		
							$this->resize_img($Img_Source, $thumb_Save_Path,'200','200');
							
							$post['Aarti_Pic'] = $Aarti_Pic;
							$post['Aarti_Thumb'] = $Thumb_Name;
						
							$this->Nair->_update('nair_aarati',$post,['Aarti_Id'=>$insertId] );
					}
//======================= Loading Aarti Audio File and Config ========================================
						$Audio_Config['upload_path'] = './uploads/Aarti_Data/Aarti_Audio/';
        				$Audio_Config['allowed_types'] = 'mp3|wav|3gp';
						//$Audio_Config['file_name'] = date("d-M-Y").'__'.'Aarti_Audio'.'__'.rand(10000,9000);
						$Audio_Config['file_name'] = date("d-M-Y").'__'.'Aarti_Audio'.'__'.rand(10000,9000);
						
						//$this->load->library('upload',$Audio_Config);
						
						 $this->load->library('upload', $Audio_Config);  
					     $this->upload->initialize($Audio_Config);
						 $userfile = "Aarti_Audio";
						
						if ( ! $this->upload->do_upload('Aarti_Audio'))	
						{
							$error = $this->upload->display_errors();
					 		$this->load->view('admin/aarati/add_aarati', compact('error'));
						}else{
							$audio_data = $this->upload->data();
							$Aarti_Audio = $audio_data['raw_name'].$audio_data['file_ext'] ;
							$post['Aarti_Audio'] = $Aarti_Audio;
						
							$this->Nair->_update('nair_aarati',$post,['Aarti_Id'=>$insertId] );
						}
						
						return redirect('admin/aarati/index');
					}
			$this->load->view('admin/aarati/add_aarati');
		}else{
			$this->load->view('admin/aarati/add_aarati');
		}

	}
	
	public function edit($Aarti_Id)
	{
		$AartiVal = $this->Nair->_getSingleData('nair_aarati',['Aarti_Id'=>$Aarti_Id]);
		//$this->prd($AartiVal); 
		$Del_Aarti_Pic = './uploads/Aarti_Data/Aarti_Pic/'.$AartiVal->Aarti_Pic;
		$Del_Aarti_Thumb = './uploads/Aarti_Data/Aarti_Pic/Aarti_Thumb/'.$AartiVal->Aarti_Thumb;
		$Del_Aarti_Audio = './uploads/Aarti_Data/Aarti_Audio/'.$AartiVal->Aarti_Audio;
		
		//$this->prd($Del_News_Pic);				
			if($post = $this->input->post())
			{
				unset($post['Submit']);
				$post['Aarti_Dtl'] = $this->input->post('Aarti_Dtl', FALSE);
				$MyFile= $_FILES['Aarti_Pic'];
				//$this->prd($post);
						
						$Aarti_Pic_config = array();
						$Aarti_Pic_config['upload_path'] = './uploads/Aarti_Data/Aarti_Pic/';
						$Aarti_Pic_config['allowed_types'] = 'gif|jpg|jpeg|png|mp3';
						$Aarti_Pic_config['file_name'] = date("d-M-Y").'__'.'Aarti_Pic'.'__'.rand(10000,9000);
						
						$this->load->library('upload',$Aarti_Pic_config);

				if(is_array($_FILES['Aarti_Pic']) && $_FILES['Aarti_Pic']['name']=='') 
				{
					if($this->form_validation->run('Aarti_Rules'))
						{
							if($this->Nair->_update('nair_aarati',$post,['Aarti_Id'=>$Aarti_Id]))
							{		
								$this->session->set_flashdata('error_msg',"Failed to Update Artical, Please try again");
							}else{
								$this->session->set_flashdata('error_msg',"Aarati Update Successful");
							}
							return redirect('admin/aarati/index');
						}
						$this->load->view('admin/aarati/edit_aarati',['AartiVal'=>$AartiVal]);
					
				}else{
						if( $this->form_validation->run('Aarti_Rules') && $this->upload->do_upload('Aarti_Pic')) 
					{
						@unlink($Del_Aarti_Pic);
	 					@unlink($Del_Aarti_Thumb);
						
						$data = $this->upload->data();
						//$this->prd($data);
						
						$Img_Source =$data['full_path'];
				
						$Aarti_Pic = $data['raw_name'].$data['file_ext'] ;
						$Thumb_Name = date("d-M-Y").'__'.'Aarti_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
						$thumb_Save_Path = './uploads/Aarti_Data/Aarti_Pic/Aarti_Thumb/'.$Thumb_Name;
						
						$this->resize_img($Img_Source, $thumb_Save_Path,'250','250');
						$post['Aarti_Pic'] = $Aarti_Pic;
						$post['Aarti_Thumb'] = $Thumb_Name;
						$this->Nair->_update('nair_aarati',$post,['Aarti_Id'=>$Aarti_Id] );
//========================================= Loading Aarti Audio File and Config ===============================================
						$Audio_Config['upload_path'] = './uploads/Aarti_Data/Aarti_Audio/';
        				$Audio_Config['allowed_types'] = 'mp3|wav|3gp';
						$Audio_Config['file_name'] = date("d-M-Y").'__'.'Aarti_Audio'.'__'.rand(10000,9000);
							
							$this->load->library('upload', $Audio_Config);  
					     	$this->upload->initialize($Audio_Config);
						 	$userfile = "Aarti_Audio";
							
						$this->session->set_flashdata('error_msg',"Aarati Update Successful");
						return redirect('admin/aarati/index');
					}else{
						$upload_error = $this->upload->display_errors();
						$this->session->set_flashdata('error_msg',"Aarti Update Failed, Please try again");
						
						$this->load->view('admin/aarati/edit_aarati',['AartiVal'=>$AartiVal,'upload_error'=>$upload_error]);
					}				
				}
				
				
			}else{
				$this->load->view('admin/aarati/edit_aarati',['AartiVal'=>$AartiVal]);
			}
	}
	
	
	




}