<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

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
    public function profile(){
        return view('profile');
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
