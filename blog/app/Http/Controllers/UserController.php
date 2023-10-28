<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Endereco;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function cadastrar_endereco(Request $request){
        
        $endereco = new Endereco;

        $endereco->id_usuario = auth()->user()->id;
        $endereco->cep = $request->cep;
        $endereco->rua=$request->rua;
        $endereco->number_house=$request->number_house;
        $endereco->complemento=$request->complemento;

        $endereco->save();
        
        return redirect('/registro');
    }
    
    public function edit_endereco($id){

        $endereco = Endereco::findOrfail($id);

        return view('registro_edit', ['endereco' => $endereco]);
    }

    public function update_endereco(Request $request){

        $dados = $request->all();

        Endereco::FindOrFail($request->id)->update($dados);
        
        return redirect('/registro');
    }

    public function destroy_endereco($id){
        
        // Localize o produto
        $endereco = Endereco::find($id);

        $endereco->delete();
        
        return redirect('/registro');
    }
}
