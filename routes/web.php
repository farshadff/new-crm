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
   return view('admin.index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('admin/tasks', 'TaskController');
Route::resource('admin/products', 'ProductController');
Route::resource('admin/opportunities', 'PhonebookController');
Route::resource('admin/product_cats', 'ProductCatController');
// Route for view/blade file.
Route::get('admin/client/import', 'ClientController@showimport');
// Route for export/download tabledata to .csv, .xls or .xlsx
Route::get('downloadExcel/{type}', 'ClientController@downloadExcel');
// Route for import excel data to database.
Route::post('admin/client/assign','ClientController@assignsellman');
Route::get('admin/client/costumers', 'ClientController@showcostumers');
Route::post('admin/client/importExcel', 'ClientController@importExcel');
Route::resource('admin/client', 'ClientController');
//invoices routes
//Route::get('admin/invoices/pdf', 'InvoicesController@pdfview')->name('generate-pdf');

Route::resource('admin/invoices','InvoiceController');
Route::get('admin/invoices/pdf/{id}','InvoiceController@downloadPDF');




