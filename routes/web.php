<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EmployeeController;

route::get('/', [AuthController::class, 'login'])->name('login');

route::post('/', [AuthController::class, 'handleLogin'])->name('handleLogin');

route::middleware('auth')->group(function () {
    route::get('dashboard', [AppController::class, 'index'])->name('dashboard');
});
route::prefix('employees')->group(function () {
    route::get('/', [EmployeeController::class, 'index'])->name('employee.index');

    route::get('/create', [EmployeeController::class, 'create'])->name('employee.create');

    route::get('/edit{employee}', [EmployeeController::class, 'edit'])->name('employee.edit');

    route::put('/update{employee}', [EmployeeController::class, 'update'])->name('employee.update');

    route::post('/create', [EmployeeController::class, 'store'])->name('employee.store');

    route::get('/{employee}', [EmployeeController::class, 'delete'])->name('employee.delete');
});

route::prefix('departements')->group(function () {
    route::get('/', [DepartementController::class, 'index'])->name('departement.index');

    route::get('/create', [DepartementController::class, 'create'])->name('departement.create');

    route::post('/create', [DepartementController::class, 'store'])->name('departement.store');

    route::get('/edit{departement}', [DepartementController::class, 'edit'])->name('departement.edit');

    route::put('/update{departement}', [DepartementController::class, 'update'])->name('departement.update');

    route::get('/{departement}', [DepartementController::class, 'delete'])->name('departement.delete');
});
