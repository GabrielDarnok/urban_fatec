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

        //deixando o CEP  apenas com os numeros
        $cep_organiz = parent::organizaCep($request->cep);

        if ($this->validaCepExistente($cep_organiz)) {
            return redirect()->back()->with('err', 'Endereço já cadastrado.');
        }
        
        $valida = parent::validaCEP($cep_organiz);

        if($valida !== false){
            
            $endereco->id_usuario = auth()->user()->id;
            $endereco->cep = $cep_organiz;
            $endereco->rua=$request->rua;
            $endereco->number_house=$request->number_house;
            $endereco->complemento=$request->complemento;

            $endereco->save();

            return redirect('/registro_end')->with('msg', 'Endereço cadastrado com sucesso!');
        }else{
            return redirect('/registro_end')->with('err', 'CEP fornecido está incorreto');
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

            //Deixando o CPF apenas com os numeros
            $cep_organiz = parent::organizaCep($request->cep);

            if ($this->validaCepExistenteEdit($cep_organiz, $request->id)) {
                return redirect()->back()->with('err', 'Endereço já cadastrado.');
            }

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

    public function validaCepExistente($cep_form){

        $cep_cadastrado = Endereco::where('cep', $cep_form)->where('id_usuario', auth()->user()->id)->first();

        return $cep_cadastrado !== null;
    }

    public function validaCepExistenteEdit($cep_form, $id_endereco){
        
        $cep_cadastrado = Endereco::where('cep', $cep_form)->where('id_usuario', auth()->user()->id)->where('id', '!=', $id_endereco)->first();
        
        return $cep_cadastrado !== null;
    }
}
