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
$route['default_controller'] = 'UserController/Login';
$route['login'] = 'UserController/Login';
$route['checklogin'] = 'UserController/CheckUserLogin';
$route['document'] = 'Dms';

//Dashboard Contoll
$route['dashboard'] = 'Dashboard';
$route['admin-dashboard'] = 'Dashboard';
$route['sucbity-dashboard'] = 'Dashboard/SubcityDashboard';
$route['dataecnoder-dashboard'] = 'Dashboard/DataEncoderDashboard';
$route['kebele-dataecnoder-dashboard'] = 'Dashboard/KebeleDataEncoderDashboard';
$route['kebele-dashboard'] = 'Dashboard/KebeleDashboard';
$route['report-viewer'] = 'Dashboard/KebeleDashboard';

//User Controller

$route['user_list'] = 'UserController/UserList';
$route['user_list/(:any)'] = 'UserController/UserList';
$route['logout'] = 'UserController/Logout';


$route['save_user'] = 'UserController/StoreUser';
$route['update_user/(:any)'] = 'UserController/UpdateUserData/$1';
$route['destroyUser/(:any)'] = 'UserController/DeleteUser/$1';
$route['disable_user/(:any)'] = 'UserController/DisableUser/$1';
$route['activate_user/(:any)'] = 'UserController/ActivateUser/$1';
$route['document-registration'] = 'DocumentRegistrationController';
$route['save-document'] = 'DocumentRegistrationController/save_document';
$route['subcity-save-document'] = 'DocumentRegistrationController/SubcitySaveData';
$route['manage-documents'] = 'DocumentRegistrationController/ListDocuments';
$route['manage-all-documents'] = 'DocumentRegistrationController/GetDocuments';

$route['subcity-manage-documents'] = 'DocumentRegistrationController/SubcityListDocuments';
$route['manage-documents/(:any)'] = 'DocumentRegistrationController/ListDocuments';
$route['search-document/(:any)'] = 'DocumentRegistrationController/search_document';
$route['bulkupload'] = 'BulkDataController/BulkDataUpload/';
$route['kebelebulkupload'] = 'BulkDataController/KebeleBulkDataUpload/';
$route['document-hasno-fullinformation'] = 'DocumentRegistrationController/Document_no_full_information';

//City Admin List  

$route['city_list'] = 'SettingController';
$route['city_admin'] = 'SettingController/CityAdmin';
$route['save_city'] = 'SettingController/SaveCity';
$route['edit_city/(:any)'] = 'SettingController/UpdateCity/$1';
$route['delete_city/(:any)'] = 'SettingController/DeleteCity/$1';

// Subcity List


$route['subcity_list'] = 'SettingController/Subcity';
$route['save_subcity'] = 'SettingController/SaveSubCity';
$route['edit_subcity/(:any)'] = 'SettingController/UpdateSubCity/$1';
$route['delete_subcity/(:any)'] = 'SettingController/DeleteSubCity/$1';

// Kebele List


$route['kebele_list'] = 'SettingController/Kebele';
$route['save_kebele'] = 'SettingController/SaveKebele';
$route['edit_kebele/(:any)'] = 'SettingController/UpdateKebele/$1';
$route['delete_kebele/(:any)'] = 'SettingController/DeleteKebele/$1';

$route['search-document'] = 'DocumentRegistrationController/search_document';
$route['document-edit/(:any)'] = 'DocumentRegistrationController/Edit_Document/$1';
$route['document-delete/(:any)'] = 'DocumentRegistrationController/Delete_Document/$1';


// Kebele Document Registration routes here ...
$route['kebele-document-registration'] = 'DocumentRegistrationController/KebeleDcument';
$route['subcity-document-registration'] = 'DocumentRegistrationController/SubcityDcument';
$route['kebele-save-document'] = 'DocumentRegistrationController/SaveKebeleDocument';
$route['kebele-attach-document/(:any)'] = 'DocumentRegistrationController/AttachKebeleDocument/$1';

$route['kebele-manage-documents'] = 'DocumentRegistrationController/KebeleListDocumentst';
$route['request-document-manage'] = 'DocumentRegistrationController/RequestDocumentstList';
$route['subcity_document-edit/(:any)'] = 'DocumentRegistrationController/SubcityEditDocument/$1';
$route['update_subcity_document/(:any)'] = 'DocumentRegistrationController/SubcityDocumentUpdate/$1';
$route['request-access-document/(:any)'] = 'DocumentRegistrationController/RequestAccessDocument/$1';
$route['request-approve-document/(:any)'] = 'DocumentRegistrationController/RequestApprovedDocument/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
