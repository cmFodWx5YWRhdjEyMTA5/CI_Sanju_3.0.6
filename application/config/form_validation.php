<?php
$config = [
                 'signup' =>[
                                    [
                                        'field' => 'username',
                                        'label' => 'User Name',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'password',
                                        'label' => 'Password',
                                        'rules' => 'required'
                                    ]
                                   
                            ],

         'Mukhiya_Rules' =>[
                                    [
                                        'field' => 'Main_Person',
                                        'label' => 'Mukhiya Name',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'Phone_No',
                                        'label' => 'Phone No',
                                        'rules' => 'is_natural|max_length[10]'
                                    ],
                                    [
                                        'field' => 'Father_Hubby',
                                        'label' => 'Father or husband',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'Mother_Name',
                                        'label' => 'Mother Name',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'Gotra',
                                        'label' => 'Gotra',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'Occupation_Type',
                                        'label' => 'Occupation(Work)',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'District_Name',
                                        'label' => 'Select District Name',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'City_Place',
                                        'label' => 'Select City Place',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'Address',
                                        'label' => 'Address',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'Mukhiya_Email',
                                        'label' => 'Email',
                                        'rules' => 'valid_email'
                                    ]
                            ],
		'Temple_Rules' =>[
                                    [
                                        'field' => 'Temp_Name',
                                        'label' => 'Temple Name',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'VillageName',
                                        'label' => 'Village Name',
                                        'rules' => 'required'
                                    ],
									[
                                        'field' => 'Dist_Name',
                                        'label' => 'Select District Name',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'Temp_Dtl',
                                        'label' => 'Temple Details',
                                        'rules' => 'required'
                                    ]
                            ],
	'Artical_Rules' =>[
                                    [
                                        'field' => 'Artical_Title',
                                        'label' => 'Artical Name',
                                        'rules' => 'required|trim'
                                    ],
                                    [
                                        'field' => 'Artical_Dtl',
                                        'label' => 'Artical Details',
                                        'rules' => 'required|trim'
                                    ]
                      ],
    'Aarti_Rules' =>[
                                    [
                                        'field' => 'Aarti_Title',
                                        'label' => 'Artical Name',
                                        'rules' => 'required|trim'
                                    ],
                                    [
                                        'field' => 'Aarti_Dtl',
                                        'label' => 'Aarti Details',
                                        'rules' => 'required|trim'
                                    ]
                    ],
	 'male_rules' =>[
                                    [
                                        'field' => 'Meb_Name',
                                        'label' => 'Member Name',
                                        'rules' => 'required|trim'
                                    ],
                                    [
                                        'field' => 'Birth_Date',
                                        'label' => 'Age',
                                        'rules' => 'required|trim|numeric'
                                    ],
                                    [
                                        'field' => 'Job_Type',
                                        'label' => 'Job Type',
                                        'rules' => 'required|trim'
                                    ],
                                    [
                                        'field' => 'Education',
                                        'label' => 'Education',
                                        'rules' => 'required|trim'
                                    ],
                                    [
                                        'field' => 'Gender',
                                        'label' => 'Gender',
                                        'rules' => 'required|trim'
                                    ],
                                    [
                                        'field' => 'Relation_Type',
                                        'label' => 'Relation Type',
                                        'rules' => 'required|trim'
                                    ]
                    ],
	'Meb_Child_Rules' =>[
                                    [
                                        'field' => 'Ch_Name',
                                        'label' => 'Child Name',
                                        'rules' => 'required|trim'
                                    ],
                                    [
                                        'field' => 'Ch_Mother',
                                        'label' => 'Mother Name',
                                        'rules' => 'required|trim'
                                    ],
									[
                                        'field' => 'Ch_Dob',
                                        'label' => 'Child Age',
                                        'rules' => 'required|numeric|max_length[3]'
                                    ]
                    ],

    'Female_Rules' =>[
                                    [
                                        'field' => 'FM_Name',
                                        'label' => 'Female Name',
                                        'rules' => 'required|trim'
                                    ],
                                    [
                                        'field' => 'Relation_Type',
                                        'label' => 'Relation Type',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'FM_Dob',
                                        'label' => 'Female Age',
                                        'rules' => 'required|numeric|max_length[3]'
                                    ],
                                    [
                                        'field' => 'FM_Hubby',
                                        'label' => 'Husband',
                                        'rules' => 'required|trim'
                                    ],
                                    [
                                        'field' => 'FM_Fathere',
                                        'label' => 'Female Father',
                                        'rules' => 'required|trim'
                                    ],
                                    [
                                        'field' => 'FM_PiharPlace',
                                        'label' => 'Pihar Place',
                                        'rules' => 'required|trim'
                                    ]
                    ],
    'City_Rules' =>[
                                    [
                                        'field' => 'CityName',
                                        'label' => 'City Hindi Name',
                                        'rules' => 'required|trim'
                                    ],
                                    [
                                        'field' => 'EngName',
                                        'label' => 'City English Name',
                                        'rules' => 'required|trim'
                                    ]               
                     ],
    'Slider_Rules' =>[
                                    [
                                        'field' => 'Slider_Text',
                                        'label' => 'Slider Text',
                                        'rules' => 'required|trim'
                                    ],
                                    [
                                        'field' => 'Active',
                                        'label' => 'Active',
                                        'rules' => 'required|trim'
                                    ],
                                                  
                     ], 
    'Rashifal_Rules' =>[
                                    [
                                        'field' => 'Rashi_fal',
                                        'label' => 'Rashifal',
                                        'rules' => 'required|trim'
                                    ],
                                    [
                                        'field' => 'Active',
                                        'label' => 'Active',
                                        'rules' => 'required|trim'
                                    ],
                                                  
                     ],
    'Panchang_Rules' =>[
                                    [
                                        'field' => 'panchang_dtl',
                                        'label' => 'panchang Details',
                                        'rules' => 'required|trim'
                                    ],
                                    [
                                        'field' => 'Active',
                                        'label' => 'Active',
                                        'rules' => 'required|trim'
                                    ],
                                                  
                     ],
    'Cmt_Rules' =>[
                                    [
                                        'field' => 'Comment_Dtl',
                                        'label' => 'Comment Details',
                                        'rules' => 'required|trim'
                                    ],
                                    [
                                        'field' => 'Active',
                                        'label' => 'Active',
                                        'rules' => 'required|trim'
                                    ],
                                                  
                     ],
    'Vdi_Rules' =>[
                                    [
                                        'field' => 'Video_Name',
                                        'label' => 'Video Name',
                                        'rules' => 'required|trim'
                                    ],
                                    [
                                        'field' => 'Video_Dtl',
                                        'label' => 'Video Details',
                                        'rules' => 'required|trim'
                                    ],
                                    [
                                        'field' => 'Video_Cat',
                                        'label' => 'Video Category',
                                        'rules' => 'required|trim'
                                    ],
                                    [
                                        'field' => 'Active',
                                        'label' => 'Active',
                                        'rules' => 'required|trim'
                                    ]
                                                  
                     ],
    'Home_Login' =>[
                                    [
                                        'field' => 'user_email',
                                        'label' => 'User Email',
                                        'rules' => 'required|valid_email'
                                    ],
                                    [
                                        'field' => 'user_password',
                                        'label' => 'Password',
                                        'rules' => 'required'
                                    ]
                                   
                            ],
    'User_Rules' =>[
                                    [
                                        'field' => 'user_fname',
                                        'label' => 'First Name',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'user_lname',
                                        'label' => 'Last Name',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'user_email',
                                        'label' => 'User Email',
                                        'rules' => 'required|valid_email'
                                    ]
                                   
                    ],
    'User_Artical' =>[
                                    [
                                        'field' => 'Artical_Title',
                                        'label' => 'Artical Title',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'Artical_Dtl',
                                        'label' => 'Artical Details',
                                        'rules' => 'required'
                                    ]
                                   
                    ],
    'User_Temple' =>[
                                    [
                                        'field' => 'Temp_Name',
                                        'label' => 'Artical Title',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'Temp_Dtl',
                                        'label' => 'Artical Details',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'VillageName',
                                        'label' => 'Village Name',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'Dist_Name',
                                        'label' => 'Districts Name',
                                        'rules' => 'required'
                                    ]
                    ],
    'User_Reg' =>[
                                    [
                                        'field' => 'user_fname',
                                        'label' => 'User First Name',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'user_lname',
                                        'label' => 'User Last Name',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'user_email',
                                        'label' => 'User Email',
                                        'rules' => 'required|valid_email'
                                    ],
                                    [
                                        'field' => 'user_password',
                                        'label' => 'Password',
                                        'rules' => 'required'
                                    ]
                    ],
    'changePass' =>[
                                    [
                                        'field' => 'old_password',
                                        'label' => 'Old Password',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'new_password',
                                        'label' => 'New Password',
                                        'rules' => 'required'
                                    ]
                    ],
    'forgotpass' =>[
                                    [
                                        'field' => 'user_email',
                                        'label' => 'User Email',
                                        'rules' => 'required|valid_email'
                                    ]
                    ],
    'Admin_User_Reg' =>[
                                    [
                                        'field' => 'user_fname',
                                        'label' => 'User First Name',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'user_lname',
                                        'label' => 'User Last Name',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'user_email',
                                        'label' => 'User Email',
                                        'rules' => 'required|valid_email'
                                    ]
                                    
                    ],
    'News_Rules' =>[
                                    [
                                        'field' => 'NewsTitle',
                                        'label' => 'News Title',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'NewsDtl',
                                        'label' => 'News Details',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'Active',
                                        'label' => 'Activate News',
                                        'rules' => 'required'
                                    ]
                    ],
    'Contact_Email'=>[
                                    [
                                        'field' => 'Mail_Name',
                                        'label' => 'Your Name',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'Mail_Email',
                                        'label' => 'Your Email',
                                        'rules' => 'required|valid_email'
                                    ],
                                    [
                                        'field' => 'Mail_Mobile',
                                        'label' => 'Your Mobile',
                                        'rules' => 'required|numeric|min_length[10]|max_length[10]'
                                    ],
                                    [
                                        'field' => 'Msg_Dtl',
                                        'label' => 'Your Message',
                                        'rules' => 'required'
                                    ]
                     ],
    'User_News' =>[
                                    [
                                        'field' => 'NewsTitle',
                                        'label' => 'News Title',
                                        'rules' => 'required'
                                    ],
                                    [
                                        'field' => 'NewsDtl',
                                        'label' => 'News Details',
                                        'rules' => 'required'
                                    ]
                    ],
    'ResetUserpass' =>[
                                    [
                                        'field' => 'user_password',
                                        'label' => 'User Password',
                                        'rules' => 'trim|required|min_length[5]'
                                    ]
                    ]

]
?>