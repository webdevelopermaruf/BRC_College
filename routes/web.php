<?php

use App\Http\Controllers\site\AcademicController;
use App\Http\Controllers\site\AdmissionController;
use App\Http\Controllers\site\SiteController;
use App\Models\SiteInfoModel;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index']);
Route::get('/about', [SiteController::class, 'about']);

Route::get('/chairman-message', [SiteController::class, 'chairmanMessage']);
Route::get('/principal-message', [SiteController::class, 'principalMessage']);
Route::get('/governing-body', [SiteController::class, 'governingBody']);


// academic routes
Route::get('/academic-calendar', [AcademicController::class, 'calendar']);
Route::get('/academic-rules', [AcademicController::class, 'academicRules']);
Route::get('/academic-routine', [AcademicController::class, 'routine']);
Route::get('/academic-syllabus', [AcademicController::class, 'syllabus']);

Route::get('/student-info', [AcademicController::class, 'student_info']);
Route::get('/teacher-stuff', [AcademicController::class, 'teacher_stuff']);
Route::get('/class-based-info', [AcademicController::class, 'class_based_info']);
// Route::get('/transport', [AcademicController::class , 'transport']);


// admission routes

Route::get('/admission-rules', [AdmissionController::class, 'admissionRules']);
Route::get('/prospectus', [AdmissionController::class, 'prospectus']);
Route::get('/admission-apply', [AdmissionController::class, 'applyform']);
Route::get('/admission-login', [AdmissionController::class, 'admissionStatus']);



//other routes
Route::get('/results', [SiteController::class, 'results']);
Route::get('/notices', [SiteController::class, 'notices']);
Route::get('/gallery', [SiteController::class, 'gallery']);


Route::get('/app/clear', function(){
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    return "App Cleared";
});

Route::get('/app/optimize', function(){
    // Artisan::call('optimize');
    Artisan::call('route:cache');
    Artisan::call('view:cache');
    Artisan::call('config:cache');
    Artisan::call('cache:cache');
    return "App Optimized";
});