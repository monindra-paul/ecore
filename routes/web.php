<?php


use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\Software\OSController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\SupportController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::group(['prefix' => 'services'], function () {
//     Route::get('/website-development', [ServiceController::class, 'website'])->name('service.website');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/hardware-support', [ServiceController::class, 'hardware'])->name('services.hardware');
Route::get('/network-security', [ServiceController::class, 'network'])->name('sevice.network');
Route::get('/cctv-surveillance', [ServiceController::class, 'cctv'])->name('service.cctv');
Route::get('/website-development', [ServiceController::class, 'website'])->name('service.website');
Route::get('/graphic-designing', [ServiceController::class, 'graphics'])->name('service.graphics');
Route::get('/digital-marketing', [ServiceController::class, 'dm'])->name('service.dm');
Route::get('/software-development', [ServiceController::class, 'software'])->name('service.software');
Route::get('/app-development', [ServiceController::class, 'app'])->name('service.app');
Route::get('/cloud-services', [ServiceController::class, 'cloud'])->name('service.cloud');


Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('contact');
Route::post('/contact-us', [PagesController::class, 'postContact'])->name('post.contact');



Route::get('/remote-support', [SupportController::class, 'remoteSupport'])->name('support.remote');
Route::get('/softwares-drivers', [SupportController::class, 'softwareDrivers'])->name('support.drivers');



//admin routes
Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => 'admin.guest'], function () {

        Route::get('/login', [LoginController::class, 'index'])->name('admin.login.login');
        Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    Route::group(['middleware' => 'admin.auth'], function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [DashboardController::class, 'logout'])->name('admin.logout');


        Route::group(['prefix' => 'os'], function () {

            Route::get('/show', [OSController::class, 'show'])->name('support.os.list');
            Route::get('/create', [OSController::class, 'create'])->name('support.os.create');
            Route::post('/store', [OSController::class, 'store'])->name('support.os.store');
        });
    });
});
