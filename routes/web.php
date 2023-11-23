<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotaController;


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





Route::get('/index', function () {
    return view('index');
});

/*editar*/
Route::get('/modificar', function () {
    return view('modificar');
})->name('modificar');
Route::get('/index{mascotas}/modificar', [MascotaController::class, 'edit'])->name('mascotas.editar');
Route::put('/index{mascotas}', [MascotaController::class, 'update'])->name('mascotas.actualizar');
/*fin editar*/

//eliminar
Route::delete('/index{mascotas}', [MascotaController::class, 'destroy'])->name('mascotas.eliminar');
//fin eliminar

//insertar 
Route::post('/mascotas', [MascotaController::class, 'insertarMascota'])->name('MascotaController.insertarMascota');
Route::get('/formulario', function () {
    return view('formulario');
})->name('formulario');
//fin insertar 

//ver mascota
Route::get('/index', [MascotaController::class, 'index'])->name('index');
//fin ver mascota
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

