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

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//login related routes
$route['login']['GET'] = 'login';
$route['login']['POST'] = 'login/user_login_process';
$route['logout']['GET'] = 'login/logout';

//home or landing page related routes
$route['home']['GET'] = 'welcome';


//department related routes
$route['department']['GET'] = 'department';
$route['master_add_department']['POST']='department/master_add_department';
$route['master_check_department']['GET']='department/master_check_department';
$route['getDepartments_list']['GET']='department/getDepartments_list';

//vehicle related routes
$route['vehicle']='vehicle';
$route['master_add_vehicletype']['POST']='vehicle/master_add_vehicletype';
$route['master_check_vehicletype']['GET']='vehicle/master_check_vehicletype';
$route['getVehicletypes_list']['GET']='vehicle/getVehicletypes_list';


//base Master related router[country,state, city]
$route['master']['GET']='baseMaster';
$route['master_add_country']['POST']='baseMaster/master_add_country';
$route['getCountry_list']['GET']='baseMaster/getCountry_list';
$route['master_check_country']['GET']='baseMaster/check_duplicate_country';


//admin related routes
$route['admin']['GET']='welcome/admin_user_details';


//category related routes
$route['category']['GET']='category';
$route['master_add_category']['POST']='category/master_add_category';


//transport related routes
$route['transport']['GET']='transport';


//profits related routes
$route['profits']['GET']='profits';
$route['master_add_profits']['POST']='profits/master_add_profits';
$route['getProfits_list']['GET']='profits/getProfits_list';
$route['master_check_profit']['GET']='profits/master_check_profit';


//product related routes
$route['product']['GET']='product';
$route['product']['POST']='product/master_add_product';
