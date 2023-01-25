<?php
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Shoppingcart;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
Route::get('/shoppingcart', Shoppingcart::class)->name('shoppingcart');

Route::get('payment-cancel', [PaypalController::class, 'cancel'])
    ->name('payment.cancel');
Route::get('payment-success', [PaypalController::class, 'success'])
    ->name('payment.success');


Route::middleware(['admin'])->group(function () {
    Route::get('admin/producttable', [ProductController::class, 'index']);
    Route::get('/addproduct', [ProductController::class, 'addproduct']);

    Route::post('createproduct', [ProductController::class, 'createproduct']);

    Route::get('/delete/{id}', [ProductController::class, 'deleteproduct']);

    Route::get('/editproduct/{id}', [ProductController::class, 'updateproduct']);

    Route::post('/edit', [ProductController::class, 'editproduct']);

    });

//oder
Route::get('/order', [ProductController::class, 'order']);
Route::post('/orderplace', [ProductController::class, 'orderplace']);



//details

Route::get('/detail/{id}', [ProductController::class, 'detail']);

Route::post('/cart', [ProductController::class, 'addToCart']);



