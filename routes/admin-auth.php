<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\SuppliersController;
use App\Http\Controllers\Admin\Auth\Resources_Controller;
use App\Http\Controllers\Admin\Auth\Venues_Controller;
use Barryvdh\DomPDF\Facade\Pdf;


Route:: prefix('admin')->middleware('guest:admin')->group(function () {

    Route::get('register', [RegisteredUserController::class, 'create'])->name('admin.register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])->name('admin.login');
    Route::post('login', [LoginController::class, 'store']);

});

Route:: prefix ('admin')->middleware('auth:admin')->group(function () {


Route::get('/dashboard', function () {
    return view('admin.dashboard')
    ;})->name('admin.dashboard');

 Route::get('/addresource', function () {
     return view('admin.addresource')
    ;})->name('admin.addresource');
    route::get('del/{id}',[Resources_Controller::class,'del']);

    Route::get('/bookresource', function () {
        return view('admin.bookresource')
       ;})->name('admin.bookresource');
       Route::get('bookresource',[Resources_Controller::class,'bookresource']);
       Route::get('app/{id}',[Resources_Controller::class,'app']);

       Route::get('/repairs', function () {
        return view('admin.repairs')
       ;})->name('admin.repairs');
       Route::get('repairs',[Resources_Controller::class,'repairs']);
       route::get('cur/{id}',[Resources_Controller::class,'cur']);

       Route::get('/suppliers', function () {
        return view('admin.suppliers')
       ;})->name('admin.suppliers');
       Route::get('print_pdf',[SuppliersController::class,'print_pdf']);

 Route::get('/addvenue', function () {
         return view('admin.addvenue')
        ;})->name('admin.addvenue');


        Route::get('/bookvenue', function () {
            return view('admin.bookvenue')
           ;})->name('admin.bookvenue');
           Route::get('bookvenue',[Venues_Controller::class,'bookvenue']);
           route::get('delete/{id}',[Venues_Controller::class,'delete']);
           Route::get('ask/{id}',[Venues_Controller::class,'ask']);



    Route::post('logout', [LoginController::class, 'destroy'])->name('admin.logout');

    Route::view('add','add-supplier');
    Route::post('add',[SuppliersController::class,'add']);
Route::get('supps',function(){
    return view('admin.supps')
    ;})->name('admin.supps');

    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('list_s',[SuppliersController::class,'list_s']);

    Route::view('sum','sum-resources');
    Route::post('sum',[Resources_Controller::class,'sum']);

    Route::view('num','num-venue');
    Route::post('num',[Venues_Controller::class,'num']);
});

