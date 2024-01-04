<?php

use App\Http\Controllers\AdminController;
use \App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return redirect('/Admin/home');
}) -> name('home');

Route::get('/Admin/home', function () {
    return view('admin/dashboard');
});

// Route::get('Admin/user', function () {
//     return view('admin/user');
// });
Route::get('/Admin/user', [AdminController::class, 'index']) -> name('user');

Route::get('/Admin/kemahasiswaan', [AdminController::class, 'dosen']) -> name('dosen');

// Route::get('Admin/kemahasiswaan', function () {
//     return view('admin/kemahasiswaan');
// }) -> name('kemahasiswaan');

Route::get('Admin/addUser', function () {
    return view('admin/tambahUser');
})-> name('addUser');

// Route::get('Admin/editUser', function () {
//     return view('admin/editUser');
// })-> name('editUser');

Route::get('/Admin/editUser/{id}', [AdminController::class, 'edit']);

Route::get('Admin/pengajuan', function () {
    return view('admin/pengajuan');
});

Route::get('/auth', [AuthController::class, 'login']) -> name('login');
Route::post('/auth', [AuthController::class, 'login']) -> name('login.post');

Route::get('/logout', [AuthController::class, 'logout']) -> name('logout');



//route CRUD
Route::get('/admin', [AdminController::class, 'index']);


Route::get('/Admin/disable/{id}', [AdminController::class, 'disable'])->name('user.disable');
Route::get('/Admin/enable/{id}', [AdminController::class, 'enable'])->name('user.enable');

Route::get('/admin/tambahUser', [AdminController::class, 'tambah']);
Route::post('/admin/store', [AdminController::class, 'store']);

Route::post('/Admin/updateUser/{id}', [AdminController::class, 'update']) -> name('updateUser');
Route::get('/admin/hapusUser/{id}', [AdminController::class, 'destroy']);
