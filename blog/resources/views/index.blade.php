@extends('layouts.main')

@section('title','index')

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
                    <h3 class="cart__title">Camisa Oni Urban Rebel</h3>
                    <span class="cart__price">R$ 30,00</span>

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
            <p>dadadad</p>
            <article class="cart__card">
                <div class="cart__box">
                    <img src="/img/cart-2.png" alt="" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">Blusa City Urban Rebel</h3>
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
                    <h3 class="cart__title">Mochila Urban Rebel</h3>
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
            <span class="cart__prices-total">Total R$ 125,00</span>
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
                                    <h4 class="home__details-title">Blusa City</h4>
                                    <div class="span home__details-subtitle">Urban Rebel</div>
                                </div>
                            </div>
            
                            <div class="home__data">
                                <h3 class="home__subtitle">ITEM POPULAR</h3>
                                <h1 class="home__title">DESIGN ORIGINAL <br>NUNCA É <br> DISPENSÁVEL!</h1>
                                <p class="home__description">Criado pelos nossos designers, essa blusa é feita 100% de algodão, carinho e com a melhor
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
                                    <h4 class="home__details-title">Mochila Graffiti</h4>
                                    <div class="span home__details-subtitle">Urban Rebel</div>
                                </div>
                            </div>
            
                            <div class="home__data">
                                <h3 class="home__subtitle">ITEM POPULAR</h3>
                                <h1 class="home__title">CARREGE SUAS COISAS <br>COM ESTILO <br> E CONFORTO!</h1>
                                <p class="home__description">Criado pelos nossos designers, essa mochila é feita 100% de poliéster, carinho e com a melhor
                                costura existente.</p>
            
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
                                    <h4 class="home__details-title">Boné Street</h4>
                                    <div class="span home__details-subtitle">Urban Rebel</div>
                                </div>
                            </div>
            
                            <div class="home__data">
                                <h3 class="home__subtitle">PARTE DA COLEÇÃO STREET ART</h3>
                                <h1 class="home__title">PROTEGESSE <br> NESSE <br>VERÃO <br> CONOSCO!</h1>
                                <p class="home__description">Criado pelos nossos designers, esse boné é feito 100% de algodão, carinho e com a melhor
                                costura existente.</p>
            
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
            <h2 class="section__title"> Nova Coleção Street Art</h2>

            <div class="new__container container">
                <div class="swiper new-swiper">
                    <div class="swiper-wrapper">
                        <!--Nova coleção 1-->
                        <div class="new__content swiper-slide">
                            <div class="new__tag">Novo</div>
                            <img src="/img/new-1.png" alt="" class="new__img">
                            <h3 class="new__title">Camisa 023</h3>
                            <span class="new__subtitle">Stree Art</span>

                            <div class="new__prices">
                                <span class="new__price">R$ 40,00</span>
                            </div>

                            <a href="/shop" class="button new__button">
                                 <i class="bx bx-cart-alt new__icon"></i>
                            </a>
                        </div>

                        <!--Nova coleção 2-->
                        <div class="new__content swiper-slide">
                            <div class="new__tag">Novo</div>
                            <img src="/img/new-2.png" alt="" class="new__img">
                            <h3 class="new__title">Camisa Envy</h3>
                            <span class="new__subtitle">Stree Art</span>

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
                            <img src="/img/new-3.png" alt="" class="new__img">
                            <h3 class="new__title">Blusa Dead Inside</h3>
                            <span class="new__subtitle">Stree Art</span>

                            <div class="new__prices">
                                <span class="new__price">R$ 60,00</span>
                            </div>

                            <a href="/shop" class="button new__button">
                                 <i class="bx bx-cart-alt new__icon"></i>
                            </a>
                        </div>

                        <!--Nova coleção 4-->
                        <div class="new__content swiper-slide">
                            <div class="new__tag">Novo</div>
                            <img src="/img/new-4.png" alt="" class="new__img">
                            <h3 class="new__title">Camisa Dead Inside</h3>
                            <span class="new__subtitle">Stree Art</span>

                            <div class="new__prices">
                                <span class="new__price">R$ 40,00</span>
                            </div>

                            <a href="/shop" class="button new__button">
                                 <i class="bx bx-cart-alt new__icon"></i>
                            </a>
                        </div>

                        <!--Nova coleção 5-->
                        <div class="new__content swiper-slide">
                            <div class="new__tag">Novo</div>
                            <img src="/img/new-5.png" alt="" class="new__img">
                            <h3 class="new__title">Camisa Queen</h3>
                            <span class="new__subtitle">Stree Art</span>

                            <div class="new__prices">
                                <span class="new__price">R$ 40,00</span>
                            </div>

                            <a href="/shop" class="button new__button">
                                 <i class="bx bx-cart-alt new__icon"></i>
                            </a>
                        </div>

                        <!--Nova coleção 6-->
                        <div class="new__content swiper-slide">
                            <div class="new__tag">Novo</div>
                            <img src="/img/new-6.png" alt="" class="new__img">
                            <h3 class="new__title">Camisa Happy</h3>
                            <span class="new__subtitle">Stree Art</span>

                            <div class="new__prices">
                                <span class="new__price">R$ 40,00</span>
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
        <section class="steps section container">
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
</body>
</html>

@endsection