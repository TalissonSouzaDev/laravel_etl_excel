<?php

use App\Imports\ETLRegistroImport;
use App\Models\ETLRegistros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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

Route::get('/upload', function () {
    return view('upload');
})->name("upload");

Route::get('/registros', function () {
    $etlregistros = ETLRegistros::paginate(10);
    return view('registros',compact("etlregistros"));
})->name("registros");

Route::post('/upload/file', function (Request $request) {
    //dd($request->file("upload"));
    Excel::import(new ETLRegistroImport,$request->file("upload"));

    return true;
})->name("uploadfile");
