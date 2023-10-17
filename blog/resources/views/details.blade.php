@extends('layouts.main')

@section('title','details')

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
                    <img src=" /img/cart-3.png" alt="" class="cart__img">
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
                        <img src=" /img/details-1.png" alt="">
                    </div>

                    <div class="product__img">
                        <img src=" /img/details-2.png" alt="">
                    </div>

                    <div class="product__img">
                        <img src=" /img/details-3.png" alt="">
                    </div>

                    <div class="product__img">
                        <img src=" /img/details-4.png" alt="">
                    </div>
                </div>

                <div class="product__info">
                    <h3 class="details__subtitle">Top de manga comprida</h3>
                    <p class="details__title">You Matter</p>

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
                        <span class="details__price">R$ 50,00</span>
                    </div>

                    <div class="details__description">
                        <h3 class="description__tittle">Detalhes do Produto</h3>
                        <div class="description__details">
                            <p>Camisa feita com composição acrílica, leve e vindo com estilo para
                            fazer você se destacar.
                            </p>
                        </div>
                    </div>

                    <div>
                        <h3 class="size__title">Tamanho</h3>
                    </div>

                    <div class="size__selector">
                        <div class="size__option">G</div>
                        <div class="size__option">GG</div>
                        <div class="size__option">G2</div>
                        <div class="size__option">G3</div>
                        <div class="size__option">G4</div>
                        <div class="size__option">G5</div>
                    </div>

                    <div>
                        <br><h3 class="size__title">Cores</h3>
                    </div>

                    <div class="color__selector">
                        <div class="color__option" ></div>
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
                            <img src=" /img/new-1.png" alt="" class="new__img">
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
                            <img src=" /img/new-2.png" alt="" class="new__img">
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
                            <img src=" /img/new-3.png" alt="" class="new__img">
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
                            <img src=" /img/new-4.png" alt="" class="new__img">
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
                            <img src=" /img/new-5.png" alt="" class="new__img">
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
                            <img src=" /img/new-6.png" alt="" class="new__img">
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

        <!--=============== Review ===============-->
        <div class="ratecontainer">
            <div class="post">
              <div class="text">Obrigado pela avaliação!</div>
              <div class="edit">EDITAR</div>
            </div>
            <div class="star-widget">
              <input type="radio" name="rate" id="rate-5">
              <label for="rate-5" class="fas fa-star"></label>
              <input type="radio" name="rate" id="rate-4">
              <label for="rate-4" class="fas fa-star"></label>
              <input type="radio" name="rate" id="rate-3">
              <label for="rate-3" class="fas fa-star"></label>
              <input type="radio" name="rate" id="rate-2">
              <label for="rate-2" class="fas fa-star"></label>
              <input type="radio" name="rate" id="rate-1">
              <label for="rate-1" class="fas fa-star"></label>
              <form action="#">
                <header></header>
                <div class="textarea">
                  <textarea cols="30" placeholder="Descreva o que achou do produto.."></textarea>
                </div>
                <div class="ratebtn">
                  <button type="submit">Postar</button>
                </div>
              </form>
            </div>
          </div>
    </main>  

    <!--=============== LIGHTBOX ===============-->
    <div class="lightbox">
        <div class="lightbox__content">
            <div class="lightbox__close">&times;</div>
            <img src="/img/details-1.png" alt="" class="lightbox__img">
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
    <script src="/js/swiper-bundle.min.js"></script>

    <!--=============== JS ===============-->
    <script src="/js/main.js"></script>

</body>
</html>