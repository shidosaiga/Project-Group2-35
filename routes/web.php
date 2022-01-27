<?php

use App\Http\Controllers\Admincontroller;
use Illuminate\Support\Facades\Route;
// use Auth;
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

Route::get('/','Admin\ContentController@contenthome')->name('welcome');


Auth::routes();

//-------------------------------------------------Route-Profile----------------------------------------------------------------------

Route::get('/about','HomeController@about');
Route::get('/menu', 'HomeController@menu');
Route::get('/home', 'HomeController@index')->name('home');

//-------------------------------------------------Route-Admin----------------------------------------------------------------------
Route::get('/index','Admin\AdminController@index')->name('index');

Route::get('/product','Admin\ProductController@product')->name('product');
Route::get('/back','Admin\BackController@back')->name('back');
Route::get('/content','Admin\ContentController@content')->name('content');
Route::get('/promotion','Admin\PromotionController@promotion')->name('promotion');
Route::get('/typeproduct','Admin\TypeProductController@typeproduct')->name('typeproduct');
Route::get('/user','Admin\UserController@user')->name('user');
Route::get('/homepage','Admin\HomepageController@homepage')->name('homepage');

//-------------------------------------------------Route-Edit----------------------------------------------------------------------

Route::get('/editproduct','Admin\EditProductController@editproduct')->name('editproduct');
Route::get('/editback','Admin\EditBackController@editback')->name('editback');
Route::get('/editcontent','Admin\EditContentController@editcontent')->name('editcontent');
Route::get('/editpromotion','Admin\EditPromotionController@editpromotion')->name('editpromotion');
Route::get('/edittypeproduct','Admin\EdittypeProductController@edittypeproduct')->name('edittypeproduct');
Route::get('/edituser','Admin\EditUserController@edituser')->name('edituser');
Route::get('/edithomepage','Admin\EditHomePageController@edithomepage')->name('edithomepage');

//-------------------------------------------------Route-Add----------------------------------------------------------------------

Route::get('/addproduct','Admin\AddProductController@addproduct')->name('addproduct');
Route::get('/addback','Admin\AddBackController@addback')->name('addback');
Route::get('/addcontent','Admin\AddContentController@addcontent')->name('addcontent');
Route::get('/addpromotion','Admin\AddPromotionController@addpromotion')->name('addpromotion');
Route::get('/addtypeproduct','Admin\AddTypeProductController@addtypeproduct')->name('addtypeproduct');
Route::get('/addhomepage','Admin\AddHomePageContrller@addhomepage')->name('addhomepage');



//-------------------------------------------------CR-System-Route-Add-----------------------------------------------------------------------
Route::post('/admin/Addtypeproduct/create','Admin\AddTypeProductController@create')->name('addtypeproduct.create');
Route::post('/admin/Addproduct/create','Admin\AddProductController@create')->name('addproduct.create');
Route::post('/admin/Addpromotion/create','Admin\AddPromotionController@create')->name('addpromotion.create');
Route::post('/admin/Addback/create','Admin\AddBackController@create')->name('addbackground.create');
Route::post('/admin/Addcontent/create','Admin\AddContentController@create')->name('addcontent.create');
Route::post('/admin/Addhomepage/create','Admin\AddHomePageContrller@create')->name('addhomepage.create');

//-------------------------------------------------CRUD-System-Route-Edit-----------------------------------------------------------------------
Route::get('admin/edit/edituser/edit/{id}','Admin\UserController@edit');
Route::get('admin/edit/editproduct/edit/{id}','Admin\ProductController@edit');
Route::get('admin/edit/editypetproduct/edit/{id}','Admin\TypeProductController@edit');
Route::get('admin/edit/editcontent/edit/{id}','Admin\ContentController@edit');
Route::get('admin/edit/editbackground/edit/{id}','Admin\BackController@edit');
Route::get('admin/edit/editpromotion/edit/{id}','Admin\PromotionController@edit');
Route::get('admin/edit/edithomepage/edit/{id}','Admin\HomepageController@edit');

//-------------------------------------------------CRUD-System-Route-update-----------------------------------------------------------------------
Route::post('admin/edit/edituser/update/{id}','Admin\UserController@update');
Route::post('admin/edit/editproduct/update/{id}','Admin\ProductController@update');
Route::post('admin/edit/editypetproduct/update/{id}','Admin\TypeProductController@update');
Route::post('admin/edit/editcontent/update/{id}','Admin\ContentController@update');
Route::post('admin/edit/editbackground/update/{id}','Admin\BackController@update');
Route::post('admin/edit/editpromotion/update/{id}','Admin\PromotionController@update');
Route::post('admin/edit/edithomepage/update/{id}','Admin\HomepageController@update');

//-------------------------------------------------CRUD-System-Route-delete-----------------------------------------------------------------------
Route::get('admin/edit/edituser/del/{id}','Admin\UserController@del');
Route::get('admin/edit/editproduct/del/{id}','Admin\ProductController@del');
Route::get('admin/edit/editypetproduct/del/{id}','Admin\TypeProductController@del');
Route::get('admin/edit/editcontent/del/{id}','Admin\ContentController@del');
Route::get('admin/edit/editbackground/del/{id}','Admin\BackController@del');
Route::get('admin/edit/editpromotion/del/{id}','Admin\PromotionController@del');
Route::get('admin/edit/edithomepage/del/{id}','Admin\HomepageController@del');

//----------------------------------------------<---Middleware--Roite-----------------------------------------------------------------------

// Route::middleware(['auth','Verifyisadmin'])->group(function()
//     {

        
        
// });


