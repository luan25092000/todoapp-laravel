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

Route::get('/', function () {
    return view('welcome');
});
//Hiển trị todos
Route::get('todos','TodosController@index');
//Xem chi tiết todos
Route::get('todos/{todo}','TodosController@show');
//Tạo todos
Route::get('new-todos','TodosController@create');
//Lưu trữ dữ liệu khi lấy request dữ liệu từ client
Route::post('store-todos','TodosController@store');
//{todo} =={{$todo->id}}
Route::group(['prefix'=>'todos/{todo}'],function(){
    //Cập nhật todos
    Route::get('edit','TodosController@edit');
    Route::post('update-todos','TodosController@update');
    //Xóa todos
    Route::get('delete','TodosController@destroy');
    //Hoàn thành todo
    Route::get('complete','TodosController@complete');
});
