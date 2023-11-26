@extends('layouts.maincadastro')

@section('title','cadastroPage')

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
                    <form method="POST" action="{{ route('register') }}" id="formCadastro">
                        <div class = "form_input"> 
                            @csrf  
                            <div class = "form_section">
                                <div class = "contact__label">
                                    <label for="nome" class = "contact__label">Nome:</label>
                                    <input  class="contact__input" style ="width: 100%; border: solid 2px #8d8d8d; border-radius: 0.4rem; padding: 10px;" type="text" id="name" name="name" required>
                                </div>
                                <div class = "contact__label">
                                    <label for="email" class = "contact__label" >Email:</label>
                                    <input class="contact__input" style ="width: 100%; border: solid 2px #8d8d8d; border-radius: 0.4rem; padding: 10px;" type="email" id="email" name="email" required>
                                </div>
                            </div>
                            <div class = "form_section">
                                <div class = "contact__label">
                                    <label for="senha" class = "contact__label">Senha: (Mínimo 8 caracteres)</label>
                                    <input  class="contact__input" style ="width: 100%; border: solid 2px #8d8d8d; border-radius: 0.4rem; padding: 10px;" type="password" id="password" name="password" required>
                                </div>
                                <div class = "contact__label">
                                    <label for="confirmar_senha" class = "contact__label">Confirmar Senha:</label>
                                    <input  class="contact__input" style ="width: 100%; border: solid 2px #8d8d8d; border-radius: 0.4rem; padding: 10px;" type="password" id="password_confirmation" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>
                        <x-validation-errors class="mb-4" style="color: #e9d2d2 "/>
                        <div style= "display: flex; justify-content: center; width: 100%; margin-top: 1.25rem;">
                            <a class= "button cad" type="button" onclick="validaCampos()" style="width: 40%; display: flex; justify-content: center;">Cadastrar</a>
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
    
    <script>
        
        function validaCampos(){

            const nome = document.getElementById('name');
            const email = document.getElementById('email');
            const senha = document.getElementById('password');
            const confirmarSenha = document.getElementById('password_confirmation');
            var erros = 0;
            var msgErro = '';

            if(!validaNome(nome.value)){
                erros++;
                msgErro += "<li>O nome não deve possuir caracteres especiais ou números!</li>";
                nome.focus();  
            }
            if(!validarEmail(email.value)){
                erros++;
                msgErro += "<li>Email inválido!</li>"; 
                email.focus();
            }
            if(senha.value.length < 8){
                erros++;
                msgErro += "<li>A senha deve possuir no mínimo 8 caracteres!</li>";
                senha.focus();
            }else{
                if(senha.value !== confirmarSenha.value){
                    erros++;
                    msgErro += "<li>Senha e confirmar senha estão diferentes!</li>";
                    confirmarSenha.focus(); 
                }
            }
            
            console.log(erros);

            if(erros === 0 ){
                document.getElementById('formCadastro').submit();
            }else{
                Swal.fire(
                  'Opa!',
                  msgErro,
                  'error'
                );
            }
        }
        function validaNome(nome){

            var regex = /^[a-zA-ZÀ-ÖØ-öø-ÿ\s']+$/;

            return regex.test(nome);        
        }
        function validarEmail(email) {
           
            var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
            return regex.test(email);
        }

    </script>

@endsection