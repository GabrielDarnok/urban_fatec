<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function processar(Request $request){
        $token = $request->input('stripeToken');
        
        try {
            $charge = Stripe::charges()->create([
                'amount' => 10,  // Valor em centavos
                'currency' => 'BRL',
                'source' => $token,
                'description' => 'Exemplo de Pagamento',
            ]);

            // Lógica adicional, como salvar informações do pedido no banco de dados

            return redirect('/')->with('msg', 'Pagamento bem-sucedido!');
        }catch (\Exception $e) {
            // Tratamento de erro
            return redirect('/')->with('err', 'Erro no processamento do pagamento: ' . $e->getMessage());
        }
    }
}
