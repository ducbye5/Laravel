<?php

namespace App\Listeners\backend;
use File;
use App\Events\backend\NewsEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailAfterDeleteNews
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
        //sleep(10);
        $arr = $event->data;
        $filename = $arr['news_title'].'.txt';
        $data = 'Delete status with title : '. $arr['news_title'];
        File::put($filename,$data);
        return true;
    }
}
