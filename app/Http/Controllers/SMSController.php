<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vonage\Client\Credentials\Basic;
use Vonage\Client;
use Vonage\SMS\Message\SMS;

class SMSController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function test()
    {
        $basic  = new Basic("10dd1c9c", "f6Sc7JASBM4Y65Wg");
        $client = new Client($basic);

        $response = $client->sms()->send(
            new SMS("523121113174", "Boda de Juandisis", 'Prueba de envío de SMS')
        );
        
        $message = $response->current();
        
        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
    }
}
