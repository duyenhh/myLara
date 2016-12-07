<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//use App\Biodata;
Route::get('/', function () {
    return view('welcome');
});
//router for insert
// Route::get('/insert',function(){
// 	Biodata::create(['title'=>'Its the first title','description'=>'it is description'])
// 	return 'biodata has created!';
// });
// // router for read/view
// Route::get('view',function(){
// 	$biodata = new Biodata();
// 	$data = $biodata-> all();
// 	// create loops here
// 	foreach ($data as $post) {
// 		# code...
// 		echo $post-> id . '-' . $post-> titles .'<br>';
// 	}
// });



Route::get('/home', 'HomeController@index');
Route::get('/index', function(){
	return view('index');
});

	Route::get('/login',"LoginController@getLogin");
Route::post('login','LoginController@postLogin');
Route::get('test',function(){
	return bcrypt('1234567');
});