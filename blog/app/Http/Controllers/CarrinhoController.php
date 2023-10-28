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

    public function destroy_car($id){
        
        // Localize o produto
        $cart = Car::find($id);

        //Valida se o usuario dono do carrinho que está realizando a exclusão do produto
        if($cart->id_usuario == auth()->user()->id){
            $cart->delete();
            
            return redirect('/cart');
        }
          
        abort(403);//Acesso negado
    }
}
