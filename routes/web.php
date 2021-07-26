<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillController;

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

Route::get('/', function () {return view('welcome');});

Route::get('/welcome', function () {return view('welcome');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/board', [App\Http\Controllers\BoardController::class, 'index'])->name('board');
Route::get('/task', [App\Http\Controllers\BoardController::class, 'task'])->name('task');
Route::get('/slack', [App\Http\Controllers\BoardController::class, 'slack'])->name('slack');
Route::get('/products', [App\Http\Controllers\BoardController::class, 'products'])->name('products');
Route::get('/coinbase', [App\Http\Controllers\BoardController::class, 'coinbase'])->name('coinbase');
Route::get('/sidebar', [App\Http\Controllers\BoardController::class, 'sidebar'])->name('sidebar');

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('api/bills', BillController::class);
});

