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
                
                <form action="/user/endereco" method="POST" class="register__form grid">
                    @csrf
                    <div class="register__inputs grid">
                        <div class="register__content">
                             <label for="" class="register__label">CEP</label>
                             <input type="text" class="register__input" name="cep" id="cep" required>
                        </div>

                        <div class="register__content">
                            <label for="" class="register__label">Rua</label>
                            <input type="text" class="register__input" name="rua" id="rua" required>
                        </div>

                        <div class="register__content">
                            <label for="" class="contact__label">Numero da casa</label>
                            <input type="text" class="register__input" name="number_house" id="number_house" required>
                        </div>

                        <div class="register__content">
                            <label for="" class="register__label">Complemento</label>
                            <input type="text" class="register__input" name="complemento" id="complemento">
                        </div>
                    </div>
                   <div style = "justify-content: center; display: flex; margin-top: 10px">
                   <button type="submit" class="button">Cadastrar endereço</button>
                   </div>
                </form>
            </div>
            <div class="product-display">
                   <table class="product-display-table">
                      <thead>
                      <tr>
                         <th>CEP</th>
                         <th>Rua</th>
                         <th>Numero da casa</th>
                         <th>Complemento</th>
                      </tr>
                      </thead>
                      @foreach ($enderecos as $endereco)
                      <tr>
                        <td>{{ $endereco->cep }}</td>
                        <td>{{ $endereco->rua }}</td>
                        <td>{{ $endereco->number_house }}</td>
                        <td>{{ $endereco->complemento }}</td>
                        <td>
                           <a href="/endereco/edit/{{ $endereco->id }}" class="btn"><i class="fas fa-edit"></i> editar </a> 
                            <form action= "{{route('endereco.destroy', ['endereco' => $endereco]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn"> <i class="fas fa-edit"></i> DELETAR</button>
                            </form>
                        </td>
                     </tr>
                     @endforeach
                   </table>
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