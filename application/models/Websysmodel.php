<?php

/**
 * Description of Websysmodel
 *
 * @author Akash Nair
 */
class Websysmodel extends CI_Model {

	public function CityMst()
	{
		$Qry=$this->db
				->order_by("City_Id", "desc")
				 ->get('nair_citymst');
	  return $Qry->result();
	}
	public function adCity($array)
	{
		return $this->db->insert('nair_slider', $array);
	}
	public function editCity($City_Id)
	{
		$Qry = $this->db
					->where('City_Id', $City_Id)
					->get('nair_citymst');
		return $Qry->row();
	}
	public function UpdateCity($City_Id, $City_Val)
	{
		$Qry = $this->db
					->where('City_Id', $City_Id)
					->update('nair_citymst', $City_Val);
		return $Qry;
	}
	public function delCity($City_Id)
	{
		return $this->db->delete('nair_citymst', ['City_Id'=>$City_Id]);

	}
//================================== Slider Master ==================================
	public function slider()
	{
		$Qry=$this->db
				->order_by("Slide_Id", "desc")
				 ->get('nair_slider');
	  return $Qry->result();
	}
	public function addSlider($array)
	{
        $this->db->insert('nair_slider', $array);
        return $this->db->insert_id();
    }
	public function UpdateSlider($Slide_Id, $Slide_Val)
	{
		 	   $this->db
					->where('Slide_Id', $Slide_Id)
					->update('nair_slider', $Slide_Val);
		$insert_id = $this->db->insert_id();
					
		return $insert_id;
	}
	public function add_post($post_data)
	{
   		$this->db->insert('posts', $post_data);
   		$insert_id = $this->db->insert_id();

   		return  $insert_id;
	}	
	public function getSliderVal($Slide_Id)
	{
		$Qry = $this->db
					->where('Slide_Id', $Slide_Id)
					->get('nair_slider');
		return $Qry->row();
	}
	
	public function delSlider($Slide_Id, $Slider_Img, $Slider_Thumb)
	{
		if($Slider_Img =='' and $Slider_Thumb ==''){
				return $this->db->delete('nair_slider', ['Slide_Id'=>$Slide_Id]);
			}else{
		if($Slider_Thumb ==''){
				return $this->db->delete('nair_slider', ['Slide_Id'=>$Slide_Id]);
			}else{
		if($Slider_Img ==''){
				return $this->db->delete('nair_slider', ['Slide_Id'=>$Slide_Id]);
			}else{
			return $this->db->delete('nair_slider', ['Slide_Id'=>$Slide_Id,'Slider_Img'=>$Slider_Img,'Slider_Thumb'=>$Slider_Thumb]);
				}
			}
		}
	}
//============================================================================================================	
//============================================================================================================
}