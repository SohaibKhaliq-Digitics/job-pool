<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\company\companyController;
use App\Http\Controllers\companyController;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\candidates\canditatesController;
use App\Http\Controllers\admin\jobsController;
use App\Http\Controllers\front\frontController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\Admin\Auth\LoginController;

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

Route::prefix('admin')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'login'])->name('admin.login.submit');
});





/////////////////////////////////////// Front End



Route::get('/Job-Pool', [frontController::class, 'index']);
Route::get('/Job-Pool/job', [frontController::class, 'jobView']);


Route::post('/apply-job', [frontController::class, 'applyJob']);








//////////////////////////// admin work



// Route::get('/admin-login', [adminController::class, 'showLoginForm'])->name('login');

Route::middleware(['guest:admin'])->group(function () {
    Route::get('/admin-login', [adminController::class, 'showLoginForm']);
    Route::post('/login', [adminController::class, 'login']);


    Route::get('/New-account', [adminController::class, 'newAccount'])->name('admin.newAccount');
    Route::post('/Register-admin', [adminController::class, 'registerAdmin'])->name('admin.register');


});

Route::get('/admin-logout', [adminController::class, 'logout']);



Route::middleware(['auth:admin'])->group(function () {


    ///// ALL Company Related Work start Here
    Route::get('/Dashboard', [adminController::class, 'dashboard']);
    Route::get('/Company', [companyController::class, 'index']);
    Route::get('/company/{company}', [companyController::class, 'index2']);
    Route::put('/company/update/{company}', [companyController::class, 'update']);
    Route::put('/company/update/{company}', [companyController::class, 'update']);

    Route::delete('/companies/{company}', [companyController::class, 'destroy'])->name('company.destroy');

    ///////////////////////////// Company End 



    ///// ALL Employees Related Work start Here



    Route::get('/Employees', [employeeController::class, 'index']);
    Route::get('/employee/{employee}', [employeeController::class, 'index2']);
    Route::put('/employee/update/{employee}', [employeeController::class, 'update']);
    Route::delete('/employees/{company}', [employeeController::class, 'destroy'])->name('em.destroy');



    ///////////////////////////// Employee End



    ///// ALL Jobs Related Work start Here



    Route::get('/All-job', [jobsController::class, 'allJobs'])->name('alljobs.index');
    Route::get('/Create-job', [jobsController::class, 'index']);
    Route::post('/Store-job', [jobsController::class, 'storeJobs'])->name('job.create');


    Route::get('/job/{job}', [jobsController::class, 'index2']);
    Route::put('/job/update/{employee}', [jobsController::class, 'update']);
    Route::delete('/job/{job}', [jobsController::class, 'destroy'])->name('job.destroy');


    ///////////////////////////// Jobs End


    //////////////// Candidate Work start
    Route::get('/Candidates', [canditatesController::class, 'allCandidate']);
    Route::get('/Approved-Candidates', [canditatesController::class, 'aprovedCandidate']);
    Route::get('/Rejected-Candidates', [canditatesController::class, 'rejectedCandidate']);

    Route::post('/candidate/{id}/approve', [canditatesController::class, 'approve'])->name('candidate.approve');
    Route::post('/candidate/{id}/reject', [canditatesController::class, 'reject'])->name('candidate.reject');
    //////////////// Candidate Work End

});









/////////////////////// Company work







Route::get('/view-company/{company}', [companyController::class, 'ViewCompany']);












//////////////////////// Employee Work




// Route::get('/Employees', [employeeController::class, 'index']);

// load model for update
// Route::get('/employee/{employee}', [employeeController::class, 'index2']);
// // for update Company
// Route::put('/employee/update/{employee}', [employeeController::class, 'update']);

// // delete employee
// Route::delete('/employees/{company}',  [employeeController::class, 'destroy'])->name('em.destroy');