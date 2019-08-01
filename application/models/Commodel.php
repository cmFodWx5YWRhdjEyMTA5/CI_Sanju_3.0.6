<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Common Model
 *
 * @author Aakash Nair
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Commodel extends CI_Model{
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
		$Qry = $this->db->where($condition)->get($table);
		return $Qry->row();
	}
	/**
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
