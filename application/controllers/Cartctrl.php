<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cartctrl extends CI_Controller {
			

		public function index()
		{	//$this->load->library('cart');
		
			$this->load->model("commonmodel","commod");
			
			$data = $this->commod->_tbldata('tbl_Product','Pro_Id');
			
				//$this->prd($data);
			
				
			$this->load->view('cartctrl', ['Product'=> $data]);
			
			/*if($this->input->get(Pro_Id)!='')
			{
				$this->cart->insert($data, $Product->input->get('Pro_Id'));
			}*/
			
		}
}
?>