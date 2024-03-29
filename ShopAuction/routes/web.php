<?php

use App\Http\Controllers\VerificationEmailController;
use App\Http\Livewire\Bid;
use App\Http\Livewire\BidList;
use App\Http\Livewire\BidUpload;
use App\Http\Livewire\BuyList;
use App\Http\Livewire\BuyPreview;
use App\Http\Livewire\BuyUpload;
use App\Http\Livewire\RolePermission;
use App\Http\Livewire\Splash;
use App\Http\Livewire\Staf;
use App\Http\Livewire\Test;
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

Route::get('/', Splash::class)->name('staf');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/email/verify/{id}/{hash}',  [VerificationEmailController::class, 'verify'])
    ->name('verification.verify');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/test', Test::class);


Route::get('/language/{locale}', function ($locale) {

    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/private', Splash::class)->middleware('auth')->name('splash');
Route::get('/staf', Staf::class)->middleware('auth')->name('staf');
// Route::get('/staf/create', StafCreate::class)->middleware('auth')->name('stafcreate');
Route::get('/role', RolePermission::class)->middleware('auth')->name('rolemanagement');
Route::get('/buy/list', BuyList::class)->middleware('auth')->name('buylist');
Route::get('/buy/upload/{productgroup_id}', BuyUpload::class)->middleware('auth')->name('buyupload');
Route::get('/buy/preview/{productgroup_id}', BuyPreview::class)->middleware('auth')->name('buypreview');
Route::get('/bid/list', BidList::class)->middleware('auth')->name('bidlist');
Route::get('/bid/upload/{productgroup_id}', BidUpload::class)->middleware('auth')->name('bidupload');
Route::get('/bid/{productgroup_id}', Bid::class)->middleware('auth')->name('openbiditem');
