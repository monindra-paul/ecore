<?php


use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\Portfolio\GraphicsController;
use App\Http\Controllers\Admin\Portfolio\WebsiteController;
use App\Http\Controllers\Admin\Software\MSOfficeController;
use App\Http\Controllers\Admin\Software\OSController;
use App\Http\Controllers\Admin\Software\PrintersControllers;
use App\Http\Controllers\Admin\Software\SoftwaresDriversController;
use App\Http\Controllers\Admin\TempImagesController;
use App\Http\Controllers\Admin\ViewStatusController as AdminViewStatusController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\PortfolioController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\SupportController;
use App\Http\Controllers\Frontend\ViewStatusController;
use App\Models\WebsitePortfolio;

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
Route::get('/hardware-support-in-kolkata', [ServiceController::class, 'hardware'])->name('services.hardware');
Route::get('/network-security-in-kolkata', [ServiceController::class, 'network'])->name('sevice.network');
Route::get('/cctv-surveillance-in-kolkata', [ServiceController::class, 'cctv'])->name('service.cctv');
Route::get('/website-development-in-kolkata', [ServiceController::class, 'website'])->name('service.website');
Route::get('/graphic-designing-in-kolkata', [ServiceController::class, 'graphics'])->name('service.graphics');
Route::get('/digital-marketing-in-kolkata', [ServiceController::class, 'dm'])->name('service.dm');
Route::get('/software-development-in-kolkata', [ServiceController::class, 'software'])->name('service.software');
Route::get('/app-development-in-kolkata', [ServiceController::class, 'app'])->name('service.app');
Route::get('/cloud-services-in-kolkata', [ServiceController::class, 'cloud'])->name('service.cloud');


Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('contact');
Route::post('/contact-us', [PagesController::class, 'postContact'])->name('post.contact');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
// Route::get('/terms-conditions', [PagesController::class, 'terms'])->name('terms-conditions');
// Route::get('/privacy-policy', [PagesController::class, 'privacy'])->name('privacy-policy');

// Route::get('/terms-and-condition', [PagesController::class, 'terms'])->name('terms-condition');

Route::get('/privacy-policy', [PagesController::class, 'privacy'])->name('privacy');
Route::get('/terms-conditions', [PagesController::class, 'terms'])->name('terms');

Route::get('/remote-support', [SupportController::class, 'remoteSupport'])->name('support.remote');
Route::get('/softwares-drivers', [SupportController::class, 'softwareDrivers'])->name('support.drivers');
Route::get('/view-status', [ViewStatusController::class, 'index'])->name('support.status');
Route::post('/view-status', [ViewStatusController::class, 'status'])->name('support.status.fetched');
Route::get('/download-pdf/{bill_no}', [ViewStatusController::class, 'downloadPdf'])->name('download.pdf');
// Route::get('/view-status', [ViewStatusController::class, 'qrcode'])->name('support.qrcode');



Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');



//admin routes
Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => 'admin.guest'], function () {

        Route::get('/login', [LoginController::class, 'index'])->name('admin.login.login');
        Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    Route::group(['middleware' => 'admin.auth'], function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [DashboardController::class, 'logout'])->name('admin.logout');




        Route::group(['prefix' => 'portfolio'], function () {

            Route::group(['prefix' => 'graphics'], function () {

                Route::get('/create', [GraphicsController::class, 'create'])->name('portfolio.graphics.create');
            });

            Route::group(['prefix' => 'website'], function () {
                Route::get('/show', [WebsiteController::class, 'list'])->name('portfolio.website.list');
                Route::get('/create', [WebsiteController::class, 'create'])->name('portfolio.website.create');
                // Route::post('/store', [WebsitePortfolio::class, 'store'])->name('portfolio.website.store');
                Route::get('/store', [WebsiteController::class, 'store'])->name('portfolio.website.store');

                Route::post('/upload-temp-image', [TempImagesController::class, 'create'])->name('temp-images.create');
            });
        });


        Route::group(['prefix' => 'os'], function () {

            Route::get('/show', [OSController::class, 'show'])->name('support.os.list');
            Route::get('/create', [OSController::class, 'create'])->name('support.os.create');
            Route::post('/store', [OSController::class, 'store'])->name('support.os.store');
            Route::get('/edit/{os}', [OSController::class, 'edit'])->name('support.os.edit');
            Route::get('/show/{os}', [OSController::class, 'update'])->name('support.os.update');
            Route::delete('/show/{os}', [OSController::class, 'destroy'])->name('support.os.delete');
        });




        Route::group(['prefix' => 'ms-office'], function () {

            Route::get('/show', [MSOfficeController::class, 'show'])->name('support.office.list');
            Route::get('/create', [MSOfficeController::class, 'create'])->name('support.office.create');
            Route::post('/store', [MSOfficeController::class, 'store'])->name('support.office.store');
            Route::get('/edit/{office}', [MSOfficeController::class, 'edit'])->name('support.office.edit');
            Route::get('/show/{office}', [MSOfficeController::class, 'update'])->name('support.office.update');
            Route::delete('/show/{office}', [MSOfficeController::class, 'destroy'])->name('support.office.delete');
        });



        Route::group(['prefix' => 'printers'], function () {

            Route::get('/show', [PrintersControllers::class, 'show'])->name('support.printers.list');
            Route::get('/create', [PrintersControllers::class, 'create'])->name('support.printers.create');
            Route::post('/store', [PrintersControllers::class, 'store'])->name('support.printers.store');
            Route::get('/edit/{printers}', [PrintersControllers::class, 'edit'])->name('support.printers.edit');
            Route::get('/show/{printers}', [PrintersControllers::class, 'update'])->name('support.printers.update');
            Route::delete('/show/{printers}', [PrintersControllers::class, 'destroy'])->name('support.printers.delete');
        });




        Route::group(['prefix' => 'softwares-drivers'], function () {

            Route::get('/show', [SoftwaresDriversController::class, 'show'])->name('support.softwaresdrivers.list');
            Route::get('/create', [SoftwaresDriversController::class, 'create'])->name('support.softwaresdrivers.create');
            Route::post('/create', [SoftwaresDriversController::class, 'store'])->name('support.softwaresdrivers.store');
            Route::get('/edit/{softwaresdrivers}', [SoftwaresDriversController::class, 'edit'])->name('support.softwaresdrivers.edit');
            Route::get('/show/{softwaresdrivers}', [SoftwaresDriversController::class, 'update'])->name('support.softwaresdrivers.update');
            Route::delete('/show/{softwaresdrivers}', [SoftwaresDriversController::class, 'destroy'])->name('support.softwaresdrivers.delete');
        });




        Route::prefix('bill')->group(function () {

            Route::get('/show', [AdminViewStatusController::class, 'show'])->name('bill.list');
            Route::get('/create', [AdminViewStatusController::class, 'create'])->name('bill.create');
            Route::post('/store', [AdminViewStatusController::class, 'store'])->name('bill.store');
            Route::get('/edit/{bills}', [AdminViewStatusController::class, 'edit'])->name('bill.edit');
            Route::get('/show/{bills}', [AdminViewStatusController::class, 'update'])->name('bill.update');
            Route::delete('/show/{bills}', [AdminViewStatusController::class, 'destroy'])->name('bill.delete');
        });
    });
});
