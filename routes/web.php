<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MailController;
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
//Route::redirect('/','login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
//admin
//Route::get('/admin/dashboard', function () {
//    return view('admin.dashboard');
//})->middleware(['auth:admin'])->name('admin.dashboard');

Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/admin/index',[AdminController::class,'index'])->name('admin.index');
Route::get('/admin/userShow',[AdminController::class,'allUser'])->name('admin.userShow');
Route::delete('/admin/destroy/{id}',[AdminController::class,'destroy'])->name('admin.destroy');
Route::delete('/feedback/destroy/{id}',[FeedbackController::class,'destroy'])->name('admin.feedback.destroy');


Route::delete('/story/delete/{id}',[AdminController::class,'delete'])->name('admin.story.delete');
Route::get('/admin/change', [AdminController::class, 'multitask'])->name('story.change');



Route::post('/admin/index', [StoryController::class, 'store'])->name('story.save');

Route::get('/story/{id}/edit', [AdminController::class, 'edit'])->name('story.edit');

Route::put('/story/update/{id}',[AdminController::class,'update'])->name('story.update');



//Route::get('/admin/index',[StoryController::class,'store'])->name('story.save');
//user feedback
Route::post('/user/contact', [FeedbackController::class, 'feedback'])->name('feedback');

Route::post('/', [LogoutController::class, 'destroy'])->name('logout');

Route::get('/test', [ImageController::class, 'imageUpload']);
Route::post('/test', [ImageController::class, 'imageUploadPost'])->name('upload');
Route::post('/search', [UserController::class, 'search'])->name('search');
Route::get('/admin/messageCheck',[AdminController::class,'mailcheck'])->name('admin.mailcheck');
//Route::get('/displaySearch', [UserController::class, 'displaySearch'])->name('displaySearch');

//Route::delete('user/{id}', [FeedbackController::class, 'delete'])->name('users.delete');






require __DIR__.'/adminauth.php';
require_once __DIR__ . '/jetstreams.php';

//user page
Route::get('/home',[UserController::class, 'index'])->name('home');
Route::get('/privacy',[UserController::class, 'privacy'])->name('privacy');
Route::get('/profile',[UserController::class, 'profile'])->name('profile');
Route::get('/contact',[UserController::class, 'contact'])->name('contact');
Route::get('/term',[UserController::class, 'term'])->name('terms');
Route::get('/faq',[UserController::class, 'support'])->name('faq');
Route::get('/story',[UserController::class, 'story'])->name('story');
Route::get('/story/{id}',[StoryController::class, 'show'])->name('story.show');
Route::get('/love_story',[UserController::class, 'love_story1'])->name('Love_story_1');
Route::get('/love_story_2',[UserController::class, 'love_story2'])->name('Love_story_2');
Route::get('/love_story_3',[UserController::class, 'love_story3'])->name('Love_story_3');
Route::get('/love_story_4',[UserController::class, 'love_story4'])->name('Love_story_4');
Route::get('/love_story_5',[UserController::class, 'love_story5'])->name('Love_story_5');
Route::get('/love_story_6',[UserController::class, 'love_story6'])->name('Love_story_6');
Route::get('/chat',[UserController::class, 'chat'])->name('chat');
Route::get('/latest_People',[UserController::class, 'latestUser'])->name('latestUser');
Route::get('/Tip_For_Girl',[UserController::class, 'for_girl'])->name('Tip_For_Girl');
Route::get('/Tip_For_Boys',[UserController::class, 'for_boy'])->name('Tip_For_Boys');

Route::get('/people/{id}',[UserController::class,'peopleShow'])->name('people.show');
Route::get('sentmail',[MailController::class,'sentmail'])->name('sentmail');
Route::post('user/sentmail',[MailController::class,'mail'])->name('SentMail');

