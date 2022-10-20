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
        try {
            $basic  = new Basic("10dd1c9c", "f6Sc7JASBM4Y65Wg");
            $client = new Client($basic);
    
            $url = route('welcome.boletos', 'isisg');
    
            $response = $client->sms()->send(
                new SMS("523121113174", "melescaso.com", "Tus boletos para la boda: " . $url)
            );
            
            $message = $response->current();
            
            if ($message->getStatus() == 0) {
                return response()->json(['success' => true, 'message' => 'El mensaje fue enviado correctamente']);
            } else {
                return response()->json(['success' => false, 'message' => 'El mensaje no pudo ser enviado', 'error' => $message->getStatus()]);
            }
        } catch (\Throwable $th) {
            return  $th->getMessage();
        }
    }
}
