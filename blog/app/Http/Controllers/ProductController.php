<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function store(Request $request){

        $product = new Product;
    
        $product->nome_produto = $request->nome_produto;
        $product->descricao_produto = $request->descricao_produto;
        $product->valor_produto = $request->valor_produto;
        $product->quantidade_estoq = $request->quantidade_estoq;
        $product->tamanho_roupa = $request->tamanho_roupa;
        $product->cor_produto = $request->cor_produto;
        $product->categoria_produto = $request->categoria_produto;
    
        //image upload
    
        if($request->hasFile('imagem_produto') && $request->file('imagem_produto')->isValid()){
            
            $requestImage = $request->imagem_produto;
    
            $extension = $requestImage->extension();
    
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
        
            $request->imagem_produto->move(public_path('img/product'), $imageName);
    
            $product->imagem_produto = $imageName;
        }
    
        $product->save();
        $produtcs = Product::all();
        
        return ['products' => $produtcs];
    }
    
    public function destroy($id){
        
        // Localize o produto
        $product = Product::find($id);

        if ($product) {
            
            $imagePath = $product->imagem_produto;

            if (Storage::exists("img/product/$imagePath")) {
                Storage::delete("img/product/$imagePath");
            }

            $product->delete();
        }

        return redirect('/admin');
    }
    
    public function edit($id){

        $Product = product::findOrfail($id);

        return view('admin.edit', ['Product' => $Product]);
    }

    public function update(Request $request){
        
        //Juntando os dados do request

        $dados = $request->all();

        //image upload update

        if($request->hasFile('imagem_produto') && $request->file('imagem_produto')->isValid()){
            
            $requestImage = $request->imagem_produto;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
        
            $request->imagem_produto->move(public_path('img/product'), $imageName);

            $dados ['imagem_produto'] = $imageName;
        }

        product::FindOrFail($request->id)->update($dados);

        return redirect('/admin')->with('msg', 'Editado com sucesso!');

    }

    public function busca_product(Request $request){
        $busca = $request->search;
        $tamanhos = $request->tamanhos;
        $estilos = $request->estilos;
        $categorias = $request->categorias;
        
        $message = 'Nenhum produto encontrado com os critérios de busca :(';
        
        $query = Product::query();

        if (!empty($busca)) {
            $query->where('nome_produto', 'like', '%' . $busca . '%');
        }
        if (!empty($tamanhos)) {
            $query->whereIn('tamanho_roupa', $tamanhos);
        }
        if (!empty($estilos)) {
            $query->whereIn('categoria_produto', $estilos);
        }
        if (!empty($categorias)) {
            if (in_array('-', $categorias)){               
                $query->orderBy('valor_produto', 'asc'); //menor preço
            }
            if (in_array('+', $categorias)){              
                $query->orderBy('valor_produto', 'desc'); //maior preço
            }
        }
        $products = $query->get();
        
        if ($products->isEmpty()) {
            return ['message' => $message];
        }
        return ['products' =>$products];
    }

    public function show_product($id){

        $Product = product::findOrfail($id);

        $Products = product::all();

        //Faz a consulta se o usuario está logado e retorna o $dados com os produtos do carrinho
        $dados = parent::verificaUsuarioLog();

        return view('details', ['Product' => $Product , 'Products' => $Products, 'dados' => $dados]);

    }
}
