<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/colors/color-1.css">

    <title>Urban Rebel - Shop</title>
</head>
<body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.html" class="nav__logo">
                <img src="../Urban Rebel/assets/img/UR-Logo.png" alt="Urban Rebel">
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.html" class="nav__link">Início</a>
                    </li>

                    <li class="nav__item">
                        <a href="shop.html" class="nav__link active-link">Shop</a>
                    </li>

                    <li class="nav__item">
                        <a href="cart.html" class="nav__link">Carrinho</a>
                    </li>

                    <li class="nav__item">
                        <a href="sobre.html" class="nav__link">Quem somos</a>
                    </li>

                    <li class="nav__item">
                        <a href="contato.html" class="nav__link">Contato</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="bx bx-x"></i>
                </div>
            </div>
            <div class="nav__btns">

                <div class="nav__search" id="nav-search">
                    <a href="procura.html" class="bx bx-search"></a>
                </div>

                <div class="login__toggle" id="login-toggle">
                    <i class="bx bx-user"> </i>
                </div>

                <div class="nav__shop" id="cart-shop">
                    <i class="bx bx-shopping-bag"> </i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="bx bx-grid-alt"> </i>
                </div>

                <div>
                    <img src="../Urban Rebel/assets/img/moon.png" id="moon">
                </div>

            </div>
        </nav>
    </header>

    <!--=============== CART ===============-->
    <div class="cart" id="cart">
        <i class="bx bx-x cart__close" id="cart-close"></i>
        
        <h2 class="cart__title-center">Carrinho</h2>

        <div class="cart__container">
            <article class="cart__card">
                <div class="cart__box">
                    <img src="assets/img/cart-1.png" alt="" class="cart__img">
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
                    <img src="assets/img/cart-2.png" alt="" class="cart__img">
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
                    <img src="assets/img/cart-3.png" alt="" class="cart__img">
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
                <p class="signup">Nãe é cadastrado? <a href="registro.html">Cadastrar-se agora.</a></p>
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
                        <img src="assets/img/cart-1.png" alt="" class="shop__img">
                        <h3 class="shop__title">Camisa Oni</h3>
                        <span class="shop__subtitle">Urban Rebel</span>

                        <div class="shop__prices">
                            <span class="shop__price">R$ 30,00</span>
                        </div>
                        <a href="details.html" class="button shop__button">
                            <i class="bx bx-cart-alt shop__icon"></i>
                        </a>
                    </div>

                    <div class="shop__content">
                        <div class="shop__tag">Desconto</div>
                        <img src="assets/img/discount-2.png" alt="" class="shop__img">
                        <h3 class="shop__title">Boné Graffiti</h3>
                        <span class="shop__subtitle">Urban Rebel</span>

                        <div class="shop__prices">
                            <span class="shop__price">R$ 30,00</span>
                            <span class="shop__discounts">R$ 35,00</span>
                        </div>
                        <a href="details.html" class="button shop__button">
                            <i class="bx bx-cart-alt shop__icon"></i>
                        </a>
                    </div>

                    <div class="shop__content">
                        <div class="shop__tag">Street Art</div>
                        <img src="assets/img/new-1.png" alt="" class="shop__img">
                        <h3 class="shop__title">Camisa 023</h3>
                        <span class="shop__subtitle">Urban Rebel</span>

                        <div class="shop__prices">
                            <span class="shop__price">R$ 40,00</span>
                        </div>
                        <a href="details.html" class="button shop__button">
                            <i class="bx bx-cart-alt shop__icon"></i>
                        </a>
                    </div>

                    <div class="shop__content">
                        <div class="shop__tag">Street Art</div>
                        <img src="assets/img/new-2.png" alt="" class="shop__img">
                        <h3 class="shop__title">Camisa Envy</h3>
                        <span class="shop__subtitle">Urban Rebel</span>

                        <div class="shop__prices">
                            <span class="shop__price">R$ 40,00</span>
                        </div>
                        <a href="details.html" class="button shop__button">
                            <i class="bx bx-cart-alt shop__icon"></i>
                        </a>
                    </div>

                    <div class="shop__content">
                        <div class="shop__tag">Street Art</div>
                        <img src="assets/img/new-3.png" alt="" class="shop__img">
                        <h3 class="shop__title">Blusa Dead Inside</h3>
                        <span class="shop__subtitle">Urban Rebel</span>

                        <div class="shop__prices">
                            <span class="shop__price">R$ 60,00</span>
                        </div>
                        <a href="details.html" class="button shop__button">
                            <i class="bx bx-cart-alt shop__icon"></i>
                        </a>
                    </div>

                    <div class="shop__content">
                        <div class="shop__tag">Street Art</div>
                        <img src="assets/img/new-5.png" alt="" class="shop__img">
                        <h3 class="shop__title">Camisa Queen</h3>
                        <span class="shop__subtitle">Urban Rebel</span>

                        <div class="shop__prices">
                            <span class="shop__price">R$ 40,00</span>
                        </div>
                        <a href="details.html" class="button shop__button">
                            <i class="bx bx-cart-alt shop__icon"></i>
                        </a>
                    </div>

                    <div class="shop__content">
                        <div class="shop__tag">Street Art</div>
                        <img src="assets/img/new-4.png" alt="" class="shop__img">
                        <h3 class="shop__title">Camisa Dead Inside</h3>
                        <span class="shop__subtitle">Urban Rebel</span>

                        <div class="shop__prices">
                            <span class="shop__price">R$ 40,00</span>
                        </div>
                        <a href="details.html" class="button shop__button">
                            <i class="bx bx-cart-alt shop__icon"></i>
                        </a>
                    </div>

                    <div class="shop__content">
                        <div class="shop__tag">Novo</div>
                        <img src="assets/img/cart-2.png" alt="" class="shop__img">
                        <h3 class="shop__title">Blusa City</h3>
                        <span class="shop__subtitle">Urban Rebel</span>

                        <div class="shop__prices">
                            <span class="shop__price">R$ 50,00</span>
                        </div>
                        <a href="details.html" class="button shop__button">
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

    <!--=============== FOOTER ===============-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <!--FOOTER CONTEUDO 1-->
            <div class="footer__content">
                <a href="#" class="footer__logo">
                    <i class="bx bxs-shopping-bags footer__logo-icon"></i> Urban Rebel
                </a>

                <p class="footer__description">Aproveite <br> as compras!</p>

                <div class="footer__social">
                    <a href="#" class="footer__social-link"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="footer__social-link"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="footer__social-link"><i class="bx bxl-twitter"></i></a>
                </div>
            </div>

            <!--FOOTER CONTEUDO 2-->
            <div class="footer__content">
                <h3 class="footer__tittle">Sobre</h3>

                <ul class="footer__links">
                    <li><a href="#" class="footer__link">Mapa do Site</a></li>
                    <li><a href="contato.html" class="footer__link">Fale Conosco</a></li>
                    <li><a href="#" class="footer__link">Suporte</a></li>
                </ul>
            </div>

            <!--FOOTER CONTEUDO 3-->
            <div class="footer__content">
                <h3 class="footer__tittle">Nossos Serviços</h3>

                <ul class="footer__links">
                    <li><a href="shop.html" class="footer__link">Shop</a></li>
                    <li><a href="#" class="footer__link">Descontos</a></li>
                    <li><a href="#" class="footer__link">Metodo de envio</a></li>
                </ul>
            </div>

            <!--FOOTER CONTEUDO 4-->
            <div class="footer__content">
                <h3 class="footer__tittle">Nossa Empresa</h3>

                <ul class="footer__links">
                    <li><a href="sobre.html" class="footer__link">Quem Somos</a></li>
                    <li><a href="registro.html" class="footer__link">Registro</a></li>
                    <li><a href="#" class="footer__link">Futuro</a></li>
                </ul>
            </div>
        </div>
       <span class="footer__copy">&#169; Grimm Graphic Designer. All rights reserved.</span>
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <div class="bx bxs-up-arrow-alt scrollup__icon"></div>
    </a>
    <!--=============== STYLE SWITCHER ===============-->
    
    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== JS ===============-->
    <script src="assets/js/main.js"></script>
</body>
</html>