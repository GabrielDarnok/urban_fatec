@extends('layouts.main')

@section('title','profile')

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
    
    <!--=============== REGISTER ===============-->
        <section class="register section container">
            <h2 class="breadcrumb__title">Perfil</h2>
            <h3 class="breadcrumb__subtitle">Inicio > <span>Perfil</span></h3>
            <div class="card">
            <div class="register__container grid">

                <div class="profile__box">
                    <img src="/img/profile-pic.png" class="profile-pic">
                    <h3 class="breadcrumb__subtitle">Olá, Marcos Almeida.
                </div>  

                <form action="" class="register__form grid">
                    <div class="register__inputs grid">
                        <div class="register__content">
                             <label for="" class="register__label">Nome</label>
                             <input type="text" class="register__input">
                        </div> 

                        <div class="register__content">
                            <label for="" class="register__label">Sobrenome</label>
                            <input type="text" class="register__input">
                        </div>

                        <div class="register__content">
                            <label for="" class="contact__label">Telefone</label>
                            <input type="tel" class="register__input">
                        </div>

                        <div class="register__content">
                            <label for="" class="register__label">Endereço</label>
                            <input type="text" class="register__input">
                        </div>
                    </div>

                        <br><h2 class="breadcrumb__title">Trocar Senha</h2><br>

                    <div class="register__inputs grid">
                        <div class="register__content">
                            <label for="" class="register__label">Nova Senha</label>
                            <input type="password" class="register__input" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                        </div>

                        <div class="register__content">
                            <label for="" class="register__label">Confirmar Senha</label>
                            <input type="text" class="register__input">
                        </div>
                    </div>

                        <br><h2 class="breadcrumb__title">Trocar Email</h2><br>
                    
                    <div class="register__inputs grid">
                        <div class="register__content">
                            <label for="" class="register__label">Novo Email</label>
                            <input type="email" class="register__input">
                        </div>

                        <div class="register__content">
                            <label for="" class="register__label">Confirmar Email</label>
                            <input type="email" class="register__input">
                        </div>
                    </div>

                        <br><h2 class="breadcrumb__title">Trocar endereço</h2><br>

                    <div class="register__inputs grid">
                        <div class="register__content">
                            <label for="" class="register__label">Novo Endereço</label>
                            <input type="text" class="register__input">
                        </div>
                        
                        <div class="register__content">
                            <label for="" class="register__label">CEP</label>
                            <input type="text" class="register__input">
                        </div>
                    </div>

                    <div>

                        <br><a href="#" class="button" >Salvar</a><br>

                    </div>
                </form>
                </div>
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