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

class Commentmodel extends CI_Model {

	public function index()
	{
	
		$this->db->select(['nair_comment.Cmt_Id','tbl_users.user_id','nair_comment.Temp_Id','nair_comment.Cmt_Type','nair_comment.Cmt_On_Post','nair_comment.Comment_Dtl','nair_comment.Cmt_Date','tbl_users.user_fname','tbl_users.user_lname','tbl_users.User_Thumb','nair_comment.Active'])
         ->from('nair_comment')
         ->join('tbl_users', 'nair_comment.user_id = tbl_users.user_id')
         ->order_by('Active', "No")
		 ->order_by('Cmt_Id', "desc");
		
		$Qry = $this->db->get();
		//return $this->db->last_query();
		return $Qry->result(); 
		
	}

}