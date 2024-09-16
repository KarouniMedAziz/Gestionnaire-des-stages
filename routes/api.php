<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\CommunicationController;

Route::middleware('api')->group(function () {

    Route::apiResource('users', UserController::class);

    Route::apiResource('administrateurs', AdministrateurController::class);

    Route::apiResource('stagiaires', StagiaireController::class);

    Route::apiResource('candidatures', CandidatureController::class);

    Route::apiResource('taches', TacheController::class);

    Route::apiResource('communications', CommunicationController::class);

    Route::get('/test', function () {
        return response()->json(['message' => 'API route is working']);
    });
});



