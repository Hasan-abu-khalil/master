<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;



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

Route::get('/admin', function () {
    return view('admin_dasebord\admin_home');
});

Route::get('/', function () {
    return view('home');
});





Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



Route::resource('home', CategoryController::class);



// Route::get('/searchCategories', [ProductsController::class, 'searchCategories'])->name('searchCategories');

Route::get('/searchByPrice', [CategoryController::class, 'searchByPrice'])->name('searchByPrice');



Route::resource('product', ProductsController::class);
Route::get('/categories', [ProductsController::class, 'category_name'])->name('categories');

Route::get('/categories', [ProductsController::class, 'searchByName'])->name('searchByName');
Route::get('/categoriess', [ProductsController::class, 'cat'])->name('cat');
Route::get('/cart/{id}', [ProductsController::class, 'cart'])->name('cart');
Route::delete('/remove-from-cart', [ProductsController::class, 'remove'])->name('remove_from_cart');





Route::resource('order', OrdersController::class);
Route::resource('cart', CartsController::class);




// admin_dasebord route

Route::resource('admin_user', UserController::class);
Route::resource('admin_categorys', CategoryController::class);
Route::get('admin_products', [ProductsController::class, 'shows'])->name('admin_products');












// Route::get('/home', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('home');

// Route::get('/admin', function () {
//     return view('admin_dasebord\admin_home');
// })->name('admin');

// Route::get('admin_products', [ProductsController::class, 'shows'])->name('shows');
// Route::get('/admin_user/show', [UserController::class, 'show'])->name('admin_user.show');
// Route::get('/admin_categorys/show', [CategoryController::class, 'show'])->name('admin_categorys.show');
// Route::get('/admin.products/index', [ProductsController::class, 'index'])->name('admin.products.index');
// Route::get('/order/index', [OrdersController::class, 'index'])->name('order.index');
