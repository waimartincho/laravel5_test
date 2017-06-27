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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home','HomeController@index')->name('home');
// Auth::routes();

Route::group(['middleware'=>['auth'],'prefix'=>'product'], function () {
    Route::get('/','Product@index')->name('product.index');
	Route::get('/create','Product@create')->name('product.create');
	Route::post('/store','Product@store')->name('product.store');

	Route::get('/edit/{id}','Product@edit')->name('product.edit');
	Route::post('/update/{id}','Product@update')->name('product.update');
	Route::patch('/update/{id}','Product@update')->name('product.update');

	Route::get('/delete/{id}','Product@delete')->name('product.delete');
	Route::get('/{id}','Product@show')->name('product.show');

	Route::get('/images/{size}/{path}/{name}', function($size = NULL, $path = NULL , $name = NULL){

	    if(!is_null($size) && !is_null($name) && !is_null($path))
	    {

	        $size = explode('x', $size);
	        $extension = pathinfo($name, PATHINFO_EXTENSION);
	        $type 	   = "image/jpeg";

	        if($extension=="png"){
	        $type ="image/png";
	        }

	        if($extension=="jpg"){
	        $type = "image/jpg";
	        }

	        $cache_image = Image::cache(function($image) use($size, $name, $path)
	        {

		        if(isset($size[1]))
		        {
		             return $image->make(public_path('/files/'.$path.'/'.$name))->resize($size[0], $size[1]);
		        }
		        else
		        {
		             return $image->make(public_path('/files/'.$path.'/'.$name))->resize($size[0], null, function ($constraint) {
		                                        $constraint->aspectRatio();
		                             });
		        }

	        }, 10); // cache for 10 minutes

	        return Response::make($cache_image, 200, ['Content-Type' => $type]);

	    } 
	    else 
	    {
	        abort(404);
	    }

	});

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


