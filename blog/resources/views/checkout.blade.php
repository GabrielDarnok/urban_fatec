<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Checkout</title>

</head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            width: 400px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            margin-bottom: 8px;
            display: block;
            font-weight: bold;
        }

        input,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        #element-container {
            margin-bottom: 16px;
        }

        button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="containerpag">

        <div class="card-container">
    
            <div class="front">
                <div class="image">
                    <img src="img/chip.png" alt="">
                    <img src="img/visa.png" alt="">
                </div>
                <div class="card-number-box">################</div>
                <div class="flexbox">
                    <div class="box">
                        <span>Nome</span>
                        <div class="card-holder-name">Completo</div>
                    </div>
                    <div class="box">
                        <span>Validade</span>
                        <div class="expiration">
                            <span class="exp-month">mm</span>
                            <span class="exp-year">yy</span>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="back">
                <div class="stripe"></div>
                <div class="box">
                    <span>cvv</span>
                    <div class="cvv-box"></div>
                    <img src="img/visa.png" alt="">
                </div>
            </div>
    
        </div>
    <form action="/checkout/processar" method="post" id="payment-form">
        @csrf
        <div id="element-container">
            <!-- Elementos do Stripe serão inseridos aqui -->
        </div>

        <label for="numero_cartao">Número do Cartão</label>
        <div id="card-number"></div>

        <label for="data_validade">Data de Validade</label>
        <div id="card-expiry"></div>

        <label for="cvc">CVC</label>
        <div id="card-cvc"></div>

    <h3 class="check__subtitle">Total: </h3> <span>R$ {{ number_format($dados['subtotal'], 2, ',', '.') }}</span>

        <button type="submit">Pagar</button>
    </form>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('{{ config('services.stripe.key') }}');
        var elements = stripe.elements();

        var cardNumber = elements.create('cardNumber');
        cardNumber.mount('#card-number');

        var cardExpiry = elements.create('cardExpiry');
        cardExpiry.mount('#card-expiry');

        var cardCvc = elements.create('cardCvc');
        cardCvc.mount('#card-cvc');

        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function(event) {
            console.log('Botão clicado');
            event.preventDefault();

            stripe.createToken(cardNumber).then(function(result) {
                if (result.error) {
                    // Exiba mensagens de erro ao usuário
                    handleStripeError(result.error);
                } else {
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', result.token.id);
                    form.appendChild(hiddenInput);

                    // Envie o formulário
                    form.submit();
                }
            });
        });

        function handleStripeError(error) {
        // Aqui você pode lidar com diferentes tipos de erros e exibir mensagens adequadas ao usuário
            if (error.type) {
                alert('Informações do cartão fornecidas estão incorretas. Verifique e tente novamente.');
            }
        }
    </script>

</body>
</html>