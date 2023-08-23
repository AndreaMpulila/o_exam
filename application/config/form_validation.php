<?php

$config = array(
    'signup' => array(
            array(
                    'field' => 'fname',
                    'label' => 'First name',
                    'rules' => 'required'
            ),
            array(
                'field' => 'lname',
                'label' => 'Last name',
                'rules' => 'required'
        ),
            array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'cpassword',
                    'label' => 'Password Confirmation',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required|is_unique[users.email]'
            ),
            array(
                'field' => 'phone',
                'label' => 'Phone',
                'rules' => 'required|min_length[5]|max_length[13]|is_unique[users.phone]'
        )
    ),
    'ward' => array(
            array(
                    'field' => 'nation',
                    'label' => 'Nation/Country',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'region',
                    'label' => 'Region',
                    'rules' => 'required'
            ),
                array(
                        'field' => 'district',
                        'label' => 'Dstrict',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'ward',
                        'label' => 'Ward',
                        'rules' => 'required'
                ),
            array(
                    'field' => 'street',
                    'label' => 'Street',
                    'rules' => 'required'
            )
            ),
        'login'=>array(
                array(
                        'field'=>'username',
                        'label'=>'Username',
                        'rules'=>'required|trim'
                ),
                array(
                        'field'=>'password',
                        'label'=>'Password',
                        'rules'=>'required'
                )
                ),
        'services'=>array(
                array(
                        'field'=>'service',
                        'lable'=>'Service Name',
                        'rules'=>'required|trim'
                ),
                array(
                        'field'=>'nation',
                        'lable'=>'Location of service ',
                        'rules'=>'required'
                ),
                array(
                        'field' => 'region',
                        'label' => 'Region',
                        'rules' => 'required'
                ),
                    array(
                            'field' => 'district',
                            'label' => 'Dstrict',
                            'rules' => 'required'
                    ),
                    array(
                            'field' => 'ward',
                            'label' => 'Ward',
                            'rules' => 'required'
                    ),
                array(
                        'field' => 'street',
                        'label' => 'Street',
                        'rules' => 'required'
                )
                ),
                'adduser'=>array(
                        array(
                                'field' => 'fname',
                                'label' => 'First name',
                                'rules' => 'required'
                        ),
                        array(
                            'field' => 'lname',
                            'label' => 'Last name',
                            'rules' => 'required'
                    ),
                        array(
                                'field' => 'email',
                                'label' => 'Email',
                                'rules' => 'required'
                        ),
                        array(
                            'field' => 'phone',
                            'label' => 'Phone',
                        ),            
                        array(
                                'field'=>'nation',
                                'lable'=>'Location of service ',
                                'rules'=>'required'
                        ),
                        array(
                                'field' => 'region',
                                'label' => 'Region',
                                'rules' => 'required'
                        ),
                            array(
                                    'field' => 'district',
                                    'label' => 'District',
                                    'rules' => 'required'
                            ),
                            array(
                                    'field' => 'ward',
                                    'label' => 'Ward',
                                    'rules' => 'required'
                            ),
                        array(
                                'field' => 'place_id',
                                'label' => 'Street',
                                'rules' => 'required'
                        ),
                        
                ),
                'profile'=>array(
                        array(
                                'field' => 'fullname',
                                'label' => 'Full name',
                                'rules' => 'required'
                        ),
                        array(
                                'field' => 'email',
                                'label' => 'Email',
                                'rules' => 'required'
                        ),
                        array(
                            'field' => 'phone',
                            'label' => 'Phone',
                        ),            
                        array(
                                'field'=>'dob',
                                'lable'=>'Date of Birth ',
                                'rules'=>'required'
                        ),
                        array(
                                'field' => 'gender',
                                'label' => 'Gender',
                                'rules' => 'required'
                        )
                ),
                'complains'=>array(
                        array(
                                'field' => 'title',
                                'label' => 'Title',
                                'rules' => 'required'
                        ),
                        array(
                                'field' => 'description',
                                'label' => 'Description',
                                'rules' => 'required'
                        ),
                       
                ),
                'change_psw'=>array(
                        array(
                                'field'=>'opassword',
                                'lable'=>'Old',
                                'rules'=>'required|trim'
                        ),
                        array(
                                'field'=>'npassword',
                                'lable'=>'New',
                                'rules'=>'required|trim'
                        ),
                        array(
                                'field'=>'cpassword',
                                'lable'=>'Confirm',
                                'rules'=>'required|trim|matches[npassword]'
                        ),

                ),
                'sms'=>array(
                        array(
                                'field'=>'message',
                                'lable'=>'Message',
                                'rules'=>'required|trim'
                        ),
                        array(
                                'field'=>'group',
                                'lable'=>'Group',
                                'rules'=>'required|trim|is_natural_no_zero'
                        ),
                        array(
                                'field'=>'purpose',
                                'lable'=>'Purpose',
                                'rules'=>'required|trim|is_natural_no_zero'
                        )
                ),
                'account'=>array(
                        array(
                                'field'=>'pay_for',
                                'lable'=>'Payment For',
                                'rules'=>'required|trim'
                        ),
                        array(
                                'field'=>'amount',
                                'lable'=>'Amount',
                                'rules'=>'required|trim|is_natural_no_zero'
                        ),
                        array(
                                'field'=>'pdate',
                                'lable'=>'Date',
                                'rules'=>'required|trim'
                        ),
                        array(
                                'field'=>'payer_id',
                                'lable'=>'Payer Name',
                                'rules'=>'required|trim|is_natural_no_zero'
                        )
                )
                
);
