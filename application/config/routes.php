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
# Dashboard
$route['dashboard/index'] = 'dashboard/index';
$route['dashboard/security'] = 'dashboard/security';
# Procesos de Pagos
$route['procesos'] = 'procesos/index';
$route['procesos/crear-proceso-de-pago'] = 'procesos/create';
$route['procesos/eliminar-proceso-de-pago'] = 'procesos/destroy';
# Nominas 
$route['procesos/lista-de-nominas-(:num)'] = 'nominas/index/$1';
$route['procesos/lista-de-nominas-(:num)/create'] = 'nominas/create/$1';
$route['procesos/lista-de-nominas-(:num)/json'] = 'nominas/json/$1';
$route['procesos/lista-de-nominas-(:num)/eliminar-nomina'] = 'nominas/destroy/$1';
$route['procesos/lista-de-nominas-(:num)/import'] = 'nominas/import/$1';
$route['procesos/lista-de-nominas-(:num)/cerrar-nomina'] = 'nominas/cerrar_nomina';
$route['procesos/lista-de-nominas/export-taloge/(:num)'] = 'nominas/export_taloge/$1';
$route['procesos/lista-de-nominas/export-taloas/(:num)'] = 'nominas/export_taloas/$1';
$route['procesos/lista-de-nominas/export-talode/(:num)'] = 'nominas/export_talode/$1';
# Tipos de Nominas 
$route['tipos-de-nominas'] = 'tipos_nominas/index';
$route['tipos-de-nominas/json'] = 'tipos_nominas/json';
$route['tipos-de-nominas/crear-tipo-de-nomina'] = 'tipos_nominas/create';
$route['tipos-de-nominas/editar-tipo-de-nomina-(:num)'] = 'tipos_nominas/update/$1';
$route['tipos-de-nominas/eliminar-tipo-de-nomina'] = 'tipos_nominas/delete';
# Auth
$route['default_controller'] = 'auth/index';
$route['auth/login'] = 'auth/index';
$route['auth/logout'] = 'dashboard/logout';
$route['auth/password'] = 'dashboard/password';
$route['auth/register'] = 'auth/register';
$route['auth/resetpassword'] = 'auth/resetpassword';
$route['auth/verification/(:any)'] = 'auth/verification/$1';
# Error
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
