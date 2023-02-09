<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\TestController;
use Illuminate\Support\Facades\DB;
use App\DonateController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/donate', function () {
    return view('donate');
});



// Route::get('/insert-user', [TestController::class, 'insertUser'])->name('insertUserData');
Route::get('/edit-user/{id}', [AuthController::class, 'editUser'])->name('edit-user-form');
Route::post('/edit-user-save', [AuthController::class, 'updateUser'])->name('edit-save-user');
Route::get('/view-all-users', [AuthController::class, 'retrieveAllUsers'])->name('allUsers');
Route::get('/view-profile/{id}', [AuthController::class, 'viewProfile'])->name('view-profile');
 

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 



Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


Route::fallback(function () {
return "<h1><center>Sorry, the page does not exists!</h1>";
    });


    Route::middleware(['auth'])->group(function () {
    Route::get('profile',[ProfileController::class,'index'])->name('profile');
    Route::post('profile/{user}',[ProfileController::class,'update'])->name('profile.update');
});

Route::resource('organization', OrganizationController::class);

//----------------- admin routes -----------------// 

Auth::routes();

Route::get('/admin',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin',[LoginController::class,'adminLogin'])->name('admin.login');

Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');
Route::get('/admin/dashboard',function(){
    return view('admin');
})->middleware('auth:admin');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


