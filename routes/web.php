<?php

use App\Enum\Order\OrderStatus;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Order;
use App\Models\post;
use App\Models\User;

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

Route::get('user/{user}/order/{order}',function(User $user,Order $order){
    dd($user,$order);
})->scopeBindings();

Route::get('/', function () {
    // return str('level brams')->upper()->slug();

    return OrderStatus::Success->value;
});

Route::resource('post', PostController::class);

Route::middleware(['admin'])->group(function(){
    Route::get('/foo','\App\Http\Controllers\TestController@foo');
Route::get('/bar','\App\Http\Controllers\TestController@bar');
});
Route::resource('paiements',PaymentController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
