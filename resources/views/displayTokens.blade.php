@extends('voyager::master')
@section('content')
<h1>Token Criado:</h1>
<div style=pandding:30px>
<div style="font-size: 16pt; color:black; font-weight:bold">
    <span>Atencao:copie e conserve o token num local seguro, pois nao sera mostrado novamente!! </span>
</div>
<div style="margin:20px 0;font-size:14pt">
    <p>
        {{$token}}
</p>
</div>
</div>
@endsection
