<?php
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;
Route::view('add','addmember');
Route::post('addnew',[MemberController::class,'addData']);