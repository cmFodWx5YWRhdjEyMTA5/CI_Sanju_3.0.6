<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Websys extends MY_Controller 
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
//================================== City Master ==================================
	public function citylist()
	{	
		$CityMst = $this->Nair->_tbldata('nair_citymst','City_Id');
		//$this->prd($CityMst);
		$this->load->view('admin/websys/citylist',['CityMst'=>$CityMst]);
	}
	public function adCity()
	{
			if( $post = $this->input->post() )
			{	unset($post['Submit']);
					if($this->form_validation->run('City_Rules'))
					{
						if($insertId = $this->Nair->_insert('nair_citymst',$post))
						{
							$this->session->set_flashdata('error_msg',"City Added Successful");
						}else{
							$this->session->set_flashdata('error_msg',"Failed to Add City, Please try again");
						}
						return redirect('admin/Websys/citylist');
					}
					$this->load->view('admin/websys/adCity');
			}else{
				$this->load->view('admin/websys/adCity');
			}
	}
	public function editCity($City_Id)
	{
		$CityMst = $this->Nair->_getSingleData('nair_citymst',['City_Id'=>$City_Id]);
			if( $post = $this->input->post() )
			{	unset($post['Submit']);
					if($this->form_validation->run('City_Rules'))
					{
						if($this->Nair->_update('nair_citymst',$post,['City_Id'=>$City_Id]))
						{
							$this->session->set_flashdata('error_msg',"Failed to Add City, Please try again");
						}else{
							$this->session->set_flashdata('error_msg',"City Added Successful");
						}
						return redirect('admin/Websys/citylist');
					}
					$this->load->view('admin/websys/editCity',['CityMst'=>$CityMst]);
			}else{
				$this->load->view('admin/websys/editCity',['CityMst'=>$CityMst]);
			}
	}
	public function delCity()
	{
		$City_Id = $this->input->post('City_Id');
		
		if($this->Nair->_delete('nair_citymst',['City_Id'=>$City_Id]))
		{
			$this->session->set_flashdata('error_msg',"City delete Successful");	
		}else{
			$this->session->set_flashdata('error_msg',"Failed to delete City, Please try again");
		}
		return redirect('admin/Websys/citylist');
		
	}	
//================================== Slider Master ==================================
	public function slider()
	{	
		$SliderMst = $this->Nair->_tbldata('nair_slider','Slide_Id');
		//$this->prd($SliderMst);
		$this->load->view('admin/websys/slider',['SliderMst'=>$SliderMst]);
	}
	public function addSlider()
	{
			if($post = $this->input->post())
			{
				unset($post['Submit']);
				$post['Slider_Text'] = $this->input->post('Slider_Text', FALSE);
				
					if( $this->form_validation->run('Slider_Rules') )
					{
						if($insert_id = $this->Nair->_insert('nair_slider',$post))
						{
							$this->session->set_flashdata('error_msg',"Add Slider Successful");
							}else{
							$this->session->set_flashdata('error_msg',"Failed to add Slider, Please try again");
						}
//======================= Loading Image Library and Config ========================================
						$Slider_Pic_config = array();
							
						$Slider_Pic_config['upload_path'] = './uploads/Slider_Pic/';
						$Slider_Pic_config['allowed_types'] = 'gif|jpg|jpeg';
						$Slider_Pic_config['file_name'] = date("d-M-Y").'__'.'Slider_Pic'.'__'.rand(10000,9000);
						
						$this->load->library('upload',$Slider_Pic_config);
						$userfile = "Slider_Pic";
							if ( ! $this->upload->do_upload('Slider_Pic'))
							{	  
						$error = $this->upload->display_errors();
					 	$this->load->view('admin/websys/addSlider');
					
				
					}else{	
							$data = $this->upload->data();
							
							$Img_Source =$data['full_path'];
					
							$Slider_Pic = $data['raw_name'].$data['file_ext'] ;
							$Thumb_Name = date("d-M-Y").'__'.'Slider_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
							$thumb_Save_Path = './uploads/Slider_Pic/Slider_Thumb/'.$Thumb_Name;
		
		
							$this->resize_img($Img_Source, $thumb_Save_Path,'100','100');
							
							$post['Slider_Img'] = $Slider_Pic;
							$post['Slider_Thumb'] = $Thumb_Name;
						
							$this->Nair->_update('nair_slider',$post,['Slide_Id'=>$insert_id] );
					}
					
						return redirect('admin/Websys/slider');
					}
				$this->load->view('admin/websys/addSlider');
			}else{
				$this->load->view('admin/websys/addSlider');
			}
	}
	public function editSlider($Slide_Id)
	{
		$Slide_Val = $this->Nair->_getSingleData('nair_slider',['Slide_Id'=>$Slide_Id]);
			if($post = $this->input->post())
			{
				unset($post['Submit']);
				$post['Slider_Text'] = $this->input->post('Slider_Text', FALSE);
				
					if( $this->form_validation->run('Slider_Rules') )
					{
						if($this->Nair->_update('nair_slider',$post,['Slide_Id'=>$Slide_Id]))
						{
							$this->session->set_flashdata('error_msg',"Failed to Update Slider, Please try again");
							}else{
							$this->session->set_flashdata('error_msg',"Update Slider Successful");
						}
//======================= Loading Image Library and Config ========================================
						$Slider_Pic_config = array();
							
						$Slider_Pic_config['upload_path'] = './uploads/Slider_Pic/';
						$Slider_Pic_config['allowed_types'] = 'gif|jpg|jpeg';
						$Slider_Pic_config['file_name'] = date("d-M-Y").'__'.'Slider_Pic'.'__'.rand(10000,9000);
						
						$Del_Slider_Pic = './uploads/Slider_Pic/'.$Slide_Val->Slider_Img;	
						$Del_Slider_Thumb = './uploads/Slider_Pic/Slider_Thumb/'.$Slide_Val->Slider_Thumb;	
						
						$this->load->library('upload',$Slider_Pic_config);
						$userfile = "Slider_Pic";
							if ( ! $this->upload->do_upload('Slider_Pic'))
							{	  
						$error = $this->upload->display_errors();
					 	$this->load->view('admin/websys/editSlider', ['Slide_Val'=>$Slide_Val]);
					
				
					}else{	
							$data = $this->upload->data();
							
							@unlink($Del_Slider_Pic);
							@unlink($Del_Slider_Thumb);
							
							$Img_Source =$data['full_path'];
					
							$Slider_Pic = $data['raw_name'].$data['file_ext'] ;
							$Thumb_Name = date("d-M-Y").'__'.'Slider_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
							$thumb_Save_Path = './uploads/Slider_Pic/Slider_Thumb/'.$Thumb_Name;
		
		
							$this->resize_img($Img_Source, $thumb_Save_Path,'250','250');
							
							$post['Slider_Img'] = $Slider_Pic;
							$post['Slider_Thumb'] = $Thumb_Name;
						
							$this->Nair->_update('nair_slider',$post,['Slide_Id'=>$Slide_Id] );
					}
					
						return redirect('admin/Websys/slider');
					}
				$this->load->view('admin/websys/editSlider', ['Slide_Val'=>$Slide_Val]);
			}else{
				$this->load->view('admin/websys/editSlider', ['Slide_Val'=>$Slide_Val]);
			}
	}
	public function delSlider()
	{
		$Slide_Id= $this->input->post('Slide_Id');
		$Slider_Img= $this->input->post('Slider_Img');
		$Slider_Thumb= $this->input->post('Slider_Thumb');

		$ImgPath= './uploads/Slider_Pic/';
		$ThumbPath= './uploads/Slider_Pic/Slider_Thumb/';

		$this->load->model('websysmodel', 'Slider');

		if($this->Slider->delSlider($Slide_Id, $Slider_Img, $Slider_Thumb) ){
			$this->session->set_flashdata('error_msg',"Artical Deleted Successful");
			
			@unlink($ImgPath.$Slider_Img);
			@unlink($ThumbPath.$Slider_Thumb);
   			
	  	}else{
			$this->session->set_flashdata('error_msg',"Failed to Delete Artical, Please try again");
		}
			return redirect('admin/Websys/slider');
		
	}
//================================== User Master ==================================
	public function user_list()
	{	
		$UserList = $this->Nair->_tbldata('tbl_users','user_id');
		//$this->prd($UserList);
		$this->load->view('admin/user/index',['UserList'=>$UserList]);
	}
	public function newUser()
	{	
		if($this->input->post())
		{
				if($this->form_validation->run('User_Reg') )
				{			
							$user_email = $this->input->post('user_email');
							$result = $this->Nair->_getMultiData('tbl_users',["user_email"=>$user_email]);
							if(is_array($result) && count($result) > 0)
							{	
								$this->session->set_flashdata("error_msg",'This email id already exists.'); 
								$this->load->view('admin/user/addUser');
							 }else{	
								
									$data = array(
											"user_fname" => $this->input->post('user_fname'),
											"user_lname" => $this->input->post('user_lname'),
											"user_email" => $this->input->post('user_email'),
											"user_password" => $this->myHash($this->input->post('user_password')),
											"user_param" => $this->myHash(rand(100,999))
										 );	
									
									if($insertId = $this->Nair->_insert('tbl_users',$data))
									{
										$this->session->set_flashdata('error_msg', 'New User Added Success...');
									}else{
										$this->session->set_flashdata('error_msg', 'Failed to add new user');
									}
									
										$config =	[
											'upload_path'   => './uploads/User_Pic/',
											'allowed_types' => 'gif|jpg|jpeg|png',
											'file_name'     => date("d-M-Y").'__'.'User_Pic'.'__'.rand(10000,9000),
											];
										$this->load->library('upload',$config);
										$userfile = "userPic";
										if ( ! $this->upload->do_upload('userPic'))
										{	  
											$error = $this->upload->display_errors();
											$this->load->view('admin/user/addUser');
											}else{	
											$data = $this->upload->data();
											$Img_Source =$data['full_path'];
									
											$User_Pic = $data['raw_name'].$data['file_ext'] ;
											$Thumb_Name = date("d-M-Y").'__'.'User_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
											$thumb_Save_Path = './uploads/User_Pic/User_Thumb/'.$Thumb_Name;
						
											$this->resize_img($Img_Source, $thumb_Save_Path,'150','150');
												
											$post['user_image'] = $User_Pic;
											$post['User_Thumb'] = $Thumb_Name;
										
											$this->Nair->_update('tbl_users',$post,['user_id'=>$insertId] );
										}	
									return redirect('admin/websys/user_list');
							 	}
								$this->load->view('admin/user/addUser');
				}
				 $this->load->view('admin/user/addUser');
		}else{
			$this->load->view('admin/user/addUser');
		}
	}
	public function userEdit($user_id)
	{	
		$UserDt = $this->Nair->_getSingleData('tbl_users',['user_id'=>$user_id]);
		if( $post = $this->input->post())
		{
			unset($post['Submit']);
				if($this->form_validation->run('Admin_User_Reg') )
				{			
						$data = array(
							"user_fname" => $this->input->post('user_fname'),
							"user_lname" => $this->input->post('user_lname'),
							"user_email" => $this->input->post('user_email'),
							"user_verified" => $this->input->post('user_verified'),
							"user_is_blocked" => $this->input->post('user_is_blocked'),
							"user_param" => $this->myHash(rand(100,999))
						 );	
						 //$this->prd($data );
						if( $this->Nair->_update('tbl_users',$data,['user_id'=>$user_id]) ){
							$this->session->set_flashdata('error_msg',"Failed to Update User, Please try again");
						}else{
							$this->session->set_flashdata('error_msg',"User Update Successful");
						}
						
						$config =	[
						'upload_path'   => './uploads/User_Pic/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => date("d-M-Y").'__'.'User_Pic'.'__'.rand(10000,9000),
						];
						$this->load->library('upload',$config);
						$userfile = "userPic";
						if ( ! $this->upload->do_upload('userPic'))
						{	  
						$error = $this->upload->display_errors();
						$this->load->view('admin/user/userEdit',['UserDt'=>$UserDt]);
						}else{	
						$data = $this->upload->data();
						$Img_Source =$data['full_path'];
				
						$User_Pic = $data['raw_name'].$data['file_ext'] ;
						$Thumb_Name = date("d-M-Y").'__'.'User_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
						$thumb_Save_Path = './uploads/User_Pic/User_Thumb/'.$Thumb_Name;
	
						$Del_UserPic = './uploads/User_Pic/'.$UserDt->user_image;
						$DelUser_Thumb = './uploads/User_Pic/User_Thumb/'.$UserDt->User_Thumb;
						
						
						$this->resize_img($Img_Source, $thumb_Save_Path,'150','150');
							
						$post['user_image'] = $User_Pic;
						$post['User_Thumb'] = $Thumb_Name;
					
						$this->Nair->_update('tbl_users',$post,['user_id'=>$UserDt->user_id] );
					}	
						return redirect('admin/websys/user_list');
				}
					$this->load->view('admin/user/userEdit',['UserDt'=>$UserDt]);
		}else{
			$this->load->view('admin/user/userEdit',['UserDt'=>$UserDt]);
		}
	}
//============================================================================================================	
//============================================================================================================
}