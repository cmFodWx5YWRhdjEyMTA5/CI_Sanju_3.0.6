<?
//Initialise the upload file class
    $config['upload_path'] = './image_uploads/';
    $config['allowed_types'] = 'jpg|jpeg|gif|png';
    $config['max_size'] = '6048';
    $this->load->library('upload', $config);

    $userfile = "_upload_image";
            //check if a file is being uploaded
            if(strlen($_FILES["_upload_image"]["name"])>0){

                if ( !$this->upload->do_upload($userfile))//Check if upload is unsuccessful
                {
                    $upload_errors = $this->upload->display_errors('', '');
                    $this->session->set_flashdata('errors', 'Error: '.$upload_errors);   
                    redirect('admin/view_food/'.$food->course_id);  
                }
                else
                {
                    //$image_data = $this->upload->data();

                     ////[ THUMB IMAGE ]
                    $config2['image_library'] = 'gd2';
                    $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
                    $config2['new_image'] = './image_uploads/thumbs';
                    $config2['maintain_ratio'] = TRUE;
                    $config2['create_thumb'] = TRUE;
                    $config2['thumb_marker'] = '_thumb';
                    $config2['width'] = 75;
                    $config2['height'] = 50;
                    $this->load->library('image_lib',$config2); 

                    if ( !$this->image_lib->resize()){
                $this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));   
              }

                    //[ MAIN IMAGE ]
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
                    //$config['new_image'] = './image_uploads/';
                    $config['maintain_ratio'] = TRUE;
                    $config['width'] = 250;
                    $config['height'] = 250;
                    $this->load->library('image_lib',$config); 

                    if ( !$this->image_lib->resize()){
                $this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));   
              }
               }      
           }  