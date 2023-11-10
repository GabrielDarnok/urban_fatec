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
        
        // Remova caracteres não numéricos do CEP
        $cep = preg_replace('/[^0-9]/', '', $cep);

        // Verifica se o CEP possui 8 dígitos
        if (strlen($cep) !== 8) {
            return false;
        }

        try {
            // Faz a requisição para a API do ViaCEP
            $client = new Client();
            $response = $client->get("https://viacep.com.br/ws/{$cep}/json/");

            // Converte a resposta JSON para um array
            $data = json_decode($response->getBody(), true);

            // Verifica se o CEP é válido na API do ViaCEP
            if (isset($data['cep'])) {
                return true;
            } else {
                return false;
            }
        } catch (RequestException $e) {
            // Tratamento de erro para falhas na requisição para a API
            return false;
        }
    }
    public function organizaCep($cep){
        // Remova caracteres não numéricos do CEP
        $cep = preg_replace('/[^0-9]/', '', $cep);

        return($cep);
    }
}
