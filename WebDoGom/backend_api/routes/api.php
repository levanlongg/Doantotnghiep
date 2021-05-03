<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//register
Route::post('register','RegisterController@register');
//login
Route::post('login','LoginController@login');
//refres_token
Route::post('refresh_token','LoginController@refreshToken');
//delete_token
Route::delete('delete_token','LoginController@deleteToken');
//producer
Route::get('producer','ProducerController@producer');
Route::get('producer/{id}','ProducerController@producerById');
Route::post('producer','ProducerController@producerSave');
Route::put('producer/{id}','ProducerController@producerUpdate');
Route::delete('producer/{producer}','ProducerController@producerDelete');
//category
Route::get('category','CategoryController@category');
Route::get('category/{id}','CategoryController@categoryById');
Route::post('category','CategoryController@categorySave');
Route::put('category/{id}','CategoryController@categoryUpdate');
Route::delete('category/{category}','CategoryController@categoryDelete');
//contact
Route::get('contact','ContactController@contact');
Route::get('contact/{id}','ContactController@contactById');
Route::post('contact','ContactController@contactSave');
Route::put('contact/{id}','ContactControllerr@contactUpdate');
Route::delete('contact/{contact}','ContactController@contactDelete');
//Introduction
Route::get('introduction','IntroductionController@introduction');
Route::get('introduction/{id}','IntroductionController@introductionById');
Route::post('introduction','IntroductionController@introductionSave');
Route::put('introduction/{id}','IntroductionControllerr@introductionUpdate');
Route::delete('introduction/{introduction}','IntroductionController@introductionDelete');
//news
Route::get('news','NewsController@news');
Route::get('news/{id}','NewsController@newsById');
Route::post('news','NewsController@newsSave');
Route::put('news/{id}','NewsController@newsUpdate');
Route::delete('news/{news}','NewsController@newsDelete');
//newtype
Route::get('newstype','NewsTypeController@newstype');
Route::get('newstype/{id}','NewsTypeController@newstypeById');
Route::post('newstype','NewsTypeController@newstypeSave');
Route::put('newstype/{id}','NewsTypeController@newstypeUpdate');
Route::delete('newstype/{newstype}','NewsTypeController@newstypeDelete');
//producer
Route::get('producer','ProducerController@producer');
Route::get('producer/{id}','ProducerController@producerById');
Route::post('producer','ProducerController@producerSave');
Route::put('producer/{id}','ProducerController@producerUpdate');
Route::delete('producer/{producer}','ProducerController@producerDelete');
//product
Route::get('product','ProductController@product');
Route::get('product/{id}','ProductController@productById');
Route::post('product','ProductController@saveProduct');
Route::put('product/{id}','ProductController@productUpdate');
Route::delete('product/{product}','ProductController@productDelete');
//producttype
Route::get('producttype','ProductTypeController@producttype');
Route::get('producttype/{id}','ProductTypeController@producttypeById');
Route::post('producttype','ProductTypeController@producttypeSave');
Route::put('producttype/{id}','ProductTypeController@producttypeUpdate');
Route::delete('producttype/{producttype}','ProductTypeController@producttypeDelete');
//bill_import
Route::get('bill_import','BillImportController@bill_import');
Route::get('bill_import/{id}','BillImportController@bill_importById');
Route::post('bill_import','BillImportController@bill_importSave');
Route::put('bill_import/{id}','BillImportController@bill_importUpdate');
Route::delete('bill_import/{bill_import}','BillImportController@bill_importDelete');
//user
Route::get('users','UserController@users');
Route::get('users/{id}','UserController@usersById');
Route::put('users/{id}','UserController@usersUpdate');
Route::delete('users/{users}','UserController@usersDelete');
//oder
Route::get('order','OrderController@order');
Route::get('order/{id}','OrderController@orderById');
Route::put('order/{id}','OrderController@orderUpdate');
Route::delete('order/{order}','OrderController@orderDelete');



// Route::group(['middleware'=>'auth:api'],function(){
//     Route::apiResource('producer','producer');
// });
// Route::apiResource('producer','ProducerController@producer');
// Route::get('file/producer_list','FileController@producerList');
// Route::post('file/producer_list','FileController@producerSave');

