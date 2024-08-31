<?php

namespace App\Http\Controllers\Whatsapp\Webhook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    //

    public function webhook(Request $request)
    {
        $token = config('services.whatsapp.webhook_token');
        $hub_challenge = isset($_GET['hub_challenge']) ? $_GET['hub_challenge'] : '';
        $hub_verify_token = isset($_GET['hub_verify_token']) ? $_GET['hub_verify_token'] : '';
        if ($token === $hub_verify_token) {
            echo $hub_challenge;
            exit;
        }
    }

    public function recibe(Request $request)
    {
        $input = json_decode(file_get_contents('php://input'), true);
        error_log(print_r($input, true));
        return response('EVENT_RECEIVED', 200);
    }
}
