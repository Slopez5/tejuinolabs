<?php

use App\Http\Controllers\Whatsapp\Webhook\WebhookController;
use Illuminate\Support\Facades\Route;

// Webhook Whatsapp
Route::get('/webhook', [WebhookController::class, 'webhook']);
Route::post('/webhook', [WebhookController::class, 'recibe']);



Route::get('/', function () {
    return view('welcome');
});
