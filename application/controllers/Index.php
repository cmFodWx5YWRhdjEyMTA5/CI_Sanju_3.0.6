<?php
/**
 * Description of Video Controller
 *
 * @author Aakash Nair
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller {

	public function __construct() 
	{
        parent::__construct();
		$this->load->model('Akashmodel','Nair');
		$this->load->library('form_validation');
		$this->load->library('simple_html_dom');
		$this->form_validation->set_error_delimiters('<div class="red-left">', '</div>');
    }
	public function index()
	{	
		$SlideData = $this->Nair->_tblmt('nair_slider','Yes','Slide_Id','5' );
		$NewsData = $this->Nair->_tblmt('nair_news','Yes','rand()','4' ); 
		
		$this->load->view('index',['SlideData'=>$SlideData,'NewsData'=>$NewsData]);
		
	}
	public function viewmeb($Main_Id)
	{
		$MainPersion = $this->Nair->_getSingleData('tbl_mukhiya',['Active'=>'Yes','Main_Id'=>$Main_Id]);
		$Mem_Data  = $this->Nair->_getMultiData('tbl_mukhiya_meb',['Main_Id'=>$Main_Id]);
		$Child_Data  = $this->Nair->_getMultiData('tbl_memchild',['Main_Id'=>$Main_Id]);
		$FM_Data  = $this->Nair->_getMultiData('tbl_female',['Main_Id'=>$Main_Id]);
		
		$this->load->view('viewmeb',['MainPersion'=>$MainPersion, 'Mem_Data'=>$Mem_Data,'Child_Data'=>$Child_Data, 'FM_Data'=>$FM_Data]);
	}
	public function temple($Temp_Id)
	{
		$TempVal = $this->Nair->_getSingleData('nair_temple', ['Active'=>'Yes', 'Temp_Id'=>$Temp_Id]);
		//$this->prd($TempVal);
		$CmtTempData = $this->Nair->_getCmtList(['Active'=>'Yes','Temp_Id'=>$Temp_Id]);
		//$this->prd($CmtTempData);
		$this->load->view('temple',['TempVal'=>$TempVal, 'CmtTempData'=>$CmtTempData]);
	}
	public function artical($Art_Id)
	{
		$ArticalVal = $this->Nair->_getSingleData('nair_artical', ['Active'=>'Yes', 'Art_Id'=>$Art_Id]);
		//$this->prd($ArticalVal);
		
		$CmtArticalData = $this->Nair->_getCmtList(['Active'=>'Yes','Art_Id'=>$Art_Id]);
		
		//$this->prd($CmtArticalData);
		$this->load->view('artical',['ArticalVal'=>$ArticalVal, 'CmtArticalData'=>$CmtArticalData]);
	}
	public function aarti($Aarti_Id)
	{
		$singleAarti = $this->Nair->_getSingleData('nair_aarati', ['Active'=>'Yes', 'Aarti_Id'=>$Aarti_Id]);
		 //$this->prd($AartiVal);
		
		$AartiCmtData = $this->Nair->_getCmtList(['Active'=>'Yes','Aarti_Id'=>$Aarti_Id]);
		//$this->prd($AartiCmtData);
		$this->load->view('aarti',['singleAarti'=>$singleAarti, 'AartiCmtData'=>$AartiCmtData]);
	}
	public function rashifal($Rashi_id)
	{
		
		$mydate = date('dmY');
		
		if($Rashi_id == 1){
			$html = file_get_html("https://religion.bhaskar.com/jyotish/rashifal/Aries/today/{$mydate}/");
		}else if($Rashi_id == 2)
		{
			$html = file_get_html("https://religion.bhaskar.com/jyotish/rashifal/Taurus/today/{$mydate}/");
		}else if($Rashi_id == 3)
		{
			$html = file_get_html("https://religion.bhaskar.com/jyotish/rashifal/Gemini/today/{$mydate}/");
		}else if($Rashi_id == 4)
		{
			$html = file_get_html("https://religion.bhaskar.com/jyotish/rashifal/Cancer/today/{$mydate}/");
		}else if($Rashi_id == 5)
		{
			$html = file_get_html("https://religion.bhaskar.com/jyotish/rashifal/Leo/today/{$mydate}/");
		}else if($Rashi_id == 6)
		{
			$html = file_get_html("https://religion.bhaskar.com/jyotish/rashifal/Virgo/today/{$mydate}/");
		}else if($Rashi_id == 7)
		{
			$html = file_get_html("https://religion.bhaskar.com/jyotish/rashifal/Libra/today/{$mydate}/");
		}else if($Rashi_id == 8)
		{
			$html = file_get_html("https://religion.bhaskar.com/jyotish/rashifal/Scorpio/today/{$mydate}/");
		}else if($Rashi_id == 9)
		{
			$html = file_get_html("https://religion.bhaskar.com/jyotish/rashifal/Sagittarius/today/{$mydate}/");
		}else if($Rashi_id == 10)
		{
			$html = file_get_html("https://religion.bhaskar.com/jyotish/rashifal/Capricorn/today/{$mydate}/");
		}else if($Rashi_id == 11)
		{
			$html = file_get_html("https://religion.bhaskar.com/jyotish/rashifal/Aquarius/today/{$mydate}/");
		}else{
			$html = file_get_html("https://religion.bhaskar.com/jyotish/rashifal/Pisces/today/{$mydate}/");
		}
		
		
		
		$items = $html->find('div[class=fs85 l4]');  
		
		foreach($items as $post) {
			# remember comments count as nodes
		$RashiDtl['RashiFal'] = array(
										@$post->children(1)->outertext,
										@$post->children(2)->outertext,
										@$post->children(3)->outertext,
										@$post->children(4)->outertext,
										@$post->children(5)->outertext,
										@$post->children(6)->outertext,
										@$post->children(7)->outertext,
										@$post->children(8)->outertext
									);
		}
		
		$arr = $RashiDtl['RashiFal'];
		$Bhaskar_Rashi =  implode(" ",$arr);
		
		//$this->prd($MyRahi);
		
		
		$RashiVal = $this->Nair->_getSingleData('tbl_rashifal', ['Active'=>'Yes', 'Rashi_id'=>$Rashi_id]);
		$AllRashi = $this->Nair->_getAllRashi('ASC');
		$this->load->view('rashifal',['RashiVal'=>$RashiVal,'AllRashi'=>$AllRashi,'Bhaskar_Rashi'=>$Bhaskar_Rashi]);
	}
	public function video($Video_Id)
	{
		$VideoVal = $this->Nair->_getSingleData('nair_video', ['Active'=>'Yes', 'Video_Id'=>$Video_Id]);
		 //$this->prd($VideoVal);
		
		$VideoCmt = $this->Nair->_getCmtList(['Active'=>'Yes','Video_Id'=>$Video_Id]);
		//$this->prd($VideoCmt);
		$this->load->view('video',['VideoVal'=>$VideoVal,'VideoCmt'=>$VideoCmt]);
	}
	public function news($News_Id)
	{
		$NewsVal = $this->Nair->_getSingleData('nair_news', ['Active'=>'Yes', 'News_Id'=>$News_Id]);
		
		$NewsCmt = $this->Nair->_getCmtList(['Active'=>'Yes','News_Id'=>$News_Id]);
		
		$this->load->view('news',['NewsVal'=>$NewsVal, 'NewsCmt'=>$NewsCmt]);
	}
//======================================================================================================
	public function login()
	{
		if ($this->session->userdata('user_id','UserName'))
        { 
            redirect('index/dashboard');
        }
		$this->load->view('login');
	}
	public function login_home()
	{
		
		$this->load->library('form_validation');
		// Validation form fields
		$this->form_validation->set_error_delimiters('<div class="red-left">', '</div>');
		
				if($this->form_validation->run('Home_Login'))
				{	
					$user_email=$this->input->post('user_email');
					$user_password= $this->myHash($this->input->post('user_password'));
					//$this->prd($user_password);	
						
					$this->load->model('loginmodel');
					$result= $this->loginmodel->rootLogin($user_email, $user_password);
					//$this->prd($UserData);
					
					if($user_email != $result->user_email || $user_password != $result->user_password)
					{
						$this->session->set_flashdata('login_failed','Invalid Username or password'); 
						return redirect('index/login');	
						
					}else if($result->user_verified ==0)
					{
						$this->session->set_flashdata('login_failed','Your account is not verified'); 
						return redirect('index/login');	
					}else if($result->user_is_blocked ==0)
					{
						$this->session->set_flashdata('login_failed','Your account is blocked'); 
						return redirect('index/login');	
					}else{
						
						$this->session->set_userdata(['user_id'=>$result->user_id, 'UserName'=>$result->user_fname.' '.$result->user_lname]);
						return redirect('user/dashboard');	
					}
						
				}
				$this->load->view('login');
	
	
	}
	public function check_email()
	{
		//$this->load->view('register');

		$user_email =  $this->input->post('user_email');

		if(!filter_var($user_email, FILTER_VALIDATE_EMAIL))
		{
			echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span>Invalid Email</span></span></label>';
		}else{
			if($this->Nair->_ChkExitVal('tbl_users',['user_email'=>$user_email ]) )
			{
				echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> This email already register</span></label>';	
			}else{
				echo '<label class="text-success"><span class="glyphicon glyphicon-ok"> </span> This email available</span></label>';
			}
		}
	}
//======================================================================================================
	public function register()
	{
		if ($this->input->post())
		{
			$this->load->helper('security');
			$user_email = $this->input->post('user_email');
			$result = $this->Nair->_getMultiData('tbl_users',["user_email"=>$user_email]);
			if(is_array($result) && count($result) > 0)
				{
					$this->session->set_flashdata("errorMsg",'This email id already exists.'); 
					//return redirect('index/register');	
					$this->load->view('register');
				 }else{
					
					if($this->form_validation->run('User_Reg') )
					{
						$data = array(
										"user_fname" => $this->input->post('user_fname'),
										"user_lname" => $this->input->post('user_lname'),
										"user_email" => $this->input->post('user_email'),
										"user_password" => $this->myHash($this->input->post('user_password')),
										"user_param" => $this->myHash(rand(100,999))
									 );
						//$this->prd($data);
						
						if( $insert_id = $this->Nair->_insert("tbl_users",$data) ){
			   				//$this->session->set_flashdata('errorMsg',"Account created successful");
							$UserParm = $this->Nair->_SelectByVal('tbl_users','user_param',['user_id'=>$insert_id]);
							//$this->prd($UserParm);
//----------------------------------- Sending Mail to User -----------------------------------------------------------
				$MyMsg='<table>
							<tr>
<td>Hello '.$this->input->post('user_fname').' '.$this->input->post('user_lname').',<br><br> Welcome to SSKGSS, information are following -<br><br></td>'.
'<p><a href="'.base_url("index/activac/{$UserParm->user_param}").'" class="btn btn-primary">Activate</a>
</p>'.
							
							'</tr>
							<tr>
								<td>Your User :-&nbsp;'.$this->input->post('user_email').'</td>
							</tr>'.
							'<tr>
								<td>Password :-&nbsp;'.$this->input->post('user_password').'</td>
							</tr>'.
							'<tr>
								<td>
<p>Activate your SSKGSS A/c, please follow this link:</p>'.


								'</td>
							</tr>
							
 					</table>';
					
					$Sender_Name = 'क्षत्रिय गाछा समाज, प्रधान कार्यालय सुमेरपुर';
					$UserEmail_Id = $this->input->post('user_email');
					$Sender_Msg	= $MyMsg;
					$Sender_Mobile = '+91 9462771152';
					
					
					$config['protocol'] = 'sendmail';
					$config['mailpath'] = '/usr/sbin/sendmail';
					$config['charset'] = 'utf-8';
					$config['wordwrap'] = TRUE;
					$config['crlf']     = "\n";                     // "\r\n" or "\n" or "\r"
					$config['newline']  = "\n";
					$this->load->library('email',$config);
					
					$this->email->from('sskgss2016@gmail.com', $Sender_Name);
					$this->email->to($UserEmail_Id);
					//$this->email->cc('dhruvinfotech2010@gmail.com');
					//$this->email->bcc('say2me84@gmail.com');
					
					$this->email->subject('क्षत्रिय गाछा समाज, प्रधान कार्यालय सुमेरपुर  ('.$Sender_Name .' )');
					$this->email->message($Sender_Msg."\n\n".'From'."\n\n".$Sender_Name."\n\n".$Sender_Mobile);
					
					$email_send = $this->email->send();
					
//----------------------------------- Sending Mail to User -----------------------------------------------------------
							if($email_send)
							{
								$this->session->set_flashdata('error_msg',"Ac Create Success, to activate check your email");
								redirect('index/login');
							}else{
								echo $this->email->print_debugger();	
								return redirect('index/register');
							}	
							
						}else{
							$this->session->set_flashdata('errorMsg',"Failed to created account, Please try again");
							return redirect('index/register');
						}
//======================= Loading Image Library and Config ========================================
					}
					$this->load->view('register');
				
				}
		
		}else{
			$this->load->view('register');
		}
	}
	public function activac($user_param)
	{
		$data['user_is_blocked']='1';
		$data['user_verified']='1';	
		
		if($this->Nair->_update('tbl_users',$data,['user_param'=>$user_param] ))
		{
			$this->session->set_flashdata('error_msg',"Failed to Activate Ac, Please try again");
			return redirect('index/login');
		}else{
			$this->session->set_flashdata('error_msg',"Your Ac Activate Successful, Login please");
			$this->load->view('login');
		}
	}
	public function forgotpass()
	{
		if ($this->input->post())
		{
				if($this->form_validation->run('forgotpass') )
				{
					$user_email = $this->input->post('user_email');
					$result = $this->Nair->_SelectByVal('tbl_users',['user_fname','user_lname','user_email'],["user_email"=>$user_email]);
					//$this->prd($result);
					if($user_email != $result->user_email)
						{
							$this->session->set_flashdata("error_msg", "This email does not exist");
							return redirect ('index/forgotpass');
						}else{
								$data = array( "user_param" => $this->myHash(rand(100,999)) );
								
								$insertData = $this->Nair->_update("tbl_users",$data,['user_email'=>$user_email]);
								
								if( $insertData )
								{
									$this->session->set_flashdata("error_msg", "Failed to reset password, Please try again");
									return redirect ('index/forgotpass');
								}else{
//----------------------------------- Sending Mail to User -----------------------------------------------------------			
$MyMsg='
<table>
	<tr>
		<td>
			Hello '.$result->user_fname.' '.$result->user_lname.',<br><br> क्षत्रिय गाछा समाज, प्रधान कार्यालय सुमेरपुर, आप का स्वागत करता है| -<br>
		</td>
	</tr>
	<tr>
		<td>
			<p>अपने A/c के पासवर्ड बदलने के लिए नीचे दिए गए लिंक पर क्लिक करे</p>
		</td>
		
		<td>
		<br><br>
			<p>
				<a href="'.base_url("index/resetpass/{$data['user_param']}").'" class="btn btn-primary"><b>Reset Password</b></a>
			</p><br/>
		</td>
	</tr>
</table>';
									$Sender_Name = 'क्षत्रिय गाछा समाज, सुमेरपुर';
									$UserEmail_Id = $this->input->post('user_email');
									$Sender_Msg	= $MyMsg;
									$Sender_Mobile = '+91 9462771152';

									$config['protocol'] = 'sendmail';
									$config['mailpath'] = '/usr/sbin/sendmail';
									$config['charset'] = 'utf-8';
									$config['mailtype'] = 'html';
									$config['wordwrap'] = TRUE;
									$config['crlf']     = "\n";                     // "\r\n" or "\n" or "\r"
									$config['newline']  = "\n";
									$this->load->library('email',$config);
																		
									$this->email->from('sskgss2016@gmail.com', $Sender_Name);
									$this->email->to($UserEmail_Id);
									
									$this->email->subject('अपने A/c के पासवर्ड बदलने के लिए ('.$Sender_Name .' )');
									$this->email->message($Sender_Msg."\n\n".'<b>From</b>'."<br/><br/>".$Sender_Name."<br/><br/>".$Sender_Mobile);
									
									$email_send = $this->email->send();
									
									if($email_send)
									{
						$this->session->set_flashdata("error_msg", "Reset password link sent to your email Ac, check your email Ac");
										redirect('index/login');
									}else{
										echo $this->email->print_debugger();	
										return redirect('index/forgotpass');
									}
						
//----------------------------------- Sending Mail to User -----------------------------------------------------------
								}
							$this->load->view('forgotpass'); 
						}	
										
				}else{
						$this->load->view('forgotpass'); 
					 }
		}else{
			$this->load->view('forgotpass');
		}
	}
	public function resetpass($UserParm)
	{	
		$Valid_Parm = trim($UserParm);
		$result = $this->Nair->_SelectByVal('tbl_users','user_param',["user_param"=>trim($UserParm)]);
		//$this->prd($result);
				
		if($Valid_Parm <> $result->user_param)
		{
			$this->session->set_flashdata("error_msg", "Reset Link was not valid, Please reset again");
			return redirect ('index/forgotpass'); 
		}else{
			$data = array("user_param" => $this->myHash(rand(100,999)) );
			$NewParm = $this->Nair->_update('tbl_users',$data,['user_param'=>$Valid_Parm]);
			
			$UpdateParam = trim($data['user_param']);
			return redirect ("index/passReset/{$UpdateParam}"); 
		}
	}
	public function passReset($UserParm)
	{
		//echo $UserParm; 
		if($post = $this->input->post() )
		{
			unset($post['Submit']);
			//$this->prd($post);
				if($this->form_validation->run('ResetUserpass') )
				{
					$data = array(
									"user_is_blocked" => '1',
									"user_verified"=>'1',
									"user_password" => $this->myHash($this->input->post('user_password')),
									"user_param" => $this->myHash(rand(100,999))
								  );	
					if($this->Nair->_update('tbl_users',$data,["user_param"=>trim($UserParm)]))
						{
							$this->session->set_flashdata('error_msg',"Password reset fail, Please try again");
							$this->load->view('resetpass',['UserParm'=>$UserParm]);
							
						}else{
							$this->session->set_flashdata('error_msg',"Password reset successfully, Please Login");
							return redirect('index/login');
						}
					$this->load->view('resetpass',['UserParm'=>$UserParm]);	
				}
				$this->load->view('resetpass',['UserParm'=>$UserParm]);
		}else{
			$this->load->view('resetpass',['UserParm'=>$UserParm]);
		}
	}
	
	public function logout()
	{	
		$this->session->unset_userdata('user_id');
		$this->facebook->destroy_session();
		//$this->session->unset_userdata('UserName');
		return redirect('index/login');
		
	}

	public function search()
	{
		$District_Name = $this->input->post('District_Name');
		$CityName = $this->input->post('CityName');
		//$this->prd($CityName);
		
		return redirect("index/search_results/$District_Name/$CityName");
	}
	public function test()
	{
		$this->load->view('test');
	}
	
	public function search_results( $District_Name, $CityName)
	{	
		// echo $District_Name.' '.$CityName; //exit;
		$NewsData = $this->Nair->_tblmt('nair_news','Yes','rand()','4' );
		$this->load->library('pagination');

		$config = [
			'base_url'			=>	base_url("index/search_results/$District_Name/$CityName"),
			'per_page'			=>	4,
			'total_rows'		=>	$this->Nair->home_num_rows(['District_Name'=>$District_Name,'EngName'=>$CityName]),
			'full_tag_open'		=>	"<ul class='pagination'>",
			'full_tag_close'	=>	"</ul>",
			'first_tag_open'	=>	'<li>',
			'uri_segment'		=>	5,
			'first_tag_close'	=>	'</li>',
			'last_tag_open'		=>	'<li>',
			'last_tag_close'	=>	'</li>',
			'next_tag_open'		=>	'<li>',
			'next_tag_close'	=>	'</li>',
			'prev_tag_open'		=>	'<li>',
			'prev_tag_close'	=>	'</li>',
			'num_tag_open'		=>	'<li>',
			'num_tag_close'		=>	'</li>',
			'cur_tag_open'		=>	"<li class='active'><a>",
			'cur_tag_close'		=>	'</a></li>',
		];
		
		$this->pagination->initialize($config);


$Search_List = $this->Nair->_homePagination(['District_Name'=>$District_Name,'EngName'=>$CityName], $config['per_page'], $this->uri->segment(5));

		//$articles = $this->articles->search( $query, $config['per_page'], $this->uri->segment(5));
		$this->load->view('search_results',['Search_List'=>$Search_List, 'NewsData'=>$NewsData]);
		
		/*$ArticalVal = $this->Nair->_getMultiData('tbl_mukhiya', ['District_Name'=>$District_Name,'City_Place'=>$CityName]);
		$this->prd($ArticalVal);*/	
			
	}
	
	public function about()
	{
		
		
		$this->load->library('pagination');
		
		$config = 	[
						'base_url'			=>base_url('index/about'),
						'per_page'			=>4,
						'total_rows'		=>	$this->Nair->num_row_simple('tbl_about','About_Id'),
						'full_tag_open'		=>	"<ul class='pagination'>",
						'full_tag_close'	=>	"</ul>",
						'first_tag_open'	=>	'<li>',
						'first_tag_close'	=>	'</li>',
						'last_tag_open'		=>	'<li>',
						'last_tag_close'	=>	'</li>',
						'next_tag_open'		=>	'<li>',
						'next_tag_close'	=>	'</li>',
						'prev_tag_open'		=>	'<li>',
						'prev_tag_close'	=>	'</li>',
						'num_tag_open'		=>	'<li>',
						'num_tag_close'		=>	'</li>',
						'cur_tag_open'		=>	"<li class='active'><a>",
						'cur_tag_close'		=>	'</a></li>',
					];
		
		$this->pagination->initialize($config);
		
		$TeamData = $this->Nair->_simplePagination('tbl_about', ['Active'=>'Yes'],'About_Id', $config['per_page'], $this->uri->segment(3));
		//$this->prd($User_Temp);
		$this->load->view('about',['TeamData'=>$TeamData]);
	}
	public function contact()
	{
		if($post = $this->input->post())
		{	
			//$this->prd($post);
			//$post['NewsDtl'] = $this->input->post('NewsDtl', FALSE);
			$Sender_Name = $this->input->post('Mail_Name');
			$Sender_Email = $this->input->post('Mail_Email');
			$Sender_Mobile = $this->input->post('Mail_Mobile');
			$Sender_Msg	= $this->input->post('Msg_Dtl');
			
			
			if( $this->form_validation->run('Contact_Email') )
			{
					
					$config['protocol'] = 'sendmail';
					$config['mailpath'] = '/usr/sbin/sendmail';
					$config['charset'] = 'utf-8';
					$config['wordwrap'] = TRUE;
					$config['crlf']     = "\n";                     // "\r\n" or "\n" or "\r"
					$config['newline']  = "\n";
					//$config['smtp_crypto'] = 'tls';					
					
					
					$this->load->library('email',$config);
					//$this->email->set_newline("\r\n");
					//$this->email->initialize($config);
					
					$this->email->from($Sender_Email, $Sender_Name);
					$this->email->to('sskgss2016@gmail.com');
					$this->email->cc('dhruvinfotech2010@gmail.com');
					$this->email->bcc('say2me84@gmail.com');
					
					$this->email->subject('क्षत्रिय गाछा समाज, प्रधान कार्यालय सुमेरपुर  ('.$Sender_Name .' )');
					$this->email->message($Sender_Msg."\n\n".'From'."\n\n".$Sender_Name."\n\n".$Sender_Mobile);
					
					$email_send = $this->email->send();
					
					if($email_send)
					{
						$this->session->set_flashdata('error_msg',"Emaile Send Successfully");
						redirect('index');
					}else{
						echo $this->email->print_debugger();	
					}
			}
			$this->load->view('contact');	
		}else{
			$this->load->view('contact');	
		}
		
	}
	
	
	
}
