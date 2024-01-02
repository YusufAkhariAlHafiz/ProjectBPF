<?php

use App\Http\Controllers\AdminController;
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
});

Route::get('/Admin/home', function () {
    return view('admin/dashboard');
});

// Route::get('Admin/user', function () {
//     return view('admin/user');
// });

Route::get('Admin/kemahasiswaan', function () {
    return view('admin/kemahasiswaan');
});

Route::get('Admin/addUser', function () {
    return view('admin/tambahUser');
});

Route::get('Admin/pengajuan', function () {
    return view('admin/pengajuan');
});

Route::get('/auth', function () {
    return view('auth/login');
});

//route CRUD
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/Admin/user', [AdminController::class, 'index']);
Route::get('/admin/tambahUser', [AdminController::class, 'tambah']);
Route::post('/admin/store', [AdminController::class, 'store']);
Route::get('/admin/editUser/{id}', [AdminController::class, 'edit']);
Route::post('/admin/updateUser', [AdminController::class, 'update']);
Route::get('/admin/hapusUser/{id}', [AdminController::class, 'destroy']);
