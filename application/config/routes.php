<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'CommercioDashboard';

// POST Routes
$route['api-auth-register']['POST'] = 'Auth/register';
$route['api-auth-login']['POST'] = 'Auth/login';

// GET Routes
$route['about-us'] = 'CommercioDashboard/about';
$route['login'] = 'CommercioDashboard/login';
$route['register'] = 'CommercioDashboard/register';


// /ecm-admin/ routes
$route[''] = 'CommercioDashboard/index';
$route['logout'] = 'auth/logout';

// Commercio App Settings
$route['setting/app-settings'] = "";
$route['setting/app-settings/currency'] = "";

// Commercio Product 
$route['products'] = 'CommercioProducts/index';
$route['products/new'] = 'CommercioProducts/new';
$route['product/(:any)/edit'] = 'CommercioProducts/edit/$1';
$route['product/(:any)'] = 'CommercioProducts/details/$1';

// Commercio Categories
$route['categories'] = 'CommercioCategories/index';
$route['categories/new'] = 'CommercioCategories/new';
$route['category/(:any)/edit'] = 'CommercioCategories/edit/$1';
$route['category/(:any)'] = 'CommercioCategories/details/$1';

// Commercio Invoices
$route['invoices'] = 'CommercioInvoices/index';
$route['invoices/new'] = 'CommercioInvoices/new';
$route['invoice/(:any)/edit'] = 'CommercioInvoices/edit/$1';
$route['invoice/(:any)'] = 'CommercioInvoices/details/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
