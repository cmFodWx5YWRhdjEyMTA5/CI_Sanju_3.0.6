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
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

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
					->order_by('did','desc')
					->get('districts');
		return $Qry->result();
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
					->order_by($Ord_by,'desc')
					->get($tbl_name);
		//$this->prd($Qry->result());
		return $Qry->result(); 
	}
	public function _insert($table, $data){
        $this->db->insert($table, $data);
        return $this->db->insert_id();
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
	public function _getSingleDataold($table, $condition)
	{
		$Qry = $this->db->where($condition)
					->get($table);
		return $Qry->row();
	}
	public function CmtList($table,$condition)
	{
	
		$this->db->select(['tbl_users.user_id','nair_comment.Temp_Id','nair_comment.Comment_Dtl','nair_comment.Cmt_Date','tbl_users.user_fname','tbl_users.user_lname','tbl_users.user_image'])
         ->from('nair_comment')
         ->join($table, 'nair_comment.user_id = tbl_users.user_id')
         ->where($condition);
        // ->order_by('Meb_id', "desc");

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
    public function _delete($table, $condition){
        $this->db->delete($table, $condition);
        return $this->db->affected_rows();
    }
	
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
