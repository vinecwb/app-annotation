@extends('layouts.app')

@section('content')
<section class="form_pg">
    <div class="form_left">
        <h1 class="title">Fazer login</h1>
        <p class="subtitle">Acesse nossa plataforma</p>
    </div>

    <div class="form_right">
        <form method="POST" action="{{route('login')}}">
            @csrf
            <input type="email" name="email" placeholder="Email" />
            <input type="password" name="password" placeholder="Senha" />

            <span><a href="{{route('forgot-password')}}">Esqueceu sua senha?</a></span>

            <x-button class='btn_fullwidth' linkto='auth'>
                Logar
                <x-simpleline-login />
            </x-button>
        </form>
    </div>
</section>
@endsection