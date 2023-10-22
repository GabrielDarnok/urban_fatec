<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
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
        return view('cart');
    }
    public function contato(){
        return view('contato');
    }
    public function details(){
        return view('details');
    }
    public function procura(){
        return view('procura');
    }
    public function profile($id){
        
        $user = User::findOrFail($id);

        #Condição que verifica se o usuario que está acessando a view  tem o mesmo ID do usuario autenticado
        if (Gate::allows('view', $user)) {
            return view('profile', ['user' => $user]);
        }

        abort(403); // Acesso não autorizado
    }
    public function registro(){
        return view('registro');
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
