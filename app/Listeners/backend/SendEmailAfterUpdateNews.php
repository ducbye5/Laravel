<?php

namespace App\Listeners\backend;

use App\Events\backend\NewsEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailAfterUpdateNews
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewsEvent  $event
     * @return void
     */
    public function handle(NewsEvent $event)
    {
        //
    }
}
