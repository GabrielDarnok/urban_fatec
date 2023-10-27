@extends('layouts.main')

@section('title', 'shop')

@section('content')

    <!--=============== MAIN ===============-->
    <main class="main">
        <!--=============== SHOP ===============-->
        <section class="shop section container">
            <h2 class="breadcrumb__title">Shop</h2>
            <h3 class="breadcrumb__subtitle">Inicio > <span>Shop</span></h3>
            <div style="display: flex; margin-bottom: 40px;">
                <div class="search__box" style = "background-color: #ffffff">
                    <form action="{{ route('busca.busca_product') }} "
                        style="display: flex; justify-content: space-between; width: 100%">
                        @if (!isset($busca))
                            <input class="input" style="border-radius: 10px; border: black" name="search"
                                placeholder="Pesquise aqui">
                        @else
                            <input class="input" style="border-radius: 10px; border: black" name="search"
                                placeholder="Pesquise aqui" value="{{ $busca }}">
                        @endif
                        <button type="submit" style="background: white;">
                            <img src="/img/loupe.png" alt="lupa" height="20" width="20">
                        </button>
                    </form>
                </div>
            </div>
            @if (isset($products))
                <div class="shop__container grid">
                    <div class="sidebar">
                        <h3 class="filter__title">Seleção de Filtro</h3>
                        <div class="filter__content">
                            <h3 class="filter__subtitle">Produto</h3>

                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>Novo</p> <span>(35)</span>
                            </div>

                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>Desconto</p> <span>(15)</span>
                            </div>
                        </div>

                        <div class="filter__content">
                            <h3 class="filter__subtitle">Categoria</h3>

                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>Menor Preço</p>
                            </div>

                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>Maior Preço</p>
                            </div>

                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>Popular</p>
                            </div>
                        </div>

                        <div class="filter__content">
                            <h3 class="filter__subtitle">Tamanho</h3>

                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>G</p> <span>(105)</span>
                            </div>

                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>GG</p> <span>(85)</span>
                            </div>

                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>G2</p> <span>(59)</span>
                            </div>

                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>G3</p> <span>(94)</span>
                            </div>

                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>G4</p> <span>(75)</span>
                            </div>

                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>G5</p> <span>(95)</span>
                            </div>
                        </div>

                        <div class="filter__content">
                            <h3 class="filter__subtitle">Estilos</h3>

                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>Casual</p> <span>(200)</span>
                            </div>

                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>Streetwear</p> <span>(124)</span>
                            </div>

                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>Fofo</p> <span>(489)</span>
                            </div>

                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>Festa</p> <span>(156)</span>
                            </div>

                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>Elegante</p> <span>(168)</span>
                            </div>

                            <div class="filter__content">
                                <h3 class="filter__subtitle">Sub Categoria</h3>

                                <div class="filter">
                                    <input type="checkbox" name="" id="">
                                    <p>Top & Camisas</p> <span>(105)</span>
                                </div>

                                <div class="filter">
                                    <input type="checkbox" name="" id="">
                                    <p>Blusa</p> <span>(135)</span>
                                </div>

                                <div class="filter">
                                    <input type="checkbox" name="" id="">
                                    <p>Saia & Minissaia</p> <span>(185)</span>
                                </div>

                                <div class="filter">
                                    <input type="checkbox" name="" id="">
                                    <p>Acessórios</p> <span>(104)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop__items grid">
                        @foreach ($products as $product)
                            <div class="shop__content">
                                <div class="shop__tag">Novo</div>
                                <a href="/shop/product/{{ $product->id }}">
                                    <img src="/img/product/{{ $product->imagem_produto }}" alt=""
                                        class="shop__img">
                                </a>
                                <h3 class="shop__title">{{ $product->nome_produto }}</h3>
                                <span class="shop__subtitle">{{ $product->descricao_produto }}r</span>

                                <div class="shop__prices">
                                    <span class="shop__price">{{ $product->valor_produto }}</span>
                                </div>
                                <a href="#" class="button shop__button">
                                    <i class="bx bx-cart-alt shop__icon"></i>
                                </a>
                            </div>
                        @endforeach
                        <div class="pagination">
                            <i class="bx bx-chevron-left pagination__icon"></i>

                            <span class="current">1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>&middot; &middot; &middot;</span>
                            <span>35</span>

                            <i class="bx bx-chevron-right pagination__icon"></i>
                        </div>
                    @elseif(isset($message))
                        <p style="text-align: center;">{{ $message }}</p>
            @endif
            </div>
            </div>
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
        $(function() {
            $('')
        });
    </script>
@endsection
