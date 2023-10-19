@extends('layouts.main')

@section('title','admin')

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
                    <img src="/img/cart-3.png" alt="" class="cart__img">
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
        <!--=============== ADM ===============-->
        <section class="adm__container container">
            <h2 class="breadcrumb__title">Administrador</h2>
            <h3 class="breadcrumb__subtitle">Inicio > <span>Administrador</span></h3>
            
            <div class="containeradm">

                <div class="admin-product-form-container">
             
                   <form action="/products" method="post" enctype="multipart/form-data">
                   @csrf
                        <div class="add">
                            <h3>Adicionar um novo Produto</h3>
                        </div>
                      <input type="text" placeholder="Insira o nome do produto" id="nome_produto" name="nome_produto" class="box">
                      <input type="text" placeholder="Insira a descrição" id="descricao_produto" name="descricao_produto" class="box">
                      <input type="text" placeholder="Insira o valor" id="valor_produto" name="valor_produto" class="box">
                      <input type="text" placeholder="Insira a quantidade" id="quantidade_estoq" name="quantidade_estoq" class="box">

                      <div class="dropdown">
                        <button class="dropbtn">Selecione o Tamanho</button>
                        <div class="dropdown-content">
                          <select name="tamanho_roupa" id="tamanho_roupa">
                          <a href="#">G</a>
                          <a href="#">GG</a>
                          <a href="#">G2</a>
                          <a href="#">G3</a>
                          <a href="#">G4</a>
                          <a href="#">G5</a>
                          <a href="#">Todos os Tamanhos</a>
                        </div>
                      </div>
                      
                      <div class="dropdown">
                        <button class="dropbtn">Selecione a Cor</button>
                        <div class="dropdown-content">
                          <a href="#">Preto</a>
                          <a href="#">Branco</a>
                          <a href="#">Vermelho</a>
                          <a href="#">Rosa</a>
                          <a href="#">Amarelo</a>
                          <a href="#">Roxo</a>
                          <a href="#">Verde</a>
                          <a href="#">Azul</a>
                          <a href="#">Laranja</a>
                          <a href="#">Preto</a>
                          <a href="#">Branco</a>
                          <a href="#">Vermelho</a>
                          <a href="#">Todas as Cores</a>
                        </div>
                      </div>

                      <div class="dropdown">
                        <button class="dropbtn">Categoria</button>
                        <div class="dropdown-content">
                          <a href="#">Casual</a>
                          <a href="#">Streetwear</a>
                          <a href="#">Fofo</a>
                          <a href="#">Festa</a>
                          <a href="#">Elegante</a>
                        </div>
                      </div>
                      
                      <input type="file" accept="image/png, image/jpeg, image/jpg" name="imagem_produto" id="imagem_produto" class="box">
                      <input type="submit" class="btn" name="add_product" value="add produto">
                   </form>
             
                </div>
             
                <div class="product-display">
                   <table class="product-display-table">
                      <thead>
                      <tr>
                         <th>Imagem</th>
                         <th>Nome</th>
                         <th>Descrição</th>
                         <th>Valor</th>
                         <th>Estoque</th>
                         <th>Tamanho</th>
                         <th>Cor</th>
                         <th>Ação</th>
                      </tr>
                      </thead>
                      @foreach ($products as $product)
                      <tr>
                        <td><img src="img/{{ $product->imagem_produto }}" height="100" alt=""></td>
                        <td>{{ $product->nome_produto}}</td>
                        <td>{{ $product->descricao_produto}}</td>
                        <td>{{ $product->valor_produto}}</td>
                        <td>{{ $product->quantidade_estoq}}</td>
                        <td></td>
                        <td></td>
                        <td>
                           <a href="admin_update.php?edit=" class="btn"> <i class="fas fa-edit"></i> editar </a>
                           <a href="admin_page.php?delete=" class="btn"> <i class="fas fa-trash"></i> deletar </a>
                        </td>
                     </tr>
                     @endforeach
                   </table>
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
</body>
</html>