<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users_controller;
use App\Http\Controllers\User_administrador_controller;
use App\Http\Controllers\Permisos_plan_controller;
use App\Http\Controllers\Permisos_subusuario_controller;
use App\Http\Controllers\Plan_servicio_controller;
use App\Http\Controllers\Sucursal_controller;
use App\Http\Controllers\Almacen_controller;

Route::get('/version', function(){
    return "Version de api 1.0";
});

//USERS____________________________________________________________________
Route::get('/list-users', [Users_controller::class, 'index']);
Route::post('/create-user', [Users_controller::class, 'store']);
Route::put('/update-user/{id}', [Users_controller::class, 'update']);
Route::delete('/delete-user/{id}', [Users_controller::class, 'destroy']);
Route::get('/get-user/{id}', [Users_controller::class, 'show']);

//LOGIN___________________________________________________________
Route::post('/login', [User_administrador_controller::class, 'login']);

//PERMISOS_PLAN______________________________________________________________
Route::get('/show-permisos-plan/{id}', [Permisos_plan_controller::class, 'show']);
Route::put('/update-permisos-plan/{id}', [Permisos_plan_controller::class, 'update']);

//PERMISOS SUBUSUARIO____________________________________________---____________
Route::get('/get-permisos-subusuario/{id}', [Permisos_subusuario_controller::class, 'get']);
Route::put('/update-permisos-subusuario/{id}', [Permisos_subusuario_controller::class, 'update']);


//PLAN SERVICIO ___________________________________________________________________
Route::get('/get-plan-servicio/{id}', [Plan_servicio_controller::class, 'get']);
Route::put('/update-plan-servicio/{id}', [Plan_servicio_controller::class, 'update']);

//SUCURSAL__________________________________
Route::get('/get-sucursal/{id}', [Sucursal_controller::class, 'show']);
Route::put('/update-sucursal/{id}', [Sucursal_controller::class, 'update']);
Route::get('/list-sucursal/{id_usuario}', [Sucursal_controller::class, 'index']);
Route::post('/create-sucursal', [Sucursal_controller::class, 'store']);
Route::delete('/delete-sucursal/{id}', [Sucursal_controller::class, 'destroy']);

//ALMACEN___________________________________________________________________________________________
Route::get('/get-almacenes/{id_usuario}', [Almacen_controller::class, 'index']);
Route::post('/create-almacen', [Almacen_controller::class, 'store']);
Route::put('/update-almacen/{id}', [Almacen_controller::class, 'update']);
