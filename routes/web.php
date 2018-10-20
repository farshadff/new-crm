<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin',function () {
    if (Auth::user()) {
   return view('admin.index');
    } else
        return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('admin/tasks', 'TaskController');
Route::resource('admin/products', 'ProductController');
Route::resource('admin/phonebook', 'PhonebookController');
Route::resource('admin/product_cats', 'ProductCatController');
// Route for view/blade file.
Route::get('admin/client/import', 'ClientController@showimport');
// Route for export/download tabledata to .csv, .xls or .xlsx
Route::get('downloadExcel/{type}', 'ClientController@downloadExcel');
// Route for import excel data to database.
//Route for sell man assign
Route::get('admin/client/myclient', 'ClientController@myclient');
//agreement save
Route::get('admin/client/agreement', 'ClientController@agreement');
Route::post('admin/client/agreement', 'ClientController@agreementsave');
//assign sell man
Route::get('admin/client/assign','ClientController@assignsellman');
Route::post('admin/client/assign','ClientController@assignsellmanSave');
Route::get('admin/client/costumers', 'ClientController@showcostumers');
Route::post('admin/client/importExcel', 'ClientController@importExcel');
Route::resource('admin/client', 'ClientController');
//invoices routes
//Route::get('admin/invoices/pdf', 'InvoicesController@pdfview')->name('generate-pdf');
//profile route
Route::get('admin/profile', 'ProfileController@index');
Route::get('admin/profile/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('admin/profile/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);
//Route::get('admin/profile/edit', 'userController@index');
//Route::get('admin/profile/update', 'userController@update');
//Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);



Route::resource('admin/invoices','InvoiceController');
Route::get('admin/invoices/pdf/{id}','InvoiceController@downloadPDF');
// UAC routes
Route::resource('admin/uac' , 'UacController');
// add role routes
Route::get('admin/addrole' , 'UacController@addrole');
Route::post('admin/addrole' , 'UacController@addrolesave');
//add ability routes
Route::get('admin/addability' , 'UacController@addability');
Route::post('admin/addability' , 'UacController@addabilitysave');
Route::get('admin/abilities', 'UacController@abilities');
// assingning the role to use
Route::get('admin/assignrole' , 'UacController@assignrole');
Route::post('admin/assignrole' , 'UacController@assignrolesave');





