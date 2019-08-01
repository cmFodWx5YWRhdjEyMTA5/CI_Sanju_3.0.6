<?php

/**
 * Description of Parivarmodel
 *
 * @author Akash Nair
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Parivarmodel extends CI_Model {

//================================== Mukhiya Memeber ==================================
	public function mukhiya_list()
	{

		$Qry= $this->db
					->order_by("Main_Id", "desc") 
					->select(['Main_Id','Main_Person','Father_Hubby','Mother_Name','Gotra','City_Place','Mukhiya_Pic','Mukhiya_Thumb_Img'])
					//->from('tbl_mukhiya')
					->get('tbl_mukhiya');
		// echo "<pre>";
		// print_r($Qry->result()); exit;
		return $Qry->result(); 
	}
	public function Get_District_Name()
	{
		//$result = $this->db->select(‘id, name’)->get(‘districts’)->result_array();
		$result = $this->db
						 ->order_by("dname", "desc") 
						 ->where('stateid',1)
						 ->get('districts') 
						 ->result_array();
		$dropdown [''] = 'जिला सेलेक्ट करे';
		foreach($result as $r) {

				$dropdown[$r['dname']] = $r['dname'];
			}
		return $dropdown;
	}
 	public function add_mukhiya($array)
	{
		return $this->db->insert('tbl_mukhiya', $array);
	}
    public function edit_mukhiya($Main_Id)
	{	//exit($Main_Id);
		$qry = $this->db->where('Main_Id',$Main_Id)
				 ->get('tbl_mukhiya');
		
		//$this->prd($qry->result());
		return $qry->row();

	}
	public function update_mukhiya($Main_Id, $Mukhiya_Val)
	{
		$qry = $this->db
					->where('Main_Id', $Main_Id)
					->update('tbl_mukhiya', $Mukhiya_Val);
					//->update('tbl_mukhiya', $Mukhiya_Val,['Main_Id'=>$Main_Id,'dname'=>$dname]);
		return $qry;
	}
 	public function delete_mukhiya($Main_Id, $Mukhiya_Thumb_Img, $Mukhiya_Pic)
	{
		return $this->db->delete('tbl_mukhiya', ['Main_Id'=>$Main_Id,'Mukhiya_Thumb_Img'=>$Mukhiya_Thumb_Img,'Mukhiya_Pic'=>$Mukhiya_Pic]);

	}
	public function male_mem_list($Main_Id)
	{
	
		$this->db->select(['tbl_mukhiya_meb.Meb_id','tbl_mukhiya_meb.Meb_Name','tbl_mukhiya_meb.Relation_Type','tbl_mukhiya_meb.Birth_Date','tbl_mukhiya_meb.Married','tbl_mukhiya_meb.Job_Type','tbl_mukhiya_meb.No_Of_Child','tbl_mukhiya_meb.Work_Place','tbl_mukhiya_meb.Sasural_Place','tbl_mukhiya_meb.Education','tbl_mukhiya_meb.Phone_No','tbl_mukhiya_meb.Meb_Pic','Meb_Thumb_Pic','tbl_mukhiya.Main_Person','tbl_mukhiya.Main_Id'])
         ->from('tbl_mukhiya_meb')
         ->join('tbl_mukhiya', 'tbl_mukhiya_meb.Main_Id = tbl_mukhiya.Main_Id')
         ->where('tbl_mukhiya_meb.Main_Id', $Main_Id)
         ->order_by('Meb_id', "desc");

		$Qry = $this->db->get();
		
		//return $this->db->last_query();
		return $Qry->result(); 
		
	}
//================================== Adding Memeber ==================================

	public function add_male_meb($array)
	{
		return $this->db->insert('tbl_mukhiya_meb', $array);
	}
	public function edit_Meb($Meb_id)
	{	//exit($Main_Id);
		$qry = $this->db->where('Meb_id',$Meb_id)
				 ->get('tbl_mukhiya_meb');
		
		//$this->prd($qry->result());
		return $qry->row();

	}
	public function UpdateMeb($Meb_id, $Meb_Val)
	{
		$qry = $this->db
					->where('Meb_id', $Meb_id)
					->update('tbl_mukhiya_meb', $Meb_Val);
					//->update('tbl_mukhiya', $Mukhiya_Val,['Main_Id'=>$Main_Id,'dname'=>$dname]);
		return $qry;
	}
//================================== Child Memeber ==================================
	public function meb_chlid_list($Meb_id)
	{
		$Qry = $this->db
				->select(['Child_id','Meb_id','Main_id','Ch_Name','Ch_Father','Ch_Mother','Ch_Dob','Ch_Eduction','Ch_Pic','Ch_Thumb_Pic'])
				->where('Meb_id', $Meb_id)
				->order_by('Child_id','desc')
				->get('tbl_memchild');
		return $Qry->result();
	}
	public function meb_child_father($Meb_id)
	{
		$Qry = $this->db
					->select('Meb_Name')
					->where('Meb_id', $Meb_id)
					->get('tbl_mukhiya_meb');
		return $Qry->row();
	}
	public function add_meb_child($array)
	{
		return $this->db->insert('tbl_memchild', $array);
	}
	public function editChild($Child_id)
	{
		$Qry = $this->db
					->where('Child_id',$Child_id)
					->get('tbl_memchild');
		return  $Qry->row();
	}
	public function updateChild($Child_id, $CH_Val)
	{
		$qry = $this->db
					->where('Child_id', $Child_id)
					->update('tbl_memchild', $CH_Val);
		return $qry;
	}
//================================== Female Memeber ==================================	
	public function female_list($Main_Id)
	{
	
$this->db->select(['tbl_female.FM_Id','tbl_female.Main_Id','tbl_female.FM_Name','tbl_female.FM_Hubby','tbl_female.FM_Fathere','tbl_female.FM_PiharPlace','tbl_female.FM_Education','tbl_female.FM_Pic','tbl_mukhiya.Main_Id','tbl_mukhiya.Main_Person','tbl_female.Relation_Type','tbl_female.FM_Pic','tbl_female.Fm_Thumb_Pic'])
         ->from('tbl_female')
         ->join('tbl_mukhiya', 'tbl_mukhiya.Main_Id = tbl_female.Main_Id')
         ->where('tbl_female.Main_Id', $Main_Id)
         ->order_by('FM_Id', "desc");

		$Qry = $this->db->get();
		
		//return $this->db->last_query();
		return $Qry->result(); 
		
	}
	public function storeFemale($array)
	{
		return $this->db->insert('tbl_female', $array);
	}
	public function editFemale($FM_Id)
	{
		$Qry = $this->db
					->where('FM_Id', $FM_Id)
					->get('tbl_female');
		return $Qry->row();
	}
	public function UpdateFm($FM_Id, $FM_Val)
	{
		$Qry = $this->db
					->where('FM_Id', $FM_Id)
					->update('tbl_female', $FM_Val);
		return $Qry;
	}
	
	
}