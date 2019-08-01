<?php
/**
 * Description of User Controller
 *
 * @author Aakash Nair
*/ 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function __construct() 
	{
		parent::__construct();
		
		if ( ! $this->session->userdata('user_id'))
        { 
			$this->session->set_flashdata('error_msg',"Please Login...");
            return redirect('index/login');
        }
		
		$this->load->model('Akashmodel','Nair');
		$this->load->library('form_validation','session');
		$this->form_validation->set_error_delimiters('<div class="red-left">', '</div>');
		
    }
//----------------------------------- User Info  ---------------------------------------------------	
	public function dashboard()
	{
		
		$UserData = $this->Nair->_getSingleData('tbl_users',['user_id'=>$this->session->userdata('user_id')]);
		//$this->prd($UserData);
		$this->load->view('dashboard',['UserData'=>$UserData]);
	}
	public function edit($user_id)
	{	
		$UserData = $this->Nair->_getSingleData('tbl_users',['user_id'=>$user_id]);
			//$this->prd($UserData);
		$this->load->view('edit',['UserData'=>$UserData]);
	}
	public function updateUser($user_id)
	{	
		
		$post = $this->input->post();
		unset($post['submit']);
		//$this->prd($post);
		
		$UserData = $this->Nair->_getSingleData('tbl_users',['user_id'=>$user_id]);
		//$this->prd($UserData);
		if($this->form_validation->run('User_Rules') )
		{
				$data = array(
					"user_fname" => $this->input->post('user_fname'),
					"user_lname" => $this->input->post('user_lname'),
					"user_email" => $this->input->post('user_email')
				 );
				 
				 //$this->prd($data);
			if($insert_id = $this->Nair->_update('tbl_users',$data,['user_id'=>$user_id] )){
			   		$this->session->set_flashdata('error_msg',"Failed to Update User Data, Please try again");
			  	}else{
					$this->session->set_flashdata('error_msg',"User Data Update Successful");
			}		
//======================= Loading Image Library and Config ========================================
				$config =	[
						'upload_path'   => './uploads/User_Pic/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => date("d-M-Y").'__User_Pic__'.rand(10000,90000),
						'width'			=> 750,
						'height'			=> 750,
					];
					$this->load->library('upload',$config);
					$userfile = "User_Pic";
			
			if ( ! $this->upload->do_upload('User_Pic')){	  
						$error = $this->upload->display_errors();
					 	$this->load->view('edit', compact('error'));
					
				}else{	
					$uploaddir = './uploads/User_Pic/'.$UserData->user_image;
					$Thumb_Dir = './uploads/User_Pic/User_Thumb/'.$UserData->User_Thumb;
						//$this->prd($uploaddir);
						@unlink($uploaddir);
						@unlink($Thumb_Dir);
					
					$data = $this->upload->data();
					$Img_Source =$data['full_path'];
					
					$UserPic_Name = $data['raw_name'].$data['file_ext'] ;
					$Thumb_Name = date("d-M-Y").'__'.'User_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
					$thumb_Save = 'uploads/User_Pic/User_Thumb/'.$Thumb_Name;
		
					$this->resize_img($Img_Source, $thumb_Save,'250','250');
						
						$post['user_image'] = $UserPic_Name;
						$post['User_Thumb'] = $Thumb_Name;
						
					$this->Nair->_update('tbl_users',$post,['user_id'=>$user_id] );
						
					
					
				}
		return redirect('user/dashboard');
		}else{
				$this->load->view('user/edit/'.$user_id);	
		}
		
	}
	public function changPass()
	{	
		if ($this->input->post())
		{
			if($this->form_validation->run('changePass') )
				{
						$oldPass = $this->myHash($this->input->post('old_password'));
						$newPass = $this->myHash($this->input->post('new_password'));
						$result = $this->Nair->_getSingleData('tbl_users',["user_id"=>$this->session->userdata('user_id')]);
						
							$data = array(
										"user_password" => $newPass,
										"user_param" => $this->myHash(rand(100,999))
									 );
									 
							if($oldPass != $result->user_password)
					 		{
								$this->session->set_flashdata('error_msg',"Old Password not match. Try again...");
								return redirect('user/changPass');
									
							}else if( $this->Nair->_update("tbl_users",$data,["user_id"=>$this->session->userdata('user_id')]) )
							{
									$this->session->set_flashdata('error_msg',"Failed to change password, Please try again");
									return redirect('user/changPass');
							}else{
									$this->session->set_flashdata('error_msg',"Password change successful");
									return redirect('user/dashboard');
											
							}
				}
				$this->load->view('changePass');
		}else{
			$this->load->view('changePass');
		}	
		
	}
//----------------------------------- User Temple ---------------------------------------------------	
	public function usertemp()
	{	
		$this->load->library('pagination');
		
		$config = 	[
						'base_url'			=>base_url('user/usertemp'),
						'per_page'			=>5,
						'total_rows'		=>	$this->Nair->num_rows('nair_temple',['Post_By'=>$this->session->userdata('UserName')]),
						'full_tag_open'		=>	"<ul class='pagination'>",
						'full_tag_close'	=>	"</ul>",
						'first_tag_open'	=>	'<li>',
						'first_tag_close'	=>	'</li>',
						'last_tag_open'		=>	'<li>',
						'last_tag_close'	=>	'</li>',
						'next_tag_open'		=>	'<li>',
						'next_tag_close'	=>	'</li>',
						'prev_tag_open'		=>	'<li>',
						'prev_tag_close'	=>	'</li>',
						'num_tag_open'		=>	'<li>',
						'num_tag_close'		=>	'</li>',
						'cur_tag_open'		=>	"<li class='active'><a>",
						'cur_tag_close'		=>	'</a></li>',
					];
		
		$this->pagination->initialize($config);
		
		$User_Temp = $this->Nair->_userPagination('nair_temple',['Post_By'=>$this->session->userdata('UserName')], $config['per_page'], $this->uri->segment(3));
		//$this->prd($User_Temp);
		$this->load->view('usertemp',['User_Temp'=>$User_Temp]);
	}
	public function addUserTemp()
	{
		$DistVal = $this->Nair->Get_District_Name();
		//$this->prd($DistVal);
		$this->load->view('addTemp',['DistVal'=>$DistVal]);
	}
	public function storeTemp()
	{
		$DistVal = $this->Nair->Get_District_Name();
		
		$post = $this->input->post();
		unset($post['Submit']);
		//$this->prd($post);
		$post['Post_By'] = $this->session->userdata('UserName');
		$post['Active'] = 'No';
		$post['Post_Date'] = date('Y-m-d');
		
		if($this->form_validation->run('User_Temple') )
		{
			if($insert_id = $this->Nair->_insert('nair_temple',$post)){
			   		$this->session->set_flashdata('error_msg',"New Temple Add Successful");
			  	}else{
					$this->session->set_flashdata('error_msg',"Failed to Add New Temple, Please try again");
			}		
//======================= Loading Image Library and Config ========================================
				$config =	[
						'upload_path'   => './uploads/Temple_Pic/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => date("d-M-Y").'__Temple_Pic__'.rand(10000,90000),
						
					];
					$this->load->library('upload',$config);
					$userfile = "Temple_Pic";
			
			if ( ! $this->upload->do_upload('Temple_Pic')){	  
						$error = $this->upload->display_errors();
					 	$this->load->view('edit', compact('error'));
					
				}else{	
						$data = $this->upload->data();
						$Img_Source =$data['full_path'];
					
					$Temple_Pic = $data['raw_name'].$data['file_ext'] ;
					$Thumb_Name = date("d-M-Y").'__'.'Temp_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
					$thumb_Save = 'uploads/Temple_Pic/Temp_Thumb/'.$Thumb_Name;
		
					$this->resize_img($Img_Source, $thumb_Save,'150','150');
						
						$post['Temp_Img'] = $Temple_Pic;
						$post['Temp_Thumb'] = $Thumb_Name;
						
					$this->Nair->_update('nair_temple',$post,['Temp_Id'=>$insert_id] );
						
					
					
				}
		return redirect('user/usertemp');
		}else{
				$this->load->view('addTemp',['DistVal'=>$DistVal]);
		}
	}
	public function editTemp($Temp_Id)
	{	
		$DistVal = $this->Nair->Get_District_Name();
		$UserTempVal = $this->Nair->_getSingleData('nair_temple',['Temp_Id'=>$Temp_Id]);
		//$this->prd($UserTempVal);
		$this->load->view('editTemp',['UserTempVal'=>$UserTempVal,'DistVal'=>$DistVal]);
	}
	public function updateTemp($Temp_Id)
	{	$DistVal = $this->Nair->Get_District_Name();
		$UserTempVal = $this->Nair->_getSingleData('nair_temple',['Temp_Id'=>$Temp_Id]);
		$post = $this->input->post();
		unset($post['Submit']);
		$post['Active'] = 'No';
		//$this->prd($post);
		if($this->form_validation->run('User_Temple') )
		{
			if($insert_id = $this->Nair->_update('nair_temple',$post,['Temp_Id'=>$Temp_Id] )){
			   		$this->session->set_flashdata('error_msg',"Failed to Update Temple, Please try again");
			  	}else{
					$this->session->set_flashdata('error_msg',"User Temple Update Successful");
			}		
//======================= Loading Image Library and Config ========================================
				$config =	[
						'upload_path'   => './uploads/Temple_Pic/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => date("d-M-Y").'__Temple_Pic__'.rand(10000,90000),
						
					];
					$this->load->library('upload',$config);
					$userfile = "Temple_Pic";
			
			if ( ! $this->upload->do_upload('Temple_Pic')){	  
						$error = $this->upload->display_errors();
					 	$this->load->view('editTemp', compact('error'));
					
				}else{	
						$data = $this->upload->data();
						$Img_Source =$data['full_path'];
					
					$Temple_Pic = $data['raw_name'].$data['file_ext'] ;
					$Thumb_Name = date("d-M-Y").'__'.'Temp_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
					$thumb_Save = 'uploads/Temple_Pic/Temp_Thumb/'.$Thumb_Name;
		
					$this->resize_img($Img_Source, $thumb_Save,'250','250');
						
						$post['Temp_Img'] = $Temple_Pic;
						$post['Temp_Thumb'] = $Thumb_Name;
						
						//$this->prd($post);
					$this->Nair->_update('nair_temple',$post,['Temp_Id'=>$Temp_Id] );
						
					
					
				}
			return redirect('user/usertemp');
		}else{
				$this->load->view('editTemp',['UserTempVal'=>$UserTempVal,'DistVal'=>$DistVal]);
				//$this->load->view('admin/websys/editSlider', ['Slide_Val'=>$Slide_Val]);	
		}
	}
//----------------------------------- User Artical ---------------------------------------------------	
	public function userartical()
	{	
		$this->load->library('pagination');
		
		$config = 	[
						'base_url'			=>base_url('user/userartical'),
						'per_page'			=>5,
						'total_rows'		=>	$this->Nair->num_rows('nair_artical',['Post_By'=>$this->session->userdata('UserName')]),
						'full_tag_open'		=>	"<ul class='pagination'>",
						'full_tag_close'	=>	"</ul>",
						'first_tag_open'	=>	'<li>',
						'first_tag_close'	=>	'</li>',
						'last_tag_open'		=>	'<li>',
						'last_tag_close'	=>	'</li>',
						'next_tag_open'		=>	'<li>',
						'next_tag_close'	=>	'</li>',
						'prev_tag_open'		=>	'<li>',
						'prev_tag_close'	=>	'</li>',
						'num_tag_open'		=>	'<li>',
						'num_tag_close'		=>	'</li>',
						'cur_tag_open'		=>	"<li class='active'><a>",
						'cur_tag_close'		=>	'</a></li>',
					];
		
		$this->pagination->initialize($config);
		
		$User_Artical = $this->Nair->_userPagination('nair_artical',['Post_By'=>$this->session->userdata('UserName')], $config['per_page'], $this->uri->segment(3));
		//$this->prd($User_Artical);
		$this->load->view('userartical',['User_Artical'=>$User_Artical]);
	}
	public function addArt()
	{
		$this->load->view('addArt');
	}
	public function storeArt()
	{
		$post = $this->input->post();
		unset($post['Submit']);
		//$this->prd($post);
		$post['Post_By'] = $this->session->userdata('UserName');
		$post['Active'] = 'No';
		$post['Post_Date'] = date('Y-m-d');
		
		if($this->form_validation->run('User_Artical') )
		{
			if($insert_id = $this->Nair->_insert('nair_artical',$post)){
			   		$this->session->set_flashdata('error_msg',"add new artical Successful");
			  	}else{
					$this->session->set_flashdata('error_msg',"Failed to add new artical , Please try again");
			}		
//======================= Loading Image Library and Config ========================================
				$config =	[
						'upload_path'   => './uploads/Artical_Pic/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => date("d-M-Y").'__User_Pic__'.rand(10000,90000),
						
					];
					$this->load->library('upload',$config);
					$userfile = "Artical_Pic";
			
			if ( ! $this->upload->do_upload('Artical_Pic')){	  
						$error = $this->upload->display_errors();
					 	$this->load->view('edit', compact('error'));
					
				}else{	
						$data = $this->upload->data();
						$Img_Source =$data['full_path'];
					
					$Artical_Pic = $data['raw_name'].$data['file_ext'] ;
					$Thumb_Name = date("d-M-Y").'__'.'Artical_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
					$thumb_Save = 'uploads/Artical_Pic/Artical_Thumb/'.$Thumb_Name;
		
					$this->resize_img($Img_Source, $thumb_Save,'250','250');
						
						$post['Artical_Img'] = $Artical_Pic;
						$post['Artical_Thumb'] = $Thumb_Name;
						
					$this->Nair->_update('nair_artical',$post,['Art_Id'=>$insert_id] );
						
					
					
				}
		return redirect('user/userartical');
		}else{
				$this->load->view('addArt');	
		}
	}
	public function editArt($Art_Id)
	{
		$UserArtVal = $this->Nair->getArtVal($Art_Id);
		//$this->prd($UserArtVal);
		$this->load->view('editArt',['UserArtVal'=>$UserArtVal]);
	}
	public function updateArt($Art_Id)
	{
		$ArtData = $this->Nair->_getSingleData('nair_artical',['Art_Id'=>$Art_Id]);
		
		$post = $this->input->post();
		unset($post['Submit']);
		//$this->prd($post);
		$post['Active'] = 'No';
		if($this->form_validation->run('User_Artical') )
		{
			if($insert_id = $this->Nair->_update('nair_artical',$post,['Art_Id'=>$Art_Id] )){
			   		$this->session->set_flashdata('error_msg',"Failed to Update Artical, Please try again");
			  	}else{
					$this->session->set_flashdata('error_msg',"User Artical Update Successful");
			}		
//======================= Loading Image Library and Config ========================================
				$config =	[
						'upload_path'   => './uploads/Artical_Pic/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => date("d-M-Y").'__User_Pic__'.rand(10000,90000),
						
					];
					$this->load->library('upload',$config);
					$userfile = "User_Pic";
			
			if ( ! $this->upload->do_upload('Artical_Pic')){	  
						$error = $this->upload->display_errors();
					 	$this->load->view('edit', compact('error'));
					
				}else{	
						$data = $this->upload->data();
						$Img_Source =$data['full_path'];
					
					$Artical_Pic = $data['raw_name'].$data['file_ext'] ;
					$Thumb_Name = date("d-M-Y").'__'.'Artical_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
					$thumb_Save = 'uploads/Artical_Pic/Artical_Thumb/'.$Thumb_Name;
		
					$this->resize_img($Img_Source, $thumb_Save,'250','250');
						
						$post['Artical_Img'] = $Artical_Pic;
						$post['Artical_Thumb'] = $Thumb_Name;
						
					$this->Nair->_update('nair_artical',$post,['Art_Id'=>$Art_Id] );
						
					
					
				}
		return redirect('user/userartical');
		}else{
				$this->load->view('editArtical/'.$Art_Id);	
		}
	}
//----------------------------------- User News ---------------------------------------------------	
	public function usernews()
	{	
		$this->load->library('pagination');
		
		$config = 	[
						'base_url'			=>base_url('user/userartical'),
						'per_page'			=>5,
						'total_rows'		=>	$this->Nair->num_rows('nair_news',['Post_By'=>$this->session->userdata('UserName')]),
						'full_tag_open'		=>	"<ul class='pagination'>",
						'full_tag_close'	=>	"</ul>",
						'first_tag_open'	=>	'<li>',
						'first_tag_close'	=>	'</li>',
						'last_tag_open'		=>	'<li>',
						'last_tag_close'	=>	'</li>',
						'next_tag_open'		=>	'<li>',
						'next_tag_close'	=>	'</li>',
						'prev_tag_open'		=>	'<li>',
						'prev_tag_close'	=>	'</li>',
						'num_tag_open'		=>	'<li>',
						'num_tag_close'		=>	'</li>',
						'cur_tag_open'		=>	"<li class='active'><a>",
						'cur_tag_close'		=>	'</a></li>',
					];
		
		$this->pagination->initialize($config);
		
		$User_News = $this->Nair->_userPagination('nair_news',['Post_By'=>$this->session->userdata('UserName')], $config['per_page'], $this->uri->segment(3));
		//$this->prd($User_Artical);
		$this->load->view('usernews',['User_News'=>$User_News]);
	}
	public function addnews()
	{
		if($post = $this->input->post())
		{

				unset($post['Submit']);
				
				
				$post['Post_By']= $this->session->userdata('UserName');
				$post['Active'] = 'No';
				$post['Post_Date']=date('Y-m-d');
				$post['NewsDtl'] = $this->input->post('NewsDtl', FALSE);
				$myPic= $_FILES['News_Pic']['name'];
				
				//$this->prd($post);
				
						$News_Pic_config = array();
						$News_Pic_config['upload_path'] = './uploads/NewsPic/';
						$News_Pic_config['allowed_types'] = 'gif|jpg|jpeg|png';
						$News_Pic_config['file_name'] = date("d-M-Y").'__'.'News_Pic'.'__'.rand(10000,9000);
						
						$this->load->library('upload',$News_Pic_config);

				if(is_array($_FILES['News_Pic']) && $_FILES['News_Pic']['name']=='') 
				{
					if($this->form_validation->run('User_News'))
					{
						if($insertId = $this->Nair->_insert('nair_news',$post))
						{
							$this->session->set_flashdata('error_msg',"News Added Successful");
						}else{
							$this->session->set_flashdata('error_msg',"Failed to Add News, Please try again");
						}
						return redirect('user/usernews');
					}
						$this->load->view('addnews');
					
				}else{
					
			if( $this->form_validation->run('User_News') && $this->upload->do_upload('News_Pic') ) {
					
						$data = $this->upload->data();
							if($insertId = $this->Nair->_insert('nair_news',$post))
							{
								$data = $this->upload->data();
								$Img_Source =$data['full_path'];
						
								$News_Pic = $data['raw_name'].$data['file_ext'] ;
								$Thumb_Name = date("d-M-Y").'__'.'News_Pic'.'__'.rand(10000,9000).$data['file_ext'];
								$thumb_Save_Path = './uploads/NewsPic/News_Thumb/'.$Thumb_Name;
								
								$this->resize_img($Img_Source, $thumb_Save_Path,'250','250');
								$post['News_Img'] = $News_Pic;
								$post['News_Thumb'] = $Thumb_Name;
								$this->Nair->_update('nair_news',$post,['News_Id'=>$insertId] );
									$this->session->set_flashdata('error_msg',"News Added Successful");
							}else{
									$this->session->set_flashdata('error_msg',"Failed to Add News, Please try again");
							}
								return redirect('user/usernews');
					
							} else {
								$upload_error = $this->upload->display_errors('Select Only Image, ');
								$this->load->view('addnews',compact('upload_error'));
							}	
				}
		}else{
			$this->load->view('addnews');	
		}
	}
	public function editnews($News_Id)
	{
		$NewsVal = $this->Nair->_getSingleData('nair_news',['News_Id'=>$News_Id,]);
		//$this->prd($NewsVal);
		$Del_News_Pic = './uploads/NewsPic/'.$NewsVal->News_Img;
		$Del_News_Thumb = './uploads/NewsPic/News_Thumb/'.$NewsVal->News_Thumb;
		
		if($post = $this->input->post())
			{
				unset($post['Submit']);
				$post['Post_By']= $this->session->userdata('UserName');
				$post['Post_Date']=date('Y-m-d');
				$post['NewsDtl'] = $this->input->post('NewsDtl', FALSE);
				$MyFile= $_FILES['News_Pic'];
				//$this->prd($post);
						
						$News_Pic_config = array();
						$News_Pic_config['upload_path'] = './uploads/NewsPic/';
						$News_Pic_config['allowed_types'] = 'gif|jpg|jpeg|png';
						$News_Pic_config['file_name'] = date("d-M-Y").'__'.'News_Pic'.'__'.rand(10000,9000);
						
						$this->load->library('upload',$News_Pic_config);

				if(is_array($_FILES['News_Pic']) && $_FILES['News_Pic']['name']=='') 
				{
					if($this->form_validation->run('User_News'))
						{
							if($this->Nair->_update('nair_news',$post,['News_Id'=>$News_Id]))
							{			// $this->Nair->_update('nair_aarati',$post,['Aarti_Id'=>$AartiVal->Aarti_Id] )
								$this->session->set_flashdata('error_msg',"News Added Successful");
							}else{
								$this->session->set_flashdata('error_msg',"Failed to Add News, Please try again");
							}
							return redirect('user/usernews');
						}
						$this->load->view('editnews',['NewsVal'=>$NewsVal]);
					
				}else{
					
					if( $this->form_validation->run('User_News') && $this->upload->do_upload('News_Pic') ) 
					{
						@unlink($Del_News_Pic);
	 					@unlink($Del_News_Thumb);
						
						$data = $this->upload->data();
						//$this->prd($data);
						
						$Img_Source =$data['full_path'];
				
						$News_Pic = $data['raw_name'].$data['file_ext'] ;
						$Thumb_Name = date("d-M-Y").'__'.'News_Pic'.'__'.rand(10000,9000).$data['file_ext'];
						$thumb_Save_Path = './uploads/NewsPic/News_Thumb/'.$Thumb_Name;
						
						$this->resize_img($Img_Source, $thumb_Save_Path,'250','250');
						$post['News_Img'] = $News_Pic;
						$post['News_Thumb'] = $Thumb_Name;
						$this->Nair->_update('nair_news',$post,['News_Id'=>$News_Id] );

						$this->session->set_flashdata('error_msg',"News Update Successful");
					
					return redirect('user/usernews');
					
					}else{
						$upload_error = $this->upload->display_errors();
						$this->session->set_flashdata('error_msg',"News Update Failed, Please try again");
						$this->load->view('editNews',['NewsVal'=>$NewsVal,'upload_error'=>$upload_error]);
					}	
				}
				
				
			}else{
				$this->load->view('editnews',['NewsVal'=>$NewsVal]);
			}
	}
//----------------------------------- User Comments  ---------------------------------------------------	
	public function aartiCmt()
	{
		 $UserName =  $this->input->post('UserName');
		 $Aarti_Id = $this->input->post('Aarti_Id');
		 $Aarti_Title = $this->input->post('Aarti_Title');
		 $AartiCmt = $this->input->post('AartiCmt');
			$post = array (
							"UserName" => $UserName,
							"Aarti_Id" => $Aarti_Id,
							"Cmt_On_Post" => $Aarti_Title,
							"Comment_Dtl" => $AartiCmt,
							"user_id" => $this->session->userdata('user_id'),
							"Cmt_Type"=>'Aarti Post',
							"Cmt_Date" => date('Y-m-d'),
							"Active" => 'No'
						  );

			if($this->Nair->_insert('nair_comment',$post))
			{
				echo "<div class='red-left'>Your Comment submit, after validation will show you</div>";
			}else{
				echo "<div class='red-left'>Failed to submit your comment, Please try again</div>";
			}	
		
	}
	public function tempCmt()
	{
		 $UserName =  $this->input->post('UserName');
		 $Temp_Id = $this->input->post('Temp_Id');
		 $Temp_Name = $this->input->post('Temp_Name');
		 $tempCmt = $this->input->post('tempCmt');
			$post = array (
							"UserName" => $UserName,
							"Temp_Id" => $Temp_Id,
							"Cmt_On_Post" => $Temp_Name,
							"Comment_Dtl" => $tempCmt,
							"user_id" => $this->session->userdata('user_id'),
							"Cmt_Type"=>'Temple Post',
							"Cmt_Date" => date('Y-m-d'),
							"Active" => 'No'
						  );

			if($this->Nair->_insert('nair_comment',$post))
			{
				echo "<div class='red-left'>Your Comment submit, after validation will show you</div>";
			}else{
				echo "<div class='red-left'>Failed to submit your comment, Please try again</div>";
			}	
		
	}
	public function articalCmt()
	{
		 $UserName =  $this->input->post('UserName');
		 $Art_Id = $this->input->post('Art_Id');
		 $Artical_Title = $this->input->post('Artical_Title');
		 $ArticalCmt = $this->input->post('ArticalCmt');
			$post = array (
							"UserName" => $UserName,
							"Art_Id" => $Art_Id,
							"Cmt_On_Post" => $Artical_Title,
							"Comment_Dtl" => $ArticalCmt,
							"user_id" => $this->session->userdata('user_id'),
							"Cmt_Type"=>'Artical Post',
							"Cmt_Date" => date('Y-m-d'),
							"Active" => 'No'
						  );

			if($this->Nair->_insert('nair_comment',$post))
			{
				echo "<div class='red-left'>Your Comment submit, after validation will show you</div>";
			}else{
				echo "<div class='red-left'>Failed to submit your comment, Please try again</div>";
			}	
		
	}
	public function uservideoCmt()
	{
		  $UserName =  $this->input->post('UserName');
		  $Video_Id = $this->input->post('Video_Id');
		  $Video_Name = $this->input->post('Video_Name');
		  $VideoCmt = $this->input->post('VideoCmt');
		
		$post = array (
							"UserName" => $UserName,
							"Video_Id" => $Video_Id,
							"Cmt_On_Post" => $Video_Name,
							"Comment_Dtl" => $VideoCmt,
							"user_id" => $this->session->userdata('user_id'),
							"Cmt_Type"=>'Video Post',
							"Cmt_Date" => date('Y-m-d'),
							"Active" => 'No'
						  );

			if($this->Nair->_insert('nair_comment',$post))
			{
				echo "<div class='red-left'>Your Comment submit, after validation will show you</div>";
			}else{
				echo "<div class='red-left'>Failed to submit your comment, Please try again</div>";
			}	
		
	}
	public function newsPostCmt()
	{
		  $UserName =  $this->input->post('UserName');
		  $News_Id = $this->input->post('News_Id');
		  $NewsTitle = $this->input->post('NewsTitle');
		  $newsCmt = $this->input->post('newsCmt');
		
		$post = array (
							"UserName" => $UserName,
							"News_Id" => $News_Id,
							"Cmt_On_Post" => $NewsTitle,
							"Comment_Dtl" => $newsCmt,
							"user_id" => $this->session->userdata('user_id'),
							"Cmt_Type"=>'News Post',
							"Cmt_Date" => date('Y-m-d'),
							"Active" => 'No'
						  );

			if($this->Nair->_insert('nair_comment',$post))
			{
				echo "<div class='red-left'>Your Comment submit, after validation will show you</div>";
			}else{
				echo "<div class='red-left'>Failed to submit your comment, Please try again</div>";
			}	
		
	}
//----------------------------------- User Comments  ---------------------------------------------------		
	public function delTemp()
	{
		$Temp_Id= $this->input->post('Temp_Id');
		$Temp_Img= $this->input->post('Temp_Img');
		$Temp_Thumb= $this->input->post('Temp_Thumb');
		//$this->prd($Temp_Thumb);
		
		$ImagPath = './uploads/User_Pic/'.$Temp_Img;
		$ThumbPath = './uploads/User_Pic/User_Thumb/'.$Temp_Thumb;
		
		//$this->prd($Temp_Id);
		
		if( $Temp_Img =='' and $Temp_Thumb =='' )
		{		
			@unlink($ImagPath);
			@unlink($ThumbPath);
			$this->Nair->_delete('nair_temple',['Temp_Id'=>$Temp_Id]);
		}else if( $Temp_Img =='' ){
			@unlink($ThumbPath);
			$this->Nair->_delete('nair_temple',['Temp_Id'=>$Temp_Id]);
		}else if($Temp_Thumb ==''){
			@unlink($ImagPath);
			$this->Nair->_delete('nair_temple',['Temp_Id'=>$Temp_Id]);
		}
		
	}
//-----------------------------------------------------------------------------------------------------------------	
}
