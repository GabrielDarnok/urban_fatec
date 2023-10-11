@extends('layouts.main')

@section('title','profile')

@section('content')
    <!--=============== CART ==============-->
    <div class="cart" id="cart">
        <i class="bx bx-x cart__close" id="cart-close"></i>
        
        <h2 class="cart__title-center">Carrinho</h2>

        <div class="cart__container">
            <article class="cart__card">
                <div class="cart__box">
                    <img src="/img/cart-1.png" alt="" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">Top de manga comprida</h3>
                    <span class="cart__price">R$ 50,00</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class="bx bx-minus"></i>
                            </span>

                            <span class="cart__amount-number">1</span>

                            <span class="cart__amount-box">
                                <i class="bx bx-plus"></i>
                            </span>
                        </div>

                        <i class="bx bx-trash-alt cart__amount-trash"></i>
                    </div>
                </div>
            </article>

            <article class="cart__card">
                <div class="cart__box">
                    <img src="/img/cart-2.png" alt="" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">Cardigã de textura sólida</h3>
                    <span class="cart__price">R$ 50,00</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class="bx bx-minus"></i>
                            </span>

                            <span class="cart__amount-number">1</span>

                            <span class="cart__amount-box">
                                <i class="bx bx-plus"></i>
                            </span>
                        </div>

                        <i class="bx bx-trash-alt cart__amount-trash"></i>
                    </div>
                </div>
            </article>

            <article class="cart__card">
                <div class="cart__box">
                    <img src="/img/cart-3.png" alt="" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">SHEIN ICON Gorpcore</h3>
                    <span class="cart__price">R$ 45,00</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class="bx bx-minus"></i>
                            </span>

                            <span class="cart__amount-number">1</span>

                            <span class="cart__amount-box">
                                <i class="bx bx-plus"></i>
                            </span>
                        </div>

                        <i class="bx bx-trash-alt cart__amount-trash"></i>
                    </div>
                </div>
            </article>
        </div>

        <div class="cart__prices">
            <span class="cart__prices-item">3 Produtos</span>
            <span class="cart__prices-total">Total R$ 145,00</span>
        </div>
    </div>

    <!--=============== LOGIN ===============-->
    <div class="login" id="login">
        <i class="bx bx-x login__close" id="login-close"></i>

        <h2 class="login__title-center">Login</h2>
        <form action="" class="login__form grid">
            <div class="login__content">
                <label for="" class="login__label">Email</label>
                <input type="email" class="login__input">
            </div>

            <div class="login__content">
                <label for="" class="login__label">Senha</label>
                <input type="password" class="login__input">
            </div>

            <div>
                <a href="#" class="button">Entrar</a>
            </div>

            <div>
                <p class="signup">Nãe é cadastrado? <a href="/registro">Cadastrar-se agora.</a></p>
            </div>
        </form>
    </div>

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