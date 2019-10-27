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

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=>true]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('add-tags', function(){
//    $faker = new Faker();
//
//  for($i=0 ; $i< 1500 ; $i++){
//      DB::table('post_tag')
//          ->updateOrInsert(
//              ['post_id'=> $faker->numberBetween(1, 1500)],
//              ['tag_id'=> $faker->numberBetween(1, 50)]
//          );
//  }
//});

Route::get('test', function(){
//    $user = \App\User::find(1);
//    return $user->posts;
    $post= \App\Post::find(400);
    return $post ->images;
});