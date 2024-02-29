<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UslugeController;
use App\Http\Controllers\ProizvodController;
use App\Http\Controllers\ProizvodjacController;
use App\Http\Controllers\PacijentController;
use App\Http\Controllers\UpitiController;
use App\Http\Controllers\WeatherController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');
/*
Route::middleware(['auth:sanctum', 'verified'])->get('/usluge', function(){
    return view('usluge.index');
})->name('usluge');
*/
Route::middleware(['auth:sanctum','verified'])->get('usluge',[UslugeController::class, 'index'])->name('usluge');
Route::middleware(['auth:sanctum','verified'])->get('add_usluga',[UslugeController::class, 'create'])->name('add_usluga');
Route::middleware(['auth:sanctum','verified'])->post('store_usluge',[UslugeController::class, 'store'])->name('store_usluge');
Route::middleware(['auth:sanctum','verified'])->post('delete_usluga',[UslugeController::class, 'delete'])->name('delete_usluga');
Route::middleware(['auth:sanctum','verified'])->post('edit_usluga',[UslugeController::class, 'edit'])->name('edit_usluga');
Route::middleware(['auth:sanctum','verified'])->post('update_usluga',[UslugeController::class, 'update'])->name('update_usluga');
Route::middleware(['auth:sanctum','verified'])->get('proizvod',[ProizvodController::class, 'index'])->name('proizvodi');
Route::middleware(['auth:sanctum','verified'])->get('add_proizvod',[ProizvodController::class, 'create'])->name('add_proizvod');
Route::middleware(['auth:sanctum','verified'])->post('store_proizvod',[ProizvodController::class, 'store'])->name('store_proizvod');
Route::middleware(['auth:sanctum','verified'])->post('delete_proizvod',[ProizvodController::class, 'delete'])->name('delete_proizvod');
Route::middleware(['auth:sanctum','verified'])->post('edit_proizvod',[ProizvodController::class, 'edit'])->name('edit_proizvod');
Route::middleware(['auth:sanctum','verified'])->post('update_proizvod',[ProizvodController::class, 'update'])->name('update_proizvod');
Route::middleware(['auth:sanctum','verified'])->get('proizvodjac',[ProizvodjacController::class, 'index'])->name('proizvodjac');
Route::middleware(['auth:sanctum','verified'])->get('add_proizvodjac',[ProizvodjacController::class, 'create'])->name('add_proizvodjac');
Route::middleware(['auth:sanctum','verified'])->post('store_proizvodjac',[ProizvodjacController::class, 'store'])->name('store_proizvodjac');
Route::middleware(['auth:sanctum','verified'])->post('delete_proizvodjac',[ProizvodjacController::class, 'delete'])->name('delete_proizvodjac');
Route::middleware(['auth:sanctum','verified'])->post('edit_proizvodjac',[ProizvodjacController::class, 'edit'])->name('edit_proizvodjac');
Route::middleware(['auth:sanctum','verified'])->post('update_proizvodjac',[ProizvodjacController::class, 'update'])->name('update_proizvodjac');
Route::middleware(['auth:sanctum','verified'])->get('pacijent',[PacijentController::class, 'index'])->name('pacijent');
Route::middleware(['auth:sanctum','verified'])->get('add_pacijent',[PacijentController::class, 'create'])->name('add_pacijent');
Route::middleware(['auth:sanctum','verified'])->post('store_pacijent',[PacijentController::class, 'store'])->name('store_pacijent');
Route::middleware(['auth:sanctum','verified'])->post('delete_pacijent',[PacijentController::class, 'delete'])->name('delete_pacijent');
Route::middleware(['auth:sanctum','verified'])->post('edit_pacijent',[PacijentController::class, 'edit'])->name('edit_pacijent');
Route::middleware(['auth:sanctum','verified'])->post('update_pacijent',[PacijentController::class, 'update'])->name('update_pacijent');

Route::middleware(['auth:sanctum','verified'])->get('upiti',[UpitiController::class, 'index'])->name('upiti');

Route::middleware(['auth:sanctum','verified'])->post('file_add',[UslugeController::class, 'file_add'])->name('file_add');

Route::middleware(['auth:sanctum','verified'])->post('process',[UslugeController::class, 'process'])->name('process');

Route::get('/',function() {
    $weatherController=new WeatherController();
    $WeatherData=$weatherController->getWeather();
    return view('dashboard',[
        'WeatherData'=>$WeatherData]);
})->name('dashboard');




