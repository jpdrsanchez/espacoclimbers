<?php

use App\Http\Livewire\Web\About\AboutTemplate;
use App\Http\Livewire\Web\Contact\ContactTemplate;
use App\Http\Livewire\Web\Events\EventsTemplate;
use App\Http\Livewire\Web\Gallery\GalleryTemplate;
use App\Http\Livewire\Web\Gastronomy\GastronomyTemplate;
use App\Http\Livewire\Web\Home\HomeTemplate;
use App\Http\Livewire\Web\Kitchen\KitchenTemplate;
use App\Http\Livewire\Web\Localization\LocalizationTemplate;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeTemplate::class)->name('home');
Route::get('/nosso-espaco', AboutTemplate::class)->name('space');
Route::get('/eventos', EventsTemplate::class)->name('events');
Route::get('/galeria', GalleryTemplate::class)->name('gallery');
Route::get('/gastronomia', GastronomyTemplate::class)->name('gastronomy');
Route::get('/cozinha', KitchenTemplate::class)->name('kitchen');
Route::get('/localizacao', LocalizationTemplate::class)->name('localization');
Route::get('/contato', ContactTemplate::class)->name('contact');
