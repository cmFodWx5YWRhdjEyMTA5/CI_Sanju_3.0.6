<?php
/**
 * Description of MY_Controller
 *
 * @author Aakash Nair
 */
class MY_Controller extends CI_Controller {

    //put your code here

   public function __construct()
    {
        parent::__construct();
        /*if ( ! $this->session->userdata('Userid'))
        { 
            redirect('admin/admin');
        }*/
    }

    public function prd($string_to_print) {
		echo "<pre>";
		print_r($string_to_print);
		echo "</pre>";		
		die;
		//exit;
	}
	public function encodePass($string_pass) {
		$this->load->library('encrypt');
		$myEncrypt = $this->encrypt->decode($string_pass);
		//$myEncrypt = $this->encrypt->encode($string_pass);
		return $myEncrypt;
	}
	public function myHash($hashStr)
	{
		$this->load->helper('security');
		$_passHash = do_hash($hashStr); 
		return $_passHash;
	}
	public function sanisitize_input($input_string)
	{
		$san_input=trim(htmlspecialchars(stripslashes($input_string)));
		return $san_input;
	}
	public function unhtmlentities($string)
	{
		$string = preg_replace('~&#x([0-9a-f]+);~ei', 'chr(hexdec("\\1"))', $string);
		$string = preg_replace('~&#([0-9]+);~e', 'chr(\\1)', $string);
		$trans_tbl = get_html_translation_table(HTML_ENTITIES);
		$trans_tbl = array_flip($trans_tbl);
		return strtr($string, $trans_tbl);
	}
	public function createDirectory($dir_name)
	{
		$dirPath = './uploads/';
		if (!file_exists($dirPath.$dir_name))
		{
			mkdir($dirPath.$dir_name, 0777);
			return true;
		}
		else
			return false;
	}
	function renameDirectory($previousName,$newName)
		{
			$dirPath = './uploads/';
			
			if (rename($previousName,$newName))
				return true;
			else 
				return false;	
		}
		
		
		
		function removeDirectory($dir_name)
		{
			$dirPath = './uploads/';
			
			if ($handle = opendir($dir_name)) 
			{
				while (false !== ($file = readdir($handle))) 
				{
						if($file!='.' && $file!='..')
							unlink($dir_name."/".$file);   						
				}
				closedir($handle);
			}
			if(rmdir($dir_name))
				return true;
			else 
				return false;
		}
	public function resize_img($img_source, $thumb_Save, $img_width, $img_height)
    {
        ///
        $config_resize = array();
        $config_resize['image_library'] = 'gd2';
        $config_resize['source_image']= $img_source;
        //$config_resize['create_thumb'] =TRUE;
        $config_resize['maintain_ratio'] = 90;
        $config_resize['width']= $img_width;
        $config_resize['height'] = $img_height;
        $config_resize['new_image'] = $thumb_Save;

        $this->load->library('image_lib', $config_resize);
        $this->image_lib->resize();

        //$this->nair($config_resize);
    }
	
   //private function __upload_resize_image($name) {
    public function upload_audio($upload_Path, $field_name, $Audio_Name) { 
        $config['upload_path'] = $upload_Path;
        $config['allowed_types'] = 'mp3|wav|3gp';
		$config['file_name'] = $Audio_Name;
        
		$this->load->library('upload', $config);
        
		if (! $this->upload->do_upload($field_name) )
		{
			$upload_data = $this->upload->display_errors();
			//echo '<pre>';
			//print_r($upload_data); exit;
			//return $upload_data;
			return array("status" =>$upload_data);
			
		}else{
        	 $upload_data = $this->upload->data();
            //echo '<pre>';
			//print_r($upload_data);  exit;
			  return array("status" => $upload_data);
        } 
    }


//==================================================================
}

?>