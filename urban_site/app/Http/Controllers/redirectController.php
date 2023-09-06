<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class redirectController extends Controller
{
    public function index(){
        return view('index');
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
        return view('shop');
    }
    public function sobre(){
        return view('sobre');
    }
}
