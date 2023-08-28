<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.acceuil');
})->name('acceuil');
Route::get('/plus', function () {
    return 20;
});

Route::get('/abouts-us',function(){
    return view('pages.about');

})->name('about');
Route::get('users/{name}', function ($name) {
    return 'nom est :'.$name;
    
})->where('name','[A-Za-z   ]+');
Route::get('/test-contact', function () {
    return new App\Mail\UserInfo([
      'nom' => 'Durand',
      'email' => 'durand@chezlui.com',
      'message' => 'Je voulais vous dire que votre site est magnifique !'
      ]);
});
Route::get('/envoieMail', [ContactController::class,'create']
    
);
Route::get('Send-email',[MailController::class,'contact']);