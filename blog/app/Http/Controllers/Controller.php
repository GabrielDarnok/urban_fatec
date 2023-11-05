<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Car;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function consultaCarrinho(){
        
        $carrinho = Car::where('id_usuario', auth()->user()->id)->get();
            
            //Atribuir os valores encontrados em um array
            $produtosNoCarrinho = [];

            //Retorna a quantidade de produtos no carrinho
            $count = 0;

            //Retorna o valor do que está no carrinho
            $subtotal = 0;

            // Acesse os produtos relacionados a partir dos registros do carrinho
            foreach ($carrinho as $item) {
                $produto = $item->produto;
                $produto->carrinho_id = $item->id; // Adicione o ID do carrinho ao objeto de produto para poder ser referenciado na view
                $produtosNoCarrinho[] = $produto;
                $count++;
                // Some o valor do produto ao subtotal
                $subtotal += $produto->valor_produto;
            }

            return (['produtosNoCarrinho' => $produtosNoCarrinho, 'count' => $count, 'subtotal' => $subtotal]);
        }
    
        public function verificaUsuarioLog(){
        
        if(isset(auth()->user()->id)){
            $this->consultaCarrinho();
        }
    }
    
}
