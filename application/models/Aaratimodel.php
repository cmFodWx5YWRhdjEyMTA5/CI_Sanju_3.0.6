<?php

/**
 * Description of Aarati Model
 *
 * @author Akash Nair
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Aaratimodel extends CI_Model 
{
	public function arti_list()
	{
		$Qry = $this->db
					->order_by('Aarti_Id','desc')
					->get('nair_aarati');
		//$this->prd($Qry->result());
		return $Qry->result(); 
	}
	// Aarti Adding 
	function add_aarati($post_data){
   		$this->db->insert('nair_aarati', $post_data);
   		$insert_id = $this->db->insert_id();
   		return  $insert_id;
	}

	public function edit_arti($Main_Id)
	{	//exit($Main_Id);
		$qry = $this->db->where('Main_Id',$Main_Id)
				 ->get('tbl_mukhiya');
		
		//$this->prd($qry->result());
		return $qry->row();

	}
	public function update_arti($Main_Id, $Mukhiya_Val)
	{
		$qry = $this->db
					->where('Main_Id', $Main_Id)
					->update('tbl_mukhiya', $Mukhiya_Val);
					//->update('tbl_mukhiya', $Mukhiya_Val,['Main_Id'=>$Main_Id,'dname'=>$dname]);
		return $qry;
	}

	public function delete_arti($Main_Id, $Mukhiya_Thumb_Img, $Mukhiya_Pic)
	{
		return $this->db->delete('tbl_mukhiya', ['Main_Id'=>$Main_Id,'Mukhiya_Thumb_Img'=>$Mukhiya_Thumb_Img,'Mukhiya_Pic'=>$Mukhiya_Pic]);

	}



}