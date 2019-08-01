<?php

class Articlesmodel extends CI_Model {

	public function artical_list()
	{
		$Qry=$this->db
				 ->order_by("Art_Id", "desc") 
				 ->select(['Art_Id','Artical_Title','Artical_Dtl','Post_By','Active','Artical_Thumb','Artical_Img'])
				 ->get('nair_artical');
	//$this->prd($Qry->result());	 
	return $Qry->result();

	}
	//Get District Name
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
	// Add New Artical
	public function add_artical($array)
	{
		return $this->db->insert('nair_artical', $array);
	}
	//Editing Artical
	public function edit_artical($Art_Id)
	{	//exit($Art_Id);
		$qry = $this->db->where('Art_Id',$Art_Id)
				 ->get('nair_artical');
		
		//$this->prd($qry->result());
		return $qry->row();
	}
	//Updating Value
	public function update_artical($Art_Id, $array)
	{
		return $this->db
			 ->where('Art_Id',$Art_Id)
			 ->update('nair_artical', $array);

	}

	public function del_artical($Art_Id, $Artical_Img, $Artical_Thumb)
	{
		if($Artical_Img =='' and $Artical_Thumb ==''){
			return $this->db->delete('nair_artical', ['Art_Id'=>$Art_Id]);
		}else{
		if($Artical_Thumb ==''){
			return $this->db->delete('nair_artical', ['Art_Id'=>$Art_Id]);
		}else{
		if($Artical_Img ==''){
			return $this->db->delete('nair_artical', ['Art_Id'=>$Art_Id]);
		}else{
		return $this->db->delete('nair_artical', ['Art_Id'=>$Art_Id,'Artical_Img'=>$Artical_Img,'Artical_Thumb'=>$Artical_Thumb]);
		}
		}
		}
	}

}