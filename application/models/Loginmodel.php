<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Commonmodel
 *
 * @author Akash Nair
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Loginmodel extends CI_Model {

	public function login_valid($username, $password)	
	{	
		$Qry = $this->db->where(['username'=>$username, 'password'=>$password])
						 ->get('admin_user');
			if($Qry->num_rows()){
				//getting user id
					/*
						echo "<pre>";
						print_r($Qry->row()->userid ); exit;
					*/
				return $Qry->row()->userid;
				//return TRUE;
			}else{
				return FALSE;
			}
	}
	
	public function xrootLogin($user_email, $user_password)	
	{	
		$record = $this->db->where(['user_email'=>$user_email, 'user_password'=>$user_password])
						 ->get('tbl_users');
			if($record->num_rows()){
				return $record->result_array();
			} else {
					return false;
			}
	}
	
	public function rootLogin($user_email, $user_password)	
	{	
		$Qry = $this->db->where(['user_email'=>$user_email, 'user_password'=>$user_password])
						 ->get('tbl_users');
			if($Qry->num_rows()){
				//getting user id
				return $Qry->row(); //return $Qry->row()->user_id;
			}else{
				return FALSE;
			}
	}

}