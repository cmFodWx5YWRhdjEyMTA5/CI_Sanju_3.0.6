<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
			

		public function index()
		{	
			$this->load->helper(array('url','form' ));
			$this->load->library('cart');
			
			$data['Products'] = array(
											array(
												'Id' => 1,
												'Qty' => 1,
												'Price' => '12',
												'Name' =>'Glass',
											),
											array(
												'Id' => 1,
												'Qty' => 1,
												'Price' => '12',
												'Name' =>'Mobile',
											),
											array(
												'Id' => 1,
												'Qty' => 1,
												'Price' => '12',
												'Name' =>'Table',
											)	
									);
			$this->load->view('cart', $data);
			
		}
}
?>