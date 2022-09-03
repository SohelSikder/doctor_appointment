<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor_profileController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Models\Doctor;
use App\Models\Specialist;
use App\Models\Post;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// Route::get('/', function () {
//      $doctor= Doctor::limit(4)->get();
//     return view('home', compact('doctor'));
// });

Route::get('/', [HomeController::class, 'home'])->name('home');
// Route::get('/{id}', [HomeController::class, 'doctorInHome'])->name('home');
Route::get('/doctors', [HomeController::class, 'index'])->name('doctors');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/doctor_profile', [Doctor_profileController::class, 'index'])->name('Doctor_profile');
Route::get('/doctor_profile/{id}', [Doctor_profileController::class, 'doctorProfile'])->name('Doctor_profile');
Route::get('/specialist/{id}',[HomeController::class,'specialistDoctor'])->name('AllSpecialist');
Route::post('/specialist/store',[HomeController::class,'storeSpecialist'])->name('store.specialist');

Route::get('/specialist',[HomeController::class,'specialist'])->name('AddSpecialist');
Route::get('/all_post',[HomeController::class,'all_post'])->name('All_Post');
Route::get('/Details/{id}',[HomeController::class,'post_details'])->name('Post_Details');
Route::get('/booking_form/{id}',[HomeController::class,'booking'])->name('Booking_form');
Route::post('/bookin_info',[Doctor_profileController::class,'booking'])->name('Booking_Form');
Route::post('/doctor_deshboard',[Doctor_profileController::class,'doctor_deshboard'])->name('Doctor_deshboard');
Route::get('/add_doctor',[Doctor_profileController::class,'add_doctor'])->name('AddDoctor');
Route::post('/added_doctor',[Doctor_profileController::class,'added_doctor'])->name('AddedDoctor');
Route::get('/all_doctor',[Doctor_profileController::class,'all_doctor'])->name('AllDoctor');
Route::get('/bookingList',[Doctor_profileController::class,'bookingList'])->name('BookingList');
Route::get('/patientsList',[Doctor_profileController::class,'patientsList'])->name('patientsList');
// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout'])->name('pay');

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END







// category wise doctor show

// Route::get('/category_doctor',[])

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard/dashboard view/index');
    })->name('dashboard');
});
