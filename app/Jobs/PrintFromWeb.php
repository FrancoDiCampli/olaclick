<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Rawilk\Printing\Facades\Printing;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class PrintFromWeb implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $printerId = 71219233;
        $printJob = Printing::newPrintTask()
                    ->file(public_path().'/images/test.pdf')
                    ->printer($printerId)
                    ->send();
    }
}
