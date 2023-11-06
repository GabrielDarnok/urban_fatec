@extends('layouts.main')

@section('title','cart')

@section('content')

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
                    @if(isset($dados))
                        <span class="Out__prices-item">{{ $dados['count'] }} Produtos</span>
                    </div>
                    @foreach ($dados['produtosNoCarrinho'] as $cart)
                    <div class="out__container">
                    <article class="out__card">
                        <div class="out__box">
                            <img src="/img/cart-1.png" alt="" class="out__img">
                        </div>
                        <div class="out__details">
                            <h3 class="out__title">{{ $cart->nome_produto }}</h3>
                            <span class="out__price">{{ $cart->valor_produto }}</span>
        
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
                                <form action="{{route('car.destroy', $cart->carrinho_id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bx bx-trash-alt out__amount-trash"></button>
                                </form>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
                <div class="checksider__container">
                    <h3 class="check__title">Checkout</h3>
                    <div class="filter__content">
                        <h3 class="check__subtitle">Subtotal</h3> <span>R$ {{ number_format($dados['subtotal'], 2, ',', '.') }}</span>
                        <h3 class="check__subtitle">Frete</h3> <span>R$ 20,00</span>
                        <h3 class="check__subtitle">Total</h3> <span>R$ 165,00</span>
                    </div>
                @endif
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