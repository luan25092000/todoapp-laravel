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
})->name('welcome');
//Hiển trị todos
Route::get('todos',['uses'=>'TodosController@index','as'=>'todos.view']);
//Xem chi tiết todos
Route::get('todos/{todo}',['uses'=>'TodosController@show','as'=>'todos.show']);
//Tạo todos
Route::get('new-todos',['uses'=>'TodosController@create','as'=>'todos.create']);
//Lưu trữ dữ liệu khi lấy request dữ liệu từ client
Route::post('store-todos',['uses'=>'TodosController@store','as'=>'todos.store']);
//{todo} =={{$todo->id}}
Route::group(['prefix'=>'todos/{todo}'],function(){
    //Cập nhật todos
    Route::get('edit',['uses'=>'TodosController@edit','as'=>'todos.edit']);
    Route::post('update-todos',['uses'=>'TodosController@update','todos.update']);
    //Xóa todos
    Route::get('delete',['uses'=>'TodosController@destroy','as'=>'todos.delete']);
    //Hoàn thành todo
    Route::get('complete',['uses'=>'TodosController@complete','as'=>'todos.complete']);
});
