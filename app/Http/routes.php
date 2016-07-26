<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	// throw new \Exception('tracy work');
    return view('index');
});

Route::get('hello', function () {
	// throw new \Exception('tracy work');
    return view('hello');
});

// Route::get('hello/{name}', function ($name) {
// 	// throw new \Exception('tracy work');
//     return 'hello, '.$name;
// });

Route::get('hello/{name?}', function ($name = 'everybody') {
	// throw new \Exception('tracy work');
    return 'hello, '.$name;
});

Route::get('say', [ 'as'=> 'hello', function () {
	// throw new \Exception('tracy work');
    return 'hello';
}]);

Route::group(['prefix' => 'admin'],function(){
	Route::get('dasboard',function(){
		return 'admin dasboard';
	});
});
