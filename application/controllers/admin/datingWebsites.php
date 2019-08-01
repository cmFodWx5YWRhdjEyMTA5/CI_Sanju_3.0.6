<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dating_websites
 *
 * @author Bansal
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

include("appController.php");
class DatingWebsites extends AppController{

    //put your code here
    var $viewData = array();
    var $segment = 4;
    var $per_page = ADMIN_PAGEING_LIMIT;

    public function __construct() {
        parent::__construct();
        $this->site_santry->redirect = "/admin/admins/login";
        $this->site_santry->allow(array());
        $this->layout->set_layout("admin/layout_admin");
        $this->load->model(array("category", "dating_website"));
    }

    public function add() {
        //pr($this->input->post());
        $validation = array(
            array(
                'field' => 'site_title',
                'label' => 'Dating site title',
                'rules' => 'trim|required|max_length[255]'
            ),
			array(
                'field' => 'site_name',
                'label' => 'Dating site name',
                'rules' => 'trim|required|alpha_dash|max_length[255]|is_unique[dating_sites.site_name]'
            ),
            array(
                'field' => 'site_url',
                'label' => 'Dating site url',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'category_ids[]',
                'label' => 'Category',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'user_base',
                'label' => 'User base',
                'rules' => 'trim|required|max_length[255]'
            ),
            array(
                'field' => 'search_type',
                'label' => 'Matching/Searching',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'bottom_line',
                'label' => 'Bottom line',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'is_affiliates',
                'label' => 'Is Promotion',
                'rules' => 'trim|required'
            ),
			array(
                'field' => 'meta_keywords',
                'label' => 'Meta Keywords',
                'rules' => 'trim'
            ),
            array(
                'field' => 'meta_description',
                'label' => 'Meta Description',
                'rules' => 'trim'
            ),
            array(
                'field' => 'status',
                'label' => 'Status',
                'rules' => 'trim|required'
            )
        );
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules($validation);
            $this->form_validation->set_error_delimiters('<span class="input-notification error png_bg">', '</span>');
            $upload_response = $this->__upload_resize_image('image');
			
            if ($this->form_validation->run() === TRUE && (isset($upload_response['status']) && $upload_response['status'] == 'success')) {
                $data = _xss_clean(
                        array(
							"site_title" => _input_post('site_title'),
                            "site_name" => _input_post('site_name'),
                            "category_ids" => @implode(",", _input_post('category_ids')),
                            "user_base" => _input_post('user_base'),
                            "image" => $upload_response['upload_data']['file_name'],
                            "site_url" => _input_post('site_url'),
                            "search_type" => _input_post('search_type'),
                            "bottom_line" => _input_post('bottom_line'),
                            "is_affiliates" => _input_post('is_affiliates') == 1 ? 1 : 0,
                            "status" => _input_post('status') == 1 ? 1 : 0,
							"meta_keywords" => _input_post("meta_keywords"),
							"meta_description" => _input_post("meta_description"),
                            "created" => date("Y-m-d H:i:s")
                        )
                );
                if ($this->commonmodel->_insert("dating_sites", $data)) {
                    $this->session->set_flashdata("success", "Dating Website added successfully");
                    redirect("admin/datingWebsites");
                }
            } else if (isset($upload_response['status']) && $upload_response['status'] == "error") {
                $this->viewData['image_error'] = $upload_response['message'];
            }
        }
        $this->viewData['title'] = "Add Dating Website";
        $this->viewData['categories_list'] = $this->category->optionList(null);
        $this->layout->view("admin/dating_website_add", $this->viewData);
    }

    public function edit($id = null) {
        $validation = array(
			array(
                'field' => 'site_title',
                'label' => 'Dating site title',
                'rules' => 'trim|required|max_length[255]'
            ),
            array(
                'field' => 'site_name',
                'label' => 'Dating site name',
                'rules' => "trim|required|alpha_dash|max_length[255]|is_unique[dating_sites.site_name.id.{$id}]"
            ),
            array(
                'field' => 'site_url',
                'label' => 'Dating site url',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'category_ids[]',
                'label' => 'Category',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'user_base',
                'label' => 'User base',
                'rules' => 'trim|required|max_length[255]'
            ),
            array(
                'field' => 'search_type',
                'label' => 'Matching/Searching',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'bottom_line',
                'label' => 'Bottom line',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'is_affiliates',
                'label' => 'Affiliates',
                'rules' => 'trim|required'
            ),
			array(
                'field' => 'meta_keywords',
                'label' => 'Meta Keywords',
                'rules' => 'trim'
            ),
            array(
                'field' => 'meta_description',
                'label' => 'Meta Description',
                'rules' => 'trim'
            ),
            array(
                'field' => 'status',
                'label' => 'Status',
                'rules' => 'trim|required'
            )
        );
        if ($this->input->post()) {
			
            $this->load->library('form_validation');
            $this->form_validation->set_rules($validation);
            $this->form_validation->set_error_delimiters('<span class="input-notification error png_bg">', '</span>');
            $upload_response = array();
            if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
                $upload_response = $this->__upload_resize_image('image');
            }
            if ($this->form_validation->run() === TRUE) {
                $data = _xss_clean(
                        array(
							"site_title" => _input_post('site_title'),
                            "site_name" => _input_post('site_name'),
                            "site_url" => _input_post('site_url'),
                            "category_ids" => @implode(",", _input_post('category_ids')),
                            "user_base" => _input_post('user_base'),
                            "search_type" => _input_post('search_type'),
                            "bottom_line" => _input_post('bottom_line'),
                            "is_affiliates" => _input_post('is_affiliates') == 1 ? 1 : 0,
                            "meta_keywords" => _input_post("meta_keywords"),
							"meta_description" => _input_post("meta_description"),
							"status" => _input_post('status') == 1 ? 1 : 0,
                            "updated" => date("Y-m-d H:i:s")
                        )
                );
                if (!empty($upload_response) && $upload_response['status'] == "success") {
                    $data['image'] = $upload_response['upload_data']['file_name'];
                }
                if ($this->commonmodel->_update("dating_sites", $data, array("id" => $id))) {
                    $this->session->set_flashdata("success", "Dating Website updated successfully");
                    redirect("admin/datingWebsites");
                }
            } else if (isset($upload_response['status']) && $upload_response['status'] == "error") {
                $this->viewData['image_error'] = $upload_response['message'];
            }
        }
        if ((int) $id > 0) {
            $this->viewData['site_data'] = $this->dating_website->getDatingWebsiteById((int) $id);
            if (empty($this->viewData['site_data'])) {
                $this->session->set_flashdata("error", "Edit data not found");
                redirect("admin/datingWebsites");
            }
        } else {
            $this->session->set_flashdata("error", "Invalid URL");
            redirect("admin/datingWebsites");
        }
        $this->viewData['title'] = "Edit Dating Website";
        $this->viewData['categories_list'] = $this->category->optionList(null);
        $this->layout->view("admin/dating_website_edit", $this->viewData);
    }

    /**
     *
     * @param type $start 
     */
    public function index($start = 0) {
        $condition = array();
        $validation = array(
            array(
                'field' => 'ids',
                'label' => 'Ids',
                'rules' => 'callback__check_IDS'
            ),
            array(
                'field' => 'actions',
                'label' => 'Actions',
                'rules' => 'trim|callback__check_Action'
            )
        );
        $this->load->library('form_validation');
        $this->form_validation->set_rules($validation);
        if ($this->form_validation->run() === TRUE) {
            if ($this->input->post("actions") == "active") {
                $this->db->where_in("id", $this->input->post("ids"))
                        ->update("dating_sites", array("status" => 1));
            }
            if ($this->input->post("actions") == "inactive") {
                $this->db->where_in("id", $this->input->post("ids"))
                        ->update("dating_sites", array("status" => 0));
            }
            if ($this->input->post("actions") == "delete") {
                $this->db->where_in("id", $this->input->post("ids"))
                        ->delete("dating_sites");
            }
            $this->session->set_flashdata("success", "Selected rows {$this->input->post("actions")} successfully");
            redirect("/admin/datingWebsites");
        }
        $result = $this->dating_website->get_dating_website_list($condition, (int) $start > 1 ? $start - 1 : $start, $this->per_page, true);
        $this->viewData['result'] = $result->data;
        $this->viewData['pagination'] = create_pagination("admin/datingWebsites/index", $result->num_rows, $this->per_page, $this->segment);
        $this->viewData['title'] = "Dating websites list";

        $this->layout->view("admin/dating_website_index", $this->viewData);
    }

    /**
     *
     * @param type $ids
     * @return type 
     */
    public function _check_IDS($ids) {
        if (empty($ids)) {
            $this->form_validation->set_message('_check_IDS', 'Please select atleast one row');
            return FALSE;
        }
        return true;
    }

    /**
     *
     * @param type $action
     * @return type 
     */
    public function _check_Action($action) {
        if (empty($action)) {
            $this->form_validation->set_message('_check_Action', 'Please select action');
            return FALSE;
        }
        return true;
    }

    private function __upload_resize_image($name) {
        $config['upload_path'] = DATING_SITE_LOGO_PATH;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['remove_spaces'] = true;
        $config['max_size'] = '1024';
        $this->load->library('upload', $config);
        
		if ($this->upload->do_upload($name)) {
            $upload_data = $this->upload->data();
            
			$config_resize['image_library'] = 'gd2';
            $config_resize['source_image'] = DATING_SITE_LOGO_PATH . $upload_data['file_name'];
            $config_resize['create_thumb'] = TRUE;
            $config_resize['maintain_ratio'] = TRUE;
            $config_resize['width'] = 88;
            $config_resize['height'] = 88;
            
			$this->load->library('image_lib', $config_resize);
            if (!$this->image_lib->resize()) {
                return array("status" => "error", "type" => "resize", "message" => $this->image_lib->display_errors('<span class="input-notification error png_bg">', '</span>'));
            }
            return array("status" => "success", "upload_data" => $upload_data);
        } else {
            return array("status" => "error", "type" => "upload", "message" => $this->upload->display_errors('<span class="input-notification error png_bg">', '</span>'));
        }
        return array("status" => "error", "message" => "Unknown error occur!!!");
    }

}

?>
