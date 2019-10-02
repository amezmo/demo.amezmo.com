<?php

use Illuminate\Support\Facades\Log;

use App\Jobs\TestJob;
use App\Post;

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
    Log::info('Hit index. Does it break????');
    return view('welcome');
});

Route::get('/server-info', function () {
    phpinfo();
});

Route::get('/hello', function () {
    Log::info('Testing');
    return view('hello');
});

Route::get('/queues', function () {
    return view('queue');
});

Route::get('test-queues', function () {
    dispatch(new TestJob());
    return redirect('/queues')->with('queue_success', true);
});


Route::get('/posts', function () {
    return view('posts.list', [
        'posts' => json_encode(Post::all(), JSON_PRETTY_PRINT)
    ]);
});

Route::get('/posts/new', function () {
    return view('posts.create');
});

Route::post('/posts', function () {
    Post::create([
        'title' => request('title'),
        'body' => request('body')
    ]);

    return redirect('/posts');
});
