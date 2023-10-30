<?php

use App\Http\Livewire\Adddepartment;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Index;
use App\Http\Livewire\Index2;
use App\Http\Livewire\Index4;
use App\Http\Livewire\Index5;
use App\Http\Livewire\Addemploye;
use App\Http\Livewire\Adduser;
use App\Http\Livewire\Company;
use App\Http\Livewire\Datatable;
use App\Http\Livewire\Editdepartment;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\Login;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Register;
use App\Http\Livewire\Edituser;
use App\Http\Livewire\Editemploye;
use App\Http\Livewire\User;



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


Route::get('/', Index::class);
Route::get('index', Index::class);
Route::get('index2', Index2::class);
Route::get('editdepartment', Editdepartment::class);
Route::get('index4', Index4::class);
Route::get('timer', Index5::class);
Route::get('datatable', Datatable::class);
Route::get('profile', Profile::class);
Route::get('login', Login::class);
Route::get('forgot-password', ForgotPassword::class);
Route::get('editemploye',Editemploye::class);
Route::get('edituser',Edituser::class);
Route::get('editemploye',Editemploye::class);
Route::get('user',User::class);
Route::get('addemploye', Addemploye::class);
Route::get('adduser',Adduser::class);
Route::get('register', Register::class);
Route::get('company', Company::class);
Route::get('adddepartment' , Adddepartment::class);
// ROUTE USE



