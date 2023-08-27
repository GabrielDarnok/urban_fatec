@extends('layouts.main')

@section('title','contato')

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
        <!--=============== CONTACT US ===============-->
        <section class="contact section container">
            <h2 class="breadcrumb__title">Contato</h2>
            <h3 class="breadcrumb__subtitle">Inicio > <span>Contato</span></h3>
            <h1 class="contact__description">Gostaria de entrar em contato ? só mandar uma mensagem ou se estiver <br> interessado em trabalhar
            conosco. Mande um email com seu curriculo/portifólio para darmos uma olhada :)</h1>

            <div class="contact__container grid">
                <div>
                    <div class="contact__information">
                        <div class="bx bx-phone contact__icon"></div>
                        <div>
                            <h3 class="contact__title">Telefone</h3>
                            <span class="contact_subtitle">(19) 99666-9999</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <div class="bx bx-envelope contact__icon"></div>
                        <div>
                            <h3 class="contact__title">Email</h3>
                            <span class="contact_subtitle">urbanrebel@email.com</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <div class="bx bx-map contact__icon"></div>
                        <div>
                            <h3 class="contact__title">Localidade</h3>
                            <span class="contact_subtitle">Av. Cônego Antônio Roccato, 593 - Jardim Santa Monica, Campinas - SP</span>
                        </div>
                    </div>
                </div>

                <form action="" class="contact__form grid">
                    <div class="contact__inputs grid">
                        <div class="contact__content">
                             <label for="" class="contact__label">Nome</label>
                             <input type="text" class="contact__input">
                        </div>

                        <div class="contact__content">
                            <label for="" class="contact__label">Email</label>
                            <input type="email" class="contact__input">
                       </div>
                    </div>

                    <div class="contact__content">
                        <label for="" class="contact__label">Assunto</label>
                        <input type="text" class="contact__input">
                   </div>

                   <div class="contact__content">
                        <label for="" class="contact__label">Mensagem</label>
                        <textarea name="" id="" cols="0" rows="7" class="contact__input"></textarea>
                   </div>

                   <div>
                        <a href="#" class="button">Enviar</a>
                   </div>
                </form>
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