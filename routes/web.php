<?php

use App\Http\Controllers\site\AcademicController;
use App\Http\Controllers\site\AdmissionController;
use App\Http\Controllers\site\SiteController;

use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class , 'index']);
Route::get('/about', [SiteController::class , 'about']);

Route::get('/chairman-message', [SiteController::class , 'chairmanMessage']);
Route::get('/principal-message', [SiteController::class , 'principalMessage']);
Route::get('/governing-body', [SiteController::class , 'governingBody']);


// academic routes
Route::get('/academic-calendar', [AcademicController::class , 'calendar']);
Route::get('/academic-rules', [AcademicController::class , 'academicRules']);
Route::get('/academic-routine', [AcademicController::class , 'routine']);
Route::get('/academic-syllabus', [AcademicController::class , 'syllabus']);

Route::get('/student-info', [AcademicController::class , 'student_info']);
Route::get('/teacher-suff', [AcademicController::class , 'teacher_suff']);
Route::get('/class-based-info', [AcademicController::class , 'class_based_info']);
// Route::get('/transport', [AcademicController::class , 'transport']);


// admission routes

Route::get('/admission-rules', [AdmissionController::class , 'admissionRules']);
Route::get('/prospectus', [AdmissionController::class , 'prospectus']);
Route::get('/admission-apply', [AdmissionController::class , 'applyform']);
Route::get('/admission-login', [AdmissionController::class , 'admissionStatus']);
