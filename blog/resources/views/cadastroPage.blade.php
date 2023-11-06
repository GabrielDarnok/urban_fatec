@extends('layouts.main')

@section('title','sobre')

@section('content')
    <style>
        .inputcadastro{
            max-width: 50%;
        }
        .form_section{
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 0.4rem;
            margin-bottom: 2.0rem;
            align-items: center;
        }
        .form_input{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }
        .contact__label{
            display: flex;
            flex-direction: column;
            width: 70%;
        }
        @media screen and (max-width: 768px){
            .form_input {
                display: block;  
            }
            .form_section{
                gap: 1.5rem;
            }
        }
        .contact__input{
            height: 3rem;
        }
    </style>
    <!--=============== MAIN ===============-->
    <main class="main">
        <!--=============== ABOUT ===============-->
        <section class="section container">
            <h2 class="breadcrumb__title">Cadrastro</h2>
            <h3 class="breadcrumb__subtitle">Inicio > <span>Cadastro</span></h3>

            <div class="container">
                <div>
                    <form method="POST" action="{{ route('register') }}">
                        <div class = "form_input"> 
                            @csrf  
                            <div class = "form_section">
                                <div class = "contact__label">
                                    <label for="nome" class = "contact__label">Nome:</label>
                                    <input  class="contact__input" style ="width: 100%; border: solid 2px #8d8d8d; border-radius: 0.4rem;" type="text" id="nome" name="nome" required>
                                </div>
                                <div class = "contact__label">
                                    <label for="email" class = "contact__label" >Email:</label>
                                    <input class="contact__input" style ="width: 100%; border: solid 2px #8d8d8d; border-radius: 0.4rem;" type="email" id="email" name="email" required>
                                </div>
                            </div>
                            <div class = "form_section">
                                <div class = "contact__label">
                                    <label for="senha" class = "contact__label">Senha:</label>
                                    <input  class="contact__input" style ="width: 100%; border: solid 2px #8d8d8d; border-radius: 0.4rem;" type="password" id="senha" name="senha" required>
                                </div>
                                <div class = "contact__label">
                                    <label for="confirmar_senha" class = "contact__label">Confirmar Senha:</label>
                                    <input  class="contact__input" style ="width: 100%; border: solid 2px #8d8d8d; border-radius: 0.4rem;" type="password" id="confirmar_senha" name="confirmar_senha" required>
                                </div>
                            </div>
                        </div>
                        <x-validation-errors class="mb-4" style="color: #e9d2d2 "/>
                        <div style= "display: flex; justify-content: center; width: 100%; margin-top: 1.25rem;">
                            <input class= "button" type="submit" value="Cadastrar" style="width: 40%">
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