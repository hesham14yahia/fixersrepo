<?php

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

use App\Fixer;
use App\Category;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', function(){
    $fixer = Fixer::create(['name'=>'Fatama', 'image_bath'=> 'fatama.png', 'birth_date'=> '2010-10-5', 'city_id'=> '1', 'category_id' => '2']);
});

Route::get('/read', function(){
    $fixer = Fixer::find(1);
    $cat = Category::find($fixer->category_id);
    echo $cat->name;
});