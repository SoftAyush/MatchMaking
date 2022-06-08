<?php

use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\CurrentTeamController;
use Laravel\Jetstream\Http\Controllers\Livewire\ApiTokenController;
use Laravel\Jetstream\Http\Controllers\Livewire\PrivacyPolicyController;
use Laravel\Jetstream\Http\Controllers\Livewire\TeamController;
use Laravel\Jetstream\Http\Controllers\Livewire\TermsOfServiceController;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;
use Laravel\Jetstream\Http\Controllers\TeamInvitationController;
use Laravel\Jetstream\Jetstream;
use App\Http\Controllers\AdminController;

Route::group(['middleware' => config('jetstream.middleware', ['admin'])], function () {
    if (Jetstream::hasTermsAndPrivacyPolicyFeature()) {
        Route::get('/terms-of-service', [TermsOfServiceController::class, 'show'])->name('terms.show');
        Route::get('/privacy-policy', [PrivacyPolicyController::class, 'show'])->name('policy.show');
    }

    $authMiddleware = config('jetstream.guard')
        ? 'auth:'.config('jetstream.guard')
        : 'auth';

    $authSessionMiddleware = config('jetstream.auth_session', false)
        ? config('jetstream.auth_session')
        : null;

    Route::group(['middleware' => array_values(array_filter([$authMiddleware, $authSessionMiddleware, 'verified']))], function () {
        // User & Profile...
//        Route::get('/admin/profile', [AdminController::class, 'show'])->name('admin.profile.show');
//        Route::get('/home',[UserController::class, 'index'])->name('home');
//        Route::get('/privacy',[UserController::class, 'privacy'])->name('privacy');
//        Route::get('/profile',[UserController::class, 'profile'])->name('profile');
//        Route::get('/contact',[UserController::class, 'contact'])->name('contact');
//        Route::get('/term',[UserController::class, 'term'])->name('terms');
//        Route::get('/faq',[UserController::class, 'support'])->name('faq');
//        Route::get('/story',[UserController::class, 'story'])->name('story');
//        Route::get('/love_story',[UserController::class, 'love_story1'])->name('Love_story_1');
//        Route::get('/love_story_2',[UserController::class, 'love_story2'])->name('Love_story_2');
//        Route::get('/love_story_3',[UserController::class, 'love_story3'])->name('Love_story_3');
//        Route::get('/love_story_4',[UserController::class, 'love_story4'])->name('Love_story_4');
//        Route::get('/love_story_5',[UserController::class, 'love_story5'])->name('Love_story_5');
//        Route::get('/love_story_6',[UserController::class, 'love_story6'])->name('Love_story_6');
//        Route::get('/chat',[UserController::class, 'chat'])->name('chat');
//        Route::get('/latest_People',[UserController::class, 'latestUser'])->name('latestUser');
//        Route::get('/Tip_For_Girl',[UserController::class, 'for_girl'])->name('Tip_For_Girl');
//        Route::get('/Tip_For_Boys',[UserController::class, 'for_boy'])->name('Tip_For_Boys');

        // API...
        if (Jetstream::hasApiFeatures()) {
            Route::get('/admin/api-tokens', [ApiTokenController::class, 'index'])->name('api-tokens.index');
        }

        // Teams...
//        if (Jetstream::hasTeamFeatures()) {
//            Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');
//            Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');
//            Route::put('/current-team', [CurrentTeamController::class, 'update'])->name('current-team.update');
//
//            Route::get('/team-invitations/{invitation}', [TeamInvitationController::class, 'accept'])
//                ->middleware(['signed'])
//                ->name('team-invitations.accept');
//        }
    });

});

Route::get('/admin/profile', [AdminController::class, 'show'])->name('admin.profile.show');
