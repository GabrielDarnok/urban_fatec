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

    <title>Urbal Rebel - Detalhes</title>
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
                        <a href="shop.html" class="nav__link">Shop</a>
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
        
    </div>

    <!--=============== MAIN ===============-->
    <main class="main">
        <!--=============== DETAILS ===============-->
        <section class="details section container">
            <h2 class="breadcrumb__title">Detalhes</h2>
            <h3 class="breadcrumb__subtitle">Inicio > <span>Detalhes</span></h3>

            <div class="details__container grid">
                <div class="product__images grid">
                    <div class="product__img">
                        <div class="details__img-tag">Novo</div>
                        <img src="assets/img/details-1.png" alt="">
                    </div>

                    <div class="product__img">
                        <img src="assets/img/details-2.png" alt="">
                    </div>

                    <div class="product__img">
                        <img src="assets/img/details-3.png" alt="">
                    </div>

                    <div class="product__img">
                        <img src="assets/img/details-4.png" alt="">
                    </div>
                </div>

                <div class="product__info">
                    <h3 class="details__subtitle">Camisa Oni</h3>
                    <p class="details__title">Urban Rebel</p>

                    <div class="rating">
                        <div class="stars">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bx-star"></i>
                        </div>
                        <span class="reviews__count">60+ opniões sobre o produto.</span>
                    </div>

                    <div class="details__prices">
                        <span class="details__price">R$ 30,00</span>
                    </div>

                    <div class="details__description">
                        <h3 class="description__tittle">Detalhes do Produto</h3>
                        <div class="description__details">
                            <p>Camisa feita com 100% algodão, leve e vindo com várias cores a sua escolha e além disso com uam stampa para 
                            fazer você se destacar.
                            </p>
                        </div>
                    </div>

                    <div>
                        <h3 class="size__title">Tamanho</h3>
                    </div>

                    <div class="size">
                        <input type="checkbox" name="" id="">
                        <p>P</p>
                        <input type="checkbox" name="" id="">
                        <p>M</p>
                        <input type="checkbox" name="" id="">
                        <p>G</p>
                        <input type="checkbox" name="" id="">
                        <p>GG</p>
                    </div>

                    <div>
                        <h3 class="size__title">Cores</h3>
                    </div>

                    <div class="size">
                        <input type="checkbox" name="" id="">
                        <p>Preto</p>
                        <input type="checkbox" name="" id="">
                        <p>Amarelo</p>
                        <input type="checkbox" name="" id="">
                        <p>Rosa</p>
                        <input type="checkbox" name="" id="">
                        <p>Branco</p>
                    </div>

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

                        <i class="bx bx-heart cart__amount-heart"></i>
                    </div>

                    <a href="#" class="button">Adicionar ao carrinho</a>
                </div>
            </div>
        </section>

        <!--=============== RELATED PRODUCTS ===============-->
        <section class="related__products section">
            <h2 class="section__title"> Produtos Relacionados</h2>

            <div class="new__container container">
                <div class="swiper new-swiper">
                    <div class="swiper-wrapper">
                        <!--Nova coleção 1-->
                        <div class="new__content swiper-slide">
                            <div class="new__tag">Novo</div>
                            <img src="assets/img/new-1.png" alt="" class="new__img">
                            <h3 class="new__title">Camisa 023</h3>
                            <span class="new__subtitle">Stree Art</span>

                            <div class="new__prices">
                                <span class="new__price">R$ 40,00</span>
                            </div>

                            <a href="shop.html" class="button new__button">
                                 <i class="bx bx-cart-alt new__icon"></i>
                            </a>
                        </div>

                        <!--Nova coleção 2-->
                        <div class="new__content swiper-slide">
                            <div class="new__tag">Novo</div>
                            <img src="assets/img/new-2.png" alt="" class="new__img">
                            <h3 class="new__title">Camisa Envy</h3>
                            <span class="new__subtitle">Stree Art</span>

                            <div class="new__prices">
                                <span class="new__price">R$ 40,00</span>
                            </div>

                            <a href="shop.html" class="button new__button">
                                 <i class="bx bx-cart-alt new__icon"></i>
                            </a>
                        </div>

                        <!--Nova coleção 3-->
                        <div class="new__content swiper-slide">
                            <div class="new__tag">Novo</div>
                            <img src="assets/img/new-3.png" alt="" class="new__img">
                            <h3 class="new__title">Blusa Dead Inside</h3>
                            <span class="new__subtitle">Stree Art</span>

                            <div class="new__prices">
                                <span class="new__price">R$ 60,00</span>
                            </div>

                            <a href="shop.html" class="button new__button">
                                 <i class="bx bx-cart-alt new__icon"></i>
                            </a>
                        </div>

                        <!--Nova coleção 4-->
                        <div class="new__content swiper-slide">
                            <div class="new__tag">Novo</div>
                            <img src="assets/img/new-4.png" alt="" class="new__img">
                            <h3 class="new__title">Camisa Dead Inside</h3>
                            <span class="new__subtitle">Stree Art</span>

                            <div class="new__prices">
                                <span class="new__price">R$ 40,00</span>
                            </div>

                            <a href="shop.html" class="button new__button">
                                 <i class="bx bx-cart-alt new__icon"></i>
                            </a>
                        </div>

                        <!--Nova coleção 5-->
                        <div class="new__content swiper-slide">
                            <div class="new__tag">Novo</div>
                            <img src="assets/img/new-5.png" alt="" class="new__img">
                            <h3 class="new__title">Camisa Queen</h3>
                            <span class="new__subtitle">Stree Art</span>

                            <div class="new__prices">
                                <span class="new__price">R$ 40,00</span>
                            </div>

                            <a href="shop.html" class="button new__button">
                                 <i class="bx bx-cart-alt new__icon"></i>
                            </a>
                        </div>

                        <!--Nova coleção 6-->
                        <div class="new__content swiper-slide">
                            <div class="new__tag">Novo</div>
                            <img src="assets/img/new-6.png" alt="" class="new__img">
                            <h3 class="new__title">Camisa Happy</h3>
                            <span class="new__subtitle">Stree Art</span>

                            <div class="new__prices">
                                <span class="new__price">R$ 40,00</span>
                            </div>

                            <a href="shop.html" class="button new__button">
                                 <i class="bx bx-cart-alt new__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
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

    <!--=============== LIGHTBOX ===============-->
    <div class="lightbox">
        <div class="lightbox__content">
            <div class="lightbox__close">&times;</div>
            <img src="assets/img/details-1.png" alt="" class="lightbox__img">
            <div class="lightbox__caption">
                <div class="caption__text">Urban Rebel</div>
                <div class="caption__counter"></div>
            </div>
        </div>

        <div class="lightbox__controls">
            <div class="prev__item" onclick="prevItem()"><div class="i bx bx-chevron-left"></div></div>
            <div class="next__item" onclick="nextItem()"><div class="i bx bx-chevron-right"></div></div>
        </div>
    </div>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <div class="bx bxs-up-arrow-alt scrollup__icon"></div>
    </a>
    <!--=============== LIGHTBOX===============-->
    <script>
        const productItems = document.querySelectorAll(".product__img"),
              totalProductItems = productItems.length,
              lightbox = document.querySelector(".lightbox"),
              lightboxImg = lightbox.querySelector(".lightbox__img"),
              lightboxClose = lightbox.querySelector(".lightbox__close"),
              lightboxCounter = lightbox.querySelector(".caption__counter");
        let itemIndex = 0;

        for(let i = 0; i < totalProductItems; i++) {
            productItems[i].addEventListener("click", function() {
                itemIndex = i;
                changeItem();
                toggleLightbox();
            })
        }

        function nextItem() {
            if(itemIndex === totalProductItems -1){
                itemIndex = 0;
            }

            else {
                itemIndex++;
            }
            changeItem()
        }

        function prevItem() {
            if(itemIndex === 0){
                itemIndex = totalProductItems -1;
            }

            else {
                itemIndex--;
            }
            changeItem()
        }

        function toggleLightbox() {
            lightbox.classList.toggle("open");
        }

        function changeItem() {
            imgSrc = productItems[itemIndex].querySelector(".product__img img").getAttribute("src");
            lightboxImg.src = imgSrc;
            lightboxCounter.innerHTML = (itemIndex + 1) + " de " + totalProductItems;
        }

        //close lightbox
        lightbox.addEventListener("click",function(){
            if(event.target === lightboxClose || event.target === lightbox) {
                toggleLightbox()
            }
        })
    </script>
    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== JS ===============-->
    <script src="assets/js/main.js"></script>
</body>
</html>