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
    return 'ok';
});

Route::get('/', function () {
    return View::make('hello');
});

class MyWorker
{
    public function fire(Job $job, array $data)
    {
        echo sprintf('[%s] %s at %s', Carbon::now(), $data['message'], $data['date']['date']);
        $job->delete();
    }
}
