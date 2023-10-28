<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class CarrinhoController extends Controller
{
    public function add_carrinho($id){
        $car = new Car();

        $car->id_produto = $id;
        $car->id_usuario = auth()->user()->id;

        $car->save();
        
        return redirect('/cart');
    }
}
