@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600" id="errormsg">{{ __('Opa! Credenciais erradas!') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <script>
        var msgErro = document.getElementById('errormsg').textContent;
            
            console.log(msgErro);
            if(msgErro){
                Swal.fire(
                    'Sucesso!',
                    msgErro,
                    'error',
                );
            }
    </script>
@endif
