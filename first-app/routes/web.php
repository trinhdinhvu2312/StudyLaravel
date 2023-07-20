<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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
Route::get('/products', [
    ProductsController::class,
    'index'
]);

Route::get('/products/{id}', [
    ProductsController::class,
    'detail'
]);
// Route::get('/', function () {
//     return view('home'); 
// });

// Route::get('/users', function(){
//     return 'This is the users page';
// });

// Route::get('/foods', function(){
//     return ['sushi', 'sashimi', 'tofu'];
// });

// Route::get('/aboutMe', function(){
//     return response()->json([
//         'name' => 'Trinh Dinh Vu',
//         'age' => '20'
//     ]);
// });

// Route::get('/something', function(){
//     return redirect('/users');
// });
