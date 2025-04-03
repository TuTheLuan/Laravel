<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;
use App\Http\Controllers\LayoutController;

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
//---------------CRUD--------------------------
// Route::get('dashboard', [CrudUserController::class, 'dashboard']);

// Route::get('login', [CrudUserController::class, 'login'])->name('login');
// Route::post('login', [CrudUserController::class, 'authUser'])->name('user.authUser');

// Route::get('create', [CrudUserController::class, 'createUser'])->name('user.createUser');
// Route::post('create', [CrudUserController::class, 'postUser'])->name('user.postUser');

// Route::get('read', [CrudUserController::class, 'readUser'])->name('user.readUser');

// Route::get('delete', [CrudUserController::class, 'deleteUser'])->name('user.deleteUser');

// Route::get('update', [CrudUserController::class, 'updateUser'])->name('user.updateUser');
// Route::post('update', [CrudUserController::class, 'postUpdateUser'])->name('user.postUpdateUser');

// Route::get('list', [CrudUserController::class, 'listUser'])->name('user.list');

// Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');

// Route::get('/', function () {
//     return view('crud_user/login');
// });
//----------------------------LAYOUT------------------------------
Route::get('/register', [LayoutController::class, 'register'])->name('layout.register');
Route::post('/register', [LayoutController::class, 'postUser'])->name('layout.postRegister');

Route::get('/login', [LayoutController::class, 'login'])->name('layout.login');
Route::post('/login', [LayoutController::class, 'authUser'])->name('layout.authUser');

Route::get('/list', [LayoutController::class, 'listUsers'])->name('layout.list');



Route::get('/update/{id}', [LayoutController::class, 'update'])->name('user.update');
Route::post('/update/{id}', [LayoutController::class, 'postUpdate'])->name('user.postUpdate');



Route::get('/view', [LayoutController::class, 'view'])->name('layout.view');


Route::get('/delete/{id}', [LayoutController::class, 'deleteUser'])->name('user.delete');
Route::get('/signout', [LayoutController::class, 'signout'])->name('layout.signout');
