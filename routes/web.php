<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('email/verify-notice', function () {
    return view('verification.notice');
})->name('verification.notice');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'redirect']);

Auth::routes();

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::group(['prefix' => 'user', 'middleware' => ['isuser', 'PreventBackHistory']], function () {
        Route::get('user', [UserController::class, 'index'])->name('user.dashboard');
    });

    Route::group(['prefix' => 'Admin', 'middleware' => ['isAdmin', 'PreventBackHistory']], function () {
        Route::get('admin', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('user', [AdminController::class, 'user'])->name('admin.user');
        Route::get('/edituser/{id}', [AdminController::class, 'edit'])->name('admin.edituser');
        Route::delete('/deleteuser/{id}', [AdminController::class, 'deleteuser']);
        Route::put('/userupdate/{id}', [AdminController::class, 'userupdate']);
    });

    Route::group(['prefix' => 'accounts', 'middleware' => ['isaccounts', 'PreventBackHistory']], function () {
        Route::get('accounts', [AccountsController::class, 'index'])->name('accounts.dashboard');
    });
});


Route::post('/contribution/store',[AccountsController::class,'store'])->name('accounts.store');
Route::get('my_contributions',[AccountsController::class,'contribute'])->name('accounts.contribute');
Route::get('/mycontribution/{id}', [App\Http\Controllers\AccountsController::class,'edit'])->name('accounts.edit');
Route::put('/mycontributionupdate/{id}', [App\Http\Controllers\AccountsController::class,  'update'])->name('accounts.update');


Route::get('/dailymotive', [App\Http\Controllers\MotivationController::class,  'index'])->name('dailymotive.index');
Route::get('/dailymotive/create',[App\Http\Controllers\MotivationController::class,  'create'])->name('dailymotive.create');
Route::post('/dailymotive/store', [App\Http\Controllers\MotivationController::class,  'store'])->name('dailymotive.store');
Route::post('/comments/store/{motivation_id}/{user_id}', [App\Http\Controllers\CommentsController::class,  'store'])->name('comments.store');
Route::post('/likes', [App\Http\Controllers\LikeController::class, 'store'])->name('likes.store');

Route::post('/comments/{motivation_id}/{user_id}/commentreplies/{comment_id}', [App\Http\Controllers\CommentRepliesController::class,  'store'])->name('commentreplies.store');

Route::post('/contact',[ContactController::class,'store'])->name('contact.store');
Route::post('/notification/store', [App\Http\Controllers\NotificationController::class,  'store'])->name('notifications.store');
Route::get('/notification/create', [App\Http\Controllers\NotificationController::class,  'create'])->name('notifications.create');
Route::get('/notification/acreate', [App\Http\Controllers\NotificationController::class,  'acreate'])->name('notifications.acreate');
Route::get('/notifications', [App\Http\Controllers\NotificationController::class,  'index'])->name('notifications.index');
Route::get('/notification/view', [App\Http\Controllers\NotificationController::class,  'view'])->name('notifications.view');
Route::get('/user/create', [App\Http\Controllers\userController::class,  'create'])->name('user.create');
Route::delete('deleteuser/{id}', [App\Http\Controllers\userController::class,  'destroy'])->name('users.destroy');
Route::get('edituser/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/updateuser/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::get('/about', [App\Http\Controllers\HomeController::class,  'about'])->name('gts.about');
Route::get('/activities', [App\Http\Controllers\HomeController::class,  'activities'])->name('gts.activities');
Route::get('/gallery', [App\Http\Controllers\HomeController::class,  'gallery'])->name('gts.gallery');
Route::post('/documents/store', [App\Http\Controllers\DocumentsController::class,  'store'])->name('document.store');
Route::get('/documents', [App\Http\Controllers\DocumentsController::class,  'index'])->name('document.index');
Route::delete('/deletedocument/{id}', [App\Http\Controllers\DocumentsController::class, 'destroy'])->name('document.destroy');
Route::get('/editdocument/{id}', [App\Http\Controllers\DocumentsController::class, 'edit'])->name('document.edit');
Route::put('/documents/{document}', [App\Http\Controllers\DocumentsController::class, 'update'])->name('document.update');
Route::get('/email/verify/{id}', [App\Http\Controllers\EmailVerificationController::class, 'verify'])->name('verification.verify');
Route::get('/email/resend', [App\Http\Controllers\EmailVerificationController::class, 'resend'])->name('verification.resend');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/dashboard/user/settings', [ProfileController::class, 'settings'])->name('profile.settings');
