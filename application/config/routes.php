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
$route['default_controller'] = 'home';
$route['404_override'] = '';

/*
|--------------------------------------------------------------------------
| ROUTE BAHASA INDONESIA
|--------------------------------------------------------------------------
*/
$route['profile'] = 'about';

$route['jasa'] = 'jasa';
$route['jasa/instalasi-listrik-bekasi'] = 'jasa/instalasi_listrik_bekasi';
$route['jasa/instalasi-listrik-jakarta'] = 'jasa/instalasi_listrik_jakarta';
$route['jasa/instalasi-listrik-bogor'] = 'jasa/instalasi_listrik_bogor';
$route['jasa/instalasi-listrik-tangerang'] = 'jasa/instalasi_listrik_tangerang';
$route['jasa/instalasi-listrik-depok'] = 'jasa/instalasi_listrik_depok';
$route['jasa/instalasi-listrik-serang'] = 'jasa/instalasi_listrik_serang';
$route['jasa/instalasi-listrik'] = 'jasa/instalasi_listrik';
$route['jasa/panel-listrik'] = 'jasa/panel_listrik';
$route['jasa/maintenance-electrical'] = 'jasa/maintenance_listrik';
$route['jasa/pemasangan-panel-surya'] = 'jasa/panel_surya';
$route['jasa/sewa-genset'] = 'jasa/sewa_genset';
$route['jasa/perbaikan-listrik'] = 'jasa/perbaikan_listrik';
$route['jasa/pasang-penangkal-petir'] = 'jasa/penangkal_petir';
$route['jasa/pembuatan-slo-listrik'] = 'jasa/pembuatan_slo';

$route['blog'] = 'blog';
$route['blog/(:any)'] = 'blog/detail/$1';

$route['contact'] = 'contact';
$route['produk'] = 'produk';


/*
|--------------------------------------------------------------------------
| ROUTE BAHASA ENGLISH
|--------------------------------------------------------------------------
*/
$route['en'] = 'home/index/en';
$route['en/profile'] = 'about/index/en';

$route['en/service'] = 'jasa/index/en';

$route['en/service/electrical-installation-bekasi'] = 'jasa/instalasi_listrik_bekasi/en';
$route['en/service/electrical-installation-jakarta'] = 'jasa/instalasi_listrik_jakarta/en';
$route['en/service/electrical-installation-bogor'] = 'jasa/instalasi_listrik_bogor/en';
$route['en/service/electrical-installation-tangerang'] = 'jasa/instalasi_listrik_tangerang/en';
$route['en/service/electrical-installation-depok'] = 'jasa/instalasi_listrik_depok/en';
$route['en/service/electrical-installation-serang'] = 'jasa/instalasi_listrik_serang/en';

$route['en/service/electrical-installation'] = 'jasa/instalasi_listrik/en';
$route['en/service/electrical-panel'] = 'jasa/panel_listrik/en';
$route['en/service/electrical-maintenance'] = 'jasa/maintenance_listrik/en';
$route['en/service/solar-panel-installation'] = 'jasa/panel_surya/en';
$route['en/service/generator-rental'] = 'jasa/sewa_genset/en';
$route['en/service/electrical-repair'] = 'jasa/perbaikan_listrik/en';
$route['en/service/lightning-protection-grounding'] = 'jasa/penangkal_petir/en';
$route['en/service/slo-nidi-certification'] = 'jasa/pembuatan_slo/en';

$route['en/blog'] = 'blog/index/en';
$route['en/blog/(:any)'] = 'blog/detail/$1/en';

$route['en/contact'] = 'contact/index/en';
$route['en/produk'] = 'produk/index/en';


/*
|--------------------------------------------------------------------------
| ROUTE UMUM ENGLISH
| Taruh paling bawah supaya tidak menimpa route khusus di atas
|--------------------------------------------------------------------------
*/
$route['en/(:any)'] = '$1/index/en';

$route['translate_uri_dashes'] = FALSE;