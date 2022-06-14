<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColdController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuhuController;
use App\Http\Controllers\FreezController;
use App\Http\Controllers\MetalController;
use App\Http\Controllers\ColdTemController;
use App\Http\Controllers\TempSuhuController;
use App\Http\Controllers\TestMetalController;

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

//metal detector -> rampung
Route::get("/metal", [MetalController::class, 'metal']);
Route::get('/export-monitoring-metal-detector', [MetalController::class, 'exportmetal']);

//cold storage -> ora melu juga kayane
Route::get("/cold", [ColdController::class, 'cold']);
Route::get('/export-cold-storgae', [ColdController::class, 'exportcold']);

//pencatatan suhu udang -> rampung 1
Route::get("/pencatatan-suhu-udang", [SuhuController::class, 'suhu']);
Route::get('/export-suhu-udang', [SuhuController::class, 'exportsuhu']);

//cold storage temperatur -> rampung krng sng ngisor time reading 1
Route::get("/cold-sotrage-temperatur-log", [ColdTemController::class, 'temp']);
Route::get('/export-cold-storage-temperatur-log', [ColdTemController::class, 'exporttemp']);

//freezing monitoring -> rampung 1
Route::get("/freezing-monitoring", [FreezController::class, 'freez']);
Route::get('/export-freezing-monitoring', [FreezController::class, 'exportfreezing']);

//temperatur suhu udang -> rampung 1
Route::get("/temperatur-suhu-udang", [TempSuhuController::class, 'tempsuhu']);
Route::get('/export-temperatur-suhu-udang', [TempSuhuController::class, 'exporttempsuhu']);

//test metal detector-> rampung 1
Route::get("/test-metal-detector", [TestMetalController::class, 'testmetal']);
Route::get('/export-test-metal', [TestMetalController::class, 'exporttestmetal']);

