<?php
use Carbon\Carbon;

/**
 * Class QueueTest
 */
class QueueTest extends TestCase
{
    /**
     * @test
     */
    public function queuePush()
    {
        $now = Carbon::create(2014, 8, 13, 12, 34, 56);
        Carbon::setTestNow($now);

        Queue::shouldReceive('connected')->once();
        Queue::shouldReceive('push')->once()->with('MyWorker', ['message' => 'Hello!', 'date' => $now]);
        Queue::shouldReceive('later')->once()->with(10, 'MyWorker', ['message' => 'Delayed', 'date' => $now]);

        $this->client->request('GET', '/queue/push');

        $this->assertTrue($this->client->getResponse()->isOk());
    }
}
