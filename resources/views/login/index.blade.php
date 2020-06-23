@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Entrar</h3>
        <div class="row">
            <form class="" action="{{route('site.login.entrar')}}" method="post">
                {{csrf_field()}}

                <div class="input-field">
                    <label>Email</label>
                    <input type="text" name="email">
                </div>
                <div class="input-field">
                    <label>Senha</label>
                    <input type="text" name="senha">
                </div>

                <button class="btn deep-orange">Entrar</button>
            </form>
        </div>
    </div>

@endsection
