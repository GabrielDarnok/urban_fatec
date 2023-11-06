@extends('layouts.main')

@section('title','shop')

@section('content')

    <!--=============== MAIN ===============-->
    <main class="main">
        <!--=============== SHOP ===============-->
        <section class="shop section container">
            <h2 class="breadcrumb__title">Shop</h2>
            <h3 class="breadcrumb__subtitle">Inicio > <span>Shop</span></h3>
            <div style="display: flex; margin-bottom: 40px;">
                <div class="search__box" style = "background-color: #ffffff">
                    <div  style="display: flex; justify-content: space-between; width: 100%">
                        <input class="input" style="border-radius: 10px; border: black" name="search" placeholder="Pesquise aqui" id="valorPesquisa" oninput="productFilter()">
                        <button style="background: white;" onclick="productFilter()">
                            <img src="/img/loupe.png" alt="lupa" height="20" width="20">
                        </button>
                    </div>
                </div>
            </div>
            @if(isset($message))
				<p style="text-align: center;">{{ $message }}</p>
            @elseif(isset($products))
            <div class="shop__container grid">
                <div class="sidebar" style="height: fit-content">
                    <h3 class="filter__title">Seleção de Filtro</h3>
                    <div class="filter__content">
                        <h3 class="filter__subtitle">Categoria</h3>

                        <div class="filter">
                            <input type="checkbox" value="-" class="inputCategoria" onclick= "productFilter()" name="" id="">
                            <p>Menor Preço</p>
                        </div>

                        <div class="filter" >
                            <input type="checkbox" value="+" class="inputCategoria" onclick= "productFilter()" name="" id="">
                            <p>Maior Preço</p>
                        </div>

                    </div>

                    <div class="filter__content">
                        <h3 class="filter__subtitle">Tamanho</h3>

                        <div class="filter">
                            <input type="checkbox" name="" id="" value="G" onclick= "productFilter()" class="inputTamanho">
                            <p>G</p> 
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="" value="GG" onclick= "productFilter()" class="inputTamanho">
                            <p>GG</p> 
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="" value="G2" onclick= "productFilter()" class="inputTamanho">
                            <p>G2</p> 
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="" value="G3" onclick= "productFilter()" class="inputTamanho">
                            <p>G3</p> 
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="" value="G4" onclick= "productFilter()" class="inputTamanho">
                            <p>G4</p> 
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="" value="G5" onclick= "productFilter()" class="inputTamanho">
                            <p>G5</p> 
                        </div>
                    </div>

                    <div class="filter__content">
                        <h3 class="filter__subtitle">Estilos</h3>

                        <div class="filter">
                            <input type="checkbox" name="" id="" value="Casual" onclick= "productFilter()" class="inputEstilo">
                            <p>Casual</p> 
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="" value="Streetwear" onclick= "productFilter()" class="inputEstilo">
                            <p>Streetwear</p> 
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="" value="Fofo" onclick= "productFilter()" class="inputEstilo">
                            <p>Fofo</p> 
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="" value="Festa" onclick= "productFilter()" class="inputEstilo">
                            <p>Festa</p> 
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="" value="Elegante" onclick= "productFilter()" class="inputEstilo">
                            <p>Elegante</p> 
                        </div>

                    </div>
                </div>       
                <div class="shop__items grid" id="tableContent">
                    @foreach ($products as $product)
                    <div class="shop__content">
                        <a href="/shop/product/{{ $product->id }}">
                            <img src="/img/product/{{ $product->imagem_produto }}" alt="" class="shop__img">
                        </a>
                        <h3 class="shop__title">{{ $product->nome_produto }}</h3>
                        <span class="shop__subtitle">{{ $product->descricao_produto }}r</span>

                        <div class="shop__prices">
                            <span class="shop__price">{{ number_format($product->valor_produto, 2, ',', '.') }}</span>
                        </div>
                        <a href="/shop/product/{{ $product->id }}" class="button shop__button">
                            <i class="bx bx-cart-alt shop__icon"></i>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="pagination">
                <i class="bx bx-chevron-left pagination__icon"></i>

                <span class="current">1</span>
                <span>2</span>
                <span>3</span>
                <span>&middot; &middot; &middot;</span>
                <span>35</span>

                <i class="bx bx-chevron-right pagination__icon"></i>
            </div>
            @endif
        </section>
    </main>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <div class="bx bxs-up-arrow-alt scrollup__icon"></div>
    </a>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!--=============== SWIPER JS ===============-->
    <script src="/js/swiper-bundle.min.js"></script>

    <!--=============== JS ===============-->
    <script src="/js/main.js"></script>
    
    <script>
        function productFilter() {
            const pesquisaValor = document.getElementById('valorPesquisa').value;
            var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            var categorias = [];
            var tamanhos = [];
            var estilos = [];
            var allCategorias = document.querySelectorAll('.inputCategoria');
            var allEstilos = document.querySelectorAll('.inputEstilo');
            var allTamanhos = document.querySelectorAll('.inputTamanho');

            allCategorias.forEach(function (checkbox) {
                if (checkbox.checked) {
                    categorias.push(checkbox.value);
                }
            });

            allEstilos.forEach(function (checkbox) {
                if (checkbox.checked) {
                    estilos.push(checkbox.value);
                }
            });

            allTamanhos.forEach(function (checkbox) {
                if (checkbox.checked) {
                    tamanhos.push(checkbox.value);
                }
            });

            console.log("Categorias selecionadas:", categorias);
            console.log("Estilos selecionados:", estilos);
            console.log("Tamanhos selecionados:", tamanhos);

            $.ajax({
                url: '/procura/product',
                type: 'POST',
                data: { 'search': pesquisaValor,
                        'categorias': categorias,
                        'estilos': estilos,
                        'tamanhos': tamanhos, 
                    },
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response){
                    console.log(response);
                    adicionarProdutosTabela(response);
                },
            });
        }
        function adicionarProdutosTabela(objetos){
            var corpoTabela = document.getElementById('tableContent');
            var htmlProduct = '';
            if(objetos.message === undefined){
                objetos.products.forEach(function(objeto) {
                    htmlProduct += '<div class="shop__content">';
                    htmlProduct += '<a href="/shop/product/'+objeto.id+'">';
                    htmlProduct += '<img src="/img/product/'+objeto.imagem_produto+'" alt="" class="shop__img"></a>';
                    htmlProduct += '<h3 class="shop__title">'+objeto.nome_produto+'</h3>';
                    htmlProduct += '<span class="shop__subtitle">'+objeto.descricao_produto+'</span>';
                    htmlProduct += ' <div class="shop__prices"><span class="shop__price">'+objeto.valor_produto+'</span></div>';
                    htmlProduct += '<a href="/shop/product/'+ objeto.id+'" class="button shop__button"><i class="bx bx-cart-alt shop__icon"></i></a></div>';
                });
                corpoTabela.innerHTML = htmlProduct;
            }else{
                corpoTabela.innerHTML =  objetos.message;
            }
        }
    </script>
    
@endsection