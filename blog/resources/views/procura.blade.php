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
                <a href="#" class="search__btn">
                    <input type="text" class="search__txt" placeholder="Pesquisar...">
                    <img src="/img/loupe.png" alt="lupa" height="20" width="20">
                </a>
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

@endsection