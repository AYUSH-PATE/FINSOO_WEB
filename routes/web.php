<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdvisorController;


Route::get('/',[AdvisorController::class,'index'])->name('home');


Route::get('/add-lead',[AdvisorController::class,'create'])->name('add-lead');


Route::post('/add-lead',[AdvisorController::class,'store'])->name('lead-process');


Route::get('/view-lead',[AdvisorController::class,'viewlead'])->name('view-lead');


Route::get('/edit-lead/{id}',[AdvisorController::class,'editlead'])->name('edit-lead');


Route::post('/edit-lead/{id}',[AdvisorController::class,'updatelead'])->name('update-lead');




Route::get('add-renewal',function(){
    return view('add-renewal');
})->name('add-renewal');


Route::get('view-renewal',function(){
    return view('view-renewal');
})->name('view-renewal');


Route::get('edit-renewal',function(){
    return view('edit-renewal');
})->name('edit-renewal');
