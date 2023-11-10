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
        
        $valida = parent::validaCEP($request->cep);

        if($valida !== false){
            //deixando o CEP  apenas com os numeros
            $cep_organiz = parent::organizaCep($request->cep);
            
            $endereco->id_usuario = auth()->user()->id;
            $endereco->cep = $cep_organiz;
            $endereco->rua=$request->rua;
            $endereco->number_house=$request->number_house;
            $endereco->complemento=$request->complemento;

            $endereco->save();

            return redirect('/registro_end')->with('msg', 'Endereço cadastrado com sucesso!');
        }else{
            return redirect('/registro_end')->with('msg', 'CEP fornecido está incorreto');
        }
    }
    
    public function edit_endereco($id){

        $endereco = Endereco::findOrfail($id);

        if($endereco->id_usuario == auth()->user()->id){
            return view('user.registro_edit', ['endereco' => $endereco]);
        }

        abort(403); //acesso não autorizado
    }

    public function update_endereco(Request $request){

        $valida = parent::validaCEP($request->cep);

        if($valida !== false){
            
            $dados = $request->all();

            $cep_organiz = parent::organizaCep($request->cep);

            $dados['cep'] = $cep_organiz;

            Endereco::FindOrFail($request->id)->update($dados);
            
            return redirect('/registro_end')->with('msg', 'Endereço editado com sucesso!');
        }else{
            return redirect()->back()->with('msg', 'CEP informado está incorreto');
        }
    }

    public function destroy_endereco($id){
        
        // Localize o endereco
        $endereco = Endereco::find($id);

        //Valida se o usuario dono do cadastro que está realizando a exclusão do produto
        if($endereco->id_usuario == auth()->user()->id){
            $endereco->delete();
            
            return redirect('/registro_end')->with('msg', 'Endereço excluido com sucesso!');
        }
        
        abort(403);
    }
}
