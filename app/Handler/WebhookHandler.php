<?php

namespace App\Handler;

use App\Events\PrintOrder;
use App\Jobs\ProcessMenu;
use Illuminate\Support\Facades\Log;
use Spatie\WebhookClient\ProcessWebhookJob;


class WebhookHandler extends ProcessWebhookJob
{
    public $new_lead, $lead;

    public function handle()
    {
        $data = $this->webhookCall;

        $data = $data['payload'];
        Log::info($data);

        broadcast(new PrintOrder());

    }




}
