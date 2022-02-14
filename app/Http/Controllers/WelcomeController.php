<?php

namespace App\Http\Controllers;

use App\Models\Boleto;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index($codigo = null)
    {
        $boleto = Boleto::where('codigo', $codigo)->first();
        if (!$boleto) {
            $boleto = null;
        }
        return view('welcome', compact('boleto'));
    }
}
