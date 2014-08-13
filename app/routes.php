<?php

/*
 *
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
use Carbon\Carbon;
use Illuminate\Queue\Jobs\Job;

Route::get('/queue/push', function () {
    Queue::push('MyWorker', ['message' => 'Hello!', 'date' => Carbon::now()]);
    Queue::later(10, 'MyWorker', ['message' => 'Delayed', 'date' => Carbon::now()]);
    return 'ok';
});

Route::get('/', function () {
    return View::make('hello');
});
