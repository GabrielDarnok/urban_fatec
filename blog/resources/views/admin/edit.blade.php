@extends('layouts.main')

@section('title','edit-admin')

@section('content')

    <!--=============== MAIN ===============-->
    <main class="main">
        <!--=============== ADM ===============-->
        <section class="adm__container container">
            <h2 class="breadcrumb__title">Administrador</h2>
            <h3 class="breadcrumb__subtitle">Inicio > <span>Administrador</span></h3>
            
            <div class="containeradm">

                <div class="admin-product-form-container">
             
                   <form action="/admin/update/{{ $Product->id }}" method="post" enctype="multipart/form-data">
                   @csrf
                        <div class="add">
                            <h3>Adicionar um novo Produto</h3>
                        </div>
                      <input type="text" value="{{ $Product->nome_produto }}" id="nome_produto" name="nome_produto" class="box">
                      <input type="text" placeholder="Insira a descrição" value="{{ $Product->descricao_produto }}" id="descricao_produto" name="descricao_produto" class="box">
                      <input type="text" placeholder="Insira o valor" value="{{ $Product->valor_produto }}" id="valor_produto" name="valor_produto" class="box">
                      <input type="text" placeholder="Insira a quantidade" value="{{ $Product->quantidade_estoq }}" id="quantidade_estoq" name="quantidade_estoq" class="box">

                      <div class="dropdown">
                        <button class="dropbtn">Selecione o tamanho</button>
                        <div class="dropdown-content">
                            <select type="text" class="form-control" name="tamanho_roupa" id="tamanho_roupa">
                                <option value="G" {{ $Product->tamanho_roupa == "G" ? "selected = 'selected'": "" }}>G</option>
                                <option value="GG" {{ $Product->tamanho_roupa == "GG" ? "selected = 'selected'": "" }}>GG</option>
                                <option value="G2" {{ $Product->tamanho_roupa == "G2" ? "selected = 'selected'": "" }}>G2</option>
                                <option value="G3" {{ $Product->tamanho_roupa == "G3" ? "selected = 'selected'": "" }}>G3</option>
                                <option value="G4" {{ $Product->tamanho_roupa == "G4" ? "selected = 'selected'": "" }}>G4</option>
                                <option value="G5" {{ $Product->tamanho_roupa == "G5" ? "selected = 'selected'": "" }}>G5</option>
                                <option value="Todos" {{ $Product->tamanho_roupa == "Todos" ? "selected = 'selected'": "" }}>Todos os tamanhos</option>
                            </select>
                        </div>
                      </div>
                      
                      <div class="dropdown">
                        <button class="dropbtn">Selecione a Cor</button>
                        <div class="dropdown-content">
                          <select type="text" class="form-control" name="cor_produto" id="cor_produto">
                                <option value="P" {{ $Product->cor_produto == "P" ? "selected = 'selected'": "" }}>Preto</option>
                                <option value="Vm" {{ $Product->cor_produto == "Vm" ? "selected = 'selected'": "" }}>Vermelho</option>
                                <option value="Vd" {{ $Product->cor_produto == "Vd" ? "selected = 'selected'": "" }}>Verde</option>
                                <option value="Am" {{ $Product->cor_produto == "Am" ? "selected = 'selected'": "" }}>Amarelo</option>
                            </select>
                        </div>
                      </div>

                      <div class="dropdown">
                        <button class="dropbtn">Categoria</button>
                        <div class="dropdown-content">
                          <select type="text" class="form-control" name="categoria_produto" id="categoria_produto">
                            <option value="Casual" {{ $Product->categoria_produto == "Casual" ? "selected = 'selected'": "" }}>Casual</option>
                            <option value="Streetwear" {{ $Product->categoria_produto == "Streetwear" ? "selected = 'selected'": "" }}>Streetwear</option>
                            <option value="Fofo" {{ $Product->categoria_produto == "Fofo" ? "selected = 'selected'": "" }}>Fofo</option>
                            <option value="Festa" {{ $Product->categoria_produto == "Festa" ? "selected = 'selected'": "" }}>Festa</option>
                            <option value="Elegante" {{ $Product->categoria_produto == "Elegante" ? "selected = 'selected'": "" }}>Elegante</option>
                            </select>
                        </div>
                      </div>
                      
                      <div>
                        <input type="file" accept="image/png, image/jpeg, image/jpg" name="imagem_produto" id="imagem_produto" class="box">
                        <img src="/img/product/ {{$Product->imagem_produto}}" alt="{{ $Product->nome_produto }}" class="img-preview">  
                        <input type="submit" class="btn" value="edit produto">
                    </div>
                   </form>
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
</body>
</html>