<?php
/**
 * Description of News Controller
 *
 * @author Aakash Nair
 */ 
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller 
{	
	public function __construct() 
	{
		parent::__construct();
		if (!$this->session->userdata('Userid'))
        { 
			$this->session->set_flashdata('login_failed',"Please Login...");
            redirect('admin/admin');
        }
		$this->load->model('Akashmodel','Nair');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="red-left">', '</div>');
	}
//================================== Rashifal Master ================================== tbl_rashifal
	public function index()
	{	
		
		$newsDt = $this->Nair->_tbldata('nair_news','News_Id' );
		//$this->prd($newsDt);
		$this->load->view('admin/news/index',['newsDt'=>$newsDt]);
	}
	public function addNews()
	{
			if($post = $this->input->post())
			{
				unset($post['Submit']);
				$post['Post_By']='Admin';
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
					if($this->form_validation->run('News_Rules'))
						{
							if($insertId = $this->Nair->_insert('nair_news',$post))
							{
								$this->session->set_flashdata('error_msg',"News Added Successful");
							}else{
								$this->session->set_flashdata('error_msg',"Failed to Add News, Please try again");
							}
							return redirect('admin/news/index');
						}
						$this->load->view('admin/news/addNews');
					
				}else{
					
			if( $this->form_validation->run('News_Rules') && $this->upload->do_upload('News_Pic') ) {
					
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
//======================= Loading Vidio File and Config ========================================
								
							
								$this->session->set_flashdata('error_msg',"News Added Successful");
							}else{
								$this->session->set_flashdata('error_msg',"Failed to Add News, Please try again");
							}
							return redirect('admin/news/index');
					
					} else {
			$upload_error = $this->upload->display_errors();
			$this->load->view('admin/news/addNews',compact('upload_error'));
		}	
				}
				
				
			}else{
				$this->load->view('admin/news/addNews');
			}
	}
	public function editNews($News_Id)
	{
		$NewsVal = $this->Nair->_getSingleData('nair_news',['News_Id'=>$News_Id,]);
		$Del_News_Pic = './uploads/NewsPic/'.$NewsVal->News_Img;
		$Del_News_Thumb = './uploads/NewsPic/News_Thumb/'.$NewsVal->News_Thumb;
		
		//$this->prd($Del_News_Pic);				
			if($post = $this->input->post())
			{
				unset($post['Submit']);
				$post['Post_By']='Admin';
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
					if($this->form_validation->run('News_Rules'))
						{
							if($this->Nair->_update('nair_news',$post,['News_Id'=>$News_Id]))
							{			// $this->Nair->_update('nair_aarati',$post,['Aarti_Id'=>$AartiVal->Aarti_Id] )
								$this->session->set_flashdata('error_msg',"News Added Successful");
							}else{
								$this->session->set_flashdata('error_msg',"Failed to Add News, Please try again");
							}
							return redirect('admin/news/index');
						}
						$this->load->view('admin/news/editNews',['NewsVal'=>$NewsVal]);
					
				}else{
					
					if( $this->form_validation->run('News_Rules') && $this->upload->do_upload('News_Pic') ) 
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
					
					return redirect('admin/news/index');
					
					}else{
						$upload_error = $this->upload->display_errors();
						$this->session->set_flashdata('error_msg',"News Update Failed, Please try again");
						$this->load->view('admin/news/editNews',['NewsVal'=>$NewsVal,'upload_error'=>$upload_error]);
					}	
				}
				
				
			}else{
				$this->load->view('admin/news/editNews',['NewsVal'=>$NewsVal]);
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