@extends('core')
@section('title', 'Cadastro')
@section('content')
    <div class="container">
        <div class="box" style="padding-bottom: 20px; margin-top: 49px;">
            <img src="imagens/Logo.svg" alt="logo barbearia" />
            <div class="arrow">
                <a href="index.html"><img src="imagens/Arrow 2.svg" alt="voltar"></a>
            </div>
            <span style="margin-top: 8px;"><b>Crie a sua conta</b></span>
            <span style="margin-top: 8px; font-size: 14px;">Preencha os campos para realizar <br>
                <center>o seu cadastro</center>
            </span>
            <div class="acess">
                <div class="inputAcess">
                    <form method="POST" action="/registrando" id="forma">
                        @csrf
                        <input type="text" id="nome" name="name" placeholder="Seu nome" required />
                        <input type="email" id="email" name="email" placeholder="E-mail" required />
                        <input type="password" id="password" name="password" placeholder="Sua senha" required />
                        <input type="submit" value="Criar a conta" style="margin-top: 20px;"/>
                    </form>
                </div>
            </div>
        </div>
    @endsection
