<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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



Route::prefix('/blog')->name('blog.')->group(function() {
        
    Route::get('/', function (Request $request) {

        return   \App\Models\Post::paginate(25);
    })->name('index');
    
    Route::get('/{slug}/{id}', function(string $slug, string $id, Request $request)  {
        $post = \App\Models\Post::findOrFail($id);

        return $post;

    })->where([
        "id" => '[0-9]+',
        "slug" => '[a-z0-9\-]+'
    ])->name('show'); 

});