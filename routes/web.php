<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MaintenanceRequestController;


Route::get('/properties', [PropertyController::class, 'index']);
Route::get('/units', [UnitController::class, 'index']);
Route::get('/tenants', [TenantController::class, 'index']);
Route::get('/payments', [PaymentController::class, 'index']);
Route::get('/maintenance_requests', [MaintenanceRequestController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact.contact');
});

Route::get('/unit', function () {
    return view('unit/unit');
});


Route::get('/payment', function () {
    return view('payment.payment');
});



  