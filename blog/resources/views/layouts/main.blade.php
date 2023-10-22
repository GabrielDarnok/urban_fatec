<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/colors/color-1.css">

    <title>You Matter</title>
</head>
<body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="/" class="nav__logo">
                <img src="/img/Logo.png" alt="You Matter">
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="/" class="nav__link">Início</a>
                    </li>

                    <li class="nav__item">
                        <a href="/shop" class="nav__link">Shop</a>
                    </li>

                    <li class="nav__item">
                        <a href="/cart" class="nav__link">Carrinho</a>
                    </li>

                    <li class="nav__item">
                        <a href="/sobre" class="nav__link">Quem somos</a>
                    </li>

                    <li class="nav__item">
                        <a href="/contato" class="nav__link">Contato</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="bx bx-x"></i>
                </div>
            </div>
            <div class="nav__btns">

                <div class="nav__search" id="nav-search">
                    <a href="/procura" class="bx bx-search"></a>
                </div>

                <div class="login__toggle" id="login-toggle">
                    <i class="bx bx-user"> </i>
                </div>

                <img src="/img/profile-pic.png" class="user__pic" id="userPic">
                <div class="sub-menu-wrap" id="subMenu">

                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="/img/profile-pic.png">
                            <h3> Marisa Oliveira Cunha </h3>
                        </div>
                        <hr>

                        <a href="/profile" class="sub-menu-link">
                            <i class="bx bx-user-circle"> </i>
                            <p>Meu perfil</p>
                            <span>></span>
                        </a>

                        <a href="#" class="sub-menu-link">
                            <i class="bx bx-package"> </i>
                            <p>Meus Pedidos</p>
                            <span>></span>
                        </a>
                        @auth
                        <form action="/logout" method="POST" class="sub-menu-link">
							@csrf
							<a href="/logout" class="bx bx-log-out" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
						</form>
                        @endauth
                    </div>
                </div>

                <div class="nav__shop" id="cart-shop">
                    <i class="bx bx-shopping-bag"> </i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="bx bx-grid-alt"> </i>
                </div>

                <div>
                    <img src="img/moon.png" id="moon">
                </div>

            </div>
        </nav>
    </header>

    <main>

    @yield ('content')
    
    </main>
    <!--=============== FOOTER ===============-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <!--FOOTER CONTEUDO 1-->
            <div class="footer__content">
                <a href="#" class="footer__logo">
                    <i class="bx bxs-shopping-bags footer__logo-icon"></i> You Matter
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
                    <li><a href="/contato" class="footer__link">Fale Conosco</a></li>
                    <li><a href="/contato" class="footer__link">Suporte</a></li>
                </ul>
            </div>

            <!--FOOTER CONTEUDO 3-->
            <div class="footer__content">
                <h3 class="footer__tittle">Nossos Serviços</h3>

                <ul class="footer__links">
                    <li><a href="/shop" class="footer__link">Shop</a></li>
                    <li><a href="/" class="footer__link">Como comprar</a></li>
                </ul>
            </div>

            <!--FOOTER CONTEUDO 4-->
            <div class="footer__content">
                <h3 class="footer__tittle">Nossa Empresa</h3>

                <ul class="footer__links">
                    <li><a href="/sobre" class="footer__link">Quem Somos</a></li>
                    <li><a href="/registro" class="footer__link">Registro</a></li>
                </ul>
            </div>
        </div>
       <span class="footer__copy">&#169; Grimm Graphic Designer. All rights reserved.</span>
    </footer>