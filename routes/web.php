<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\NotificationController;

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

Route::get('/postalumni', function () {
    return view('content.posts-alumni');
})->name('postalumni');

Route::get('/detailcompanies', function () {
    return view('content.detailcompanies');
})->name('detailcompanies');

Route::get('/adminprofilalumni', function () {
    return view('content.admin-profilealumni');
})->name('adminprofilalumni');

Route::get('/admineditalumni', function () {
    return view('content.admin-editalumni');
})->name('admineditalumni');

Route::get('/505', function () {
    return view('errors.505');
})->name('505');

// Index
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/companies', [CompanyController::class, 'index'])->name('companies');


// Posts Controller
Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index')->name('posts');
    Route::get('/posts/detail/{id}', 'show')->name('posts.detail');
    Route::get('/posts/create', 'create')->name('posts.create');
    Route::post('/posts/store', 'store')->name('posts.store');
});

// Comment Controller
Route::controller(CommentController::class)->group(function () {
    Route::post('/posts/detail/{vacancy}/comment', 'store')->name('posts.detail.comment');
    Route::post('/posts/detail/{vacancy}/comment/{id}', 'store')->name('posts.detail.reply');
});


// Company Controller
Route::controller(CompanyController::class)->group(function () {
    Route::get('/companies', 'index')->name('companies');
    Route::get('/companies/detail/{id}', 'show')->name('companies.detail');
});


// Login
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/profile', 'profile')->name('profile');
});

// Mahasiswa
Route::controller(MahasiswaController::class)->group(function () {
    Route::get('/profile/mahasiswa', 'profile')->name('mahasiswa.profile');
});

// Alumni
Route::controller(AlumniController::class)->group(function () {
    Route::get('/alumni', 'index')->name('alumni');
    Route::get('/profile/alumni', 'profile')->name('alumni.profile');
    Route::get('/profile/show', 'show')->name('alumni.show-profile');
    Route::get('/alumni/detail/{id}', 'detail')->name('alumni.detail');
    Route::post('/alumni/store','store')->name('alumni.store');
    Route::post('/alumni/update/{id}','update')->name('alumni.update');
    Route::post('/alumni/create/experiences','addExperiences')->name('alumni.create-experiences');
    Route::post('/alumni/update/experiences/{id}','updateExperiences')->name('alumni.update-experiences');
});


//Admin
Route::controller(AdminController::class)->group(function (){
    Route::get('/admin','index')->name('admin.home');
    Route::get('/admin/profile','show')->name('admin.profile');
    Route::get('/admin/alumni','getAlumni')->name('admin.alumni');
    Route::post('/admin/alumni_store','store')->name('admin.store');
    Route::post('/admin/handle-approval/{id}','handleApproval')->name('admin.handleApproval');
    Route::get('/admin/detail-alumni/{id}','detailAlumni')->name('admin.detail-alumni');
    Route::get('/admin/approval/{id}','viewApproval')->name('admin.approval');
    Route::post('/admin/edit-alumni/{id}','editAlumni')->name('admin.edit-alumni');
    Route::get('/admin/edit-alumni/experiences/{id}','editExperiencesAlumni')->name('admin.edit-alumni.experiences');
    Route::post('/admin/edit-alumni/add-experiences/{id}','addAlumniExperiences')->name('admin.edit-alumni.add-experiences');
    Route::post('/admin/edit-alumni/update-experiences/{id}','updateAlumniExperiences')->name('admin.edit-alumni.update-experiences');
});

// Notifications Logic
Route::post('/notifications/read', [NotificationController::class, 'markAsRead'])->name('notifications.markAsRead');


// Google Auth
Route::get('/auth/google/redirect',[GoogleAuthController::class, 'redirect']);
Route::get('/auth/google/callback',[GoogleAuthController::class, 'callback']);



