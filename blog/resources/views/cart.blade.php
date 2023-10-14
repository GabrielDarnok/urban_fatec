@extends('layouts.main')

@section('title','cart')

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
         <!--=============== SHOP ===============-->
         <section class="shop section container">
            <h2 class="breadcrumb__title">Carrinho</h2>
            <h3 class="breadcrumb__subtitle">Inicio > <span>Carrinho</span></h3>

            <div class="checkout__container grid">
                <div class="checksider__container">
                    <div class="out__prices">
                        <span class="out__prices-total">CARRINHO</span>
                        <span class="Out__prices-item">3 Produtos</span>
                    </div>

                    <div class="out__container">
                    <article class="out__card">
                        <div class="out__box">
                            <img src="/img/cart-1.png" alt="" class="out__img">
                        </div>
        
                        <div class="out__details">
                            <h3 class="out__title">Top de manga comprida</h3>
                            <span class="out__price">R$ 50,00</span>
        
                            <div class="out__amount">
                                <div class="out__amount-content">
                                    <span class="out__amount-box">
                                        <i class="bx bx-minus"></i>
                                    </span>
        
                                    <span class="out__amount-number">1</span>
        
                                    <span class="out__amount-box">
                                        <i class="bx bx-plus"></i>
                                    </span>
                                </div>
        
                                <i class="bx bx-trash-alt out__amount-trash"></i>
                            </div>
                        </div>
                    </article>
        
                    <article class="out__card">
                        <div class="out__box">
                            <img src="/img/cart-2.png" alt="" class="out__img">
                        </div>
        
                        <div class="out__details">
                            <h3 class="out__title">Cardigã de textura sólida</h3>
                            <span class="cart__price">R$ 50,00</span>
        
                            <div class="out__amount">
                                <div class="out__amount-content">
                                    <span class="out__amount-box">
                                        <i class="bx bx-minus"></i>
                                    </span>
        
                                    <span class="out__amount-number">1</span>
        
                                    <span class="out__amount-box">
                                        <i class="bx bx-plus"></i>
                                    </span>
                                </div>
        
                                <i class="bx bx-trash-alt out__amount-trash"></i>
                            </div>
                        </div>
                    </article>
        
                    <article class="out__card">
                        <div class="out__box">
                            <img src="/img/cart-3.png" alt="" class="out__img">
                        </div>
        
                        <div class="out__details">
                            <h3 class="out__title">SHEIN ICON Gorpcore</h3>
                            <span class="out__price">R$ 45,00</span>
        
                            <div class="out__amount">
                                <div class="out__amount-content">
                                    <span class="out__amount-box">
                                        <i class="bx bx-minus"></i>
                                    </span>
        
                                    <span class="out__amount-number">1</span>
        
                                    <span class="out__amount-box">
                                        <i class="bx bx-plus"></i>
                                    </span>
                                </div>
        
                                <i class="bx bx-trash-alt out__amount-trash"></i>
                            </div>
                        </div>
                    </article>
                    </div>
                </div>

                <div class="checksider__container">
                    <h3 class="check__title">Checkout</h3>
                    <div class="filter__content">
                        <h3 class="check__subtitle">Subtotal</h3> <span>R$ 145,00</span>
                        <h3 class="check__subtitle">Frete</h3> <span>R$ 20,00</span>
                        <h3 class="check__subtitle">Total</h3> <span>R$ 165,00</span>
                    </div>

                    <div class="adress__content">
                        <label for="" class="adress__label">CEP</label>
                        <input type="email" class="adress__input">
                    </div>
                <br>
                <div>
                    <a href="#" class="button">Comprar</a>
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