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

        $dados = parent::consultaCarrinho();

        return view('index',['products' => $produtcs, 'dados' => $dados]);
    }
    public function cart(){
        
        $dados = parent::consultaCarrinho();
           
        return view('cart', ['dados' => $dados]);
    }
    public function contato(){
        
        $dados = parent::consultaCarrinho();

        return view('contato',['dados' => $dados]);
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
        
        #$if(!isset(auth()->user()->id) || auth()->user()->id != "admin"){
       #    return redirect('/');
       # }

        $produtcs = Product::all();

        return view('admin.admin',['products' => $produtcs]);
    }
    public function cadastroPage(){
        return view('cadastroPage');
    }
}
