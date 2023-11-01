<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class CarrinhoController extends Controller
{
    public function add_carrinho(Request $request){
        $car = new Car();

        $car->id_produto = $request->id;
        $car->id_usuario = auth()->user()->id;
        $car->quantidade_car = $request->quantidade_car;

        $car->save();
        
        return redirect('/cart')->with('msg','Produto adicionado no carrinho!');
    }

    public function destroy_car($id){
        
        // Localize o produto
        $cart = Car::find($id);

        //Valida se o usuario dono do carrinho que está realizando a exclusão do produto
        if($cart->id_usuario == auth()->user()->id){
            $cart->delete();
            
            return redirect('/cart')->with('msg','Produto removido do carrinho!');
        }
          
        abort(403);//Acesso negado
    }
}
