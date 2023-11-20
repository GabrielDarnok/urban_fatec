<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use Cartalyst\Stripe\Exception\MissingParameterException;
use Cartalyst\Stripe\Exception\ServerErrorException;
use Cartalyst\Stripe\Exception\UnauthorizedException;
use App\Models\Car;
use App\Models\Pedido;
use App\Models\Product;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function processar(Request $request){
        $token = $request->input('stripeToken');
        
        $dados = parent::verificaUsuarioLog();

        try {
            $charge = Stripe::charges()->create([
                'amount' => $dados['subtotal'],
                'currency' => 'BRL',
                'source' => $token,
                'description' => 'Exemplo de Pagamento',
            ]);

            $pedido = new Pedido();

            $pedido->id_produto = implode(',', $dados['idsDosProdutos']);
            $pedido->tamanho_produto = implode(',', $dados['tamanhoProdutos']);
            $pedido->cor_produto = implode(',', $dados['corProdutos']);
            $pedido->quantidade_produto = implode(',', $dados['quantidadeProdutos']);
            $pedido->total_pedido = $dados['subtotal'];
            $pedido->status_pagamento = true; 

            $pedido->save();

            foreach($dados['idsDosProdutos'] as $index => $item){
                $produto = Product::find($item);

                // Obter a quantidade diretamente do array
                $quantidadeProduto = $dados['quantidadeProdutos'][$index];

                $produto->quantidade_estoq -= $quantidadeProduto;

                if($produto->quantidade_estoq === 0){
                    Product::where('id',$item)->delete();
                }else{
                    $produto->save();
                }
            }

            foreach($dados['carrinho_id'] as $cart){
                Car::where('id', $cart)->delete();
            }
            
            return redirect('/')->with('msg', 'Pagamento bem-sucedido!');
        } catch (CardErrorException $e) {
            // Tratamento de erro para falhas relacionadas ao cartão
            return redirect('/')->with('err', 'Erro no processamento do pagamento: ' . $e->getMessage());
        } catch (MissingParameterException $e) {
            // Tratamento de erro para parâmetros ausentes
            return redirect('/')->with('err', 'Erro no processamento do pagamento: Parâmetro ausente.');
        } catch (ServerErrorException $e) {
            // Tratamento de erro para falhas do lado do servidor
            return redirect('/')->with('err', 'Erro no processamento do pagamento: ' . $e->getMessage());
        } catch (UnauthorizedException $e) {
            // Tratamento de erro para falhas de autorização
            return redirect('/')->with('err', 'Erro no processamento do pagamento: Não autorizado.');
        } catch (\Exception $e) {
            // Tratamento de erro genérico
            return redirect('/')->with('err', 'Erro no processamento do pagamento: ' . $e->getMessage());
        }
    }
}
