<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','Front\HomePageController@index')->name('logout');
Route::resource('editor','CkeditorController');
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');
Route::get('/me','MyController@index');
Route::get('/homepage','Front\HomePageController@index')->name('homepage');
Route::get('/about','Front\AboutPageController@index')->name('about');
Route::get('/doctor','Front\DoctorPageController@index')->name('doctor');
Route::get('/department','Front\DepartmentPageController@index')->name('department');
Route::get('/pricing','Front\PricingPageController@index')->name('pricing');
Route::get('/blog','Front\BlogPageController@index')->name('blog');
Route::get('/contact','Front\ContactPageController@index')->name('contact');
Route::get('/singleblog','Front\SingleBlogPageController@index')->name('singleblog');


Route::group(['prefix'=>'back'],function()
{

Route::get('/','Admin\DashboardController@index');
Route::get('/catagory','Admin\CatagoryController@index');
Route::get('/catagory/create','Admin\CatagoryController@create');
Route::get('/catagory/edit','Admin\CatagoryController@edit');
Route::get('/permission/create','Admin\PermissionController@create');
Route::get('/permission','Admin\PermissionController@index');
Route::post('/permission/store','Admin\PermissionController@store');
Route::get('/permission/edit/{id}',['uses' => 'Admin\PermissionController@edit','as' => 'permission-edit']);
Route::put('/permission/update/{id}',['uses' => 'Admin\PermissionController@update','as' => 'permission-update']);
Route::delete('/permission/delete/{id}',['uses' => 'Admin\PermissionController@destroy','as' => 'permission-delete']);

Route::get('/roles','Admin\RoleController@show');
Route::get('/roles/create','Admin\RoleController@create');
Route::post('/roles/store','Admin\RoleController@store');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/chat', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');


//////Buy medicine all routes 
Route::get('/buy','MedicineController@index');

///////catagory
Route::get('/mcatagoy/view','McategoryController@mcatagory_form')->name('mcatagory_form');
Route::post('/mcatagoy/view','McategoryController@mcatagory_save')->name('mcatagory_save');

Route::get('/mcatagoy/catagory',['uses'=>'McategoryController@manage_catagory',
'as'=>'manage_catagory']);
Route::get('/mcatagoy/unpublish/{cat_id}',['uses'=>'McategoryController@unpublish_catagory',
'as'=>'unpublish_catagory']);
Route::get('/mcatagoy/publish/{cat_id}',['uses'=>'McategoryController@publish_catagory',
'as'=>'publish_catagory']);
Route::get('/mcatagoy/delete/{cat_id}',['uses'=>'McategoryController@delete_catagory',
'as'=>'delete_catagory']);
Route::get('/mcatagoy/edit/{cat_id}',['uses'=>'McategoryController@edit_catagory',
'as'=>'edit_catagory']);
Route::post('/mcatagoy/update',['uses'=>'McategoryController@mcatagory_update',
'as'=>'mcatagory_update']);

/////////////////product
Route::get('/product/add',['uses'=>'ProductController@product_form',
'as'=>'product_form']);
Route::get('/product/manage',['uses'=>'ProductController@product_manage',
'as'=>'manage_product']);
Route::get('/product/unpublish/{pro_id}',['uses'=>'ProductController@unpublish_product',
'as'=>'unpublish_product']);
Route::get('/product/publish/{pro_id}',['uses'=>'ProductController@publish_product',
'as'=>'publish_product']);
Route::get('/product/delete/{pro_id}',['uses'=>'ProductController@delete_product',
'as'=>'delete_product']);
Route::get('/product/edit/{pro_id}',['uses'=>'ProductController@edit_product',
'as'=>'edit_product']);
Route::post('/product/update',['uses'=>'ProductController@product_update',
'as'=>'product_update']);

Route::post('/product/save',['uses'=>'ProductController@product_save',
'as'=>'product_save']);
/////deleteproduct manage
Route::get('/product/delete_manage_product',['uses'=>'ProductController@delete_product_manage',
'as'=>'delete_manage_product']);
/////////////restore product
Route::get('/product/restore/{pro_id}',['uses'=>'ProductController@restore_product_manage',
'as'=>'restore_product']);
Route::get('/product/force_delete/{pro_id}',['uses'=>'ProductController@force_delete',
'as'=>'force_delete']);





