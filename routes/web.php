<?php

use App\Http\Middleware\Role;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\EntryManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetQuotation;
use App\Http\Controllers\ContactContoller;
use App\Http\Controllers\FrontDeskController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\JobBoardController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AggentCreate;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\FrotnEnd\FrontEndController;
use App\Http\Controllers\FrontEnd\ApplicantController;
use App\Http\Controllers\NewsletterSubscribeController;
use App\Http\Controllers\FrontEnd\FrontEndController as FrontEndFrontEndController;
use App\Http\Controllers\InterviewController;
use App\Http\Controllers\ProductController;

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


Auth::routes();

Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [FrontEndFrontEndController::class, 'index'])->name('mainindex');

Route::get('/privacy-policy', [FrontEndFrontEndController::class, 'PrivacyPolicy'])->name('privacy.policy');
Route::get('/terms-and-conditions', [FrontEndFrontEndController::class, 'TermsandConditions'])->name('terms.and.conditions');

Route::get('career/jobs/', [FrontEndFrontEndController::class, 'applyJob'])->name('applyJob');
Route::get('career/jobs/others/dubai/apply', [FrontEndFrontEndController::class, 'applyforOthers'])->name('others.apply');
Route::get('rider', [FrontEndFrontEndController::class, 'applyforRiders'])->name('rider');
Route::post('/check-email', [FrontEndFrontEndController::class, 'checkEmail'])->name('check-email');

Route::get('career/jobs/rider/dubai/apply', [FrontEndFrontEndController::class, 'rider'])->name('rider.apply');
Route::post('career/jobs/update-form-data/step1', [ApplicantController::class, 'submitStep1'])->name('rider.submitStep1');
Route::post('career/jobs/update-form-data/step2', [ApplicantController::class, 'submitStep2'])->name('rider.submitStep2');
Route::post('career/jobs/update-form-data/step3', [ApplicantController::class, 'submitStep3'])->name('rider.submitStep3');
Route::post('career/jobs/update-form-images', [ApplicantController::class, 'UpdateImage'])->name('rider.UpdateImage');

Route::post('career/jobs/update-form-steps/{step}', [ApplicantController::class, 'UpdateStep'])->name('rider.UpdateStep');

Route::get('/accept/{id}/{email}', [InterviewController::class, 'accept'])->name('accept');
Route::get('/reject/{id}/{email}', [InterviewController::class, 'reject'])->name('reject');
Route::get('/reschedule/{id}/{email}', [InterviewController::class, 'reschedule'])->name('reschedule');
Route::post('/rescheduleSubmit/{id}/{email}', [InterviewController::class, 'rescheduleSubmit'])->name('rescheduleSubmit');
Route::get('/success', [InterviewController::class, 'success'])->name('success');

// Contact Form Controller Routes
Route::get('/contacts', [ContactContoller::class, 'contact'])->name('contact');
Route::post('/contact', [ContactContoller::class, 'store'])->name('contact.store');
Route::get('/sendmail', [DashboardController::class, 'sendmail']);

Route::post('/submit-applicants', [ApplicantController::class, 'store'])->name('applicants.store');
Route::get('/verifyjobmail', [DashboardController::class, 'verifyjobmail'])->name('verifyjobmail');
Route::post('/verify-email', [DashboardController::class, 'verifyEmail'])->name('verify.email');
Route::get('/error-verification', [DashboardController::class, 'errorVerification'])->name('verify.error');
Route::post('/resend-verification-email', [DashboardController::class, 'resendVerificationEmail'])->name('resendVerificationEmail');
Route::post('/verify-otp-email', [DashboardController::class, 'verifyVerificationotp'])->name('verifyVerificationotp');
Route::get('/verify-now', [DashboardController::class, 'verifyNow'])->name('verify.now');
Route::get('/verified', [DashboardController::class, 'verified'])->name('verified.email');
Route::post('/change-applicant-email', [DashboardController::class, 'changeEmail'])->name('verified.changeEmail');


// Get Quotation Controller Routes
Route::post('/qauotation', [GetQuotation::class, 'store'])->name('qauotation.store');
Route::get('/qauotation', [GetQuotation::class, 'index'])->name('qauotation.index');


Route::prefix('admin')->middleware(['auth', CheckRole::class . ':super_admin,group_admin,admin'])->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Contact Form Controller Routes
    Route::get('/contact', [ContactContoller::class, 'index'])->name('admin.contact');
    Route::get('/contact/{id}', [ContactContoller::class, 'show'])->name('contact.show');
    Route::delete('admin/contact/{id}', [ContactContoller::class, 'destroy'])->name('contact.destroy');


    // Job Position Controller Routes
    Route::get('/job-positions', [JobBoardController::class, 'index'])->name('job_positions.index');
    Route::get('/job-positions/create', [JobBoardController::class, 'create'])->name('job_positions.create');
    Route::post('/job-positions', [JobBoardController::class, 'store'])->name('job_positions.store');
    Route::get('/job-positions/edit/{id}/', [JobBoardController::class, 'edit'])->name('job_positions.edit');
    Route::put('/job-positions/{id}', [JobBoardController::class, 'update'])->name('job_positions.update');
    Route::delete('/job-positions/{id}', [JobBoardController::class, 'destroy'])->name('job_positions.destroy');

    // Job Applicant Controller Routes
    Route::delete('/applicants/{id}', [ApplicantController::class, 'destroy'])->name('applicant.destroy');
    Route::post('/update-applicant-status/{id}', [ApplicantController::class, 'updateStatus'])->name('updateStatus');


    // Interview controller
    Route::post('/applicants/interview/submit/{id}', [InterviewController::class, 'submit'])->name('interview.submit');

    // Get Quotation Controller Routes
    Route::get('/qauotation', [GetQuotation::class, 'index'])->name('qauotation.index');
    Route::delete('/qauotation/{id}', [GetQuotation::class, 'destroy'])->name('qauotation.destroy');
    Route::get('/qauotation/{id}', [GetQuotation::class, 'show'])->name('qauotation.show');

    // Frontdesk Controller Routes
    Route::delete('/frontdesk/{id}', [FrontDeskController::class, 'destroy'])->name('frontdesk.destroy');

    // Admin Panel Routes for Users
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');

    //Admin Category Route 
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::post('/category/update', [CategoryController::class, 'update'])->name('admin.category.update');

    //Admin Post Route 
    Route::get('/posts', [PostController::class, 'index'])->name('admin.post.index');
    Route::get('/post/create', [PostController::class, 'create'])->name('admin.post.create');
    Route::post('/post/store', [PostController::class, 'store'])->name('admin.post.store');
    Route::put('/post/{id}', [PostController::class, 'update'])->name('admin.post.update');
    Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('admin.post.destroy');

    //tinyMCE editor image upload route
    Route::post('/upload-image-for-post', [PostController::class, 'uploadImg'])->name('upload-image-for-post');
    Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('admin.post.edit');

    //Admin Product Category Route
    Route::get('/products/category', [ProductCategoryController::class, 'index'])
        ->name('admin.pcategory.index');
    Route::get('/product/category/create', [ProductCategoryController::class, 'create'])
        ->name('admin.pcategory.create');
    Route::post('/product/category/store', [ProductCategoryController::class, 'store'])
        ->name('admin.pcategory.store');
    Route::get('/product/category/edit/{id}', [ProductCategoryController::class, 'edit'])
        ->name('admin.pcategory.edit');
    Route::post('/product/category/update', [ProductCategoryController::class, 'update'])
        ->name('admin.pcategory.update');
    Route::get('/product/category/destroy/{id}', [ProductCategoryController::class, 'destroy'])
        ->name('admin.pcategory.destroy');

    //Admin Product  Route
    Route::get('/product', [ProductController::class, 'index'])->name('admin.product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('admin.product.store');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
    //  Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
    //  Route::get('/product/destroy/{id}', [ProductController::class, 'destro'])->name('admin.product.store');
    Route::get('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
    
    Route::get('/aggetn/create', [AggentCreate::class, 'index'])->name('aggetn.create');

    Route::post('/admin/agent/store', [AggentCreate::class, 'store'])->name('admin.agent.store');

});

// Routes accessible only to moderators and admins
Route::prefix('admin')->middleware(['auth', CheckRole::class . ':super_admin,group_admin,admin,manager','user'])->group(function () {
    Route::get('/frontdesk', [FrontDeskController::class, 'index'])->name('frontdesk.index');
    Route::post('/frontdesk', [FrontDeskController::class, 'store'])->name('frontdesk.store');
    Route::get('/visitor-verify/{id}', [FrontDeskController::class, 'verifyshow'])->name('visitorverify.show');
    Route::post('/visitor-verified/{id}', [FrontDeskController::class, 'verify'])->name('visitor.verified');
});

// Job Applicant Controller Routes
Route::prefix('admin')->middleware(['auth', CheckRole::class . ':super_admin,group_admin,admin,manager,user'])->group(function () {

    Route::get('/applicants', [ApplicantController::class, 'index'])->name('applicants.index');
    Route::get('/applicants/verified', [ApplicantController::class, 'indexverified'])->name('applicants.indexverified');
    Route::get('/applicants/notverified', [ApplicantController::class, 'notverified'])->name('applicants.notverified');
    Route::get('/applicants/invited', [ApplicantController::class, 'invited'])->name('applicants.invited');
    Route::get('/applicants/hired', [ApplicantController::class, 'hired'])->name('applicants.hired');

    Route::get('/applicants/edit/{id}', [ApplicantController::class, 'editappli'])->name('applicants.editappli');
    Route::post('/applicants/update/{id}', [ApplicantController::class, 'update'])->name('applicants.update');
    Route::get('/applicants/verify-email/{id}', [ApplicantController::class, 'verifyemailadmin'])->name('applicants.verifyemailadmin');
    Route::post('/applicants/verify-email-otp', [ApplicantController::class, 'verifyemailadminotp'])->name('applicants.verifyemailadminotp');
    Route::get('/applicants/{id}', [ApplicantController::class, 'show'])->name('applicants.show');
});


//Front End Newsletter Subscriber Route
Route::post('/store/newsletter', [NewsletterSubscribeController::class, 'store'])->name('store.newsletter');
