<?php

use Illuminate\Support\Facades\Log;

use App\Jobs\TestJob;

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
    Log::info('Hello World, this is your log entry');
    return view('welcome');
});

Route::get('/hello', function () {
    Log::info('Testing');
    return view('hello');
});

Route::get('/queues', function () {
    return view('queues');
});

Route::get('test-queues', function () {
    dispatch(new TestJob());
    return redirec('/queues')->with('queue_success', true);
});
