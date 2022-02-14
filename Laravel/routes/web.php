<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\EmpleadoController;
=======
>>>>>>> b31231bb0b93c1b3e1da5433e3e8a1df20c3bddf

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
<<<<<<< HEAD

Route::get('/empleado', function () {
    return view('empleado.index');
});

Route::get('empleado/create',[EmpleadoController::class,'create']);
=======
>>>>>>> b31231bb0b93c1b3e1da5433e3e8a1df20c3bddf
