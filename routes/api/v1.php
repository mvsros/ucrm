<?php

use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function (){
//    Route::apiResource('/tasks', \App\Http\Controllers\Api\V1\TasksController::class);
    Route::get('/tasks', [\App\Http\Controllers\Api\V1\TasksController::class, 'index']);
    Route::post('/tasks', [\App\Http\Controllers\Api\V1\TasksController::class, 'store']);
    Route::get('/tasks/{id}', [\App\Http\Controllers\Api\V1\TasksController::class, 'show']);
    Route::put('/tasks/{id}', [\App\Http\Controllers\Api\V1\TasksController::class, 'update']);
    Route::delete('/tasks/{id}', [\App\Http\Controllers\Api\V1\TasksController::class, 'destroy']);
    Route::patch('/tasks/{id}', [\App\Http\Controllers\Api\V1\TasksController::class, 'complete']);
});

?>
