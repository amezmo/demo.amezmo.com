<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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

Route::get('/upload', function () {
    return view('upload-form');
});

Route::post('/upload', function (Request $request) {
    $file = $request->file('file');
    
    $path = $file->store('img');
        
    echo "Path: " . $path;
    echo "<br />";

    echo '<a href="'.asset('storage/img/'.$file->hashName()).'">'.asset('storage/img/'.$file->hashName()).'</a>';
});

Route::get('/mysql', function () {
    $pdo = DB::connection()->getPdo();
    dump($pdo);
    dump($pdo->query("SHOW STATUS LIKE 'Ssl_cipher'")->fetch(PDO::FETCH_ASSOC));
});

Route::get('/', function () {
    Log::info('Before sleep???');
    Log::info('After sleep. Does it break????');
    return view('welcome');
});

Route::get('/path', function () {
    return response()->json([
        'storage_path' => storage_path(),
        'other' => storage_path('logs/laravel.log')
    ]);
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
