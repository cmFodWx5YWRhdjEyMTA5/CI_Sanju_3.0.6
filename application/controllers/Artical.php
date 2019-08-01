<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artical extends MY_Controller {

	public function index()
	{	
		$this->load->model('articlesmodel','artical');
		$load_artical = $this->artical->artical_list();
		//$this->prd($load_artical);
		
		$this->load->view('admin/artical/index', ['Art_Data'=> $load_artical]);
	}
	// Adding New Artical
	public function add_artical()
	{	
		$this->load->model('articlesmodel','artical');
		$data['dropdown'] = $this->artical->Get_District_Name();
		$this->load->view('admin/artical/add_artical', $data);
	}
	public function store_artical()
	{
		$this->load->model('articlesmodel','artical');
		//loading Image Library and Config 
		$config =	[
						'upload_path'   => './uploads/Artical_Pic/',
						'allowed_types' => 'gif|jpg|jpeg|png',
						'file_name'     => 'Artical_Pic__'.rand(10000,90000).'__'.date("d-M-Y"),
					];
						
	
		$this->load->library('upload',$config);
		// Validating form and inserting value 
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="red-left">', '</div>');
	
		if($this->form_validation->run('artical_rules') && $this->upload->do_upload('Artical_Img') )
		{
			//getting value to form...
				$post = $this->input->post();
				unset($post['Submit']);
				$data = $this->upload->data();
				
				$image_name = $data['raw_name'].$data['file_ext'] ;
				$post['Artical_Img'] = $image_name;

//================= Resize Image  file_name ==============================
			$img_source =$data['full_path'];
			$thumb_data = 'Artical_Thumb'.'__'.date("d-M-Y").'__'.rand(10000,9000).$data['file_ext'];
			$thumb_Save = 'uploads/Artical_Pic/Artical_Thumb/'.$thumb_data;


			$this->resize_img($img_source, $thumb_Save,'100','100');
				$post['Artical_Thumb'] = $thumb_data;
				$post['Post_By'] = 'Admin';
				$post['Post_Date'] = date('Y-m-d');

				if($this->artical->add_artical($post) ){
			   		$this->session->set_flashdata('error_msg',"Artical Added Successful");
			  	}else{
				$this->session->set_flashdata('error_msg',"Failed to Add Artical, Please try again");
			}
				return redirect('admin/artical/index');
		}else{
				$upload_error = $this->upload->display_errors();
				$this->load->view('admin/artical/add_artical', compact('upload_error'));
		}
	}
	//Editing Articals
	public function edit_artical($Art_Id)
	{
		$this->load->model('articlesmodel', 'artical');
		$Art_Val = $this->artical->edit_artical($Art_Id);
		$this->load->view('admin/artical/edit_artical', ['Art_Val'=>$Art_Val]);
	}
	public function update_artical($Art_Id)
	{	//exit($Art_Id);
		$this->load->library('form_validation');
		if( $this->form_validation->run('artical_rules') ) {
			$post = $this->input->post();
			unset($post['Submit']);

			$this->load->model('articlesmodel', 'artical');
			

			if($this->artical->update_artical($Art_Id, $post)){
				//Image Updating 

				$this->session->set_flashdata('error_msg',"Artical Edited Successful");
			  	}else{
				$this->session->set_flashdata('error_msg',"Failed to Editing Artical, Please try again");
			}
				return redirect('admin/artical/index');
			}else{
				$upload_error = $this->upload->display_errors();
				$this->load->view('admin/artical/add_artical', compact('upload_error'));
		}

	}

	public function del_artical()
	{
		$Art_Id= $this->input->post('Art_Id');

		$Artical_Img= $this->input->post('Artical_Img');
		$Artical_Thumb= $this->input->post('Artical_Thumb');
		//$this->prd($Artical_Thumb);
		
		$this->load->model('articlesmodel', 'artical');

			$dir_pic= './uploads/Artical_Pic/';
			$thub= './uploads/Artical_Pic/Artical_Thumb/';
		
		

		if($this->artical->del_artical($Art_Id, $Artical_Img, $Artical_Thumb) ){
			$this->session->set_flashdata('error_msg',"Artical Deleted Successful");
			
			@unlink($dir_pic.$Artical_Img);
			@unlink($thub.$Artical_Thumb);
   			
	  	}else{
			$this->session->set_flashdata('error_msg',"Failed to Delete Artical, Please try again");
		}
			return redirect('admin/artical/index');
	}



}