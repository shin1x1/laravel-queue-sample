<?php
use Carbon\Carbon;
use Illuminate\Queue\Jobs\Job;

/**
 * Class MyWorker
 */
class MyWorker
{
    /**
     * @param Job $job
     * @param array $data
     */
    public function fire(Job $job, array $data)
    {
        echo sprintf('[%s] %s at %s', Carbon::now(), $data['message'], $data['date']['date']) . PHP_EOL;
        $job->delete();
    }
}
