@extends('layouts.app')

@section('content')
<section class="form_pg">
    <div class="form_left">
        <h1 class="title">Crie sua conta</h1>
        <p class="subtitle">Preencha os campos ao lado para criar sua conta</p>
    </div>

    <div class="form_right">
        <form method="POST" action="{{route('insert-account')}}">
            @csrf
            <input type="text" name="name" placeholder="Seu nome" value="{{old('name')}}"
                class="@error('name') field_error @enderror" />
            @error('name')
            <span class="error">{{$message}}</span>
            @enderror
            <input type=" email" name="email" placeholder="Seu email" />
            @error('email')
            <span class="error">{{$message}}</span>
            @enderror
            <input type="password" name="password" placeholder="Sua senha" />
            @error('password')
            <span class="error">{{$message}}</span>
            @enderror

            <span>Já tem uma conta? <a href="{{route('login')}}">Entrar</a></span>

            <x-button class='btn_fullwidth' linkto='insert-account'>Criar nova Conta</x-button>
        </form>
    </div>
</section>
@endsection