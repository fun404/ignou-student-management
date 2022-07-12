<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('pages.home');
});
Route::get('course/{code}/', function ($code) {
    if(View::exists("subjects/$code/index")){
	    return view("subjects/$code/index");
    }
    else{
	    return view("subjects/$code/index");
    	echo "$code";
	    // return view("pages/errors/503_service_unavailable");

    }
});


Route::get('/subject/{code}/{page}', function ($code, $page) {
	echo "$page";
	if (!$page) {
		echo "page not found in url";
	    if(View::exists("subjects/$code/index")){
		    return view("subjects/$code/index");
	    }
	    else{
		    return view("subjects/$code/index");
	    	echo "$code";
		    // return view("pages/errors/503_service_unavailable");

	    }
	}
	else  {
		echo "page found in url";
		    return view("subjects/$code/$page");
	}
});