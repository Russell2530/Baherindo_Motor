<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\WelcomeController2;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\MobilController;

Route:: resource('/', WelcomeController::class);
Route:: resource('/car', WelcomeController2::class);
Route:: resource('about', AboutController::class);
Route:: resource('contact', ContactController::class);
Route:: resource('admin/form', FormController::class);
Route:: resource('motor', MotorController::class);
Route:: resource('mobil', MobilController::class);