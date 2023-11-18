<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;

class StripeController extends Controller
{
    public function criarPagamento(Request $request)
    {
        // Lógica para criar um pagamento no Stripe
    }

    public function processarPagamento(Request $request)
    {
        // Lógica para processar um pagamento no Stripe
    }
}