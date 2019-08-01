<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Akash Model
 *
 * @author Aakash Nair
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Akashmodel extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    /**
     *
     * @param type $table
     * @param type $data
     * @return type 
     */
	 public function _getDist()
	{
		$Qry = $this->db
					->order_by('dname','desc')
					->where('stateid',1)
					->get('districts');
		return $Qry->result();
		//return $Qry->result_array();
	}
	public function _getCity()
	{
		$Qry = $this->db
					->order_by('City_Id','desc')
					->get('nair_citymst');
		return $Qry->result();
	}
//========================= Temple Dtl ======================
	public function getTempDesc()
	{
		$Qry = $this->db
					->where('Active','Yes')
					->order_by('rand()','DESC')
					->limit(6)
					->get('nair_temple');
		return $Qry->result();
	}
	public function getTempAsc()
	{
		$Qry = $this->db
					->where('Active','Yes')
					->order_by('rand()','ASC')
					->limit(6)
					->get('nair_temple');
		return $Qry->result();
	}
//========================= Artical Dtl ======================
	public function getArtDesc()
	{
		$Qry = $this->db
					->where('Active','Yes')
					->order_by('rand()','DESC')
					->limit(6)
					->get('nair_artical');
	
		//$this->prd($Qry->result());
		return $Qry->result();
	}
	public function getArtAsc()
	{
		$Qry = $this->db
					->where('Active','Yes')
					->order_by('rand()','ASC')
					->limit(6)
					->get('nair_artical');
		return $Qry->result();
	}
//========================= Aarati Dtl ======================
	public function getAartiDesc()
	{
		$Qry = $this->db
					->where('Active','Yes')
					->order_by('rand()','DESC')
					->limit(6)
					->get('nair_aarati');
		return $Qry->result();
	}
	public function getAartiAsc()
	{
		$Qry = $this->db
					->where('Active','Yes')
					->order_by('rand()','ASC')
					->limit(6)
					->get('nair_aarati');
		return $Qry->result();
	}
//========================= Rashifal Dtl ======================
	public function _getRashiAsc()
	{
		$Qry = $this->db
					->where('Active','Yes')
					->order_by('rand()','ASC')
					->limit(6)
					->get('tbl_rashifal');
		return $Qry->result();
	}
	public function _getRashiDesc()
	{
		$Qry = $this->db
					->where('Active','Yes')
					->order_by('rand()','DESC')
					->limit(6)
					->get('tbl_rashifal');
		return $Qry->result();
	}
	public function _getAllRashi($order_by)
	{
		$Qry = $this->db
					->where('Active','Yes')
					->order_by('Rashi_id',$order_by)
					->get('tbl_rashifal');
		return $Qry->result();
	}
	
//========================= Panchang Dtl ======================	
	
//========================= Artical Dtl ====================== 
	public function VidioMarwadi()
	{
		$Qry = $this->db
					->where(['Active'=>'Yes','Video_Cat'=>'Marwadi'])
					->order_by('rand()','DESC')
					->limit(6)
					->get('nair_video');
		return $Qry->result();
	}
	public function VidioHindi()
	{
		$Qry = $this->db
					->where(['Active'=>'Yes','Video_Cat'=>'Hindi'])
					->order_by('rand()','DESC')
					->limit(6)
					->get('nair_video');
		return $Qry->result();
	}
	public function VidioLocal()
	{
		$Qry = $this->db
					->where(['Active'=>'Yes','Video_Cat'=>'Local City'])
					->order_by('rand()','DESC')
					->limit(6)
					->get('nair_video');
		return $Qry->result();
	}
	
//========================= Mukhiya List ======================
	public function _mklmt()
	{
		$Qry = $this->db
					->where('Active','Yes')
					->order_by('rand()','DESC')
					->limit(5)
					->get('tbl_mukhiya');
		//return $this->db->last_query();
		
		return $Qry->result(); 
	}
	public function _tblmt($tbl_name,$Active,$Ord_by,$limit)
	{
		$Qry = $this->db
					->where('Active',$Active)
					->order_by($Ord_by,'desc')
					->limit($limit)
					->get($tbl_name);
		//$this->prd($Qry->result());
		return $Qry->result(); 
	}
	public function _tbldata($tbl_name,$Ord_by)
	{
		$Qry = $this->db
					->order_by($Ord_by,'DESC')
					->get($tbl_name);
		//$this->prd($Qry->result());
		return $Qry->result(); 
	}
	public function _insert($table, $data)
	{
	        $this->db->insert($table, $data);
        	return $this->db->insert_id();
    	}
    	public function _ChkExitVal($table, $condition)
	{
		$Qry = $this->db->where($condition)
					->get($table);
		//return $Qry->row();
		if($Qry->num_rows() > 0)
		{
			return true;
		}else{
			return false;
		}
	}
	public function _getSingleData($table, $condition)
	{
		$Qry = $this->db->where($condition)
					->get($table);
		return $Qry->row();
	}
	public function _getMultiData($table, $condition)
	{
		$Qry = $this->db->where($condition)
					->get($table);
		return $Qry->result();
	}
	
	
	public function _getMultiLimt($tbl_name,$condition,$Ord_by,$limit)
	{
		$Qry = $this->db
					->where($condition)
					->order_by($Ord_by,'desc')
					->limit($limit)
					->get($tbl_name);
		//$this->prd($Qry->result());
		return $Qry->result(); 
	}
	
	public function _SelectByVal($table,$selectVal,$condition)
	{
		$Qry = $this->db
					->select($selectVal)
					->where($condition)
					->get($table);
		return $Qry->row();
	}
	
	
	public function getArtVal($Art_Id)
	{
		$Qry = $this->db
					->where('Art_Id', $Art_Id)
					->get('nair_artical');
		return $Qry->row();
	}
	
//----------------------------- Pagination Function --------------------------------
	public function num_row_simple($table,$Ord_by)
	{
		$Qry = $this->db
						->order_by($Ord_by,'desc')
						->get($table);
				//$this->prd($Qry->result());
		return $Qry->num_rows();
	}
	public function _simplePagination($table, $condition,$Ord_by,$limit, $offset)
	{
		$Qry = $this->db
					->where($condition)
					->order_by($Ord_by,'desc')
					->limit($limit, $offset)
					->get($table);
		return $Qry->result();
	}
	
	public function num_rows($table,$condition)
	{
		$Qry = $this->db->where($condition)
					->get($table);
				//$this->prd($Qry->result());
		return $Qry->num_rows();
	}
	public function _userPagination($table, $condition,$limit, $offset)
	{
		$Qry = $this->db->where($condition)
					->limit($limit, $offset)
					->get($table);
		return $Qry->result();
	}
	
	public function home_num_rows($condition)
	{
		$this->db->select(['tbl_mukhiya.Main_Id', 'tbl_mukhiya.Main_Person', 'tbl_mukhiya.Mukhiya_Thumb_Img', 'tbl_mukhiya.District_Name',
 'tbl_mukhiya.City_Place'])
         ->from('tbl_mukhiya')
         ->join('nair_citymst', 'tbl_mukhiya.City_Place = nair_citymst.CityName')
         ->where($condition);
		 $Qry = $this->db->get();
		 
		return $Qry->num_rows();
	}
	
	public function _homePagination($condition,$limit, $offset)
	{
	
		$this->db->select(['tbl_mukhiya.Main_Id', 'tbl_mukhiya.Main_Person', 'tbl_mukhiya.Mukhiya_Thumb_Img', 'tbl_mukhiya.District_Name',
 'tbl_mukhiya.City_Place'])
         ->from('tbl_mukhiya')
         ->join('nair_citymst', 'tbl_mukhiya.City_Place = nair_citymst.CityName')
         ->where($condition)
		 ->limit($limit, $offset);
        // ->order_by('Meb_id', "desc");

		$Qry = $this->db->get();
		
		//return $this->db->last_query();
		return $Qry->result(); 
		
	}
	
//----------------------------- Getting District --------------------------------
 	public function Get_District_Name() {
		//$result = $this->db->select(‘id, name’)->get(‘districts’)->result_array(); //return $this->db->last_query();
		$result = $this->db
						 ->order_by("dname", "desc") 
						 ->where('stateid',1)
						 ->get('districts')
						 ->result_array();
		$dropdown [''] = 'जिस जिले में मंदिर है उस का नाम सेलेक्ट करे';						 
		foreach($result as $r) {

				$dropdown[$r['dname']] = $r['dname'];
			}
		return $dropdown;
	}
	
	public function getDisName() {
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
//----------------------------- Dashboard  --------------------------------
	public function dashboard_num_rows($table,$condition,$order_by)
	{
		$Qry = $this->db
					//->order_by("Art_Id", "desc")
					->order_by($order_by)
					->where($condition)
					->get($table);
				//$this->prd($Qry->result());
		return $Qry->num_rows();
	}
	public function dashboardPagination($table, $condition, $order_by, $limit, $offset)
	{
		$Qry = $this
					->db->where($condition)
					->order_by($order_by)
					->limit($limit, $offset)
					->get($table);
				
				$this->prd($Qry->result());	
		return $Qry->result();
	}
	
	public function artical_list()
	{
		$Qry=$this->db
				 ->order_by("Art_Id", "desc")
				 ->where(['Active'=>'No','Post_By <>'=>'Admin'])
				 ->select(['Art_Id','Artical_Title','Post_By','Active'])
				 ->get('nair_artical');
	//$this->prd($Qry->result());	 
	return $Qry->result();

	}
	public function dashboardVal($table, $seletfield, $orderBy)
		{
			$Qry=$this->db
					 ->order_by($orderBy, "desc")
					 ->where(['Active'=>'No','Post_By <>'=>'Admin'])
					 ->select($seletfield)
					 ->get($table);
		//$this->prd($Qry->result());	 
		return $Qry->result();
	
	}
	//->update('tbl_mukhiya', $Mukhiya_Val,['Main_Id'=>$Main_Id,'dname'=>$dname]);
	/**000
     *
     * @param type $table
     * @param type $data
     * @param type $condition
     * @return type 
     */
    public function _update($table, $data, $condition){
		$this->db->update($table, $data, $condition);
		//return $this->db->affected_rows() ? $this->db->affected_rows(): true;
		$insert_id = $this->db->insert_id();
					
		return $insert_id;
    }
	public function _delete($table, $condition){
        $this->db->delete($table, $condition);
        return $this->db->affected_rows();
    }
	public function _deleteWithImg($table,$deId, $MainImg, $Thumb_Img)
	{
		if($MainImg =='' and $Thumb_Img ==''){
			return $this->db->delete($table, $deId);
		}else{
		if($Thumb_Img ==''){
			return $this->db->delete($table, $deId);
		}else{
		if($MainImg ==''){
			return $this->db->delete($table, $deId);
		}else{
		return $this->db->delete('nair_artical', ['Art_Id'=>$Art_Id,'Artical_Img'=>$Artical_Img,'Artical_Thumb'=>$Artical_Thumb]);
		}
		}
		}
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
	
	public function UpdateUser($user_id, $User_Val)
	{
		 	   $this->db
					->where('user_id', $user_id)
					->update('tbl_users', $User_Val);
		$insert_id = $this->db->insert_id();
					
		return $insert_id;
	}
	
	
	public function _getSingleDataold($table, $condition)
	{
		$Qry = $this->db->where($condition)
					->get($table);
		return $Qry->row();
	}
	public function CmtList($table,$condition)
	{
	
		$this->db->select(['tbl_users.user_id','nair_comment.Temp_Id','nair_comment.Comment_Dtl','nair_comment.Cmt_Date','tbl_users.user_fname','tbl_users.user_lname','tbl_users.User_Thumb'])
         ->from('nair_comment')
         ->join($table, 'nair_comment.user_id = tbl_users.user_id')
         ->where($condition);
        // ->order_by('Meb_id', "desc");

		$Qry = $this->db->get();
		
		//return $this->db->last_query();
		return $Qry->result(); 
		
	}
	public function _getCmtList($condition)
	{
	
		$this->db->select(['nair_comment.Comment_Dtl', 'nair_comment.Cmt_Date', 'tbl_users.user_fname', 'tbl_users.user_lname','tbl_users.User_Thumb'])
         ->from('nair_comment')
         ->join('tbl_users', 'nair_comment.user_id = tbl_users.user_id')
         ->where($condition);
       	$Qry = $this->db->get();
		//return $this->db->last_query();
		return $Qry->result(); 
		
	}
	
	public function Comment_List()
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
    

    /**
     *
     * @param type $table
     * @param type $data
     * @return type 
     */
    public function _insert_batch($table, $data){
        $this->db->insert_batch($table, $data);
        //return $this->db->insert_id();
    }
	/**
     *
     * @param type $table
     * @param type $condition
     * @return type 
     */
    
	
	public function get_user($table, $conditions = null) {
		$this->db->select("users.*");
		if (!empty($conditions)) {
           $this->db->where($conditions);
           $result = $this->db->get($table);
           $res = $result->num_rows() > 0 ? $result->row() : null;
           pr($res,1);
		   
		   //return $result->num_rows() > 0 ? $result->row() : null;
        }
		dbq(1);
		//return false;
    }

}

?>
