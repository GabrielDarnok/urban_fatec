@extends('layouts.main')

@section('title','procura')

@section('content')

<!--=============== MAIN ===============-->
<main class="main">
    <!--=============== REGISTER ===============-->
    <section class="search section container">
        <h2 class="breadcrumb__title">Pesquisar</h2>
        <h3 class="breadcrumb__subtitle">Inicio > <span>Pesquisar</span></h3>
        <div class="search__box">
            <form action="{{ route('busca.busca_product') }} ">
                @if (!isset($busca))
                <input class="input" name="search" placeholder="Pesquise aqui">
                @else
                <input class="input" name="search" placeholder="Pesquise aqui" value="{{ $busca }}">
                @endif
                <button type="submit">
                    <img src="/img/loupe.png" alt="lupa" height="20" width="20">
                </button>
            </form>
        </div>
        @if (isset($Product_find))
        <div class="shop__items grid">
            @foreach ($Product_find as $product)
            <div class="shop__content">
                <div class="shop__tag">Novo</div>
                <a href="/details">
                    <img src="/img/product/{{ $product->imagem_produto }}" alt="" class="shop__img">
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
        </div>
        @endif
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

@endsection