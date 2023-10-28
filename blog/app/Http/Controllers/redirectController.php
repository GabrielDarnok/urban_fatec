<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Endereco;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Gate;

class redirectController extends Controller
{
    public function index(){
        
        $produtcs = Product::all();

        return view('index',['products' => $produtcs]);
    }
    public function asa(){
        return view('asa');
    }
    public function cart(){
        
        $carrinho = Car::where('id_usuario', auth()->user()->id)->get();
        
        //Atribuir os valores encontrados em um array
        $produtosNoCarrinho = [];

        //Retorna a quantidade de produtos no carrinho
        $count = 0;

        // Acesse os produtos relacionados a partir dos registros do carrinho
        foreach ($carrinho as $item) {
            $produto = $item->produto;
            $produto->carrinho_id = $item->id; // Adicione o ID do carrinho ao objeto de produto para poder ser referenciado na view
            $produtosNoCarrinho[] = $produto;
            $count++;
        }
           
        return view('cart', ['produtosNoCarrinho' => $produtosNoCarrinho, 'count' => $count]);
    }
    public function contato(){
        return view('contato');
    }
    public function details(){
        return view('details');
    }
    public function profile($id){
        
        $user = User::findOrFail($id);
        
        #Condição que verifica se o usuario que está acessando a view  tem o mesmo ID do usuario autenticado
        if ($user->id == auth()->user()->id) {
            return view('user.profile');
        }

        abort(403); // Acesso não autorizado
    }
    public function registro(){

        $enderecos = Endereco::where('id_usuario', auth()->user()->id)->get();

        return view('user.registro_end', ['enderecos' => $enderecos]);
    }
    public function shop(){
        $produtcs = Product::all();

        return view('shop', ['products' => $produtcs]);
    }
    public function sobre(){
        return view('sobre');
    }
    public function welcome(){
        
        $produtcs = Product::all();

        return view('welcome', ['products' => $produtcs]);
    }
    public function admin(){
        
        $produtcs = Product::all();

        return view('admin.admin',['products' => $produtcs]);
    }
}
