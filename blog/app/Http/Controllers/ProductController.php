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
        
        return redirect('/admin')->with('msg', 'Add com sucesso!');
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

    public function busca_product(){
        $busca = request('search');
        
        $message = 'Nenhum produto encontrado com os critérios de busca: ' . $busca;
        
        $products = product::where('nome_produto', 'LIKE', "%$busca%")->orWhere('categoria_produto', 'LIKE', "%$busca%")->get();
        
        if ($products->isEmpty() || empty($busca)) {
            return view('shop',['message' => $message, 'busca' =>  $busca]);
        }
        return view('shop', ['products' =>$products, 'busca' =>  $busca]);
    }

    public function show_product($id){

        $Product = product::findOrfail($id);

        $Products = product::all();

        return view('details', ['Product' => $Product , 'Products' => $Products]);

    }
}
