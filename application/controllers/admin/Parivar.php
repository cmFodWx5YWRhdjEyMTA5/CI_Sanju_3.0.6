<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parivar extends MY_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		if (!$this->session->userdata('Userid'))
        { 
			$this->session->set_flashdata('login_failed',"Please Login...");
            redirect('admin/admin');
        }
		$this->load->model('parivarmodel','Mukhiya');
		$this->load->model('Akashmodel','Nair');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="red-left">', '</div>');
	}
	public function index()
	{
		$page['pagetitle'] = 'Add परिवार';
		$mukhiya_list = $this->Mukhiya->mukhiya_list();
		$this->load->view('admin/parivar/index', ['Mukhiya'=>$mukhiya_list] );
		
		$this->load->library('form_validation','session');
		$this->form_validation->set_error_delimiters('<div class="red-left">', '</div>');
	}
	public function add_mukhiya()
	{	
		$data['dropdown'] = $this->Mukhiya->Get_District_Name();
		$this->load->view('admin/parivar/add_mukhiya', $data);
	}
	public function add_new_mukhiya()
	{
		$post = $this->input->post();
		unset($post['Submit']);
		
		if($this->form_validation->run('Mukhiya_Rules') )
		{
			if($insert_id = $this->Nair->_insert('tbl_mukhiya',$post)){
			   		$this->session->set_flashdata('error_msg',"Add new mukhiya Successful");
			  	}else{
					$this->session->set_flashdata('error_msg',"Failed to add new mukhiya , Please try again");
			}		
//======================= Loading Image Library and Config ========================================
				$config =	[
						'upload_path'   => './uploads/Parivar/Mukhiya/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => date("d-M-Y").'__Mukhiya_Pic__'.rand(10000,90000),
						
					];
					$this->load->library('upload',$config);
					$userfile = "Mukhiya_Pic";
			
				if ( ! $this->upload->do_upload('Mukhiya_Pic')){	  
						$error = $this->upload->display_errors();
					 	$this->load->view('admin/parivar/add_mukhiya', compact('error'));
					
				}else{	
						$data = $this->upload->data();
						$Img_Source =$data['full_path'];
					
					$Mukhiya_Pic = $data['raw_name'].$data['file_ext'] ;
					$Thumb_Name = date("d-M-Y").'__'.'Artical_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
					$thumb_Save = './uploads/Parivar/Mukhiya/Thumb_Img/'.$Thumb_Name;
		
					$this->resize_img($Img_Source, $thumb_Save,'250','250');
						
						$post['Mukhiya_Pic'] = $Mukhiya_Pic;
						$post['Mukhiya_Thumb_Img'] = $Thumb_Name;
						
					$this->Nair->_update('tbl_mukhiya',$post,['Main_Id'=>$insert_id] );
				}
			return redirect('admin/parivar/index');
		}else{
				$data['dropdown'] = $this->Mukhiya->Get_District_Name();
				$this->load->view('admin/parivar/add_mukhiya', $data);
				
		}
	}
	public function edit_mukhiya($Main_Id)
	{	
		$data['dropdown'] = $this->Mukhiya->Get_District_Name();
		$Mukhiya_Edit = $this->Mukhiya->edit_mukhiya($Main_Id);
		//$this->prd($Mukhiya_Edit);
		$this->load->view('admin/parivar/edit_mukhiya',['Mukhiya_Edit'=>$Mukhiya_Edit,'dropdown'=>$data]);
	}
	public function update_mukhiya($Main_Id)
	{	
		$post = $this->input->post();
		unset($post['Submit']);
		//$this->prd($post);
		$data['dropdown'] = $this->Mukhiya->Get_District_Name();
		$Mukhiya_Edit = $this->Mukhiya->edit_mukhiya($Main_Id);
		//$this->prd($Mukhiya_Edit);
		
		if($this->form_validation->run('Mukhiya_Rules') )
		{
			if($insert_id = $this->Nair->_update('tbl_mukhiya',$post,['Main_Id'=>$Main_Id] )){
			   		$this->session->set_flashdata('error_msg',"Failed to Update Mukhiya, Please try again");
			  	}else{
					$this->session->set_flashdata('error_msg',"Mukhiya Data Update Successful");
			}	
			
//======================= Loading Image Library and Config ========================================
				$config =	[
						'upload_path'   => './uploads/Parivar/Mukhiya/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => date("d-M-Y").'__Mukhiya_Pic__'.rand(10000,90000),
						'width'			=> 750,
						'height'			=> 750,
					];
					$this->load->library('upload',$config);
					$userfile = "Mukhiya_Pic";
			
			if ( ! $this->upload->do_upload('Mukhiya_Pic')){	  
						$error = $this->upload->display_errors();
					 	$this->load->view('admin/parivar/edit_mukhiya', compact('error'));
						//$this->load->view('admin/parivar/edit_mukhiya',['Mukhiya_Edit'=>$Mukhiya_Edit,'dropdown'=>$data]);
					
				}else{	
					    $uploaddir = './uploads/Parivar/Mukhiya/'.$Mukhiya_Edit->Mukhiya_Pic;
						$Thumb_Dir = './uploads/Parivar/Mukhiya/Thumb_Img/'.$Mukhiya_Edit->Mukhiya_Thumb_Img;
						//$this->prd($uploaddir);
							
					$data = $this->upload->data();	
					$Img_Source =$data['full_path'];
					
					$Mukhiya_Pic = $data['raw_name'].$data['file_ext'] ;
					$Thumb_Name = date("d-M-Y").'__'.'User_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
					$thumb_Save = './uploads/Parivar/Mukhiya/Thumb_Img/'.$Thumb_Name;
		 			
					@unlink($uploaddir);
	 				@unlink($Thumb_Dir);
					
					$this->resize_img($Img_Source, $thumb_Save,'150','150');
						
						$post['Mukhiya_Pic'] = $Mukhiya_Pic;
						$post['Mukhiya_Thumb_Img'] = $Thumb_Name;
						
					$this->Nair->_update('tbl_mukhiya',$post,['Main_Id'=>$Mukhiya_Edit->Main_Id] );
					
					
				}
			return redirect('admin/parivar/index');
		}else{
				$this->load->view('admin/parivar/edit_mukhiya',['Mukhiya_Edit'=>$Mukhiya_Edit,'dropdown'=>$data]);
		}
		
	}
	public function del_mukhiya()
	{
		$Main_Id= $this->input->post('Main_Id');
		$Mukhiya_Pic= $this->input->post('Mukhiya_Pic');
		$Mukhiya_Thumb_Img= $this->input->post('Mukhiya_Thumb_Img');
		
		$dir_pic= './uploads/Parivar/Mukhiya/';
		$thub= './uploads/Parivar/Mukhiya/Thumb_Img/';
		
		if($Mukhiya_Pic =='' && $Mukhiya_Thumb_Img =='')
		{
			$this->Nair->_delete('tbl_mukhiya',['Main_Id'=>$Main_Id]);	
			$this->session->set_flashdata('error_msg',"Mukhiya Deleted Successful");
			return redirect('admin/parivar/index');
		}else if ($Mukhiya_Pic =='')
		{
			@unlink($thub.$Mukhiya_Thumb_Img);
			$this->Nair->_delete('tbl_mukhiya',['Main_Id'=>$Main_Id]);	
			$this->session->set_flashdata('error_msg',"Mukhiya Deleted Successful");
			return redirect('admin/parivar/index');
		}else if($Mukhiya_Thumb_Img =='')
		{
			@unlink($thub.$Mukhiya_Pic);
			$this->Nair->_delete('tbl_mukhiya',['Main_Id'=>$Main_Id]);	
			$this->session->set_flashdata('error_msg',"Mukhiya Deleted Successful");
			return redirect('admin/parivar/index');
		}else if($Mukhiya_Thumb_Img !='' and $Mukhiya_Thumb_Img !='')
		{
			@unlink($dir_pic.$Mukhiya_Pic);
			@unlink($thub.$Mukhiya_Thumb_Img);
			$this->Nair->_delete('tbl_mukhiya',['Main_Id'=>$Main_Id]);	
			$this->session->set_flashdata('error_msg',"Mukhiya Deleted Successful");
			return redirect('admin/parivar/index');
		}else{
			$this->session->set_flashdata('error_msg',"Failed to Delete Mukhiya, Please try again");
			return redirect('admin/parivar/index');
		}
			
	}	
//=========================== Members List =========================
	public function members($Main_Id)
	{
		//echo $Main_Id; 
		// Loading value from db 
		$Male_Meb_List = $this->Mukhiya->male_mem_list($Main_Id);
		//$this->prd($Male_Meb_List);
		$this->load->view('admin/parivar/members',['Meb_list'=>$Male_Meb_List, 'Main_Id'=>$Main_Id]);
		
		
	}
	public function addmem($Main_Id)
	{
		$MukhiyaName = $this->Nair->_getSingleData('tbl_mukhiya',['Main_Id'=>$Main_Id]);
		
		if($post = $this->input->post())
		{	//$post = $this->input->post();
			unset($post['Submit']);
			$post['Main_Id'] = $Main_Id;
			//$this->prd($Female_List);
				if($this->form_validation->run('male_rules') )
				{
			if($insert_id = $this->Nair->_insert('tbl_mukhiya_meb',$post)){
			   		$this->session->set_flashdata('error_msg',"Add new member Successful");
			  	}else{
					$this->session->set_flashdata('error_msg',"Failed to add new mukhiya , Please try again");
			}		
//======================= Loading Image Library and Config ========================================
				$config =	[
						'upload_path'   => './uploads/Parivar/Meb_Pic/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => date("d-M-Y").'__Meb_Pic__'.rand(10000,90000),
						
					];
					$this->load->library('upload',$config);
					$userfile = "Meb_Pic";
			
				if ( ! $this->upload->do_upload('Meb_Pic')){	  
						$error = $this->upload->display_errors();
					 	$this->load->view('admin/parivar/addmem',['Meb_Main_Id'=>$data], compact('error'));
					
				}else{	
						$data = $this->upload->data();
						$Img_Source =$data['full_path'];
					
					$Meb_Pic = $data['raw_name'].$data['file_ext'] ;
					$Thumb_Name = date("d-M-Y").'__'.'Meb_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
					$thumb_Save = './uploads/Parivar/Meb_Pic/Meb_Thumb/'.$Thumb_Name;
		
					$this->resize_img($Img_Source, $thumb_Save,'250','250');
						
						$post['Meb_Pic'] = $Meb_Pic;
						$post['Meb_Thumb_Pic'] = $Thumb_Name;
						
					$this->Nair->_update('tbl_mukhiya_meb',$post,['Meb_id'=>$insert_id] );
				}
				return redirect("admin/parivar/members/{$Main_Id}");
					}
				$this->load->view('admin/parivar/addmem',['MukhiyaName'=>$MukhiyaName]);
		}else{
			//$this->load->view('admin/parivar/addfem',['Main_Id'=>$Main_Id, 'MukhiyaName'=>$MukhiyaName]);
			$this->load->view('admin/parivar/addmem',['MukhiyaName'=>$MukhiyaName]);
		}
		
	}
	public function editMeb($Meb_id)
	{
		$Meb_Edit = $this->Nair->_getSingleData('tbl_mukhiya_meb', ['Meb_id'=>$Meb_id]);
		//$this->prd($Meb_Edit);
		if($post = $this->input->post())
		{		unset($post['Submit']);
				if($this->form_validation->run('male_rules') )
				{
					if($insert_id = $this->Nair->_update('tbl_mukhiya_meb',$post,['Meb_id'=>$Meb_id])){
			   			$this->session->set_flashdata('error_msg',"Failed to Update Member, Please try again");
					}else{
						$this->session->set_flashdata('error_msg',"Member Update Successful");
					}
//======================= Loading Image Library and Config ========================================
						$config =	[
						'upload_path'   => './uploads/Parivar/Meb_Pic/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => date("d-M-Y").'__Meb_Pic__'.rand(10000,90000),
									];
						$this->load->library('upload',$config);
						$userfile = "Meb_Pic";
						
						if( ! $this->upload->do_upload('Meb_Pic'))
						{	  
							$error = $this->upload->display_errors();
							$this->load->view('admin/parivar/editMeb',['Meb_Edit'=>$Meb_Edit]);	
						}else{
							$Pic_Dir = './uploads/Parivar/Meb_Pic/'.$Meb_Edit->Meb_Pic;
							$Thumb_Dir = './uploads/Parivar/Meb_Pic/Meb_Thumb/'.$Meb_Edit->Meb_Thumb_Pic;
							
							$data = $this->upload->data();
							$Img_Source =$data['full_path'];
					
							$Meb_Pic = $data['raw_name'].$data['file_ext'] ;
							$Thumb_Name = date("d-M-Y").'__'.'Fm_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
							$thumb_Save = './uploads/Parivar/Meb_Pic/Meb_Thumb/'.$Thumb_Name;
							
							@unlink($Pic_Dir);
	 						@unlink($Thumb_Dir);
							
							$this->resize_img($Img_Source, $thumb_Save,'250','250');
						
							$post['Meb_Pic'] = $Meb_Pic;
							$post['Meb_Thumb_Pic'] = $Thumb_Name;
							$this->Nair->_update('tbl_mukhiya_meb',$post, ['Meb_id'=>$Meb_id]);
						}	
						return redirect('admin/parivar/members/'.$Meb_Edit->Main_Id);
				}
						$this->load->view('admin/parivar/members',['Meb_id'=>$Meb_id, 'Meb_Edit'=>$Meb_Edit]);	
		}else{
			$this->load->view('admin/parivar/editMeb',['Meb_Edit'=>$Meb_Edit]);	
		}
	}
	
//=========================== Members Child ========================
	public function viewchild($Meb_id)
	{	
		//$this->prd($Meb_id);
		
		$Chile_List= $this->Nair->_getMultiData('tbl_memchild', ['Meb_id'=>$Meb_id]);
		//$this->prd($Chile_List);
		$this->load->view('admin/parivar/viewchild',['Chile_List'=>$Chile_List, 'Meb_id'=>$Meb_id]);
	}
	public function parivarchild($Meb_id)
	{	
			$Get_Father = $this->Nair->_SelectByVal('tbl_mukhiya_meb', (['Meb_Name','Main_Id']),['Meb_id'=>$Meb_id]);
			//$this->prd($Get_Father);
			if( $post = $this->input->post() )
			{	unset($post['Submit']);
				$post['Main_id'] = $Get_Father->Main_Id;
				$post['Meb_id'] = $Meb_id;
				//$this->prd($post);
				if($this->form_validation->run('Meb_Child_Rules') )
				{
						if($insert_id = $this->Nair->_insert('tbl_memchild',$post)){
							$this->session->set_flashdata('error_msg',"New child add successful");
						}else{
							$this->session->set_flashdata('error_msg',"Failed to add new child, Please try again");
						}
//======================= Loading Image Library and Config ========================================
						$config =	[
						'upload_path'   => './uploads/Parivar/Child_Pic/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => date("d-M-Y").'__Child_Pic__'.rand(10000,90000),
							];
						$this->load->library('upload',$config);
						$userfile = "Ch_Pic";
						if ( ! $this->upload->do_upload('Ch_Pic')){	  
						$error = $this->upload->display_errors();
					 	$this->load->view('admin/parivar/parivarchild',['Meb_id'=>$Meb_id, 'Get_Father'=>$Get_Father], compact('error'));
					
				}else{	
							$data = $this->upload->data();
							$Img_Source =$data['full_path'];
					
							$Child_Pic = $data['raw_name'].$data['file_ext'] ;
							$Thumb_Name = date("d-M-Y").'__'.'Child_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
							$thumb_Save = './uploads/Parivar/Child_Pic/Child_Thumb/'.$Thumb_Name;
		
							$this->resize_img($Img_Source, $thumb_Save,'250','250');
								
							$post['Ch_Pic'] = $Child_Pic;
							$post['Ch_Thumb_Pic'] = $Thumb_Name;
						
					$this->Nair->_update('tbl_memchild',$post,['Child_id'=>$insert_id] );
						return redirect("admin/parivar/viewchild/{$Meb_id}");
				}
				}
				$this->load->view('admin/parivar/parivarchild',['Meb_id'=>$Meb_id, 'Get_Father'=>$Get_Father]);
				
			}else
			{
				$this->load->view('admin/parivar/parivarchild',['Meb_id'=>$Meb_id, 'Get_Father'=>$Get_Father]);
			}
	}
	public function editChild($Child_id)
	{
		$Get_ChDtl = $this->Nair->_getSingleData('tbl_memchild',['Child_id'=>$Child_id]);
		//$this->prd($Get_ChDtl);
		if($post = $this->input->post() )
		{	
			unset($post['Submit']);
			if($this->form_validation->run('Meb_Child_Rules') )
			{
				if( $this->Nair->_update('tbl_memchild',$post,['Child_id'=>$Child_id]) ){
			   			$this->session->set_flashdata('error_msg',"Failed to Update Child, Please try again");
					}else{
						$this->session->set_flashdata('error_msg',"Child Update Successful");
					}
//======================= Loading Image Library and Config ========================================
						$config =	[
						'upload_path'   => './uploads/Parivar/Child_Pic/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => date("d-M-Y").'__Child_Pic__'.rand(10000,90000),
									];
						$this->load->library('upload',$config);
						$userfile = "Ch_Pic";	
						//$Get_ChDtl
						if( ! $this->upload->do_upload('Ch_Pic'))
						{	  
							$error = $this->upload->display_errors();
							$this->load->view('admin/parivar/editChild',['Get_ChDtl'=>$Get_ChDtl]);	
						}else{
							  $Pic_Dir = './uploads/Parivar/Child_Pic/'.$Get_ChDtl->Ch_Pic;
							$Thumb_Dir = './uploads/Parivar/Child_Pic/Child_Thumb/'.$Get_ChDtl->Ch_Thumb_Pic;
							
							$data = $this->upload->data();
							$Img_Source =$data['full_path'];
					
							$Ch_Pic = $data['raw_name'].$data['file_ext'] ;
							$Thumb_Name = date("d-M-Y").'__'.'Fm_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
							$thumb_Save = './uploads/Parivar/Child_Pic/Child_Thumb/'.$Thumb_Name;
							
							@unlink($Pic_Dir);
	 						@unlink($Thumb_Dir);
							
							$this->resize_img($Img_Source, $thumb_Save,'250','250');
						
							$post['Ch_Pic'] = $Ch_Pic;
							$post['Ch_Thumb_Pic'] = $Thumb_Name;
							$this->Nair->_update('tbl_memchild',$post, ['Child_id'=>$Child_id]);
						}	
						
						return redirect('admin/parivar/viewchild/'.$Get_ChDtl->Meb_id);
			}
			$this->load->view('admin/parivar/editChild',['Get_ChDtl'=>$Get_ChDtl]);	
		}else{
			$this->load->view('admin/parivar/editChild',['Get_ChDtl'=>$Get_ChDtl]);	
		}
	}
	
//=========================== Females Members ========================	
	public function females($Main_Id)
	{
		//echo $Main_Id; 
		$this->load->model('parivarmodel','female');
		// Loading value from db 
		$Female_List = $this->female->female_list($Main_Id);
		//$this->prd($Female_List);
		$this->load->view('admin/parivar/females',['Female_List'=>$Female_List, 'Main_Id'=>$Main_Id]);
	}
	public function addfem($Main_Id)
	{
		$MukhiyaName = $this->Nair->_getSingleData('tbl_mukhiya',['Main_Id'=>$Main_Id]);
		
		if($post = $this->input->post())
		{	//$post = $this->input->post();
			unset($post['Submit']);
			$post['Main_Id'] = $Main_Id;
			//$this->prd($Female_List);
				if($this->form_validation->run('Female_Rules'))
				{
					if($insert_id = $this->Nair->_insert('tbl_female',$post)){
			   			$this->session->set_flashdata('error_msg',"Add new female Member Successful");
					}else{
						$this->session->set_flashdata('error_msg',"Failed to add new female Member , Please try again");
					}
//======================= Loading Image Library and Config ========================================
						$config =	[
						'upload_path'   => './uploads/Parivar/Woman_Pic/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => date("d-M-Y").'__Woman_Pic__'.rand(10000,90000),
									];
						$this->load->library('upload',$config);
						$userfile = "FM_Pic";
						if( ! $this->upload->do_upload('FM_Pic'))
						{	  
							$error = $this->upload->display_errors();
							$this->load->view('admin/parivar/addfem',['Main_Id'=>$Main_Id, 'MukhiyaName'=>$MukhiyaName]);
						}else{	
							$data = $this->upload->data();
							$Img_Source =$data['full_path'];
					
							$Woman_Pic = $data['raw_name'].$data['file_ext'] ;
							$Thumb_Name = date("d-M-Y").'__'.'Fm_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
							$thumb_Save = './uploads/Parivar/Woman_Pic/FM_Thumb/'.$Thumb_Name;
			
							$this->resize_img($Img_Source, $thumb_Save,'250','250');
						
							$post['FM_Pic'] = $Woman_Pic;
							$post['Fm_Thumb_Pic'] = $Thumb_Name;
							$this->Nair->_update('tbl_female',$post,['FM_Id'=>$insert_id] );
						}					
						return redirect("admin/parivar/females/{$Main_Id}");	
				}
				$this->load->view('admin/parivar/addfem',['Main_Id'=>$Main_Id, 'MukhiyaName'=>$MukhiyaName]);
		}else{
			$this->load->view('admin/parivar/addfem',['Main_Id'=>$Main_Id, 'MukhiyaName'=>$MukhiyaName]);
		}
		
	}
	public function editFM($FM_Id)
	{
		$FmDtl = $this->Nair->_getSingleData('tbl_female',['FM_Id'=>$FM_Id]);
		//$this->prd($FmDtl);
		if($post = $this->input->post())
		{
				unset($post['Submit']);
			if($this->form_validation->run('Female_Rules'))
			{
				if($insert_id = $this->Nair->_update('tbl_female',$post,['FM_Id'=>$FM_Id])){
			   			$this->session->set_flashdata('error_msg',"Failed to Update Female , Please try again");
					}else{
						$this->session->set_flashdata('error_msg',"Female Update Successful");
				}
//======================= Loading Image Library and Config ========================================
						$config =	[
						'upload_path'   => './uploads/Parivar/Woman_Pic/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => date("d-M-Y").'__Woman_Pic__'.rand(10000,90000),
									];
						$this->load->library('upload',$config);
						$userfile = "FM_Pic";	
						
						if( ! $this->upload->do_upload('FM_Pic'))
						{	  
							$error = $this->upload->display_errors();
							$this->load->view('admin/parivar/editFemales',['FM_Id'=>$FM_Id, 'FmDtl'=>$FmDtl]);	
						}else{
							$Pic_Dir = './uploads/Parivar/Woman_Pic/'.$FmDtl->FM_Pic;
							$Thumb_Dir = './uploads/Parivar/Woman_Pic/FM_Thumb/'.$FmDtl->Fm_Thumb_Pic;
							
							$data = $this->upload->data();
							$Img_Source =$data['full_path'];
					
							$Woman_Pic = $data['raw_name'].$data['file_ext'] ;
							$Thumb_Name = date("d-M-Y").'__'.'Fm_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
							$thumb_Save = './uploads/Parivar/Woman_Pic/FM_Thumb/'.$Thumb_Name;
							
							@unlink($Pic_Dir);
	 						@unlink($Thumb_Dir);
							
							$this->resize_img($Img_Source, $thumb_Save,'250','250');
						
							$post['FM_Pic'] = $Woman_Pic;
							$post['Fm_Thumb_Pic'] = $Thumb_Name;
							$this->Nair->_update('tbl_female',$post, ['FM_Id'=>$FM_Id]);
						}	
						//return redirect("admin/parivar/females/{$Main_Id}");
						return redirect('admin/parivar/females/'.$FmDtl->Main_Id);
			}
			$this->load->view('admin/parivar/editFemales',['FM_Id'=>$FM_Id, 'FmDtl'=>$FmDtl]);	
		}else{
			$this->load->view('admin/parivar/editFemales',['FM_Id'=>$FM_Id, 'FmDtl'=>$FmDtl]);	
		}

		
		//$this->prd($FmDtl);
		
	}
	
	public function delFm()
	{
		$Main_Id= $this->input->post('Main_Id');
		$Mukhiya_Pic= $this->input->post('Mukhiya_Pic');
		$Mukhiya_Thumb_Img= $this->input->post('Mukhiya_Thumb_Img');
		//$this->prd($Mukhiya_Thumb_Img);
		

			$dir_pic= './uploads/Parivar/Mukhiya/';
			$thub= './uploads/Parivar/Mukhiya/Thumb_Img/';
		
		if($this->Mukhiya->delete_mukhiya($Main_Id, $Mukhiya_Thumb_Img, $Mukhiya_Pic) ){
			$this->session->set_flashdata('error_msg',"Mukhiya Deleted Successful");
			
			@unlink($dir_pic.$Mukhiya_Pic);
			@unlink($thub.$Mukhiya_Thumb_Img);
   			
	  	}else{
			$this->session->set_flashdata('error_msg',"Failed to Delete Mukhiya, Please try again");
		}
			return redirect('admin/parivar/index');

	}
	
	
//============================================================================================================	
//============================================================================================================
}