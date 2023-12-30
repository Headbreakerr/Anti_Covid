<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\patientcontroller;
use App\Http\Controllers\hospitalcontroller;
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
    return view('main-website.index');
})->name('home');


// Route::get('/hospitals',[patientcontroller::class,'showhospitaldata']);
Route::get('/',[patientcontroller::class,'showhospitaldata']);
Route::get('/',[patientcontroller::class,'showhospitalvaccinedata'])->name('home');
route::get('/about',[patientcontroller::class,'showhospitalvaccine'])->name('about');
route::get('/hospital',[patientcontroller::class,'showhospital'])->name('hospital');
route::get('/departments',[patientcontroller::class,'departpage'])->name('depart');
route::get('/appointments',[patientcontroller::class,'showhospitalvaccineappo'])->name('appoint');
route::get('/contact',[patientcontroller::class,'contactpage'])->name('contact');
route::get('/reports',[patientcontroller::class,'yourreports'])->name('reports');

Route::get('/home',[patientcontroller::class,'showhospitalvaccinedata'])->name('patient');
route::get('/about',[patientcontroller::class,'showhospitalvaccine'])->name('about');
route::get('/hospital',[patientcontroller::class,'showhospital'])->name('hospital');
route::get('/departments',[patientcontroller::class,'departpage'])->name('depart');
route::get('/appointments',[patientcontroller::class,'showhospitalvaccineappo'])->name('appoint');
route::get('/contact',[patientcontroller::class,'contactpage'])->name('contact');
route::post('/home',[patientcontroller::class,'appoint'])->name('appointment');
route::post('/appointments',[patientcontroller::class,'appoint'])->name('appointment');
route::get('/myappointments',[patientcontroller::class,'myappoint'])->name('myappoint');
 route::post('/registerhospital',[patientcontroller::class,'addhospital'])->name('registerh');
 route::get('/registerhospital',[patientcontroller::class,'registerhospital'])->name('registerhospital');





// Route::get('/hospitals',[hospitalcontroller::class,'showvaccine']);
// Route::get('/',[hospitalcontroller::class,'vaccinedata']);
// route::get('/',[hospitalcontroller::class,'vaccinedata']);

// Route::post('/', [patientcontroller::class,'vaccine'])->name('vaccine');
    // Route::get('/', [patientcontroller::class,'showvaccine'])->name('vaccine');
// Route::get('/', [patientcontroller::class,'hospital'])->name('bookappoint');
// Route::get('/hospital', [patientcontroller::class,'showhospitalpage'])->name('hospitalpage');
// Route::get('/', [patientcontroller::class,'showhospitaldata'])->name('');
// Route::get('/', [patientcontroller::class,'vaccinedata'])->name('bookappoint');
// Route::get('/appointment', [patientcontroller::class,'bookappoint'])->name('bookappoint');
// Route::get('/appointment', [patientcontroller::class,'hospital'])->name('bookappoint');
// Route::post('/appointment',[patientcontroller::class,'appoint'])->name('appointment');

// Route::get('/home', [homecontroller::class,'showhospitala']);
// Route::post('/appoint', [homecontroller::class,'appoint'])->name('appoint');
// Route::get('/myappoint', [homecontroller::class,'myappoint'])->name('myappoint');
// Route::get('/delete/{id}', [homecontroller::class,'delete'])->name('delete');
// Route::get('/reject/{id}', [homecontroller::class,'reject'])->name('reject');
// Route::get('/approved/{id}', [homecontroller::class,'approved'])->name('approved');


// Route::get('/list-of-patient-details', [homecontroller::class,'myappointa'])->name('list-op-patient');
// Route::get('/list-of-patient-details', [homecontroller::class,'showpatient'])->name('list-op-patient');

// Route::get('/bookhospitalappoint',[hospitalcontroller::class,'hosappoint'])->name('hosappoint');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth' , 'role:admin')->group(function () {
    Route::get('/admindashboard', [admincontroller::class,'admindashboard'])->name('admin-dashboard');
    Route::get('/list-of-patient-detail', [admincontroller::class,'listofpatient'])->name('list-of-patient');
    Route::get('/list-of-hospital-detail', [admincontroller::class,'listofhospital'])->name('list-of-hospital');
    Route::get('/all-vaccine', [admincontroller::class,'allvaccine'])->name('allvaccine');
    Route::get('/all-reports', [admincontroller::class,'allreports'])->name('allreports');
    
});
Route::middleware('auth', 'role:hospital')->group(function () {
    Route::get('/hospitaldashboard', [hospitalcontroller::class,'hospitaldashboard'])->name('hospital-dashboard');
    Route::get('/list-of-patient-details', [hospitalcontroller::class,'showhospital'])->name('hospital-dashboard');
    Route::get('/list-of-patient-details', [hospitalcontroller::class,'showappoint'])->name('list-op-patient');
    Route::get('/request-of-covid-test', [hospitalcontroller::class,'req_covid'])->name('req-covid');
    Route::get('/request-of-covid-test', [hospitalcontroller::class,'showappointa'])->name('req-covid');
    Route::get('/delete/{id}', [hospitalcontroller::class,'delete'])->name('delete');
    Route::get('/add-vaccine', [hospitalcontroller::class,'addvaccine'])->name('vaccine');
    Route::post('/add-vaccine', [hospitalcontroller::class,'vaccine'])->name('vaccine');
    Route::get('/add-reports', [hospitalcontroller::class,'reports'])->name('addreports');
    Route::post('/add-reports', [hospitalcontroller::class,'addreports'])->name('addreports');


});
Route::middleware('auth','role:patient')->group(function () {
    Route::get('/home',[patientcontroller::class,'showhospitaldata'])->name('patient');
    // Route::get('/home',[patientcontroller::class,'showhospitalvaccinedata'])->name('patient');
    // route::get('/about',[patientcontroller::class,'showhospitalvaccine'])->name('about');
    // route::get('/hospital',[patientcontroller::class,'showhospital'])->name('hospital');
    // route::get('/departments',[patientcontroller::class,'departpage'])->name('depart');
    // route::get('/appointments',[patientcontroller::class,'showhospitalvaccineappo'])->name('appoint');
    // route::get('/contact',[patientcontroller::class,'contactpage'])->name('conta ct');
    route::post('/home',[patientcontroller::class,'appoint'])->name('appointment');
    route::post('/appointments',[patientcontroller::class,'appoint'])->name('appointment');
    route::get('/myappointments',[patientcontroller::class,'myappoint'])->name('myappoint');
});

require __DIR__.'/auth.php';
