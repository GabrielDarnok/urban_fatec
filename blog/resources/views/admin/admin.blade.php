@extends('layouts.main')

@section('title','admin')

@section('content')

    <!--=============== MAIN ===============-->
    <main class="main">
        <!--=============== ADM ===============-->
        <section class="adm__container container">
            <h2 class="breadcrumb__title">Administrador</h2>
            <h3 class="breadcrumb__subtitle">Inicio > <span>Administrador</span></h3>
            
            <div class="containeradm">

                <div class="admin-product-form-container">
             
                   <form enctype="multipart/form-data" id="newProductAdd">
                   @csrf
                        <div class="add">
                            <h3>Adicionar um novo Produto</h3>
                        </div>
                      <input type="text" placeholder="Insira o nome do produto" id="nome_produto" name="nome_produto" class="box">
                      <input type="text" placeholder="Insira a descrição" id="descricao_produto" name="descricao_produto" class="box">
                      <input type="text" placeholder="Insira o valor" id="valor_produto" name="valor_produto" class="box">
                      <input type="text" placeholder="Insira a quantidade" id="quantidade_estoq" name="quantidade_estoq" class="box">

                      <div class="dropdown">
                        <button class="dropbtn">Selecione o tamanho</button>
                        <div class="dropdown-content">
                            <select type="text" class="form-control" name="tamanho_roupa" id="tamanho_roupa">
                                <option value="G">G</option>
                                <option value="GG">GG</option>
                                <option value="G2">G2</option>
                                <option value="G3">G3</option>
                                <option value="G4">G4</option>
                                <option value="G5">G5</option>
                                <option value="Todos">Todos os tamanhos</option>
                            </select>
                        </div>
                      </div>
                      
                      <div class="dropdown">
                        <button class="dropbtn">Selecione a Cor</button>
                        <div class="dropdown-content">
                          <select type="text" class="form-control" name="cor_produto" id="cor_produto">
                                <option value="P">Preto</option>
                                <option value="Vm">Vermelho</option>
                                <option value="Vd">Verde</option>
                                <option value="Am">Amarelo</option>
                            </select>
                        </div>
                      </div>

                      <div class="dropdown">
                        <button class="dropbtn">Categoria</button>
                        <div class="dropdown-content">
                          <select type="text" class="form-control" name="categoria_produto" id="categoria_produto">
                            <option value="Casual">Casual</option>
                            <option value="Streetwear">Streetwear</option>
                            <option value="Fofo">Fofo</option>
                            <option value="Festa">Festa</option>
                            <option value="Elegante">Elegante</option>
                            </select>
                        </div>
                      </div>
                      
                      <div>
                        <input type="file" accept="image/png, image/jpeg, image/jpg" name="imagem_produto" id="imagem_produto" class="box">
                        <input type="submit" class="btn" name="add_product" onclick="createProduct()" value="add_produto">
                      </div>
                   </form>
             
                </div>
             
                <div class="product-display">
                   <table class="product-display-table">
                      <thead>
                      <tr>
                         <th>Imagem</th>
                         <th>Nome</th>
                         <th>Descrição</th>
                         <th>Valor</th>
                         <th>Estoque</th>
                         <th>Tamanho</th>
                         <th>Cor</th>
                         <th>Ação</th>
                      </tr>
                      </thead>
                      <tbody id= "tableContent">
                      @foreach ($products as $product)
                      <tr>
                          <td><img src="img/product/{{ $product->imagem_produto }}" height="100" alt=""></td>
                          <td>{{ $product->nome_produto }}</td>
                          <td>{{ $product->descricao_produto }}</td>
                          <td>{{ number_format($product->valor_produto, 2, ',', '.') }}</td>
                          <td>{{ $product->quantidade_estoq }}</td>
                          <td>{{ $product->tamanho_roupa}}</td>
                          <td>{{ $product->cor_produto}}</td>
                          <td>
                            <a href="/admin/edit/{{ $product->id }}" class="btn"><i class="fas fa-edit"></i> editar </a> 
                              <form action="{{ route('product.destroy', ['product' => $product]) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn"> <i class="fas fa-edit"></i> DELETAR</button>
                              </form>
                          </td>
                       </tr>
                     @endforeach
                      </tbody>
                   </table>
                </div>
             </div>
        </section>
    </main>
    
    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <div class="bx bxs-up-arrow-alt scrollup__icon"></div>
    </a>

    <!--=============== SWIPER JS ===============-->
    <script src="/js/swiper-bundle.min.js"></script>

    <!--=============== JS ===============-->
    <script src="/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script>
        function createProduct(){
            event.preventDefault();
            var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const nome_produto = document.getElementById('nome_produto').value;
            const descricao_produto = document.getElementById('descricao_produto').value;
            const valor_produto = document.getElementById('valor_produto').value;
            const quantidade_estoq = document.getElementById('quantidade_estoq').value;
            const tamanho_roupa = document.getElementById('tamanho_roupa').value;
            const cor_produto = document.getElementById('cor_produto').value;
            const categoria_produto = document.getElementById('categoria_produto').value;
            const imagem_produtoSt = document.getElementById('imagem_produto');
            //const imagem_produto = imagem_produtoSt.replace(/^.*[\\\/]/, '');
            console.log(imagem_produto);

            var formData = new FormData();
            formData.append('nome_produto', nome_produto);
            formData.append('descricao_produto', descricao_produto);
            formData.append('valor_produto', valor_produto);
            formData.append('quantidade_estoq', quantidade_estoq);
            formData.append('tamanho_roupa', tamanho_roupa);
            formData.append('cor_produto', cor_produto);
            formData.append('categoria_produto', categoria_produto);
            formData.append('imagem_produto', imagem_produtoSt.files[0]);

            console.log(formData);
            $.ajax({
                url: '/products',
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                contentType: false,
                processData: false,
                success: function(response){
                  Swal.fire(
                    'Sucesso!',
                    'Produto adicionado com sucesso',
                    'success',
                  ); 
                  adicionarObjetosATabela(response);
                  document.getElementById('newProductAdd').reset();
                },
                error: function(xhr, status, error) {
                  Swal.fire(
                      'Erro!',
                      'Ocorreu um erro ao adicionar o produto: ' + error,
                      'error'
                  );
                }
            });
        }
        function adicionarObjetosATabela(objetos) {
            var corpoDaTabela = document.getElementById("tableContent");
            var htmlLinhas = '';

            objetos.products.forEach(function(objeto) {
                htmlLinhas += '<tr>';
                htmlLinhas += '<td>' + "<img src='img/product/"+objeto.imagem_produto+"' height='100' alt=>" + '</td>';
                htmlLinhas += '<td>' + objeto.nome_produto + '</td>';
                htmlLinhas += '<td>' + objeto.descricao_produto + '</td>';
                htmlLinhas += '<td>' + objeto.valor_produto + '</td>';
                htmlLinhas += '<td>' + objeto.quantidade_estoq + '</td>';
                htmlLinhas += '<td>' + objeto.tamanho_roupa + '</td>';
                htmlLinhas += '<td>' + objeto.cor_produto + '</td>';
                htmlLinhas += '<td>' + '<a href="/admin/edit/{{ $product->id }}" class="btn"><i class="fas fa-edit"></i> editar </a>' +
                                        '<form action="{{ route("product.destroy", ["product" => $product]) }}" method="POST">' +
                                        '    @csrf' +
                                        '    @method("DELETE")' +
                                        '    <button type="submit" class="btn"> <i class="fas fa-edit"></i> DELETAR</button>' +
                                        '</form>' + '</td>';
                htmlLinhas += '</tr>';
            });

            corpoDaTabela.innerHTML = htmlLinhas;
        }            
    </script>
</body>
</html>