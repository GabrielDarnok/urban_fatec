@if ($errors->any())
    <div {{ $attributes }}>
        
        <ul class="mt-3 list-disc list-inside text-sm text-red-600" style="align-items: center; display: flex; flex-direction: column;">
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
                    'Opa!',
                    msgErro,
                    'error',
                );
            }
    </script>
@endif
