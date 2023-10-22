@extends('layouts.main')

@section('title','profile')

@section('content')
    
    <!--=============== MAIN ===============-->
    <main class="main">
    
    <!--=============== REGISTER ===============-->
        <section class="register section container">
            <h2 class="breadcrumb__title">Perfil</h2>
            <h3 class="breadcrumb__subtitle">Inicio > <span>Perfil</span></h3>
            <div class="card">
            <div class="register__container grid">

                <div class="profile__box">
                    <img src="/img/profile-pic.png" class="profile-pic">
                    <h3 class="breadcrumb__subtitle">Olá, Marisa Oliveira Cunha.
                </div>  

                <form action="" class="register__form grid">
                        <div class="info">
                            <h2 class="info__text">Informações Pessoais</h2>
                            <p>Nome: Marcos Almeida</p>
                            <p>Idade: 30 anos</p>
                            <p>Sexo: Masculino</p>
                        </div>
                        
                        <div class="profile__contact">
                            <h2 class="info__text">Informações de Contato</h2>
                            <p>Email: marcos@example.com</p>
                            <p>Telefone: (123) 456-7890</p>
                            <p>Endereço: Rua ABC, 123 - Cidade C, CC.</p>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <br><br>

            <div class="card">
                <button id="toggleFields" class="collapse-btn">Atualizar Dados</button>
                <div id="fieldsToToggle" style="display: none;">
                    <div class="register__inputs grid">
                        <div class="register__content">
                            <label for="" class="register__label">Nova Senha</label>
                            <input type="password" class="register__input" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                        </div>

                        <div class="register__content">
                            <label for="" class="register__label">Confirmar Senha</label>
                            <input type="text" class="register__input">
                        </div>
                    </div>

                    <div class="register__inputs grid">
                        <div class="register__content">
                            <label for="" class="register__label">Novo Email</label>
                            <input type="email" class="register__input">
                        </div>

                        <div class="register__content">
                            <label for="" class="register__label">Confirmar Email</label>
                            <input type="email" class="register__input">
                        </div>
                    </div>

                    <div class="register__inputs grid">
                        <div class="register__content">
                            <label for="" class="register__label">Novo Numero</label>
                            <input type="text" class="register__input">
                        </div>
        
                        <div class="register__content">
                            <label for="" class="register__label">Novo Endereço</label>
                            <input type="text" class="register__input">
                        </div>
                    </div>

                    <div>
                        <a href="#" class="button__update">Salvar</a>
                    </div> 

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