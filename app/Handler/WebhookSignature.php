<?php

namespace App\Handler;

use Illuminate\Support\Env;
use Spatie\WebhookClient\SignatureValidator\SignatureValidator;
use Illuminate\Http\Request;
use Spatie\WebhookClient\Exceptions\WebhookFailed;
use Spatie\WebhookClient\WebhookConfig;

class WebhookSignature implements SignatureValidator
{
    public function isValid(Request $request, WebhookConfig $config): bool
    {


        $signature = $request->header($config->signatureHeaderName);

        if (!$signature) {
            return false;
        }

        if ($signature === $config->signingSecret) {
            return true;
        }

        return false;
    }
}
