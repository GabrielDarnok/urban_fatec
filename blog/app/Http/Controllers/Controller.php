<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Car;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function consultaCarrinho(){
        
        $carrinho = Car::where('id_usuario', auth()->user()->id)->get();
            
        //Atribuir os valores encontrados em um array
        $produtosNoCarrinho = [];

        //Retorna o valor do que está no carrinho
        $subtotal = 0;

        // Acesse os produtos relacionados a partir dos registros do carrinho
        foreach ($carrinho as $item) {
            $produto = $item->produto;
            $produto->carrinho_id = $item->id; // Adicione o ID do carrinho ao objeto de produto para poder ser referenciado na view
            $produto->quantidade_car = $item->quantidade_car;
            $produtosNoCarrinho[] = $produto;
            // Some o valor do produto ao subtotal
            $subtotal += $produto->valor_produto * $item->quantidade_car;
        }
        
        //Retorna a quantidade de produtos no carrinho
        $count = Car::where('id_usuario', auth()->user()->id)->sum('quantidade_car');

        return (['produtosNoCarrinho' => $produtosNoCarrinho, 'count' => $count, 'subtotal' => $subtotal, 'carrinho' => $carrinho]);
    }
    
        public function verificaUsuarioLog(){
        
        if(isset(auth()->user()->id)){
            return $this->consultaCarrinho();
        }
    }
    public function validaCEP($cep){
        
        // Remove todos os caracteres que não são números
        $cepNumerico = preg_replace('/[^0-9]/', '', $cep);
        
        if (strlen($cepNumerico) == 8) {
            return $cepNumerico; 
        } else {
            return false;
        }
    }
}
