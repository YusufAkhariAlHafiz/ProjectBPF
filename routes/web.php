<?php

use App\Http\Controllers\AdminController;
use \App\Http\Controllers\AuthController;
use App\Http\Controllers\LpjController;
use App\Http\Controllers\ProposalController;
use App\Models\Proposal;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {return redirect('/auth');});

//Admin
Route::get('/Admin/home', function () {return view('admin/dashboard');});
Route::get('/Admin/user', [AdminController::class, 'index'])->name('user');
Route::get('/Admin/kemahasiswaan', [AdminController::class, 'dosen'])->name('dosen');
Route::get('Admin/addUser', function () { return view('admin/tambahUser');})->name('addUser');
Route::get('/Admin/editUser/{id}', [AdminController::class, 'edit']);
Route::get('Admin/pengajuan', function () {return view('admin/pengajuan');});

//Login
Route::get('/auth', [AuthController::class, 'login'])->name('login');
Route::post('/auth', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Route CRUD ADMIN
Route::get('/Admin/disable/{id}', [AdminController::class, 'disable'])->name('user.disable');
Route::get('/Admin/enable/{id}', [AdminController::class, 'enable'])->name('user.enable');
Route::post('/admin/store', [AdminController::class, 'store']);
Route::post('/Admin/updateUser/{id}', [AdminController::class, 'update'])->name('updateUser');

//User
Route::get('/user', [ProposalController::class,'countByStatus'])->name('user.dashboard');
Route::get('/user/kegiatan', [ProposalController::class,'index'])->name('kegiatan');
Route::get('/user/profile', function(){return view('/user/profile',['halaman'=>'Profile']);})->name('user.profile');
Route::get('/user/history', function(){return view('/user/historyPengajuan',['halaman'=>'History']);})->name('user.history');
Route::post('/user/kegiatan/post', [ProposalController::class, 'store'])->name('kegiatan.post');

//Proposal
Route::get('Proposal/terima/{id}/{user_app}', [ProposalController::class, 'terima'])->name('proposal.terima');
Route::get('Proposal/tolak/{id}', [ProposalController::class, 'tolak'])->name('proposal.tolak');

//LPJ
Route::get('/lpj', function () {return view('/user/lpj', ['halaman'=>'LPJ']);});
Route::post('/user/kegiatan', [LpjController::class, 'store'])->name('lpj.post');
