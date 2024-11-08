<?php

use App\Http\Controllers\Employees;
use Illuminate\Support\Facades\Route;



Route::get('/',[Employees::class,'index'])->name('home');
Route::get('/employee/create',[Employees::class,'create'])->name('employee.create');
Route::post('/add/employee',[Employees::class,'store'])->name('employee.store');
Route::get('/employee/{id}',[Employees::class,'show'])->name('employee.show');
Route::get('employee/{id}/edit',[Employees::class,'edit'])->name('employee.edit');
Route::put('/employee/{id}/update',[Employees::class,'update'])->name('employee.update');
Route::delete('/employee/{employee}/destroy',[Employees::class,'destroy'])->name('employee.destroy');