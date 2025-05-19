<?php

use Illuminate\Support\Facades\Route;

Route::get('/{child}/record', [RecordController::class, 'index']); // 本番用
Route::post('/{child}/record', [RecordController::class, 'store']);

Route::get('/demo', [DemoController::class, 'index']); // 体験用トップ
Route::post('/demo', [DemoController::class, 'store']);

