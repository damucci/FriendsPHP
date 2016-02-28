<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = "main";
$route['404_override'] = '';
$route['register'] = 'main/register';
$route['login'] = 'main/login';
$route['logout'] = 'main/logout';
$route['friends'] = 'friends/index';
$route['add/(:num)'] = 'friends/add/$1';
$route['add'] = 'friends/add';
$route['users/(:num)'] = 'friends/users/$1';
$route['users'] = 'friends/remove/$1';
$route['remove/(:num)'] = 'friends/remove/$1';
$route['remove'] = 'friends/remove';
$route['translate_uri_dashes'] = FALSE;

//End of routes.php