<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class TestRabbitJob implements ShouldQueue
{
    use Dispatchable, Queueable;

    public function handle()
    {
        logger('TestRabbitJob executed!');
        logger('TestRabbitJob executed at '.now());
    }
}
