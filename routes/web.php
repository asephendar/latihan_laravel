<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\SalesReportController;
use App\Http\Controllers\SalesTransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('dashboards', [AdminController::class, 'index'])->name('admin.index');

Route::get('medicines', [MedicineController::class, 'index'])->name('dashboards.admin.medicines.index');
Route::get('medicines/{id}', [MedicineController::class, 'show'])->name('medicines.show');
Route::get('medicines/create', [MedicineController::class, 'create'])->name('medicines.create');
Route::get('medicines/{id}/edit', [MedicineController::class, 'edit'])->name('medicines.edit');
Route::delete('medicines/{id}', [MedicineController::class, 'destroy'])->name('medicines.destroy');

Route::get('prescriptions', [PrescriptionController::class, 'index'])->name('prescriptions.index');

Route::get('sales_reports', [SalesReportController::class, 'index'])->name('sales_reports.index');

Route::get('users', [UserController::class, 'index'])->name('users.index');

Route::get('sales_transactions', [SalesTransactionController::class, 'index'])->name('sales_transactions.index');
