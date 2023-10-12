@extends('layouts.main')

@section('title','index')f

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
        <!--=============== HOME ===============-->
        <section class="home container">
            <div class="swiper home-swiper">
                <div class="swiper-wrapper">
                    <!--Slide 1 aqui-->
                    <section class="swiper-slide">
                        <div class="home__content grid">
                            <div class="home__group">
                                <img src="/img/slide-2.png" alt="" class="home__img">
                                <div class="home__indicator"></div>
            
                                <div class="home__details-img">
                                    <h4 class="home__details-title">Cardigã de textura sólida</h4>
                                    <div class="span home__details-subtitle">You Matter</div>
                                </div>
                            </div>
            
                            <div class="home__data">
                                <h3 class="home__subtitle">ITEM POPULAR</h3>
                                <h1 class="home__title">DESIGN PLUS SIZE NUNCA É  DISPENSÁVEL!</h1>
                                <p class="home__description">Criado pelos nossos designers, esse cardigã é feito com carinho e com a melhor
                                costura existente.</p>
            
                                <div class="home__buttons">
                                    <a href="/shop" class="button">Comprar Agora</a>
                                    <a href="/shop" class="button--link button--flex">Ver Detalhes <i class="bx bx-right-arrow-alt button__icon">
                                    </i></a>
                                </div>
            
                            </div>
                        </div>
                    </section>
            
                    <!--Slide 2 aqui-->
                    <section class="swiper-slide">
                        <div class="home__content grid">
                            <div class="home__group">
                                <img src="/img/slide-3.png" alt="" class="home__img">
                                <div class="home__indicator"></div>
            
                                <div class="home__details-img">
                                    <h4 class="home__details-title">Moletom Sólido Cropped</h4>
                                    <div class="span home__details-subtitle">You Matter</div>
                                </div>
                            </div>
            
                            <div class="home__data">
                                <h3 class="home__subtitle">ITEM POPULAR</h3>
                                <h1 class="home__title">SAIA A NOITE OU NO <br> FRIO COM CONFORTO!</h1>
                                <p class="home__description">Feito de poliéster esse moletom te garantirá conforto a onde quer que você vá
                                    sem perder seu charma e beleza.
                                </p>
            
                                <div class="home__buttons">
                                    <a href="/shop" class="button">Comprar Agora</a>
                                    <a href="/shop" class="button--link button--flex">Ver Detalhes <i class="bx bx-right-arrow-alt button__icon">
                                    </i></a>
                                </div>
            
                            </div>
                        </div>
                    </section>
            
                    <!--Slide 3 aqui-->
                    <section class="swiper-slide">
                        <div class="home__content grid">
                            <div class="home__group">
                                <img src="/img/slide-1.png" alt="" class="home__img">
                                <div class="home__indicator"></div>
            
                                <div class="home__details-img">
                                    <h4 class="home__details-title">Calça Jeans Cargo Denim</h4>
                                    <div class="span home__details-subtitle">You Matter</div>
                                </div>
                            </div>
            
                            <div class="home__data">
                                <h3 class="home__subtitle">ITEM POPULAR</h3>
                                <h1 class="home__title">ANDE COM ESTILO COM A GENTE!</h1>
                                <p class="home__description">Criado para usar no dia a dia ou naquela saida com as amigas, você irá se destacar a onde você esteja.</p>
            
                                <div class="home__buttons">
                                    <a href="/shop" class="button">Comprar Agora</a>
                                    <a href="/shop" class="button--link button--flex">Ver Detalhes <i class="bx bx-right-arrow-alt button__icon">
                                    </i></a>
                                </div>
            
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-pagination"></div>
              </div>
        </section>

        <!--=============== DISCOUNT ===============-->
        <section class="discount section">
            <div class="discount__container container grid">
                <img src="/img/discount.png" alt="" class="discount__img">

                <div class="discount__data">
                    <h2 class="discount__title">5% de Desconto <br> Em Pagamentos Via Pix!</h2>
                    <a href="/shop" class="button">Ir as Compras</a>
                </div>
            </div>
        </section>

        <!--=============== NEW COLECTION ===============-->
        <section class="new section">
            <h2 class="section__title"> Alguns dos nossos produtos</h2>

            <div class="new__container container">
                <div class="swiper new-swiper">
                    <div class="swiper-wrapper">
                        <!--Nova coleção 1-->
                        <div class="new__content swiper-slide">
                            <div class="new__tag">Novo</div>
                            <a href="#">
                                <img src="/img/new-1.png" alt="" class="new__img">
                            </a>
                            <h3 class="new__title">Saia Cargo</h3>
                            <span class="new__subtitle">You Matter</span>

                            <div class="new__prices">
                                <span class="new__price">R$ 40,00</span>
                            </div>

                            <a href="#" class="button new__button">
                                 <i class="bx bx-cart-alt new__icon"></i>
                            </a>
                        </div>

                        <!--Nova coleção 2-->
                        <div class="new__content swiper-slide">
                            <div class="new__tag">Novo</div>
                            <a href="#">
                                <img src="/img/new-2.png" alt="" class="new__img">
                            </a>
                            <h3 class="new__title">Top Tank Crop</h3>
                            <span class="new__subtitle">You Matter</span>

                            <div class="new__prices">
                                <span class="new__price">R$ 40,00</span>
                            </div>

                            <a href="/shop" class="button new__button">
                                 <i class="bx bx-cart-alt new__icon"></i>
                            </a>
                        </div>

                        <!--Nova coleção 3-->
                        <div class="new__content swiper-slide">
                            <div class="new__tag">Novo</div>
                            <a href="#">
                                <img src="/img/new-3.png" alt="" class="new__img">
                            </a>
                            <h3 class="new__title">SHEIN ICON Gorpcore</h3>
                            <span class="new__subtitle">You Matter</span>

                            <div class="new__prices">
                                <span class="new__price">R$ 45,00</span>
                            </div>

                            <a href="/shop" class="button new__button">
                                 <i class="bx bx-cart-alt new__icon"></i>
                            </a>
                        </div>

                        <!--Nova coleção 4-->
                        <div class="new__content swiper-slide">
                            <div class="new__tag">Novo</div>
                            <a href="#">
                                <img src="/img/new-4.png" alt="" class="new__img">
                            </a>
                            <h3 class="new__title">Vestido Apertado</h3>
                            <span class="new__subtitle">You Matter</span>

                            <div class="new__prices">
                                <span class="new__price">R$ 80,00</span>
                            </div>

                            <a href="/shop" class="button new__button">
                                 <i class="bx bx-cart-alt new__icon"></i>
                            </a>
                        </div>

                        <!--Nova coleção 5-->
                        <div class="new__content swiper-slide">
                            <div class="new__tag">Novo</div>
                            <a href="#">
                                <img src="/img/new-5.png" alt="" class="new__img">
                            </a>
                            <h3 class="new__title">Mini vestido cargo</h3>
                            <span class="new__subtitle">You Matter</span>

                            <div class="new__prices">
                                <span class="new__price">R$ 90,00</span>
                            </div>

                            <a href="/shop" class="button new__button">
                                 <i class="bx bx-cart-alt new__icon"></i>
                            </a>
                        </div>

                        <!--Nova coleção 6-->
                        <div class="new__content swiper-slide">
                            <div class="new__tag">Novo</div>
                            <a href="#">
                                <img src="/img/new-6.png" alt="" class="new__img">
                            </a>
                            <h3 class="new__title">Minissaia com cordão</h3>
                            <span class="new__subtitle">You Matter</span>

                            <div class="new__prices">
                                <span class="new__price">R$ 50,00</span>
                            </div>

                            <a href="/shop" class="button new__button">
                                 <i class="bx bx-cart-alt new__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== STEPS ===============-->
        <section class="steps section container" id="stepslink">
            <div class="steps__bg">
                <h2 class="section__title">Como encomendar <br> do shop!</h2>

                <div class="steps__container grid">
                    <!--PASSO 1-->
                    <div class="steps__card">
                        <div class="steps__card-number">01</div>
                        <h3 class="steps__card-title">Escolha Um Produto</h3>
                        <p class="steps__card-description">
                            Temos uma variedade de produtos a sua escolha e disposição, esperamos sua compra :)
                        </p>
                    </div>

                    <!--PASSO 2-->
                    <div class="steps__card">
                        <div class="steps__card-number">02</div>
                        <h3 class="steps__card-title">Faça Um Pedido</h3>
                        <p class="steps__card-description">
                            Assim que seu pedido for confirmado, nós iremos para o próximo passo que é o envio!
                        </p>
                    </div>

                    <!--PASSO 3-->
                    <div class="steps__card">
                        <div class="steps__card-number">03</div>
                        <h3 class="steps__card-title">Entrega</h3>
                        <p class="steps__card-description">
                            Enviaremos seu produto no mesmo dia, em pouco tempo você o terá diretamente na sua casa!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== NEWS ===============-->
        <section class="newsletter section">
            <div class="newsletter__container container">
                <h2 class="section__title">Newsletter</h2>
                <p class="newsletter__description">
                    Fique por dentro de promoções, novas coleções ou novos produtos. Apenas cadastrando o seu Email.
                </p>

                <form action="" class="newsletter__form">
                    <input type="email" placeholder="Digite seu email..." class="newsletter__input">
                    <button class="button">Inscrever</button>
                </form>
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