@extends('layouts.main')

@section('title','shop')

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
        <!--=============== SHOP ===============-->
        <section class="shop section container">
            <h2 class="breadcrumb__title">Shop</h2>
            <h3 class="breadcrumb__subtitle">Inicio > <span>Shop</span></h3>

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
                            <p>Feminino</p> <span>(105)</span>
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="">
                            <p>Masculino</p> <span>(114)</span>
                        </div>
                    </div>

                    <div class="filter__content">
                        <h3 class="filter__subtitle">Tamanho</h3>

                        <div class="filter">
                            <input type="checkbox" name="" id="">
                            <p>P</p> <span>(105)</span>
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="">
                            <p>M</p> <span>(85)</span>
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="">
                            <p>G</p> <span>(70)</span>
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="">
                            <p>GG</p> <span>(55)</span>
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
                            <p>Coleção</p> <span>(124)</span>
                        </div>

                        <div class="filter__content">
                            <h3 class="filter__subtitle">Sub Categoria</h3>
    
                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>Camisa</p> <span>(105)</span>
                            </div>
    
                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>Blusa</p> <span>(135)</span>
                            </div>
    
                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>Acessórios</p> <span>(104)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop__items grid">
                    <div class="shop__content">
                        <div class="shop__tag">Novo</div>
                        <img src="/img/cart-1.png" alt="" class="shop__img">
                        <h3 class="shop__title">Camisa Oni</h3>
                        <span class="shop__subtitle">Urban Rebel</span>

                        <div class="shop__prices">
                            <span class="shop__price">R$ 30,00</span>
                        </div>
                        <a href="/details" class="button shop__button">
                            <i class="bx bx-cart-alt shop__icon"></i>
                        </a>
                    </div>

                    <div class="shop__content">
                        <div class="shop__tag">Desconto</div>
                        <img src="/img/discount-2.png" alt="" class="shop__img">
                        <h3 class="shop__title">Boné Graffiti</h3>
                        <span class="shop__subtitle">Urban Rebel</span>

                        <div class="shop__prices">
                            <span class="shop__price">R$ 30,00</span>
                            <span class="shop__discounts">R$ 35,00</span>
                        </div>
                        <a href="/details" class="button shop__button">
                            <i class="bx bx-cart-alt shop__icon"></i>
                        </a>
                    </div>

                    <div class="shop__content">
                        <div class="shop__tag">Street Art</div>
                        <img src="/img/new-1.png" alt="" class="shop__img">
                        <h3 class="shop__title">Camisa 023</h3>
                        <span class="shop__subtitle">Urban Rebel</span>

                        <div class="shop__prices">
                            <span class="shop__price">R$ 40,00</span>
                        </div>
                        <a href="/details" class="button shop__button">
                            <i class="bx bx-cart-alt shop__icon"></i>
                        </a>
                    </div>

                    <div class="shop__content">
                        <div class="shop__tag">Street Art</div>
                        <img src="/img/new-2.png" alt="" class="shop__img">
                        <h3 class="shop__title">Camisa Envy</h3>
                        <span class="shop__subtitle">Urban Rebel</span>

                        <div class="shop__prices">
                            <span class="shop__price">R$ 40,00</span>
                        </div>
                        <a href="/details" class="button shop__button">
                            <i class="bx bx-cart-alt shop__icon"></i>
                        </a>
                    </div>

                    <div class="shop__content">
                        <div class="shop__tag">Street Art</div>
                        <img src="/img/new-3.png" alt="" class="shop__img">
                        <h3 class="shop__title">Blusa Dead Inside</h3>
                        <span class="shop__subtitle">Urban Rebel</span>

                        <div class="shop__prices">
                            <span class="shop__price">R$ 60,00</span>
                        </div>
                        <a href="/details" class="button shop__button">
                            <i class="bx bx-cart-alt shop__icon"></i>
                        </a>
                    </div>

                    <div class="shop__content">
                        <div class="shop__tag">Street Art</div>
                        <img src="/img/new-5.png" alt="" class="shop__img">
                        <h3 class="shop__title">Camisa Queen</h3>
                        <span class="shop__subtitle">Urban Rebel</span>

                        <div class="shop__prices">
                            <span class="shop__price">R$ 40,00</span>
                        </div>
                        <a href="/details" class="button shop__button">
                            <i class="bx bx-cart-alt shop__icon"></i>
                        </a>
                    </div>

                    <div class="shop__content">
                        <div class="shop__tag">Street Art</div>
                        <img src="/img/new-4.png" alt="" class="shop__img">
                        <h3 class="shop__title">Camisa Dead Inside</h3>
                        <span class="shop__subtitle">Urban Rebel</span>

                        <div class="shop__prices">
                            <span class="shop__price">R$ 40,00</span>
                        </div>
                        <a href="/details" class="button shop__button">
                            <i class="bx bx-cart-alt shop__icon"></i>
                        </a>
                    </div>

                    <div class="shop__content">
                        <div class="shop__tag">Novo</div>
                        <img src="/img/cart-2.png" alt="" class="shop__img">
                        <h3 class="shop__title">Blusa City</h3>
                        <span class="shop__subtitle">Urban Rebel</span>

                        <div class="shop__prices">
                            <span class="shop__price">R$ 50,00</span>
                        </div>
                        <a href="/details" class="button shop__button">
                            <i class="bx bx-cart-alt shop__icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="pagination">
                <i class="bx bx-chevron-left pagination__icon"></i>

                <span class="current">1</span>
                <span>2</span>
                <span>3</span>
                <span>&middot; &middot; &middot;</span>
                <span>35</span>

                <i class="bx bx-chevron-right pagination__icon"></i>
            </div>
        </section>
    </main>
    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <div class="bx bxs-up-arrow-alt scrollup__icon"></div>
    </a>
    <!--=============== STYLE SWITCHER ===============-->
    
    <!--=============== SWIPER JS ===============-->
    <script src="/js/swiper-bundle.min.js"></script>

    <!--=============== JS ===============-->
    <script src="/js/main.js"></script>
</body>
</html>
@endsection