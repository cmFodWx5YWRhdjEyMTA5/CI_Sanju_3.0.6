<?php
/**
 * Description of Rashifal Controller
 *
 * @author Aakash Nair
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Rashifal extends MY_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		if (!$this->session->userdata('Userid'))
        { 
			$this->session->set_flashdata('login_failed',"Please Login...");
            redirect('admin/admin');
        }
		$this->load->model('commodel','Rashifal');
		$this->load->model('Akashmodel','Nair');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="red-left">', '</div>');
	}
//================================== Rashifal Master ================================== tbl_rashifal
	public function index()
	{	
		$RashiMst = $this->Nair->_tbldata('tbl_rashifal','Rashi_id');
		$this->load->view('admin/rashifal/index',['RashiMst'=>$RashiMst]);
	}
	public function editRashi($Rashi_id)
	{
		$Single_Rashi = $this->Nair->_getSingleData('tbl_rashifal',['Rashi_id'=>$Rashi_id]);
			if($post = $this->input->post())
			{
				unset($post['Submit']);
				$post['Rashi_fal'] = $this->input->post('Rashi_fal', FALSE);
				
					if( $this->form_validation->run('Rashifal_Rules') )
					{
						if($this->Nair->_update('tbl_rashifal',$post,['Rashi_id'=>$Rashi_id]))
						{
							$this->session->set_flashdata('error_msg',"Failed to Update Slider, Please try again");
							}else{
							$this->session->set_flashdata('error_msg',"Update Slider Successful");
						}
//======================= Loading Image Library and Config ========================================
						$Rashi_Pic_config = array();
							
						$Rashi_Pic_config['upload_path'] = './uploads/Rashi_Pic/';
						$Rashi_Pic_config['allowed_types'] = 'gif|jpg|jpeg';
						$Rashi_Pic_config['file_name'] = date("d-M-Y").'__'.'Rashi_Pic'.'__'.rand(10000,9000);
						
						$Del_Rashi_Pic = './uploads/Rashi_Pic/'.$Single_Rashi->Rashi_Img;	
						$Del_Rashi_Thumb = './uploads/Rashi_Pic/Rashi_Thumb/'.$Single_Rashi->Rashi_Thumb;	
						
						$this->load->library('upload',$Rashi_Pic_config);
						$userfile = "Rashi_Pic";
							if ( ! $this->upload->do_upload('Rashi_Pic'))
							{	  
						$error = $this->upload->display_errors();
					 	$this->load->view('admin/rashifal/editRashi', ['Single_Rashi'=>$Single_Rashi]);
					
				
					}else{	
							$data = $this->upload->data();
							
							@unlink($Del_Rashi_Pic);
							@unlink($Del_Rashi_Thumb);
							
							$Img_Source =$data['full_path'];
					
							$Rashi_Pic = $data['raw_name'].$data['file_ext'] ;
							$Thumb_Name = date("d-M-Y").'__'.'Rashi_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
							$thumb_Save_Path = './uploads/Rashi_Pic/Rashi_Thumb/'.$Thumb_Name;
		
		
							$this->resize_img($Img_Source, $thumb_Save_Path,'100','100');
							
							$post['Rashi_Img'] = $Rashi_Pic;
							$post['Rashi_Thumb'] = $Thumb_Name;
						
							$this->Nair->_update('tbl_rashifal',$post,['Rashi_id'=>$Single_Rashi->Rashi_id] );
					}
					
						return redirect('admin/rashifal/index');
					}
				$this->load->view('admin/rashifal/editRashi', ['Single_Rashi'=>$Single_Rashi]);
			}else{
				$this->load->view('admin/rashifal/editRashi', ['Single_Rashi'=>$Single_Rashi]);
			}
	}
	public function UpdateRashi($Rashi_id)
	{	
		
		$Single_Rashi = $this->Rashifal->_getSingleData('tbl_rashifal',['Rashi_id'=>$Rashi_id,]);
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="red-left">', '</div>');
		$post = $this->input->post();
		unset($post['Submit']);
		
		
		if($this->form_validation->run('Rashifal_Rules') )
		{											  //($table, $data, $condition)
			if($insert_id = $this->Rashifal->_update('tbl_rashifal',$post,['Rashi_id'=>$Rashi_id] ) ){
			   		$this->session->set_flashdata('error_msg',"Rashifal Update Successful");
			  	}else{
				$this->session->set_flashdata('error_msg',"Failed to Update Rashifal, Please try again");
			}
		
				
//======================= Loading Image Library and Config ========================================
						
				
				$config =	[
						'upload_path'   => './uploads/Rashi_Pic/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => date("d-M-Y").'__Rashi_Pic__'.rand(10000,90000),
						
					];
					$this->load->library('upload',$config);
					
				if ( ! $this->upload->do_upload('Rashi_Img')){	  
					 $error = $this->upload->display_errors();
					 $this->load->view('admin/rashifal/editRashi', compact('error'));
					
				}else{	
						$ImgPath = './uploads/Rashi_Pic/'.$Single_Rashi->Rashi_Img;
						$ThumbPath = './uploads/Rashi_Pic/Rashi_Thumb/'.$Single_Rashi->Rashi_Thumb;
						//$this->prd($uploaddir);
						@unlink($ImgPath);
						@unlink($ThumbPath);
						
					$data = $this->upload->data();
					
					$Rashi_Img = $data['raw_name'].$data['file_ext'] ;
					$img_source =$data['full_path'];
					$thumbImg = date("d-M-Y").'__'.'Rashi_Thumb'.'__'.rand(10000,9000).$data['file_ext'];
					$thumb_Save = 'uploads/Rashi_Pic/Rashi_Thumb/'.$thumbImg;
		
					$this->resize_img($img_source, $thumb_Save,'100','100');
						
						$post['Rashi_Img'] = $Rashi_Img;
						$post['Rashi_Thumb'] = $thumbImg;
						
					$this->Rashifal->_update('tbl_rashifal',$post,['Rashi_id'=>$Rashi_id] );
				}
		return redirect('admin/rashifal/index');
		}else{
				$this->load->view('admin/rashifal/editRashi', ['Single_Rashi'=>$Single_Rashi]);	
		}
		
	}	

//================================== Slider Master ==================================
	
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
//============================================================================================================	
//============================================================================================================
}