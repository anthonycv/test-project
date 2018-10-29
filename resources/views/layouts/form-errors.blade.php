@if(count($errors))
    <div class="erros">
        <h1>Errores</h1>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
