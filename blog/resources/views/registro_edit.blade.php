@extends('layouts.main')

@section('title','registro')

@section('content')

<!--=============== MAIN ===============-->
<main class="main">

    <!--=============== REGISTER ===============-->
    <section class="register section container">
        <h2 class="breadcrumb__title">Registro de Endereço</h2>
        <h3 class="breadcrumb__subtitle">Inicio > Perfil > <span>Registro</span></h3>
        <div class="card">
            <div class="register__container grid">

                <form action="/endereco/update/{{ $endereco->id }}" method="POST" class="register__form grid">
                    @csrf
                    <div class="register__inputs grid">
                        <div class="register__content">
                            <label for="" class="register__label">CEP</label>
                            <input type="text" class="register__input" name="cep" id="cep " value="{{ $endereco->cep }}" required>
                        </div>

                        <div class="register__content">
                            <label for="" class="register__label">Rua</label>
                            <input type="text" class="register__input" name="rua" id="rua" value="{{ $endereco->rua }}" required>
                        </div>

                        <div class="register__content">
                            <label for="" class="contact__label">Numero da casa</label>
                            <input type="text" class="register__input" name="number_house" id="number_house" value="{{ $endereco->number_house }}" required>
                        </div>

                        <div class="register__content">
                            <label for="" class="register__label">Complemento</label>
                            <input type="text" class="register__input" name="complemento" id="complemento" value="{{ $endereco->complemento }}">
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="button">Cadastrar endereço</button>
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

<!--=============== SWIPER JS ===============-->
<script src="/js/swiper-bundle.min.js"></script>

<!--=============== JS ===============-->
<script src="/js/main.js"></script>

@endsection