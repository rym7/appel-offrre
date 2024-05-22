<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicationController;
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
    return view('welcome');
});

Route::get('/user/home', [HomeController::class, 'userHome'])->name('user.home');

Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
Route::get('/super_admin/home', [HomeController::class, 'superAdminHome'])->name('super_admin.home');
  
Route::post('admin/home', [PublicationController::class, 'store'])->name('publications.store');
Route::get('/admin/publications', [PublicationController::class, 'index'])->name('admin.publications');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if (Auth::user()->role_id == 2) {
            return redirect()->route('admin.home');
        } elseif (Auth::user()->role_id == 1) {
            return redirect()->route('super_admin.home');
        } else {
            return redirect()->route('user.home');
        }
    })->name('dashboard');
});                               