<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['logout']='Login/logout';
$route['oos'] = 'Login/outOfService';
$route['register']='Login/register';
$route['admin']='Admin';
$route['citizen']='Citizen';
$route['accountant']='Accountant';
$route['wofficer']='WOfficer';
$route['sofficer']='SOfficer';
$route['supporter']='Supporter';
$route['setup']='Citizen/setup';


$route['get_regions']= 'Login/get_regions';
$route['get_districts']='Login/get_districts';
$route['get_wards']='Login/get_wards';
$route['get_streets']='Login/get_streets';
$route['get_users']='Login/get_users';
$route['get_user_info']='Login/get_user_info';

$route['services']='Admin/services';

$route['search'] = 'Authenticate/loginData';
$route['message'] = 'Message';
$route['sent'] = 'Message/sendMessage';
$route['getmessage'] = 'Message/getMessage';
$route['blockuser']='Message/blockUser';
