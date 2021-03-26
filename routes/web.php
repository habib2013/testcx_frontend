<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SavesubsController;
use App\Mail\Hello;
use App\Mail\Confirmation;
use App\Models\Subscription;
/*
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


Route::get('confirmation/{id}', function ($id) {

    $subscriber = Subscription::findOrFail($id);

    Mail::to($subscriber)->send(new Confirmation($subscriber));
    Mail::to(['alert@capitalx.email'])->send(new Hello($subscriber));

    return view('confirmation');
});

Route::view('/paytocontinue', 'paytocontinue');
Route::view('/confirmation', 'confirmation');
Route::post('/saveToDB',[SavesubsController::class,'saveToDB']);

Route::get('/testemail/{subscriber}',[SavesubsController::class,'testemail']);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
