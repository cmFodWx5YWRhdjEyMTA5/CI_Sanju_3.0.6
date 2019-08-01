<?php

/**
 * Description of Temple Model
 *
 * @author Akash Nair
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Templemodel extends CI_Model {

	// Fatching Data from Temple tbl
	public function temple_list()
	{
		$Qry = $this->db
					->order_by("Temp_Id", "desc")
					->select(['Temp_Id','Temp_Name','VillageName','Dist_Name','Temp_Dtl','Temp_Img','Temp_Thumb','Post_By','Active'])
					->get("nair_temple");

		//$this->prd($Qry->result());
		
		return $Qry->result();
	}

	// Getting District 
 	public function Get_District_Name() {
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

	// Adding New Temple

	public function add_temple($array)
	{
		return $this->db->insert('nair_temple', $array);
	}
	//Editing Temple 
	public function edit_temple($Temp_Id)
	{	
		$qry = $this->db->where('Temp_Id',$Temp_Id)
					->get('nair_temple');
		//$this->prd($q->row());
		return $qry->row();
	}
	
	public function update_temple($Temp_Id, $post)
	{
		$qry = $this->db
					->where('Temp_Id', $Temp_Id)
					->update('nair_temple', $post);
					//->update('tbl_mukhiya', $Mukhiya_Val,['Main_Id'=>$Main_Id,'dname'=>$dname]);
		
		return $qry;
	}
	//Deleting Temple
	public function delete_temple($Temp_Id, $Mukhiya_Thumb_Img, $Mukhiya_Pic)
	{
		return $this->db->delete('tbl_mukhiya', ['Temp_Id'=>$Main_Id,'Mukhiya_Thumb_Img'=>$Mukhiya_Thumb_Img,'Mukhiya_Pic'=>$Mukhiya_Pic]);

	}

}