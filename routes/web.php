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

// use App\Fixer;
// use App\Category;
// use App\Country;
// use App\City;
// use App\Area;

Route::resource('/', 'FixerController');
Route::resource('location', 'LocationController');
Route::resource('category', 'CategoryController');

// Route::get('/insert', function(){
//     $fixer = Fixer::create(['name'=>'Fatama', 'image_bath'=> 'fatama.png', 'birth_date'=> '2010-10-5', 'city_id'=> '1', 'category_id' => '2']);
// });

// Route::get('/read', function(){
//     $fixer = Fixer::find(1);
//     $cat = City::find($fixer->city_id);
//     echo $cat->name;
// });

// Route::get('/read', function(){
//     $fixer = Fixer::find('1');
//     foreach($fixer->areas as $area){
//         echo $area->name.'<br>';
//     }
// });

// Route::get('/read', function(){
//     $area = Area::find(1);
//     foreach($area->fixers as $fixer){
//         return $fixer->name;
//     }
// });

// Route::get('/read', function(){
//     $city = City::find(1);    
//     foreach($city->fixers as $fixer){
//         return $fixer->name;
//     }
// });

// Route::get('/read', function(){
//     $city = City::find(2);
//     foreach($city->areas as $area){
//         echo $area->name.'<br>';
//     }
// });

// Route::get('/read', function(){
//     $area = Area::find(4);
//         return $area->city->name;
// });

// Route::get('/read', function(){
//     $country = Country::find(2);
//     foreach($country->cities as $city){
//         echo $city->name.'<br>';
//     }
// });

// Route::get('/read', function(){
//     $city = City::find(4);
//         return $city->country->name;
// });