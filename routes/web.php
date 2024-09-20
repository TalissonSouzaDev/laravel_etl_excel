<?php

use App\Http\Controllers\ETLController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/dashboard', [ETLController::class,"dashboard"])->name("dashboard");
Route::get('/upload', [ETLController::class,"UploadPage"])->name("upload");
Route::get('/registros', [ETLController::class,"Registros"])->name("registros");
Route::post('/upload/file', [ETLController::class,'UploadFile'])->name("uploadfile");
Route::match(['POST',"GET"],"search",[ETLController::class,"search"])->name("search");

Route::fallback(function() {
    return redirect()->route("upload");
});
