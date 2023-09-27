@extends('layouts.main')

@section('title','sobre')

@section('content')

    <!--=============== CART ===============-->
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
        <!--=============== ABOUT ===============-->
        <section class="about section container">
            <h2 class="breadcrumb__title">Quem Somos</h2>
            <h3 class="breadcrumb__subtitle">Inicio > <span>Quem Somos</span></h3>

            <div class="about__container grid">
                <img src="/img/about-img.png" alt="" class="about__img">

                <div class="about__data">
                    <h2 class="section__title about__title">
                        Nossa História
                    </h2>

                    <p class="about__description">
                        A missão da You Matter é trazer o streetwear moderno feminino para o público
                        plus size brasileiro, sempre trazendo tendências e quebrando o tabu, de que,
                        mulhere acima do peso tem que usar um determinado tipo de roupa. O nome da empresa
                        foi pensado em vocês... You Matter significa "você importa", para nós vocês são importantes
                        . Queremos trazer sempre o melhor em questão de novidades, qualidade, caimente, tecido e
                        corte. Pois vocês importam.
                    </p>

                    <div class="about__details">
                        <p class="about__details-description">
                            <i class="bx bxs-check-square about__details-icon"></i>
                            Entregas dentro do prazo.
                        </p>
    
                        <p class="about__details-description">
                            <i class="bx bxs-check-square about__details-icon"></i>
                            Suporte para suas duvidas ou cuidado dos seus produtos.
                        </p>
    
                        <p class="about__details-description">
                            <i class="bx bxs-check-square about__details-icon"></i>
                            100% retorno do dinheiro caso o produto venha com defeito ou caso você não goste (Dentro de 3 dias).
                        </p>
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