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
                            <p>Menor Preço</p>
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="">
                            <p>Maior Preço</p>
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="">
                            <p>Popular</p>
                        </div>
                    </div>

                    <div class="filter__content">
                        <h3 class="filter__subtitle">Tamanho</h3>

                        <div class="filter">
                            <input type="checkbox" name="" id="">
                            <p>G</p> <span>(105)</span>
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="">
                            <p>GG</p> <span>(85)</span>
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="">
                            <p>G2</p> <span>(59)</span>
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="">
                            <p>G3</p> <span>(94)</span>
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="">
                            <p>G4</p> <span>(75)</span>
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="">
                            <p>G5</p> <span>(95)</span>
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
                            <p>Streetwear</p> <span>(124)</span>
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="">
                            <p>Fofo</p> <span>(489)</span>
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="">
                            <p>Festa</p> <span>(156)</span>
                        </div>

                        <div class="filter">
                            <input type="checkbox" name="" id="">
                            <p>Elegante</p> <span>(168)</span>
                        </div>

                        <div class="filter__content">
                            <h3 class="filter__subtitle">Sub Categoria</h3>
    
                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>Top & Camisas</p> <span>(105)</span>
                            </div>
    
                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>Blusa</p> <span>(135)</span>
                            </div>

                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>Saia & Minissaia</p> <span>(185)</span>
                            </div>
    
                            <div class="filter">
                                <input type="checkbox" name="" id="">
                                <p>Acessórios</p> <span>(104)</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="shop__items grid">
                    @foreach ($products as $product)
                    <div class="shop__content">
                        <div class="shop__tag">Novo</div>
                        <a href="/details">
                            <img src="/img/cart-1.png" alt="" class="shop__img">
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

    <!--=============== SWIPER JS ===============-->
    <script src="/js/swiper-bundle.min.js"></script>

    <!--=============== JS ===============-->
    <script src="/js/main.js"></script>

@endsection