<!DOCTYPE html>
<html lang="en">
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

    <!-- Adicione um campo de input hidden para o valor -->
    <input type="hidden" name="valor" value="1000"> <!-- Aqui, o valor é 1000 centavos, equivalente a 10.00 no seu sistema -->

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

        // Obtenha o valor do campo de input hidden
        var valor = form.querySelector('[name="valor"]').value;

        stripe.createToken(cardNumber, { amount: valor * 100 }).then(function(result) {
            if (result.error) {
                // Exiba erros ao usuário
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
</script>

</body>
</html>