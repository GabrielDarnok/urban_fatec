@extends('layouts.main')

@section('title','registro')

@section('content')
    
    <!--=============== MAIN ===============-->
    <main class="main">
    
        <!--=============== REGISTER ===============-->
        <section class="register section container">
            <h2 class="breadcrumb__title">Registro</h2>
            <h3 class="breadcrumb__subtitle">Inicio > <span>Registro</span></h3>
            <div class="card">
            <div class="register__container grid">
                
                <form action="" class="register__form grid">
                    <div class="register__inputs grid">
                        <div class="register__content">
                             <label for="" class="register__label">Nome</label>
                             <input type="text" class="register__input">
                        </div>

                        <div class="register__content">
                            <label for="" class="register__label">Sobrenome</label>
                            <input type="text" class="register__input">
                        </div>

                        <div class="register__content">
                            <label for="" class="contact__label">Usuário</label>
                            <input type="text" class="register__input">
                        </div>

                        <div class="register__content">
                            <label for="" class="register__label">Senha</label>
                            <input type="password" class="register__input">
                        </div>

                        <div class="register__content">
                            <label for="" class="register__label">Confirmar Senha</label>
                            <input type="text" class="register__input">
                        </div>

                        <div class="register__content">
                            <label for="" class="register__label">Email</label>
                            <input type="email" class="register__input">
                        </div>

                        <div class="register__content">
                            <label for="" class="register__label">Confirmar Email</label>
                            <input type="email" class="register__input">
                        </div>

                        <div class="register__content">
                            <label for="" class="register__label">Endereço</label>
                            <input type="text" class="register__input">
                        </div>
                    </div>
                    
                    <div class="filter">
                        <input type="checkbox" name="" id="">
                        <p>Concordo com os termos.</p>
                    </div>

                   <div>
                        <a href="#" class="button">Cadastrar</a>
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

@endsection