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
	$a = Illuminate\Support\collection::make([1,2,3,4,5]);
	/*dump(env('APP_DEBUG'));
	Debug::testDebug1111();*/
	DB::select('select * from m_html_data');
	Debugbar::info(\Config::get('cache'));
Debugbar::error('Error!');
Debugbar::warning('Watch out…');
Debugbar::addMessage('Another message', 'mylabel');
	App::setLocale('vi');
	//echo trans('common.popup_button_close');
    return view('index');
});

Route::post('/test', function () {
	$a = [];
	$a['a'] = '11';
	$a['b'] = '22';
	$a['c'] = '33';
	
	$returnHTML = view('response.test')->with('userjobs', $a)->render();
	return response()->json(array('success' => true, 'html'=>$returnHTML));
	
    //return response()->json($a);
});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
