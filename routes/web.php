<?php

use App\Http\Controllers\LionDatabase\MySQL\TestUserController;
use Lion\Route\Route;

/**
 * -----------------------------------------------------------------------------
 * Web Routes
 * -----------------------------------------------------------------------------
 * Here is where you can register web routes for your application
 * -----------------------------------------------------------------------------
 **/

Route::get('/', fn() => info('[index]'));

Route::prefix('api', function() {
    Route::post('users', [TestUserController::class, 'createTestUser']);
    Route::get('users', [TestUserController::class, 'readTestUser']);
    Route::put('users/{id}', [TestUserController::class, 'updateTestUser']);
    Route::delete('users/{id}', [TestUserController::class, 'deleteTestUser']);
});
