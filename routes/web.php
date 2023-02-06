<?php

use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\AuthControllers;
use App\Http\Controllers\BendaPusakaControllers;
use App\Http\Controllers\EventControllers;
use App\Http\Controllers\HomepageControllers;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomepageControllers::class, 'beranda']);
Route::get('/tentang-kami', fn () => view('tentang-kami'));
Route::get('/bantuan', fn () => view('bantuan'));
Route::get('/detail-informasi', fn () => view('detail-informasi'));

Route::get('/koleksi/{category?}', [HomepageControllers::class, 'koleksi'])->name('koleksi');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', fn () => view('login'))->name('login');
    Route::post('/login', [AuthControllers::class, 'login']);
});

Route::group(['middleware' => 'auth'], function () {

    // Benda pusaka
    Route::get('/dashboard/benda-pusaka/tambah', [BendaPusakaControllers::class, 'create'])->name('pusaka.create');
    Route::post('/dashboard/benda-pusaka/tambah', [BendaPusakaControllers::class, 'store'])->name('pusaka.store');
    Route::get('/dashboard/benda-pusaka/{bendaPusaka}/edit', [BendaPusakaControllers::class, 'edit'])->name('pusaka.edit');
    Route::put('/dashboard/benda-pusaka/{bendaPusaka}/edit', [BendaPusakaControllers::class, 'update'])->name('pusaka.update');
    Route::delete('/dashboard/benda-pusaka/{bendaPusaka}', [BendaPusakaControllers::class, 'delete'])->name('pusaka.delete');
    Route::get('/dashboard/view_pdf', [HomepageControllers::class, 'view_pdf'])->name('view.pdf');
    
    // Admin
    Route::get('/dashboard/admin/tambah', fn () => view('tambah-admin'))->name('admin.create');
    Route::post('/dashboard/admin/tambah', [AdminControllers::class, 'store'])->name('admin.store');
    Route::get('/dashboard/admin/{admin}/edit', [AdminControllers::class, 'edit'])->name('admin.edit');
    Route::put('/dashboard/admin/{admin}/edit', [AdminControllers::class, 'update'])->name('admin.update');
    Route::delete('/dashboard/admin/{admin}', [AdminControllers::class, 'delete'])->name('admin.delete');
    Route::get('/dashboard/admin_pdf', [AdminControllers::class, 'view_pdf'])->name('admin.pdf');
    
    // Event
    Route::get('/dashboard/event/tambah', fn () => view('tambah-event'))->name('event.create');
    Route::post('/dashboard/event/tambah', [EventControllers::class, 'store'])->name('event.store');
    Route::get('/dashboard/event/{event}/edit', [EventControllers::class, 'edit'])->name('event.edit');
    Route::put('/dashboard/event/{event}/edit', [EventControllers::class, 'update'])->name('event.update');
    Route::delete('/dashboard/event/{event}', [EventControllers::class, 'delete'])->name('event.delete');

    // Logout
    Route::get('/logout', [AuthControllers::class, 'logout'])->name('logout');
    
    Route::get('/dashboard/{category?}', [HomepageControllers::class, 'dashboard'])->name('dashboard');
});

Route::get('/benda-pusaka/{bendaPusaka}', [BendaPusakaControllers::class, 'show'])->name('pusaka.show');
Route::get('/event/{event}', [EventControllers::class, 'show'])->name('event.show');
