<?php

use App\Livewire\CategoriesPage;
use App\Livewire\HomePage;
use App\Livewire\Product;
use App\Livewire\ProductPage;
use App\Livewire\SyaratKetentuan;
use App\Livewire\TentangDevits;
use App\Livewire\TentangVokasi;
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

Route::get('/', HomePage::class);
Route::get('/categories', CategoriesPage::class);

Route::get('/products', ProductPage::class);
Route::get('/tentang-vokasi', TentangVokasi::class);
Route::get('/tentang-devits', TentangDevits::class);
Route::get('/syarat-ketentuan', SyaratKetentuan::class);
Route::get('/product', Product::class);
