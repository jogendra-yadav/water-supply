<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
  | -------------------------------------------------------------------------
  | URI ROUTING
  | -------------------------------------------------------------------------
  | This file lets you re-map URI requests to specific controller functions.
  |
  | Typically there is a one-to-one relationship between a URL string
  | and its corresponding controller class/method. The segments in a
  | URL normally follow this pattern:
  |
  |	example.com/class/method/id/
  |
  | In some instances, however, you may want to remap this relationship
  | so that a different class/function is called than the one
  | corresponding to the URL.
  |
  | Please see the user guide for complete details:
  |
  |	https://codeigniter.com/user_guide/general/routing.html
  |
  | -------------------------------------------------------------------------
  | RESERVED ROUTES
  | -------------------------------------------------------------------------
  |
  | There are three reserved routes:
  |
  |	$route['default_controller'] = 'welcome';
  |
  | This route indicates which controller class should be loaded if the
  | URI contains no data. In the above example, the "welcome" class
  | would be loaded.
  |
  |	$route['404_override'] = 'errors/page_missing';
  |
  | This route will tell the Router which controller/method to use if those
  | provided in the URL cannot be matched to a valid route.
  |
  |	$route['translate_uri_dashes'] = FALSE;
  |
  | This is not exactly a route, but allows you to automatically route
  | controller and method names that contain dashes. '-' isn't a valid
  | class or method name character, so it requires translation.
  | When you set this option to TRUE, it will replace ALL dashes in the
  | controller and method URI segments.
  |
  | Examples:	my-controller/index	-> my_controller/index
  |		my-controller/my-method	-> my_controller/my_method
 */
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login.html'] = 'login/process_login_action';
$route['logout.html'] = 'login/logout';
$route['home.html'] = 'home/index';
$route['user.html'] = 'user/index';
$route['customer.html'] = 'customer/index';
$route['add_customer.html'] = 'customer/add_customer';
$route['add_user.html'] = 'user/add_user';
$route['save_customer.html'] = 'customer/save_customer';
$route['save_user.html'] = 'user/save_user';
$route['delivery.html'] = 'delivery/index';
$route['history-delivery.html'] = 'history_delivery/index';
$route['get-history.html'] = 'history_delivery/get_history';
$route['increase_count_delivery.html'] = 'delivery/increase_count_delivery';
$route['reset_count_delivery.html'] = 'delivery/reset_count_delivery';
$route['edit_customer_([0-9]+).html'] = 'customer/load_edit_customer_view/$1';
$route['delete_customer_([0-9]+).html'] = 'customer/delete_customer/$1';
$route['update_customer_details_([0-9]+).html'] = 'customer/update_customer_details/$1';


